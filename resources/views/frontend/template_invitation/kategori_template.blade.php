@extends('layouts.user')
@section('css_khusus')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/undangan.css') }}" />
@section('title', 'Template Invitation')

@section('content_user')
    <!-- Card's Price -->
    <section class="harga-undangan">
        <div class="container">
            <h3>Harga Undangan</h3>
            <div class="row">
                @foreach ($KategoriTemplate as $kategori)
                    <div class="undangan-gratis col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="kategori-paket">Paket {{ $kategori->kategori }}</h5>
                                <h3 class="harga-paket">Rp. {{ number_format($kategori->harga) }}</h3>
                                <hr />
                                <ul class="list-style-none mt-2">
                                    <!-- enkripsi id -->
                                    @php
                                        $kategori_template = Crypt::encrypt($kategori->id_kategori_template);
                                    @endphp
                                    <li>
                                        <i class="bi bi-check-lg"></i> {!! $kategori->rincian_kategori_template !!}
                                    </li>

                                </ul>
                                <a href="{{ route('template_invitation', $kategori_template) }}"
                                    class="btn text-center w-100 fw-bold">
                                    Lihat
                                </a>

                                {{-- <button class="btn btn-primary text-center w-100 fw-bold"
                                    onclick="detailTemplate({{ $kategori_template }})">Lihat</button> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Card's Price -->

    <!-- Benefit Cards -->
    <section class="section-benefit">
        <div class="container">
            <div class="row">
                <div class="col-12 title-section mb-0">
                    <h2><span>Benefit</span> Yang Kamu Dapatkan</h2>
                    <p>Yuk segera Lihat undangan digital impian kamu dari sekarang</p>
                </div>

                <div class="col-sm-12 col-lg-6 align-self-center">
                    <div class="benefit">
                        <h3>Biaya yang murah</h3>
                        <p>
                            Hanya dengan membeli satu undangan anda bisa menyebar ke banyak
                            teman
                        </p>
                    </div>
                    <div class="benefit">
                        <h3>Ramah Lingkungan</h3>
                        <p>
                            Dengan menggunakan Undangan digital anda telah meminimalisir
                            penggunaan kertas
                        </p>
                    </div>
                    <div class="benefit">
                        <h3>Mudah diperbaiki</h3>
                        <p>
                            Jika terdapat kesalahan data maka akan mudah untuk memperbaiki
                            data.
                        </p>
                    </div>
                    <div class="benefit">
                        <h3>Tidak ada batasan</h3>
                        <p>
                            Anda bisa mengirimkan undangan digital ke mana saja dan kapan
                            saja.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 d-none d-md-block align-self-center">
                    <div class="image-mobbile">
                        <img class="image-hand" src="{{ asset('user_page/template/public/img/mobile.png') }}"
                            alt="mobile image" />
                        <!--  -->
                        <div class="img-iner">
                            <div class="mobile-carousel">
                                <div class="slider-item"
                                    style="background-image: url({{ asset('user_page/template/public/img/slider-mobile-2.png') }});">
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Benefit Cards -->
@endsection

@push('script')
    <script></script>
@endpush
