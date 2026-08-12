<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\EnrollmentPeriod;
use App\Models\ParentStudent;
use App\Models\RegistrationStudent;
use App\Models\SchoolHeadmaster;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Provinsi;
use Laravolt\Indonesia\Models\Village;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use ZipArchive;

class PPDBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = 'PPDB | SMP Islam Nurul Ulum';


        $ppdb = EnrollmentPeriod::where('status', 'Open')->get();
        $registrationStudent = RegistrationStudent::all();

        return view('frontend.ppdb.ppdb-view', compact(['title', 'ppdb', 'registrationStudent']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        $title = 'Daftar PPDB | SMP Islam Nurul Ulum';

        $ppdb = EnrollmentPeriod::where('id', $id)->first();
        $registrationNumber = RegistrationStudent::generateRegistrationNumber();
        $provinces = Provinsi::all();

        return view('frontend.ppdb.ppdb-registration-view', compact(['title', 'ppdb', 'registrationNumber', 'provinces']));
    }

    public function store(Request $request)
    {

        try {
            // Validasi Data
            $validatedData = $request->validate([
                // Student data
                'nisn' => 'required|string|max:20',
                'nik' => 'required|string|max:20',
                'full_name' => 'required|string|max:255',
                'birthplace' => 'required|string|max:255',
                'birthdate' => 'required|date',
                'gender' => 'required|in:Male,Female',
                'religion' => 'required|string|max:50',
                'phone_number' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'previous_school' => 'required|string|max:255',
                'previous_school_name' => 'required|string|max:255',
                'province_id' => 'required|string',
                'city_id' => 'required|string',
                'district_id' => 'required|string',
                'village_id' => 'required|string',
                'postal_code' => 'required|string|max:10',
                'address' => 'required|string',

                // Parent/guardian data
                'father_name' => 'required|string|max:255',
                'father_occupation' => 'required|string|max:255',
                'father_religion' => 'required|string|max:255',
                'mother_name' => 'required|string|max:255',
                'mother_religion' => 'required|string|max:255',
                'mother_occupation' => 'required|string|max:255',
                'guardian_name' => 'nullable|string|max:255',
                'guardian_occupation' => 'nullable|string|max:255',
                'guardian_relationship' => 'nullable|string|max:255',

                // File upload validation
                'pas_foto' => 'required|mimes:jpeg,png,jpg|max:2048',
                'family_card' => 'required|mimes:pdf|max:2048', // Family Card
                'id_card' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'birth_certificate' => 'required|mimes:pdf|max:2048',
                'report_card' => 'required|mimes:pdf|max:2048',
                'diploma' => 'required|mimes:pdf|max:2048',
                'pip_card' => 'nullable|mimes:pdf|max:2048',
            ]);

            $registration = RegistrationStudent::create([
                'registration_number' => $request->registration_number,
                'user_id' => Auth::user()->id,
                'enrollment_period_id' => $request->enrollment_period_id,
                'nisn' => $request->nisn,
                'nik' => $request->nik,
                'full_name' => $request->full_name,
                'birthplace' => $request->birthplace,
                'birthdate' => $request->birthdate,
                'gender' => $request->gender,
                'religion' => $request->religion,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'previous_school' => $request->previous_school,
                'previous_school_name' => $request->previous_school_name,
                'province_code' => $request->province_id,
                'city_code' => $request->city_id,
                'district_code' => $request->district_id,
                'village_code' => $request->village_id,
                'postal_code' => $request->postal_code,
                'address' => $request->address,
                'registration_status' => 'Pending',
                'registration_date' => now(),
            ]);

            // Simpan data orang tua/wali
            ParentStudent::create([
                'registration_student_id' => $registration->id,
                'father_name' => $request->father_name,
                'father_religion' => $request->father_religion,
                'father_occupation' => $request->father_occupation,
                'mother_name' => $request->mother_name,
                'mother_religion' => $request->mother_religion,
                'mother_occupation' => $request->mother_occupation,
                'phone_number' => $request->phone_number,
                'guardian_name' => $request->guardian_name,
                'guardian_occupation' => $request->guardian_occupation,
                'guardian_relationship' => $request->guardian_relationship,
            ]);



            // Folder penyimpanan dokumen
            $folderName = Str::slug($request->full_name, '_');
            $folderPath = "registration/documents/{$folderName}";

            // Daftar file yang diizinkan
            $allowedFiles = [
                'pas_foto' => 'Pas_Foto',
                'family_card' => 'Kartu_Keluarga',
                'id_card' => 'KTP_Ayah_Ibu',
                'birth_certificate' => 'Akta_Kelahiran',
                'report_card' => 'Rapor',
                'diploma' => 'Ijazah',
                'pip_card' => 'Kartu_PIP'
            ];

            // Simpan dokumen jika ada yang diunggah
            $document = Document::firstOrNew(['registration_student_id' => $registration->id]);
            $uploaded = false;

            foreach ($allowedFiles as $fileField => $translatedName) {
                if ($request->hasFile($fileField)) {
                    $file = $request->file($fileField);
                    $extension = $file->getClientOriginalExtension();
                    $fileName = "{$folderName}_{$translatedName}.{$extension}";

                    // Simpan file ke storage
                    $path = $file->storeAs($folderPath, $fileName, 'public');
                    $document->$fileField = $path;
                    $uploaded = true;
                }
            }

            $enrollmentPeriod = EnrollmentPeriod::find($request->enrollment_period_id);
            if ($enrollmentPeriod) {
                $enrollmentPeriod->increment(
                    'applicants_count'
                );
            }
            // Simpan dokumen jika ada file yang diunggah
            if ($uploaded) {
                $document->save();
            }

            Alert::success('Success', 'Pendaftaran Siswa Berhasil!');
            return redirect()->route('ppdb.showRegistrationResult');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan, coba lagi nanti.')->withInput();
        }
    }

    public function result()
    {
        //
        $title = 'Riwayat Pendaftaran | SMP Islam Nurul Ulum';

        $registrationStudent = RegistrationStudent::where('user_id', Auth::user()->id)->get();


        return view('frontend.ppdb.ppdb-result-view', compact(['title', 'registrationStudent']));
    }

    public function resultDetail($registration_number)
    {
        //
        $title = 'Detail Pendaftaran | SMP Islam Nurul Ulum';

        $registrationStudent = RegistrationStudent::where('registration_number', $registration_number)->first();

        return view('frontend.ppdb.ppdb-result-detail-view', compact(['title', 'registrationStudent']));
    }
    public function showResumeRegistration($registration_number)
    {
        //
        $title = 'Detail Pendaftaran | SMP Islam Nurul Ulum';

        $registrationStudent = RegistrationStudent::where('registration_number', $registration_number)->first(); // Ambil data dari database
        $headMaster = SchoolHeadmaster::first(); // Ambil data dari database


        // Konfigurasi Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);

        // Load HTML dari view
        $html = view('frontend.export.resume-registration', compact(['registrationStudent', 'headMaster']))->render();

        // Set ukuran kertas A4 dan orientasi portrait
        $dompdf->setPaper('A4', 'portrait');

        // Load HTML ke Dompdf
        $dompdf->loadHtml($html);

        // Render PDF
        $dompdf->render();

        return $dompdf->stream($registrationStudent->full_name . '-Resume-Registration.pdf', ["Attachment" => false]);
        // return view('frontend.export.resume-registration', compact(['title', 'registrationStudent']));
    }



    public function getCities(Request $request)
    {
        $cities = City::where('province_code', $request->province_id)->get();
        return response()->json($cities);
    }

    public function getDistricts(Request $request)
    {
        $districts = District::where('city_code', $request->city_id)->get();
        return response()->json($districts);
    }

    public function getVillages(Request $request)
    {
        $villages = Village::where('district_code', $request->district_id)->get();
        return response()->json($villages);
    }
}
