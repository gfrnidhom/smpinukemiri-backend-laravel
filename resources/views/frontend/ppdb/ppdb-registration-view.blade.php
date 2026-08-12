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

    <div class="woocommerce-checkout mt-40">
        <div class="container">

            <form style="margin-top: 10px; margin-bottom:200px" action="{{ route('ppdb.registrationStudenPost') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="woocommerce-form-login-toggle ">
                    <div class="woocommerce-info">Data Siswa <a href="#" class="showlogin"></a></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="enrollment_period_id">Periode Pendaftaran <a class="text-danger">*</a></label>
                                <input type="text" id="enrollment_period_id" name="enrollment_period_id"
                                    class="form-control" value="{{ $ppdb->id }}" hidden readonly>
                                <input type="text" id="period_name" name="period_name" class="form-control"
                                    value="{{ $ppdb->period_name }}" readonly>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="registration_number">Nomor Registrasi <a class="text-danger">*</a></label>
                                <input type="text" id="registration_number" name="registration_number"
                                    class="form-control" value="{{ old('registration_number', $registrationNumber ?? '') }}"
                                    readonly>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="nisn">NISN <a class="text-danger">*</a></label>
                                <input type="text" id="nisn" name="nisn"
                                    class="form-control @error('nisn') is-invalid @enderror" value="{{ old('nisn') }}">
                                @error('nisn')
                                    <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="nik">NIK <a class="text-danger">*</a></label>
                                <input type="text" id="nik" name="nik"
                                    class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                                @error('nik')
                                    <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="full_name">Nama Lengkap <a class="text-danger">*</a></label>
                                <input type="text" id="full_name" name="full_name"
                                    class="form-control @error('full_name') is-invalid @enderror"
                                    value="{{ old('full_name') }}">
                                @error('full_name')
                                    <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="birthplace">Tempat Lahir <a class="text-danger">*</a></label>
                                <input type="text" id="birthplace" name="birthplace"
                                    class="form-control @error('birthplace') is-invalid @enderror"
                                    value="{{ old('birthplace') }}">
                                @error('birthplace')
                                    <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="birthdate">Tanggal Lahir <a class="text-danger">*</a></label>
                                <input type="date" id="birthdate" name="birthdate"
                                    class="form-control @error('birthdate') is-invalid @enderror"
                                    value="{{ old('birthdate') }}">
                                @error('birthdate')
                                    <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="gender">Jenis Kelamin <a class="text-danger">*</a></label>
                                <select id="gender" name="gender"
                                    class="form-control @error('gender') is-invalid @enderror">
                                    <option value="" selected>-- Pilih Jenis Kelamin --</option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Laki-laki
                                    </option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Perempuan
                                    </option>
                                </select>
                                @error('gender')
                                    <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="religion">Agama <a class="text-danger">*</a></label>
                                <select id="religion" name="religion"
                                    class="form-control @error('religion') is-invalid @enderror">
                                    <option value="" selected>-- Pilih Agama --</option>
                                    <option value="Islam" {{ old('religion') == 'Islam' ? 'selected' : '' }}>Islam
                                    </option>
                                    <option value="Christian" {{ old('religion') == 'Christian' ? 'selected' : '' }}>
                                        Kristen</option>
                                    <option value="Catholic" {{ old('religion') == 'Catholic' ? 'selected' : '' }}>Katolik
                                    </option>
                                    <option value="Hindu" {{ old('religion') == 'Hindu' ? 'selected' : '' }}>Hindu
                                    </option>
                                    <option value="Buddhist" {{ old('religion') == 'Buddhist' ? 'selected' : '' }}>Buddha
                                    </option>
                                    <option value="Confucianism"
                                        {{ old('religion') == 'Confucianism' ? 'selected' : '' }}>
                                        Konghucu</option>
                                </select>
                                @error('religion')
                                    <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone_number">Nomor Telepon <a class="text-danger">*</a></label>
                                <input type="text" id="phone_number" name="phone_number"
                                    class="form-control @error('phone_number') is-invalid @enderror"
                                    value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">Email <a class="text-danger">*</a></label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-md-6 form-group">
                            <label for="previous_school">Asal Sekolah <a class="text-danger">*</a></label>
                            <select id="previous_school" name="previous_school"
                                class="form-control @error('previous_school') is-invalid @enderror">
                                <option value="" selected>-- Pilih Asal Sekolah --</option>
                                <option value="sd" {{ old('previous_school') == 'sd' ? 'selected' : '' }}>Sekolah
                                    Dasar (SD)</option>
                                <option value="mi" {{ old('previous_school') == 'mi' ? 'selected' : '' }}>Madrasah
                                    Ibtidaiyah (MI)</option>
                            </select>
                            @error('previous_school')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="previous_school_name">Nama Asal Sekolah <a class="text-danger">*</a></label>
                            <input type="text" id="previous_school_name" name="previous_school_name"
                                class="form-control" value="{{ old('previous_school_name') }}">
                            @error('previous_school_name')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="province_id">Provinsi <a class="text-danger">*</a></label>
                            <select type="text" id="province" name="province_id" class="form-control">
                                <option value="">-- Pilih Provinsi --</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->code }}"
                                        {{ old('province_id') == $province->code ? 'selected' : '' }}>
                                        {{ $province->name }}</option>
                                @endforeach
                            </select>
                            @error('province_id')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="city_id">Kota/Kabupaten <a class="text-danger">*</a></label>
                            <select type="text" id="city" name="city_id" class="form-control">
                                <option value="">-- Pilih Kota/Kabupaten --</option>
                            </select>
                            @error('city_id')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="district_id">Kecamatan <a class="text-danger">*</a></label>
                            <select type="text" id="district" name="district_id" class="form-control">
                                <option value="">-- Pilih Kecamatan --</option>
                            </select>
                            @error('district_id')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="subdistrict_id">Kelurahan <a class="text-danger">*</a></label>
                            <select type="text" id="village" name="village_id" class="form-control">
                                <option value="">-- Pilih Kelurahan --</option>
                            </select>
                            @error('village_id')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="postal_code">Kode Pos <a class="text-danger">*</a></label>
                            <input type="text" id="postal_code" name="postal_code"
                                class="form-control @error('postal_code') is-invalid @enderror"
                                value="{{ old('postal_code') }}">
                            @error('postal_code')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="address">Alamat Lengkap <a class="text-danger">*</a></label>
                            <textarea id="address" name="address" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                            @error('address')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="woocommerce-form-login-toggle ">
                    <div class="woocommerce-info">Data Orang Tua Siswa <a href="#" class="showlogin"></a></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="father_name">Nama Ayah <span class="text-danger">*</span></label>
                            <input type="text" id="father_name" name="father_name"
                                class="form-control @error('father_name') is-invalid @enderror"
                                value="{{ old('father_name') }}">
                            @error('father_name')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="father_religion">Agama Ayah <span class="text-danger">*</span></label>
                            <input type="text" id="father_religion" name="father_religion"
                                class="form-control @error('father_religion') is-invalid @enderror"
                                value="{{ old('father_religion') }}">
                            @error('father_religion')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="father_occupation">Pekerjaan Ayah <span class="text-danger">*</span></label>
                            <input type="text" id="father_occupation" name="father_occupation"
                                class="form-control @error('father_occupation') is-invalid @enderror"
                                value="{{ old('father_occupation') }}">
                            @error('father_occupation')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="mother_name">Nama Ibu <span class="text-danger">*</span></label>
                            <input type="text" id="mother_name" name="mother_name"
                                class="form-control  @error('mother_name') is-invalid @enderror"
                                value="{{ old('mother_name') }}">
                            @error('mother_name')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="mother_religion">Agama Ibu <span class="text-danger">*</span></label>
                            <input type="text" id="mother_religion" name="mother_religion"
                                class="form-control  @error('mother_religion') is-invalid @enderror"
                                value="{{ old('mother_religion') }}">
                            @error('mother_religion')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="mother_occupation">Pekerjaan Ibu <span class="text-danger">*</span></label>
                            <input type="text" id="mother_occupation" name="mother_occupation"
                                class="form-control  @error('mother_occupation') is-invalid @enderror"
                                value="{{ old('mother_occupation') }}">
                            @error('mother_occupation')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="guardian_name">Nama Wali (Opsional)</label>
                            <input type="text" id="guardian_name" name="guardian_name" class="form-control"
                                value="{{ old('guardian_name') }}">
                            @error('guardian_name')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="guardian_occupation">Pekerjaan Wali (Opsional)</label>
                            <input type="text" id="guardian_occupation" name="guardian_occupation"
                                class="form-control" value="{{ old('guardian_occupation') }}">
                            @error('guardian_occupation')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="guardian_relationship">Hubungan dengan Wali (Opsional)</label>
                            <input type="text" id="guardian_relationship" name="guardian_relationship"
                                class="form-control" value="{{ old('guardian_relationship') }}">
                            @error('guardian_relationship')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Nomor Telepon <span class="text-danger">*</span></label>
                            <input type="text" id="phone_number" name="phone_number"
                                class="form-control @error('phone_number') is-invalid @enderror"
                                value="{{ old('phone_number') }}">
                            @error('phone_number')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="woocommerce-form-login-toggle ">
                    <div class="woocommerce-info">Unggah Berkas Persyaratan <a href="#" class="showlogin"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pas_foto">Pas Foto (JPEG/PNG)<span class="text-danger">*</span></label>
                            <input type="file" id="pas_foto" name="pas_foto"
                                class="form-control @error('pas_foto') is-invalid @enderror">
                            @error('pas_foto')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="family_card">Kartu Keluarga (PDF)<span class="text-danger">*</span></label>
                            <input type="file" id="family_card" name="family_card"
                                class="form-control @error('family_card') is-invalid @enderror">
                            @error('family_card')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="id_card">KTP Orang Tua (JPEG/PNG)<span class="text-danger">*</span></label>
                            <input type="file" id="id_card" name="id_card"
                                class="form-control @error('id_card') is-invalid @enderror">
                            @error('id_card')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="birth_certificate">Akta Kelahiran (PDF)<span class="text-danger">*</span></label>
                            <input type="file" id="birth_certificate" name="birth_certificate"
                                class="form-control @error('birth_certificate') is-invalid @enderror">
                            @error('birth_certificate')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="report_card">Raport (PDF)<span class="text-danger">*</span></label>
                            <input type="file" id="report_card" name="report_card"
                                class="form-control @error('report_card') is-invalid @enderror">
                            @error('report_card')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="diploma">Ijazah (PDF)<span class="text-danger">*</span></label>
                            <input type="file" id="diploma" name="diploma"
                                class="form-control @error('diploma') is-invalid @enderror">
                            @error('diploma')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pip_card">Kartu PIP (Opsional) (PDF)</label>
                            <input type="file" id="pip_card" name="pip_card" class="form-control">
                            @error('pip_card')
                                <div class="text-danger mb-3" style="margin-top: -20px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-row place-order">
                    <button type="submit" class="th-btn">Kirim Pendaftaran</button>
                </div>
            </form>

        </div>
    </div>
@endsection
