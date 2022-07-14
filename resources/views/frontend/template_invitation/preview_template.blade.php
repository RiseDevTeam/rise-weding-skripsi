<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- pemanggilan CSS -->
    @include('includes.frontend.css')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/custom-template.css') }}" />
    <!-- pemanggilan JS -->
    @include('includes.frontend.script')
    <title>Wedding | Custom Template</title>
</head>

<body>
    <!-- Chat -->
    <a href="https://api.whatsapp.com/send?phone=6289514640148&text=Hallo%20kak%20Saya%20ingin%20memesan%20Template"
        target="__blank" id="chatButton" tip="Chat dengan Lara">
        <i class="bi bi-chat-right-text"></i>
    </a>

    <!-- Kepala -->
    <section class="kepala-utama sticky-top">
        <div class="container">
            <!-- Header -->
            <div class="kepala">
                <div class="logo">
                    <img src="{{ asset('user_page/template/public/img/logo.png') }}" alt="Logo">
                    <span>Custom Template</span>
                </div>
                <a href="{{ route('data_undangan', $id_kategori) }}" class="btn">Back</a>
            </div>
        </div>
    </section>
    <!-- End Kepala -->

    <!-- Isi -->
    <section class="isi">
        <div class="container">
            @forelse ($PreviewTemplate as $preview)
                <p>
                    <iframe src='{{ asset("file/file_template/$preview->file_template") }}' width="100%"
                        title="W3Schools Free Online Web Tutorials">
                    </iframe>
                </p>
            @empty
                {{ 'Silahkan Pilih Template Undangan mu' }}
            @endforelse
        </div>
    </section>
    <!-- End Isi -->

    <div class="copyright container-fluid text-center p-2">
        <span>
            &copy; Copyright by <b>RiseDev</b>
            <script type="text/javascript">
                document.write(new Date().getFullYear());
            </script>
            . All Right Reserved.
        </span>
    </div>
    <!-- End Footer -->
</body>

</html>
