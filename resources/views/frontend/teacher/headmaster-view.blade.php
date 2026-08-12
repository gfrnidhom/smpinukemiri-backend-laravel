@extends('frontend._partials.main')


@section('main-content')
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-shape">
        </div>

        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Kepala Sekolah</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home-dashboard') }}">Home</a></li>
                    <li>Kepala Sekolah</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="team-details-about-info">
                <div class="row gx-40">
                    <div class="col-lg-6 position-relative">
                        <div class="team-details-thumb">
                            <img src="{{ asset('storage') . '/' . $headmaster['image'] }}" alt="team image">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="about-box">
                            <div class="about-info">
                                <h2 class="title">
                                    {{ $headmaster->name }}
                                </h2>
                                <p class="desig">Nomor Induk Pegawai (NIP) : {{ $headmaster->nip }}</p>
                            </div>

                        </div>
                        <p>Tempat & Tanggal Lahir :
                            <b>{{ $headmaster->birthplace . ', ' . Carbon\Carbon::parse($headmaster->birthdate)->format('d M Y') }}</b>
                        </p>
                        <p>Jenis Kelamin :
                            @if ($headmaster->gender == 'male')
                                <b>Laki-laki</b>
                            @elseif ($headmaster->gender == 'female')
                                <b>Perempuan</b>
                            @elseif ($headmaster->gender == 'other')
                                <b>Lainnya</b>
                            @endif
                        </p>
                        <p>Agama :
                            @if ($headmaster->religion == 'islam')
                                <b>Islam</b>
                            @elseif ($headmaster->religion == 'christian')
                                <b>Kristen</b>
                            @elseif ($headmaster->religion == 'catholic')
                                <b>Katolik</b>
                            @elseif ($headmaster->religion == 'hindu')
                                <b>Hindu</b>
                            @elseif ($headmaster->religion == 'buddha')
                                <b>Buddha</b>
                            @elseif ($headmaster->religion == 'konghucu')
                                <b>Konghucu</b>
                            @elseif ($headmaster->religion == 'other')
                                <b>Lainnya</b>
                            @endif
                        </p>
                        <p>Pendidikan :</p>
                        <p><b>1. {{ $headmaster->qualification . ' : ' . $headmaster->specialization }}</b></p>
                        <p>Alamat : <b>1. {{ $headmaster->address }}</b></p>

                    </div>
                </div>
            </div>
            <div class="space-top">
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="title h4 fw-semibold mt-n1">Biografi</h3>
                        <p>{{ strip_tags($headmaster->remarks) }}</p>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
