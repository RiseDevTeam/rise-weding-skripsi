@extends('layouts.user')
@section('css_khusus')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/portfolio.css') }}" />
@section('title', 'Portfolio')

@section('content_user')

    <!-- Search News -->
    <section class="pencarian-news">
        <div class="container h-10 mb-4 mt-2">
            <h3 class="text-center mb-4">Portfolio</h3>
            <div class="seleksi mb-3 d-flex justify-content-center align-items-center">
                <div class="col-lg-3 me-2">
                    <div class="input-group">
                        <select class="form-select py-2" id="inputGroupSelect">
                            <!-- ? Saat dipilih template, maka yang muncul hanya template wedding di halaman yang sama -->
                            <option selected>Templates</option>
                            <!-- ? Saat dipilih videos, maka yang muncul hanya video wedding di halaman yang sama -->
                            <option value="Videos">Videos</option>
                        </select>
                    </div>
                </div>

                <div class="tombol-pencarian col-lg-1">
                    <button type="submit" class="btn">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Search News -->

    <!-- Card's Price -->
    <section class="paket">
        <div class="container">
            <h3>Templates Invitation</h3>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="kategori">
                            <span>Free</span>
                        </div>
                        <img src="{{ asset('user_page/template/public/img/cwi1.jpg') }}" class="img-fluid"
                            alt="..." />
                        <div class="pemesanan carousel-caption my-0 d-md-block">
                            <a href="../undangan/data-undangan.html" class="btn">
                                Pesan
                            </a>
                            <a href="#" class="btn">
                                Preview
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="kategori">
                            <span>Free</span>
                        </div>
                        <img src="{{ asset('user_page/template/public/img/cwi1.jpg') }}" class="img-fluid"
                            alt="..." />
                        <div class="pemesanan carousel-caption my-0 d-md-block">
                            <a href="../undangan/data-undangan.html" class="btn">
                                Pesan
                            </a>
                            <a href="#" class="btn">
                                Preview
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="kategori">
                            <span>Free</span>
                        </div>
                        <img src="{{ asset('user_page/template/public/img/cwi1.jpg') }}" class="img-fluid"
                            alt="..." />
                        <div class="pemesanan carousel-caption my-0 d-md-block">
                            <a href="../undangan/data-undangan.html" class="btn">
                                Pesan
                            </a>
                            <a href="#" class="btn">
                                Preview
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="kategori">
                            <span>Free</span>
                        </div>
                        <img src="{{ asset('user_page/template/public/img/cwi1.jpg') }}" class="img-fluid"
                            alt="..." />
                        <div class="pemesanan carousel-caption my-0 d-md-block">
                            <a href="../undangan/data-undangan.html" class="btn">
                                Pesan
                            </a>
                            <a href="#" class="btn">
                                Preview
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Card's Price -->

    <!-- Videos -->
    {{-- <section class="video" id="video">
        <div class="container mb-3 px-5">
            <h3>Video Invitation</h3>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/Vq2uDHYXdN8" title="YouTube video" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/Vq2uDHYXdN8" title="YouTube video" frameborder="0"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/Vq2uDHYXdN8" title="YouTube video" frameborder="0"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Videos -->

@endsection
