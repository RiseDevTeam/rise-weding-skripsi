@extends('layouts.admin')
@section('title', 'Admin')

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
                        Laporan Rekapitulasi <br>
                        <hr>
                        <form action="{{ route('cari_rekapitulasi_tahun') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-6">
                                    <select class="form-control" name="mitra" aria-label="Default select example">
                                        @php
                                            $user = DB::table('users')
                                                ->where('status', '=', 'mitra')
                                                ->get();
                                        @endphp
                                        <option>Pilih Nasabah</option>
                                        @foreach ($user as $u)
                                            <option value="{{ $u->id }}"> {{ $u->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-6">
                                    <select class="form-control" name="tahun" aria-label="Default select example">
                                        @php
                                            date_default_timezone_set('Asia/Jakarta');
                                            $thn = date('Y');
                                            $tahun = ['2021', '2022', '2023', '2024'];
                                        @endphp
                                        <option value="{{ $thn }}">Pilih Tahun</option>
                                        @foreach ($tahun as $value_tahun)
                                            <option value="{{ $value_tahun }}"> {{ $value_tahun }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cari</button>
                            @if (isset($pilih_mitra) && isset($pilih_tahun))
                                <a href="{{ route('print_laporan_rekapitulasi_tahun', ['pilih_mitra' => $pilih_mitra, 'pilih_tahun' => $pilih_tahun]) }}"
                                    target="_blank" class="btn btn-danger">Print</a>
                            @else
                                <a href="{{ route('print_laporan_rekapitulasi') }}" target="_blank"
                                    class="btn btn-danger">Print</a>
                            @endif
                            <a href="{{ route('laporan_rekapitulasi') }}" class="btn btn-info">Reset</a>
                        </form>
                        <br>
                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Nomor</th>
                                        <th scope="col" class="text-center">Nama Mitra</th>
                                        <th scope="col" class="text-center">Jumlah Semua Produk </th>
                                        <th scope="col" class="text-center">Jumlah Transaksi</th>
                                        <th scope="col" class="text-center">Jumlah Untuk Marketplace</th>
                                        <th scope="col" class="text-center">Jumlah Untuk Mitra</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($menampilkanUser as $userMitra)
                                        @php
                                            if (condition) {
                                                # code...
                                            }
                                            $produk = DB::table('template_invitation')
                                                ->where('template_invitation.id_user', '=', $userMitra->id)
                                                ->select('id_template as template')
                                                ->count();
                                            
                                            $pendapatan_mitra = DB::table('cash_out')
                                                ->leftjoin('pembayaran_invitation', 'cash_out.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
                                                ->leftjoin('detail_pembayaran_invitation', 'pembayaran_invitation.id_pembayaran', '=', 'detail_pembayaran_invitation.id_pembayaran')
                                                // ->whereYear('pembayaran_invitation.tanggal_pembayaran', '=', $pilih_tahun)
                                                ->where('cash_out.id_user', '=', $userMitra->id)
                                                ->select(DB::raw('SUM(cash_out.total) as total_cash_out'), DB::raw('SUM(detail_pembayaran_invitation.total) as total_pembayaran'), 'pembayaran_invitation.tanggal_pembayaran')
                                                ->first();
                                        @endphp
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $userMitra->name }}</td>
                                            <td class="text-center">{{ $produk }}</td>
                                            <td class="text-center">
                                                Rp.{{ number_format($pendapatan_mitra->total_pembayaran) }}
                                            </td>
                                            <td class="text-center">
                                                Rp.{{ number_format($pendapatan_mitra->total_pembayaran * 0.15) }}
                                            </td>
                                            <td class="text-center">
                                                Rp.{{ number_format($pendapatan_mitra->total_cash_out) }}
                                            </td>
                                        </tr>
                                    @empty
                                        {{ 'Data Kosong' }}
                                    @endforelse


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
