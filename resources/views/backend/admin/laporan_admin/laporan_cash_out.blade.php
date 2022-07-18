@extends('layouts.admin')
@section('title', 'Petugas')

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
                                            class="text-center  text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Mitra
                                        </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kategori Template
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Harga Jual
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Potongan 15% (Untuk Marketplace)
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Total Untuk Mitra
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Upload Bukti Cash Out
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $persen = 0;
                                        $total = 0;
                                        $id_pemabayaran = 0;
                                        $id_user = 0;
                                    @endphp
                                    @foreach ($laporan_cashout as $cash)
                                        @php
                                            $cash_out = DB::table('cash_out')
                                                ->where('id_pembayaran', $cash->id_pembayaran)
                                                ->first();
                                        @endphp
                                        @php
                                            $persen = $cash->harga_template * 0.15;
                                            $total += $cash->harga_template - $cash->harga_template * 0.15;
                                            $id_pemabayaran = $cash->id_pembayaran;
                                            $id_user = $cash->id_user;
                                        @endphp
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>

                                            <td class="text-center">
                                                <span class="text-primary">
                                                    Cashout Sudah Selesai
                                                </span>
                                            </td>

                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $cash->name }}</h6>
                                            </td>

                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $cash->kategori_template }}</h6>
                                            </td>

                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    Rp.{{ number_format($cash->harga_template) }}
                                                </span>
                                            </td>

                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    Rp. {{ number_format($persen) }}
                                                </span>
                                            </td>

                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    Rp.
                                                    {{ number_format($cash->harga_template - $cash->harga_template * 0.15) }}
                                                    {{-- Rp. {{ number_format($cash->total_cashout) }} --}}
                                                </span>
                                            </td>

                                            <td class="text-center">
                                                <a target="_blank" href="{{ asset("cash_out/$cash_out->bukti_cashout") }}"
                                                    class="btn btn-primary">Lihat
                                                    Bukti Bayar</a>
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
