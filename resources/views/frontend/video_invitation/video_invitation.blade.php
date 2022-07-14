@extends('layouts.user')
@section('css_khusus')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/video.css') }}" />
@section('title', 'Video Invitation')

@section('content_user')

    <!-- Videos -->
    <section class="video" id="video">
        <div class="container mb-3">
            <h3>Video Invitation</h3>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            {{-- https://www.youtube.com/embed/YE0rfKMAM --}}
                            {{-- https://www.youtube.com/watch?v=xaYE0rfKMAM&ab_channel=ParaMoeya --}}
                            <iframe src="https://www.youtube.com/embed/YE0rfKMAM" title="YouTube video" frameborder="0"
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
    </section>
    <!-- End Videos -->
@endsection
