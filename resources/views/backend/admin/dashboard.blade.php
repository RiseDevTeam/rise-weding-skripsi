@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')



    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('../admin/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            @if (Auth::user())
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ Auth::User()->foto }}" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ Auth::User()->name }}
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                {{ Auth::User()->email }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="true">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(603.000000, 0.000000)">
                                                            <path class="color-background"
                                                                d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                            </path>
                                                            <path class="color-background"
                                                                d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                opacity="0.7"></path>
                                                            <path class="color-background"
                                                                d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                opacity="0.7"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">App</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab"
                                        aria-selected="false">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>document</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(154.000000, 300.000000)">
                                                            <path class="color-background"
                                                                d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                opacity="0.603585379"></path>
                                                            <path class="color-background"
                                                                d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab"
                                        aria-selected="false">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>settings</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(304.000000, 151.000000)">
                                                            <polygon class="color-background" opacity="0.596981957"
                                                                points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                            </polygon>
                                                            <path class="color-background"
                                                                d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                opacity="0.596981957"></path>
                                                            <path class="color-background"
                                                                d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
        @endif
    </div>

    <div class="container-fluid py-4">
        <!-- chart JS -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Bar chart</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="bar-chart" class="chart-canvas" height="600" width="590"
                                style="display: block; box-sizing: border-box; height: 300px; width: 295px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- chart JS -->

        <!-- CARD KATEGORI -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="text-sm mb-1 text-capitalize font-weight-bold">Sales</p>
                                <h5 class="font-weight-bolder mb-0">
                                    $230,220
                                </h5>
                                <span class="text-sm text-end text-success font-weight-bolder mt-auto mb-0">+55%
                                    <span class="font-weight-normal text-secondary">since last month</span></span>
                            </div>
                            <div class="col-5">
                                <div class="dropdown text-end">
                                    <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="text-xs text-secondary">6 May - 7 May</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers1">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7
                                                days</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last
                                                week</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30
                                                days</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-sm-0 mt-4">
                <div class="card">
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="text-sm mb-1 text-capitalize font-weight-bold">Customers</p>
                                <h5 class="font-weight-bolder mb-0">
                                    3.200
                                </h5>
                                <span class="text-sm text-end text-success font-weight-bolder mt-auto mb-0">+12%
                                    <span class="font-weight-normal text-secondary">since last month</span></span>
                            </div>
                            <div class="col-5">
                                <div class="dropdown text-end">
                                    <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="text-xs text-secondary">6 May - 7 May</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers2">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7
                                                days</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last
                                                week</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30
                                                days</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-sm-0 mt-4">
                <div class="card">
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="text-sm mb-1 text-capitalize font-weight-bold">Avg. Revenue</p>
                                <h5 class="font-weight-bolder mb-0">
                                    $1.200
                                </h5>
                                <span class="font-weight-normal text-secondary text-sm"><span
                                        class="font-weight-bolder">+$213</span> since last month</span>
                            </div>
                            <div class="col-5">
                                <div class="dropdown text-end">
                                    <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers3"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="text-xs text-secondary">6 May - 7 May</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers3">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7
                                                days</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last
                                                week</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30
                                                days</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CARD KATEGORI -->

            <!-- STATISTIK TOKO -->
            <div class="row mt-4">
                <div class="col-lg-8 col-12">
                    <div class="card">
                        <div class="card-header p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0">To do list</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end align-items-center">
                                    <small>23 - 30 March 2020</small>
                                </div>
                            </div>
                            <hr class="horizontal dark mb-0">
                        </div>
                        <div class="card-body p-3 pt-0">
                            <ul class="list-group list-group-flush" data-toggle="checklist">
                                <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                    <div class="checklist-item checklist-item-primary ps-2 ms-3">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <h6 class="mb-0 text-dark font-weight-bold text-sm">Check status</h6>
                                            <div class="dropstart float-lg-end ms-auto pe-0">
                                                <a href="javascript:;" class="cursor-pointer" id="dropdownTable2"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                                    aria-labelledby="dropdownTable2" style="">
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Action</a></li>
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Another action</a></li>
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center ms-4 mt-3 ps-1">
                                            <div>
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Date</p>
                                                <span class="text-xs font-weight-bolder">24 March 2019</span>
                                            </div>
                                            <div class="ms-auto">
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Project</p>
                                                <span class="text-xs font-weight-bolder">2414_VR4sf3#</span>
                                            </div>
                                            <div class="mx-auto">
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Company</p>
                                                <span class="text-xs font-weight-bolder">Creative Tim</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-4 mb-0">
                                </li>
                                <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                    <div class="checklist-item checklist-item-dark ps-2 ms-3">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault1" checked="">
                                            </div>
                                            <h6 class="mb-0 text-dark font-weight-bold text-sm">Management
                                                discussion</h6>
                                            <div class="dropstart float-lg-end ms-auto pe-0">
                                                <a href="javascript:;" class="cursor-pointer" id="dropdownTable3"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                                    aria-labelledby="dropdownTable3" style="">
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Action</a></li>
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Another action</a></li>
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center ms-4 mt-3 ps-1">
                                            <div>
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Date</p>
                                                <span class="text-xs font-weight-bolder">24 March 2019</span>
                                            </div>
                                            <div class="ms-auto">
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Project</p>
                                                <span class="text-xs font-weight-bolder">4411_8sIsdd23</span>
                                            </div>
                                            <div class="mx-auto">
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Company</p>
                                                <span class="text-xs font-weight-bolder">Apple</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-4 mb-0">
                                </li>
                                <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                    <div class="checklist-item checklist-item-warning ps-2 ms-3">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault2" checked="">
                                            </div>
                                            <h6 class="mb-0 text-dark font-weight-bold text-sm">New channel
                                                distribution</h6>
                                            <div class="dropstart float-lg-end ms-auto pe-0">
                                                <a href="javascript:;" class="cursor-pointer" id="dropdownTable"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                                    aria-labelledby="dropdownTable" style="">
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Action</a></li>
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Another action</a></li>
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center ms-4 mt-3 ps-1">
                                            <div>
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Date</p>
                                                <span class="text-xs font-weight-bolder">25 March 2019</span>
                                            </div>
                                            <div class="ms-auto">
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Project</p>
                                                <span class="text-xs font-weight-bolder">827d_kdl33D1s</span>
                                            </div>
                                            <div class="mx-auto">
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Company</p>
                                                <span class="text-xs font-weight-bolder">Slack</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-4 mb-0">
                                </li>
                                <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                    <div class="checklist-item checklist-item-success ps-2 ms-3">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault3">
                                            </div>
                                            <h6 class="mb-0 text-dark font-weight-bold text-sm">IOS App development
                                            </h6>
                                            <div class="dropstart float-lg-end ms-auto pe-0">
                                                <a href="javascript:;" class="cursor-pointer" id="dropdownTable1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                                    aria-labelledby="dropdownTable1" style="">
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Action</a></li>
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Another action</a></li>
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center ms-4 mt-3 ps-1">
                                            <div>
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Date</p>
                                                <span class="text-xs font-weight-bolder">26 March 2019</span>
                                            </div>
                                            <div class="ms-auto">
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Project</p>
                                                <span class="text-xs font-weight-bolder">88s1_349DA2sa</span>
                                            </div>
                                            <div class="mx-auto">
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">Company</p>
                                                <span class="text-xs font-weight-bolder">Facebook</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-4 mt-lg-0">
                    <div class="card overflow-hidden">
                        <div class="card-header p-3 pb-0">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                    <i class="ni ni-calendar-grid-58 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Tasks</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        480
                                    </h5>
                                </div>
                                <div class="progress-wrapper ms-auto w-25">
                                    <div class="progress-info">
                                        <div class="progress-percentage">
                                            <span class="text-xs font-weight-bold">60%</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-info w-60" role="progressbar"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-3 p-0">
                            <div class="chart">
                                <canvas id="chart-line" class="chart-canvas" height="200" width="654"
                                    style="display: block; box-sizing: border-box; height: 100px; width: 327px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-hidden mt-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="d-flex">
                                        <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                            <i class="ni ni-delivery-fast text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                        <div class="ms-3">
                                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Projects</p>
                                            <h5 class="font-weight-bolder mb-0">
                                                115
                                            </h5>
                                        </div>
                                    </div>
                                    <span class="badge badge-dot d-block text-start pb-0 mt-3">
                                        <i class="bg-gradient-info"></i>
                                        <span class="text-muted text-xs font-weight-bold">Done</span>
                                    </span>
                                    <span class="badge badge-dot d-block text-start">
                                        <i class="bg-gradient-secondary"></i>
                                        <span class="text-muted text-xs font-weight-bold">In progress</span>
                                    </span>
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <div class="chart ms-auto">
                                        <canvas id="chart-bar" class="chart-canvas" height="300" width="590"
                                            style="display: block; box-sizing: border-box; height: 150px; width: 295px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- STATISTIK TOKO -->
        </div>

    </div>
@endsection
