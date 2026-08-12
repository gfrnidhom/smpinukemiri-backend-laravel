@extends('frontend._partials.main')


@section('main-content')
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-shape">
        </div>

        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">PPDB {{ date('Y') }}</h1>

            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="team-details-about-info">
                <div class="row gx-40">
                    <div class="col-lg-6 position-relative">
                        <div class="team-details-thumb">
                            <img src="{{ asset('storage/' . $registrationStudent->documents->pas_foto) }}" alt="team image"
                                style="width: 550px; height: 700px; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="about-box">
                            <div class="about-info">
                                <h2 class="title">
                                    {{ $registrationStudent->full_name }}
                                </h2>
                                <p class="desig">NISN : {{ $registrationStudent->nisn }}</p>
                            </div>

                        </div>
                        <p>Nomor Registrasi :<strong>{{ $registrationStudent->registration_number }}</strong> </p>
                        <p>Tempat & Tanggal Lahir :
                            <b>{{ $registrationStudent->birthplace . ', ' . Carbon\Carbon::parse($registrationStudent->birthdate)->format('d M Y') }}</b>
                        </p>
                        <p>Jenis Kelamin :
                            @if ($registrationStudent->gender == 'Male')
                                <b>Laki-laki</b>
                            @elseif ($registrationStudent->gender == 'Female')
                                <b>Perempuan</b>
                            @elseif ($registrationStudent->gender == 'Other')
                                <b>Lainnya</b>
                            @endif
                        </p>
                        <p>Agama :
                            @if ($registrationStudent->religion == 'Islam')
                                <b>Islam</b>
                            @elseif ($registrationStudent->religion == 'Christian')
                                <b>Kristen</b>
                            @elseif ($registrationStudent->religion == 'Catholic')
                                <b>Katolik</b>
                            @elseif ($registrationStudent->religion == 'Hindu')
                                <b>Hindu</b>
                            @elseif ($registrationStudent->religion == 'Buddhist')
                                <b>Buddha</b>
                            @elseif ($registrationStudent->religion == 'Confucianism')
                                <b>Konghucu</b>
                            @endif
                        </p>
                        <p>NIK: <strong>{{ $registrationStudent->nik }}</strong></p>
                        <p>Tempat, Tanggal Lahir: <strong>{{ $registrationStudent->birthplace }},
                                {{ $registrationStudent->birthdate }}</strong></p>
                        <p>Jenis Kelamin: <strong>{{ $registrationStudent->gender }}</strong></p>
                        <p>Agama: <strong>{{ $registrationStudent->religion }}</strong></p>
                        <p>Nomor Telepon: <strong>{{ $registrationStudent->phone_number }}</strong></p>
                        <p>Email: <strong>{{ $registrationStudent->email }}</strong></p>
                        <p>Alamat: <strong>{{ $registrationStudent->address }}</strong></p>



                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="space-top">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="title h4 fw-semibold mt-n1">Data Orangtua</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th >Keterangan</th>
                                        <th class="">Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nama Ayah</td>
                                        <td><strong>{{ $registrationStudent->parents->father_name }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Ayah</td>
                                        <td><strong>{{ $registrationStudent->parents->father_occupation }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ibu</td>
                                        <td><strong>{{ $registrationStudent->parents->mother_name }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Ibu</td>
                                        <td><strong>{{ $registrationStudent->parents->mother_occupation }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Wali</td>
                                        <td><strong>{{ $registrationStudent->parents->guardian_name }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Wali</td>
                                        <td><strong>{{ $registrationStudent->parents->guardian_occupation }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Hubungan dengan Wali</td>
                                        <td><strong>{{ $registrationStudent->parents->guardian_relationship }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                        <div class="col-lg-6">
                            <h3 class="title h4 fw-semibold mt-n1">Berkas yang diunggah</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">Dokumen</th>
                                        <th class="text-center">File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kartu Keluarga</td>
                                        <td class="text-center"><a class="th-btn th-btn-xs"
                                                href="{{ asset('storage/' . $registrationStudent->documents->family_card) }}"
                                                target="_blank"><i class="fas fa-eye"></i> Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td>KTP Orang Tua</td>
                                        <td class="text-center"><a class="th-btn th-btn-xs"
                                                href="{{ asset('storage/' . $registrationStudent->documents->id_card) }}"
                                                target="_blank"><i class="fas fa-eye"></i> Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td>Akta Kelahiran</td>
                                        <td class="text-center"><a class="th-btn th-btn-xs"
                                                href="{{ asset('storage/' . $registrationStudent->documents->birth_certificate) }}"
                                                target="_blank"><i class="fas fa-eye"></i> Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td>Raport</td>
                                        <td class="text-center"><a class="th-btn th-btn-xs"
                                                href="{{ asset('storage/' . $registrationStudent->documents->report_card) }}"
                                                target="_blank"><i class="fas fa-eye"></i> Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td>Ijazah</td>
                                        <td class="text-center"><a class="th-btn th-btn-xs"
                                                href="{{ asset('storage/' . $registrationStudent->documents->diploma) }}"
                                                target="_blank"><i class="fas fa-eye"></i> Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td>Kartu PIP</td>
                                        <td class="text-center"><a class="th-btn th-btn-xs"
                                                href="{{ asset('storage/' . $registrationStudent->documents->pip_card) }}"
                                                target="_blank"><i class="fas fa-eye"></i> Lihat</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
