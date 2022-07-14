@extends('layouts.user')
@section('title', 'Home Page')

@section('content_user')

    @if (session('blog'))
        <div class="alert alert-warning">
            <center>
                {{ session('blog') }}
            </center>
        </div>
    @endif
    <?php
        if(session()->get('status_user') == "pelanggan"){
    ?>

    <section class="undangan mb-3">
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-lg-8 gambar">
                        <img src="{{ asset('user_page/template/public') }}/img/wi2.jpg" class="img-fluid"
                            alt="Template Undangan" />
                    </div>
                    @if (isset($biodata_pelanggan))
                        <div class="col-lg-4 isi">
                            <p class="mb-4">Selamat Datang,</p>
                            <h4 class="pengantin my-4">
                                {{ $biodata_pelanggan->nama_pria }} & {{ $biodata_pelanggan->nama_wanita }}
                            </h4>
                            <a href="" class="link-web">{{ $biodata_pelanggan->link_hosting }}</a>
                            <br />
                            <p class="kategori">Kategori : <b>{{ $biodata_pelanggan->kategori_template }}</b></p>
                            <div class="pas">
                                <button class="btn preview">Preview</button>
                            </div>
                            <div class="bagikan mt-4">
                                <p>
                                    Bagikan :
                                    <a href="#">
                                        <i class="bi bi-whatsapp"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-4 isi">
                            <p class="mb-4">Selamat Datang,</p>
                            <h4 class="pengantin my-4">
                                Romeo Widodo & Juliet Soekarno Putri
                            </h4>
                            <a href="" class="link-web">https://www.weddingku.com/</a>
                            <br />
                            <p class="kategori">Kategori : <b>Spesial</b></p>
                            <div class="pas">
                                <button class="btn preview">Preview</button>
                            </div>
                            <div class="bagikan mt-4">
                                <p>
                                    Bagikan :
                                    <a href="#">
                                        <i class="bi bi-whatsapp"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <?php 
        }else{
    ?>
    <!-- Slider Bootstrap -->
    <section class="slider mb-3">
        <div class="container">
            <div class="pb-2">
                <div id="carouselFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('user_page/template/public/img/wi10.jpg') }}" class="d-block w-100"
                                alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('user_page/template/public/img/wi1.jpg') }}" class="d-block w-100"
                                alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('user_page/template/public/img/wi3.jpg') }}" class="d-block w-100"
                                alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider -->
    <?php } ?>

    <!-- Own-Carousel 1 -->
    <section class="highlight-news owncar1 mb-5">
        <div class="container">
            <div class="own-carousel__container own1 mb-3">
                <div class="title1 mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Highlight News</h3>
                        <div class="tombol-arah own-carousel__control">
                            <i class="btn bi bi-arrow-left-square-fill control__prev"></i>
                            <i class="btn bi bi-arrow-right-square-fill control__next"></i>
                        </div>
                    </div>
                </div>
                <div class="own-carousel__outer">
                    <div class="own-carousel">
                        <div class="own-carousel__item">
                            <div class="card border-0">
                                <img src="{{ asset('user_page/template/public/img/wi3.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="carousel-caption d-md-block">
                                    <button class="btn">
                                        More Detail
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                    <p>
                                        Kenapa kalian harus menikah? Apakah wajib untuk menikah?
                                        Kalau tidak apa yang akan terjadi?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="own-carousel__item">
                            <div class="card border-0">
                                <img src="{{ asset('user_page/template/public/img/wi6.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="carousel-caption d-md-block">
                                    <button class="btn">
                                        More Detail
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                    <p>
                                        Kalau bisa nikah, kenapa masih memilih ngaceng?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="own-carousel__item">
                            <div class="card border-0">
                                <img src="{{ asset('user_page/template/public/img/wi8.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="carousel-caption d-md-block">
                                    <button class="btn">
                                        More Detail
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                    <p>
                                        Mawar itu merah, violet itu biru. Maukah kau menikah
                                        dengan ku?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="own-carousel__item">
                            <div class="card border-0">
                                <img src="{{ asset('user_page/template/public/img/wi12.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="carousel-caption d-md-block">
                                    <button class="btn">
                                        More Detail
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                    <p>
                                        Dima laki kau piak?, Kami nio cubo lo baa excalibur laki
                                        kau tu
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="own-carousel__item">
                            <div class="card border-0">
                                <img src="{{ asset('user_page/template/public/img/wi13.jpg') }}" class="card-img-top"
                                    alt="..." />
                            </div>
                        </div>
                        <div class="own-carousel__item">
                            <div class="card border-0">
                                <img src="{{ asset('user_page/template/public/img/wi7.jpg') }}" class="card-img-top"
                                    alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Own-Carousel 1 -->

    <!-- Own-Carousel 2 -->
    <section class="paket owncar2 mb-5">
        <div class="container">
            <div class="own-carousel__container own2 mb-3">
                <div class="title1 mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Wedding Templates</h3>
                        <div class="tombol-arah own-carousel__control">
                            <i class="btn bi bi-arrow-left-square-fill control__prev"></i>
                            <i class="btn bi bi-arrow-right-square-fill control__next"></i>
                        </div>
                    </div>
                </div>
                <div class="own-carousel__outer">
                    <div class="own-carousel">

                        @foreach ($TemplateInvitation as $template)
                            <div class="own-carousel__item">
                                <div class="card">
                                    <div class="kategori">
                                        <span>{{ $template->kategori }}</span>
                                    </div>
                                    <img src="{{ url('gambar/gambar_cover_template', $template->gambar_cover) }}"
                                        class="img-fluid" alt="..." />
                                    <div class="pemesanan carousel-caption my-0 d-md-block">
                                        <a href="{{ route('kategori_template_users') }}" class="btn">
                                            Pesan
                                        </a>
                                        <a href="{{ $template->link_hosting }}" target="_blank" class="btn">
                                            Preview
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Own-Carousel 2 -->

    <!-- Videos -->
    {{-- <section class="video owncar3 mb-3">
        <div class="container">
            <div class="own-carousel__container own3 mb-3">
                <div class="title1 mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Videos</h3>
                        <div class="tombol-arah own-carousel__control">
                            <i class="btn bi bi-arrow-left-square-fill control__prev"></i>
                            <i class="btn bi bi-arrow-right-square-fill control__next"></i>
                        </div>
                    </div>
                </div>
                <div class="own-carousel__outer">
                    <div class="own-carousel">
                        <div class="own-carousel__item">
                            <div class="card">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/Vq2uDHYXdN8" title="YouTube video"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Videos -->

    <!-- News -->
    <section class="news mb-3">
        <div class="container">
            <h3>News</h3>
            <div class="row">
                <!-- Card Utama -->
                <div class="col-lg-6 card-image-utama">
                    
                    @if ($blog != null)
                        <a href="{{ route('detail_blog', Crypt::encrypt($blog->id_blog)) }}">
                            <div class="card border-0">
                                <img src="{{ url('gambar/gambar_blog/thumbnail', $blog->thumbnail) }}"
                                    class="card-img-top" alt="card utama" />
                                <div class="card-body">
                                    <div class="card-title">
                                        <h6 class="fw-bold">

                                        </h6>
                                    </div>
                                    <div class="card-title">
                                        <h5 class="fw-bold">
                                            {{ $blog->judul }}
                                        </h5>
                                        <div class="card-text">
                                            <p>
                                                {!! substr($blog->isi_blog, 0, 200) !!}
                                            </p>
                                        </div>
                                        <p class="card-waktu">
                                            {{ date('d F Y', strtotime($blog->tanggal)) }} oleh Rise Development
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endif
                </div>

                <!-- Card Lists -->
                <div class="col-lg-6 card-image-lists">
                    @forelse ($blogLain as $blog_lain)
                        <a href="{{ route('detail_blog', Crypt::encrypt($blog_lain->id_blog)) }}">
                            <div class="card">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="col-md-4 col-sm-4">
                                        <img src="{{ url('gambar/gambar_blog/thumbnail', $blog_lain->thumbnail) }}"
                                            class="card-img-top" alt="card utama" />
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="card-body py-0">
                                            <h6 class="card-title mb-2">{{ $blog_lain->judul }}</h6>
                                            <p class="card-text mb-2" style="font-weight: bold; color:black;">
                                                {!! substr($blog_lain->isi_blog, 0, 60) !!} ......
                                            </p>
                                            <p class="card-waktu">
                                                {{ date('d F Y', strtotime($blog_lain->tanggal)) }} oleh Rise
                                                Development
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                        {{ 'Blog Belum Ada' }}
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- End News -->

@endsection
