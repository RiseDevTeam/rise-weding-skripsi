@extends('layouts.admin')
@section('title', 'Sub Kategori')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Sub Kategori</h6>
                        <a href="{{ route('sub_kategori.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nomor</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nama Kategori</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Keterangan Kategori</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Icon Kategori</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($sub_kategori as $sub)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $sub->kategori }}</p>
                                            </td>

                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $sub->keterangan }}</p>
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <img src='{{ asset("gambar/icon_template/$sub->icon") }}' width="100"
                                                        alt="Icon Template">
                                                </p>
                                            </td>

                                            <td class="align-middle text-center">
                                                <span class="badge badge bg-gradient-success"><a
                                                        href="{{ route('sub_kategori.edit', $sub->id_sub_kategori) }}"
                                                        class="text-white"><i class="bi bi-pencil"
                                                            style="font-size: 1.5rem"></i></a></span>
                                                <form method="POST" id="formHeroDelete">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="button" class="badge badge-sm bg-gradient-danger mt-2"
                                                        onclick="hapusSubKategori('{{ $sub->id_sub_kategori }}')"><i
                                                            class="bi bi-trash" style="font-size: 1.3rem"></i></a>
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
                        {!! $sub_kategori->links() !!}
                    </ul>
                </nav>

            </div>
        </div>

    </div>
@endsection

@push('script')
    <script>
        function hapusSubKategori(id) {
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
                    axios.delete(`sub_kategori/${id}`)
                        .then(function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Deleted!',
                                    response.data.success,
                                    'success'
                                ).then(function() {
                                    window.location.href = "{{ route('sub_kategori.index') }}"
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
