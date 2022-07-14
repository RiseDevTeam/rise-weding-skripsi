@extends('layouts.user')
@section('css_khusus')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/news.css') }}" />
@section('title', 'Blog Terinci')

@section('content_user')

    <!-- Search News -->
    <section class="pencarian-news">
        <div class="container h-10 mb-4">
            <h3 class="text-center mb-4">Blog Terinci</h3>
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Temukan berita baru..."
                            aria-label="Text input with dropdown button" />
                        <select id="inputGroupSelect" aria-label="Example select with button addon">
                            <option selected>Categories</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                        </select>
                        <button class="btn" type="button">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Search News -->

    <section class="blog">
        <div class="container">
            <!-- Blog -->
            <div class="col-lg-12">
                <div class="row mb-2">
                    <!-- Card Utama -->
                    <div class="card-utama col-md-9">
                        <div class="card">
                            <img src="{{ url('gambar/gambar_blog/thumbnail', $blogDetail->thumbnail) }}"
                                class="card-img-top" alt="card utama" />
                            <div class="card-body">
                                <div class="kdw">
                                    <h6>Judul Blog</h6>
                                    <p class="card-waktu">
                                        {{ date('d F Y', strtotime($blogDetail->tanggal)) }} oleh Rise Development
                                    </p>
                                </div>
                                <div class="card-title">
                                    <h5>
                                        {{ $blogDetail->judul }}
                                    </h5>
                                    <div class="card-text">
                                        <p>
                                            {!! $blogDetail->isi_blog !!}
                                        </p>
                                        <!-- ? First Ads for mobile -->
                                        <div class="ads-mobile col-sm-12 col-md-6">
                                            <a href="#">
                                                <div class="card">
                                                    <img src="{{ asset('user_page/template/public/img/atas4.jpg') }}"
                                                        class="img-fluid" alt="Ads 1" />
                                                </div>
                                            </a>
                                        </div>
                                        <!-- End First Ads for mobile -->

                                        <!-- ? Second Ads for mobile -->
                                        <div class="ads-mobile col-sm-12 col-md-6">
                                            <a href="#">
                                                <div class="card">
                                                    <img src="{{ asset('user_page/template/public/img/atas3.jpg') }}"
                                                        class="img-fluid" alt="Ads 1" />
                                                </div>
                                            </a>
                                        </div>
                                        <!-- End Second Ads for mobile -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Utama -->

                    <!-- Ads -->
                    <div class="ads d-none d-sm-none d-md-block col-md-3">
                        <a href="#">
                            <div class="card">
                                <img src="{{ asset('user_page/template/public/img/ads1.jpg') }}" class="card-img-top"
                                    alt="Ads 1" />
                            </div>
                        </a>

                        <a href="#">
                            <div class="card my-2">
                                <img src="{{ asset('user_page/template/public/img/ads2.jpg') }}" class="card-img-top"
                                    alt="Ads 2" />
                            </div>
                        </a>
                    </div>
                    <!-- End Ads -->
                </div>
            </div>
            <!-- End Blog -->
        </div>

        <div class="container">
            <h3 class="mb-3">Berita Lainnya</h3>
            <!-- First Row Card News -->
            <div class="card-daftar row mb-3">
                <div class="col-md-3">
                    @forelse ($blogLain as $blog_lain)
                        <a href="{{ route('detail_blog', Crypt::encrypt($blog_lain->id_blog)) }}">
                            <div class="card">
                                <img src="{{ url('gambar/gambar_blog/thumbnail', $blog_lain->thumbnail) }}"
                                    class="card-img-top" alt="card utama" />
                                <div class="card-body">
                                    <div class="card-kategori">
                                        <h6>{{ $blog_lain->judul }}</h6>
                                    </div>
                                    <div class="card-title">
                                        <span>
                                            {!! substr($blog_lain->isi_blog, 0, 50) !!}
                                        </span>
                                        <p class="card-waktu">
                                            {{ date('d F Y', strtotime($blog_lain->tanggal)) }} oleh Rise
                                            Development
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                        {{ 'Blog Belum Ada' }}
                    @endforelse
                </div>
            </div>
            <!-- End First Card News -->
        </div>
    </section>

@endsection
