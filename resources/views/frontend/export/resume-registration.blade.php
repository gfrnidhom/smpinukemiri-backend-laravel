<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.6;
            padding: 0;
            margin: 0;
        }

        .container {
            max-width: 700px;
            /* Atur lebar maksimal sesuai kebutuhan */
            margin: auto;
            /* Memastikan tengah */
            padding: 10px;
            /* Kurangi padding dalam container */
        }

        .header {
            text-align: center;
            margin-left: 120px;
            margin-bottom: 20px;
        }

        .header img {
            position: absolute;
            left: 50px;
            top: 0px;
            width: 130px;
            /* Sesuaikan ukuran logo */
            height: auto;
        }

        .header h1 {
            margin: 0;
            font-family: Arial, sans-serif;
            font-size: 24px;
            font-weight: bold;
        }

        .header p {
            margin: 2px 0;
            font-size: 14px;
        }

        hr {
            margin: 10px 0;
            border-top: 2px solid #000;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        table td,
        table th {
            padding: 2px !important;
            vertical-align: top;
        }


        .signature {
            margin-top: 50px;
        }

        .signature p {
            margin: 0;
        }

        .signature br {
            display: block;
            margin: 10px 0;
            content: "";
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <div class="header">
            <img src="{{ asset('frontend/img/logo_smp.png') }}" alt="Logo Sekolah">
            <h1>SMP ISLAM NURUL ULUM KEMIRI</h1>
            <p><strong>TERAKREDITASI B</strong></p>
            <p>Jl. Desa Kemiri No 100, Kemiri, Kec. Malo, Kab. Bojonegoro</p>
            <p>Telp: 082 244 882 978 | Email: smpislamnurululumkemiri@gmail.com</p>
        </div>

        <hr>

        <!-- FORMULIR PENDAFTARAN -->
        <h2 class="text-center" style="font-family: Arial, Helvetica, sans-serif; margin-bottom: 20px">FORMULIR
            PENDAFTARAN</h2>
        <h3>Yang bertandatangan di bawah ini:</h3>

        <table class="table table-bordered">
            <tr>
                <td>Nama Lengkap Siswa</td>
                <td style="width: 5%">:</td>
                <td>{{ $registrationStudent->full_name }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td style="width: 5%">:</td>
                <td>{{ $registrationStudent->birthplace . ', ' . $registrationStudent->birthdate }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td style="width: 5%">:</td>
                <td>{{ $registrationStudent->gender == 'Male' ? 'Laki-laki' : 'Perempuan' }}</td>
            </tr>
            <tr>
                <td>Nomor Pendaftaran</td>
                <td style="width: 5%">:</td>
                <td>{{ $registrationStudent->registration_number }}</td>
            </tr>
            <tr>
                <td>Nama Orang Tua/Wali</td>
                <td style="width: 5%">:</td>
                <td>{{ $registrationStudent->parents->father_name }}</td>
            </tr>
            <tr>
                <td>Agama Orang Tua/Wali</td>
                <td style="width: 5%">:</td>
                <td>{{ $registrationStudent->parents->father_religion }}</td>
            </tr>
            <tr>
                <td>Pekerjaan Orang Tua/Wali</td>
                <td style="width: 5%">:</td>

                <td>{{ $registrationStudent->parents->father_occupation }}</td>
            </tr>
            <tr>
                <td>Gelombang Pendaftaran</td>
                <td style="width: 5%">:</td>

                <td>{{ $registrationStudent->enrollments->period_name }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td style="width: 5%">:</td>
                <td>{{ $registrationStudent->address }}</td>
            </tr>
        </table>

        <h3 class="text-center" style="font-family: Arial, Helvetica, sans-serif">MENYATAKAN</h3>
        <p>Selama menjadi siswa di SMP Islam Nurul Ulum Kemiri saya sanggup:</p>
        <ol>
            <li>Menjunjung tinggi ketertiban dan disiplin di sekolah</li>
            <li>Belajar dengan tekun dan penuh semangat</li>
            <li>Menjaga nama baik diri sendiri, keluarga, dan sekolah</li>
            <li>Berpakaian seragam lengkap sesuai dengan ketentuan</li>
            <li>Mengikuti dan melaksanakan kegiatan sekolah</li>
            <li>Mentaati dan mematuhi peraturan tata tertib sekolah serta kebijakan yang ditetapkan sekolah</li>
            <li>
                Apabila saya dikemudian hari melanggar ketentuan tersebut, saya sanggup menerima sanksi, antara lain:
                <ul>
                    <li>Tidak diperkenankan mengikuti pelajaran dalam jangka waktu tertentu</li>
                    <li>Dikembalikan kepada orang tua</li>
                </ul>
            </li>
        </ol>

        <!-- TANDA TANGAN MENGGUNAKAN TABEL -->
        <div class="signature">
            <p class="text-center mb-3">Yang Membuat Pernyataan</p>
            <table class="table table-borderless" style="border: none;">
                <tr class="text-center">
                    <td class="text-left" style="width: 50%;">
                        <p>Orang Tua/Wali Siswa</p>
                        <br><br><br><br>
                        <p>{{ $registrationStudent->parents->father_name }}</p>
                    </td>
                    <td class="text-right" style="width: 50%;">
                        <p>Kepala Sekolah</p>
                        <br><br><br><br>
                        <p>{{ $headMaster->name }}</p>
                        <p>{{ $headMaster->nip }}</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
