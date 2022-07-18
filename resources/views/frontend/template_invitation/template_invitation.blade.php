@extends('layouts.user')
@section('css_khusus')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/paket.css') }}" />
@section('title', 'Template Invitation')

@section('content_user')

    <!-- Card's Price -->
    <section class="paket">
        <div class="container">
            <h3>Pilihan Paket {{ $kategori->kategori }}</h3>
            <div class="row">
                @foreach ($templateInvitation as $template)
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="kategori">
                                <span>{{ $template->kategori }}</span>
                            </div>
                            <img src="{{ asset("gambar/gambar_cover_template/$template->gambar_cover") }}" class="img-fluid"
                                alt="..." />
                            <div class="pemesanan carousel-caption my-0 d-md-block">
                                @php
                                    $id_template = Crypt::encrypt($template->id_template);
                                @endphp
                                <a href="{{ route('detail-template', $id_template) }}" class="btn">
                                    Pesan
                                </a>
                                <a href="{{ $template->link_hosting }}" target="_blank" class="btn">Preview</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Card's Price -->
@endsection
