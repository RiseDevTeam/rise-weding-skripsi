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

                                        {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Total Untuk Mitra
                                        </th> --}}

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
                                                        class="img-fluid mx-auto" alt="" width="100rem" />
                                                </td>

                                                <td class="text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">Rp.{{ number_format($cash->total) }}</span>
                                                </td>

                                                {{-- <td class="text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">Rp.
                                                        {{ number_format($cash->total - $cash->total * 0.15) }}</span>
                                                </td> --}}

                                                <input type="hidden" name="id_cashout_sementara[]"
                                                    value="{{ $cash->id_cash_out_sementara }}">
                                                <input type="hidden" name="id_pembayaran[]"
                                                    value="{{ $cash->id_pembayaran }}">
                                                <input type="hidden" name="id_user" value="{{ $cash->id_user }}">

                                            </tr>
                                        @endforeach
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td colspan="5">
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        @php
                                            $total_cash_out = DB::table('cash_out')
                                                ->where('id_cashout_sementara', $cash->id_cash_out_sementara)
                                                // ->select('total')
                                                ->select(DB::raw('SUM(total) as total_akhir'))
                                                ->first();
                                        @endphp
                                        <td colspan="4"> Total Cash : </td>
                                        <td colspan="5">
                                            @if (isset($total_cash_out))
                                                Rp. {{ number_format($total - $total_cash_out->total_akhir) }}
                                            @else
                                                Rp. {{ number_format($total) }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"> Cash : </td>
                                        <td>
                                            <input type="text" class="form-control" id="harga" name="total_cashout"
                                                required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="mt-5"></td>
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

    <script>
        // scipt untuk harga rupiah
        var rupiah = document.getElementById('harga');
        rupiah.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat ketik nominal di form kolom input
            // gunakan fungsi formatRupiah() untuk mengubah nominal angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        });
        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka satuan ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
        // ! scipt untuk harga rupiah !


        let formHero = document.getElementById('form-kategori');
        formHero.addEventListener('submit', function(e) {
            e.preventDefault()

            let kategori = document.getElementById('kategori');

            axios.post("{{ route('kategori.store') }}", {
                    kategori: kategori.value,
                    harga: rupiah.value,
                }).then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            if (dataError.kategori) {
                                let headerKategori = document.getElementById('validationKategori')
                                kategori.classList.add("is-invalid")
                                headerKategori.innerText = dataError.kategori[0]
                                headerKategori.style.display = "block"
                            }

                            if (dataError.harga) {
                                let headerHarga = document.getElementById('validationHarga')
                                harga.classList.add("is-invalid")
                                headerHarga.innerText = dataError.harga[0]
                                headerHarga.style.display = "block"
                            }

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('kategori.index') }}"
                            })
                        }
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        })
    </script>
@endsection
