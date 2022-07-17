@extends('layouts.admin')
@section('title', 'Mitra')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                @if (session('cash_out'))
                    <div class="alert alert-warning">
                        <center>
                            {{ session('cash_out') }}
                        </center>
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        Cash Out Mitra
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
                                            Kategori Template
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar Template
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
                                    <form action="{{ route('proses_cash_out') }}" method="POST">
                                        @php
                                            $persen = 0;
                                            $total = 0;
                                            $id_pemabayaran = 0;
                                            $id_user = 0;
                                        @endphp
                                        @foreach ($cashOut as $cash)
                                            @php
                                                $persen += $cash->total * 0.15;
                                                $total += $cash->total - $cash->total * 0.15;
                                                $id_pembayaran = $cash->id_pembayaran;
                                            @endphp
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>

                                                <td class="text-center">
                                                    <h6 class="mb-0 text-sm">{{ $cash->kategori_template }}</h6>
                                                </td>

                                                <td class="text-center">
                                                    <img src='{{ asset("gambar/gambar_cover_template/$cash->gambar_cover") }}'
                                                        class="img-fluid mx-auto" alt="" />
                                                </td>

                                                <td class="text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">Rp.{{ number_format($cash->total) }}</span>
                                                </td>

                                                <td class="text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">Rp.
                                                        {{ number_format($persen) }}</span>
                                                </td>

                                                <td class="text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">Rp.
                                                        {{ number_format($cash->total - $cash->total * 0.15) }}</span>
                                                </td>

                                                <input type="hidden" name="total_cashout[]"
                                                    value="{{ $cash->total - $cash->total * 0.15 }}">
                                                <input type="hidden" name="id_pembayaran[]"
                                                    value="{{ $cash->id_pembayaran }}">
                                                <input type="hidden" name="id_user" value="{{ $cash->id_user }}">

                                            </tr>
                                        @endforeach
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td colspan="6">
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td colspan="5"> Total Cash Out Mitra : </td>
                                        <td colspan="5"> Rp. {{ number_format($total) }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="mt-5"></td>
                                        <td colspan="5">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Cash Out
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Masukan Nomor
                                                                Rekening Kamu
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>

                                                        @csrf
                                                        <div class="modal-body">

                                                            @php
                                                                $bank = DB::table('bank_mitra')
                                                                    ->where('id_user', Auth::User()->id)
                                                                    ->first();
                                                            @endphp
                                                            @if ($bank != null)
                                                                <label class="mt-2">Nama Bank</label>
                                                                <input type="text" value="{{ $bank->nama_bank }}"
                                                                    name="nama_bank" class="form-control">

                                                                <label class="mt-2">Atas Nama</label>
                                                                <input type="text" value="{{ $bank->atas_nama }}"
                                                                    name="atas_nama" class="form-control">

                                                                <label class="mt-2">Nomor Rekening</label>
                                                                <input type="text" value="{{ $bank->nomor_rekening }}"
                                                                    name="nomor_rekening" class="form-control">
                                                            @else
                                                                <label class="mt-2">Nama Bank</label>
                                                                <input type="text" name="nama_bank" class="form-control">

                                                                <label class="mt-2">Atas Nama</label>
                                                                <input type="text" name="atas_nama" class="form-control">

                                                                <label class="mt-2">Nomor Rekening</label>
                                                                <input type="text" name="nomor_rekening"
                                                                    class="form-control">
                                                            @endif
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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
