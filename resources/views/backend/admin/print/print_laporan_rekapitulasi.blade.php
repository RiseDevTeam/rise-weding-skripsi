<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.</title>
    <!--- include CSS --->
    @include('includes.backend.css')
    <!--- include CSS --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
@include('includes.backend.script')

<body onload="print();">

    <center>
        <table width="70%">
            <tr>
                <td align="center">
                    <br>
                    <b>
                        <h2>Laporan Rekapitulasi</h2>
                        @if (isset($pilih_tahun))
                            <span>Nama Mitra : {{ $namaMitra->name }} / Tahun : {{ $pilih_tahun }}</span>
                        @endif
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr style="border: 2px solid black;">
                </td>
            </tr>
        </table>
    </center>

    <div class="card-body px-0 pt-0 pb-2">
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
                        $produk = DB::table('template_invitation')
                            ->where('template_invitation.id_user', '=', $userMitra->id)
                            ->select('id_template as template')
                            ->count();
                        if (isset($pilih_tahun)) {
                            $pendapatan_mitra = DB::table('cash_out')
                                ->leftjoin('pembayaran_invitation', 'cash_out.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
                                ->leftjoin('detail_pembayaran_invitation', 'pembayaran_invitation.id_pembayaran', '=', 'detail_pembayaran_invitation.id_pembayaran')
                                ->where('cash_out.id_user', '=', $userMitra->id)
                                ->whereYear('pembayaran_invitation.tanggal_pembayaran', '=', $pilih_tahun)
                                ->select(DB::raw('SUM(cash_out.total) as total_cash_out'), DB::raw('SUM(detail_pembayaran_invitation.total) as total_pembayaran'), 'pembayaran_invitation.tanggal_pembayaran')
                                ->first();
                        } else {
                            $pendapatan_mitra = DB::table('cash_out')
                                ->leftjoin('pembayaran_invitation', 'cash_out.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
                                ->leftjoin('detail_pembayaran_invitation', 'pembayaran_invitation.id_pembayaran', '=', 'detail_pembayaran_invitation.id_pembayaran')
                                ->where('cash_out.id_user', '=', $userMitra->id)
                                ->select(DB::raw('SUM(cash_out.total) as total_cash_out'), DB::raw('SUM(detail_pembayaran_invitation.total) as total_pembayaran'), 'pembayaran_invitation.tanggal_pembayaran')
                                ->first();
                        }
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
    @php
        $tgl = date('d-m-Y');
    @endphp

    {{-- </section> --}}
    <div class="d-flex justify-content-end">
        Padang, {{ $tgl }}
        <br> Hormat Kami
        <br> <br><br><br><br>
        Rise Development
    </div>


</body>

</html>
