@extends('frontend._partials.main')


@section('main-content')
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-shape">
        </div>

        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Riwayat Pendaftaran</h1>

            </div>
        </div>
    </div>

    <div class="space">
        <div class="container">
            <div class="tinv-wishlist woocommerce tinv-wishlist-clear">
                <div class="tinv-header">
                    <h2 class="mb-30">Riwayat Pendaftaran</h2>
                </div>
                <form action="#" method="post" autocomplete="off">
                    <table class="tinvwl-table-manage-list">
                        <thead>
                            <tr>
                                <th class="product-remove">No</th>
                                <th class="product-name">No. Registrasi</th>
                                <th class="product-name">NISN</th>
                                <th class="product-name">Nama Lengkap</th>
                                <th class="product-stock-status">Tanggal Daftar</th>
                                <th class="product-price">Status</th>
                                <th class="product-stock-status">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($registrationStudent as $p)
                                <tr>
                                    <td class="product-date">
                                        <time class="entry-date" datetime="2021-11-21 03:54:24">{{ $no++ }}</time>
                                    </td>
                                    <td class="product-date">
                                        <time class="entry-date"
                                            datetime="2021-11-21 03:54:24">{{ $p->registration_number }}</time>
                                    </td>
                                    <td class="product-date">
                                        <time class="entry-date" datetime="2021-11-21 03:54:24">{{ $p->nisn }}</time>
                                    </td>
                                    <td class="product-date">
                                        <a href="#">{{ $p->full_name }}</a>
                                    </td>
                                    <td class="product-date">
                                        <a
                                            href="#">{{ \Carbon\Carbon::parse($p->registration_date)->format('d M Y') }}</a>
                                    </td>
                                    <td class="product-date">
                                        @if ($p->registration_status == 'Pending')
                                            <span class="text-warning">Menunggu Verifikasi</span>
                                        @elseif ($p->registration_status == 'Accepted')
                                            <span class="text-success">Diterima</span>
                                        @elseif ($p->registration_status == 'Rejected')
                                            <span class="text-danger">Ditolak</span>
                                        @endif
                                    </td>

                                    </td>
                                    <td class="product-action">
                                        <a class=" th-btn"
                                            href="{{ route('ppdb.showRegistrationResultDetail', $p->registration_number) }}"
                                            name="tinvwl-add-to-cart" value="60" title="Add to Cart">
                                            <span class="tinvwl-txt"> Detail</span>
                                        </a>
                                        <a class=" th-btn"
                                            href="{{ route('ppdb.showResumeRegistration', $p->registration_number) }}"
                                            name="tinvwl-add-to-cart" value="60" title="Add to Cart">
                                            <span class="tinvwl-txt"> Bukti Daftar</span>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>

            </div>
        </div>
    </div>
@endsection
