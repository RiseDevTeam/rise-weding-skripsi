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
                        Laporan Rekapitulasi
                        <div class="justify-content-end">
                            <a href="{{ route('print_laporan_rekapitulasi') }}" target="_blank"
                                class="btn btn-primary">Print</a>
                        </div>
                        <hr>

                    </div>
                    @php
                        $transaksi_cashout = DB::table('detail_pembayaran_invitation')
                            ->where('id_pembayaran', $pendapatan_mitra->id_pembayaran)
                            ->select(DB::raw('SUM(detail_pembayaran_invitation.total) as total_pembayaran'))
                            ->first();
                    @endphp
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Jumlah Mitra Terdaftar</th>
                                        <th scope="col" class="text-center">Jumlah Semua Produk </th>
                                        <th scope="col" class="text-center">Jumlah Transaksi</th>
                                        <th scope="col" class="text-center">Jumlah Transaksi Cash Out</th>
                                        <th scope="col" class="text-center">Jumlah Untuk Marketplace</th>
                                        <th scope="col" class="text-center">Jumlah Untuk Mitra</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    <tr>
                                        <td class="text-center">{{ $user }}</td>
                                        <td class="text-center">{{ $produk }}</td>
                                        <td class="text-center">
                                            Rp.{{ number_format($transaksi->total) }}</td>
                                        <td class="text-center">
                                            Rp.{{ number_format($transaksi_cashout->total_pembayaran) }}</td>
                                        <td class="text-center">
                                            Rp.{{ number_format($transaksi_cashout->total_pembayaran * 0.15) }}
                                        </td>
                                        <td class="text-center">Rp.{{ number_format($pendapatan_mitra->total_cash_out) }}
                                        </td>
                                    </tr>


                                    </tfoot>
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
