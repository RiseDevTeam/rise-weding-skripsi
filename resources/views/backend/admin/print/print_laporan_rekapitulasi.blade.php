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


    <div class="card mb-4">
        @php
            $transaksi_cashout = DB::table('detail_pembayaran_invitation')
                ->where('id_pembayaran', $pendapatan_mitra->id_pembayaran)
                ->select(DB::raw('SUM(detail_pembayaran_invitation.total) as total_pembayaran'))
                ->first();
        @endphp
        <div class="card-body px-0 pt-0 pb-2">
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
                        <td class="text-center">
                            Rp.{{ number_format($pendapatan_mitra->total_cash_out) }}
                        </td>
                    </tr>


                    </tfoot>
            </table>
        </div>
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
