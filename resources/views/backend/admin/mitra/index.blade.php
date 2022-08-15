@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        Mitra
                        <hr>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Validasi
                                        </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama
                                        </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nomor KTP
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nomor Telepon
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Alamat
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto
                                            Dengan KTP
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($mitra as $m)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">
                                                    @if ($m->status_mitra == 'pending')
                                                        <form action="{{ route('validasi_mitra', $m->id_user) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button class="btn btn-primary" type="submit">Validasi</button>
                                                        </form>
                                                    @else
                                                        <div class="text text-warning" role="alert">
                                                            {{ strtoupper($m->status_mitra) }}
                                                        </div>
                                                    @endif
                                                </h6>
                                            </td>
                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $m->name }}</h6>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $m->email }}</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $m->nomor_ktp }}
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $m->nomor_telepon }}
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $m->alamat }}
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <img src="{{ url('mitra', $m->foto) }}" width="200" alt="Mitra">
                                            </td>
                                            <td class="text-center">
                                                <img src="{{ url('mitra', $m->foto_ktp) }}" width="200" alt="Mitra">
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Data Masih Kosong</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <nav class="app-pagination">
                    <ul class="pagination justify-content-center">
                        {!! $mitra->links() !!}
                    </ul>
                </nav> --}}
            </div>
        </div>
    </div>
@endsection
