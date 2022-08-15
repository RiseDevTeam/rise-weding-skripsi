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
                        <a href="{{ route('cashout_admin') }}" class="btn btn-danger">KEMBALI</a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Konfirmasi
                        </button>
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
                                            Bukti Cash Out
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
                                    @foreach ($DetailcashOutAdmin as $cash)
                                        @php
                                            $cash_out = DB::table('cash_out')
                                                ->where('id_pembayaran', $cash->id_pembayaran)
                                                ->first();
                                        @endphp
                                        @if ($cash->status == 'pending')
                                            @php
                                                $persen = $cash->total * 0.15;
                                                $total += $cash->total - $cash->total * 0.15;
                                                $id_pemabayaran = $cash->id_pembayaran;
                                                $id_user = $cash->id_user;
                                            @endphp
                                        @endif
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>

                                            <td class="text-center">
                                                @if ($cash_out->status == 'pending')
                                                    {{ $cash_out->status }}
                                                @else
                                                    <span class="text-primary">
                                                        Cashout Sudah Selesai
                                                    </span>
                                                @endif

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Upload Bukti
                                                                    Transfer
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form
                                                                action="{{ route('konfirmasi_cash_out_admin', $cash->id_user) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <label class="text-primary">Nama
                                                                        Bank</label>
                                                                    <p>
                                                                        <span
                                                                            class="text-bold">{{ $cash->nama_bank }}</span>
                                                                        <hr>
                                                                    <p>
                                                                        <label class="text-primary" for="">Atas
                                                                            Nama</label>
                                                                    <p>
                                                                        <span
                                                                            class="text-bold">{{ $cash->atas_nama }}</span>
                                                                        <hr>
                                                                    <p>

                                                                        <label class="text-primary" for="">Nomor
                                                                            Rekening</label>
                                                                    <p>
                                                                        <span
                                                                            class="text-bold">{{ $cash->nomor_rekening }}</span>
                                                                        <hr>
                                                                    <p>

                                                                        <label class="text-primary" class="mt-2">Upload
                                                                            Bukti Transfer</label>
                                                                        <input type="file" name="bukti_cashout"
                                                                            class="form-control">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $cash->name }}</h6>
                                            </td>

                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $cash->kategori_template }}</h6>
                                            </td>

                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    @if ($cash->status == 'pending')
                                                        Rp.{{ number_format($cash->total) }}
                                                    @else
                                                        Rp.{{ '0' }}
                                                    @endif
                                                </span>
                                            </td>

                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    @if ($cash->status == 'pending')
                                                        Rp. {{ number_format($persen) }}
                                                    @else
                                                        Rp.{{ '0' }}
                                                    @endif
                                                </span>
                                            </td>

                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    @if ($cash->status == 'pending')
                                                        Rp. {{ number_format($cash->total - $cash->total * 0.15) }}
                                                    @else
                                                        Rp. {{ '0' }}
                                                    @endif
                                                </span>
                                            </td>

                                            <td class="text-center">
                                                @if ($cash_out->bukti_cashout)
                                                    <a target="_blank"
                                                        href="{{ asset("cash_out/$cash_out->bukti_cashout") }}"
                                                        class="btn btn-primary">Lihat
                                                        Bukti Bayar</a>
                                                @else
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                                <tr class="text-center text-danger">
                                    <td colspan="6">Total </td>

                                    <td>
                                        Rp.{{ number_format($total) }}
                                    </td>
                                </tr>
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
