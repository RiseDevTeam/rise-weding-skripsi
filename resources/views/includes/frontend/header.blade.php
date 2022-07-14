<header class="sticky-lg-top bg-white">
    <nav class="navbar navbar-expand-lg navbar-light py-0">
        <div class="container py-3 border-bottom d-none d-lg-block">
            <div class="col-lg-12">
                <div class="row justify-content-center align-items-center">
                    <div class="logo col-md-3">
                        <img src="{{ asset('user_page/template/public/img/logo.png') }}" width="40"
                            class="d-inline-block align-text-middle" />
                        <span class="nama-logo">RiseDev</span>
                    </div>

                    <div class="col-md-6">
                        <select class="form-control form-select-md" id="select" onchange="dataListOption(this)"
                            aria-label=".form-select-md example" style="border: 2px solid var(--warna1);">
                            <option selected>"Cari Yang Kamu Inginkan..."</option>
                            <option value="template">Template Invitation</option>
                            <option value="portofolio">Portofolio</option>
                            <option value="blog">Blog</option>
                        </select>
                    </div>

                    <?php
                    if(session()->get('status_user') == "pelanggan"){
                ?>

                    <div class="col-md-3 user">
                        <img src="{{ Auth::User()->foto }}" class="img-fluid" alt="User Login" />
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::User()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item text-center fw-bold" href="{{ route('logout') }}">Sign Out
                                        <i class="bi bi-box-arrow-right fw-bold"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </div>

                    <?php }else{ ?>

                    <div class="col-md-3 header-title">
                        <a href="{{ route('login') }}" class="btn float-end">Sign In</a>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>



    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand d-lg-none d-xl-block d-xl-none d-xxl-block d-xxl-none" href="#">
                <img src="{{ asset('user_page/template/public/img/logo.png') }}"
                    class="d-inline-block align-text-middle" alt="RiseDev logo" width="30px" height="auto" />
                <span class="logo-name">RiseDev</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <div class="siav d-lg-none d-xl-block d-xl-none d-xxl-block d-xxl-none" href="#">

                        <?php
                        if(session()->get('status_user') == "pelanggan"){
                    ?>

                        <div class="user justify-content-start">
                            <img src="{{ Auth::User()->foto }}" class="img-fluid" alt="User Login" />
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::User()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item text-center fw-bold" href="{{ route('logout') }}">Sign
                                            Out </a>
                                    </li>
                                </ul>
                            </li>
                        </div>

                        <?php }else{ ?>

                        <li class="nav-item">
                            <a class="nav-link signin" href="{{ route('login') }}">
                                Sign In
                            </a>
                        </li>

                        <?php } ?>




                    </div>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('/') }}"><i class="bi bi-house"></i>
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kategori_template_users') }}">
                            <i class="bi bi-calendar2-event"></i> Template Invitation</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('video_invitation') }}">
                            <i class="bi bi-camera-reels"></i> Videos Invitation</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('portofolio') }}">
                            <i class="bi bi-journal-richtext"></i> Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">
                            <i class="bi bi-newspaper"></i> Blog</a>
                    </li>
                    @if (session()->get('status_user') == 'pelanggan')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pemesanan_saya') }}">
                                <i class="bi bi-bag-plus"></i> Pesanan Saya</a>
                        </li>
                    @endif

                </ul>
                <div class="input-group d-flex d-lg-none d-xl-block d-xl-none d-xxl-block d-xxl-none">
                    <select class="form-control form-select-md" id="select" onchange="dataListOption(this)"
                        aria-label=".form-select-md example" style="border: 2px solid var(--warna1);">
                        <option selected>"Cari Yang Kamu Inginkan..."</option>
                        <option value="template">Template Invitation</option>
                        <option value="portofolio">Portofolio</option>
                        <option value="blog">Blog</option>
                    </select>
                </div>
            </div>
        </div>
    </nav>
    <script>
        function dataListOption() {
            var selectOption = document.getElementById("select").value

            if (selectOption === 'template') {
                window.open("{{ route('kategori_template_users') }}");
            }
            if (selectOption === 'portofolio') {
                window.open("{{ route('portofolio') }}");
            }
            if (selectOption === 'blog') {
                window.open("{{ route('blog') }}");
            }
        }
    </script>
</header>
