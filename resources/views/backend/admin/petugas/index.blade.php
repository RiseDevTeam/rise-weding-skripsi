@extends('layouts.admin')
@section('title', 'Petugas')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="{{ route('petugas.create') }}" class="btn btn-primary">Tambah Petugas</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataPetugas as $petugas)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{$petugas->name}}</h6>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{$petugas->email}}</span>
                                        </td>
                                        <td class="text-center">
                                            <img src="{{asset('admin/img/team-3.jpg')}}" width="200" alt="Petugas">
                                        </td>
                                        <td class="text-center">
                                            @php
                                                $id = Crypt::encrypt($petugas->id);
                                            @endphp
                                            <span class="badge badge-sm bg-gradient-success">
                                                <a href="{{ route('petugas.edit', $id) }}" class="text-white">
                                                    <i class="bi bi-pencil" style="font-size: 1.5rem"></i>
                                                </a>
                                            </span>
                                            <form method="POST" id="formHeroDelete">
                                                @method('delete')
                                                @csrf
                                                <button type="button" class="badge badge-sm bg-gradient-danger mt-2"
                                                    onclick="hapusPetugas('{{ $petugas->id}}')">
                                                    <i class="bi bi-trash" style="font-size: 1.3rem"></i>
                                                </button>
                                            </form>
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
            <nav class="app-pagination">
                <ul class="pagination justify-content-center">
                    {!! $dataPetugas->links() !!}
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        function hapusPetugas(id) {
            Swal.fire({
                title: 'Yakin akan menghapus data ini?',
                text: "Ini seperti kenangan, kamu tidak dapat mengembalikannya",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Nggak jadi deh'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete(`petugas/${id}`)
                        .then(function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Deleted!',
                                    response.data.success,
                                    'success'
                                ).then(function() {
                                    window.location.href = "{{ route('petugas.index') }}"
                                })
                            }
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                }
            })
        }
    </script>