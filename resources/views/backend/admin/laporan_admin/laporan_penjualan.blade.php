@extends('layouts.admin')
@section('title', 'Mitra')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                @if (session('cash_out_admin'))
                    <div class="alert alert-warning">
                        <center>
                            {{ session('cash_out_admin') }}
                        </center>
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        Laporan Cash Out
                        <hr>

                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nomor</th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Pelanggan
                                        </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kategori Template
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar Template
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanggal Pemesanan
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Harga Template
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporan_penjualan as $cash)
                                        @php
                                            $cash_out = DB::table('cash_out')
                                                ->where('id_pembayaran', $cash->id_pembayaran)
                                                ->first();
                                        @endphp
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>

                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $cash->name }}</h6>
                                            </td>

                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $cash->email }}</h6>
                                            </td>

                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $cash->kategori_template }}</h6>
                                            </td>


                                            <td class="text-center">
                                                {{-- <a target="_blank" href="{{ asset("cash_out/$cash_out->bukti_cashout") }}"
                                                    class="btn btn-primary">Lihat
                                                    Bukti Bayar</a> --}}

                                                <img src='{{ asset("gambar/gambar_cover_template/$cash->gambar_cover") }}'
                                                    width="100" alt="Icon Template">
                                            </td>

                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    {{ $cash->tanggal_pemesanan }}
                                                </span>
                                            </td>

                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    Rp.{{ number_format($cash->total) }}
                                                </span>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <nav class="app-pagination">
                    <ul class="pagination justify-content-center">
                        {{-- {!! $dataPetugas->links() !!} --}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
