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
                        <h2>Laporan Cash Out Mitra</h2>
                        @if (isset($bulan_cashout))
                            @if ($bulan_cashout == '1')
                                <span>Bulan : {{ 'January' }} </span>
                            @elseif($bulan_cashout == '2')
                                <span>Bulan : {{ 'February' }} </span>
                            @elseif($bulan_cashout == '3')
                                <span>Bulan : {{ 'Maret' }} </span>
                            @elseif($bulan_cashout == '4')
                                <span>Bulan : {{ 'April' }} </span>
                            @elseif($bulan_cashout == '5')
                                <span>Bulan : {{ 'Mei' }} </span>
                            @elseif($bulan_cashout == '6')
                                <span>Bulan : {{ 'Juni' }} </span>
                            @elseif($bulan_cashout == '7')
                                <span>Bulan : {{ 'Juli' }} </span>
                            @elseif($bulan_cashout == '8')
                                <span>Bulan : {{ 'Agustus' }} </span>
                            @elseif($bulan_cashout == '9')
                                <span>Bulan : {{ 'September' }} </span>
                            @elseif($bulan_cashout == '10')
                                <span>Bulan : {{ 'October' }} </span>
                            @elseif($bulan_cashout == '11')
                                <span>Bulan : {{ 'November' }} </span>
                            @elseif($bulan_cashout == '12')
                                <span>Bulan : {{ 'Desember' }} </span>
                            @endif
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


    <div class="card mb-4">
        <div class="card-body px-0 pt-0 pb-2">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Nomor</th>

                        <th class="text-center  text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>

                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Nama Mitra
                        </th>

                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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

                    </tr>
                </thead>
                <tbody>
                    @php
                        $persen = 0;
                        $total = 0;
                        $id_pemabayaran = 0;
                        $id_user = 0;
                    @endphp
                    @foreach ($cetak_cashout_mitra as $cash)
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

                        </tr>
                    @endforeach
                </tbody>
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
