@extends('layouts.admin')
@section('title', 'Template File')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Template File</h6>
                        <a href="{{ route('template.index') }}" class="btn btn bg-gradient-danger">
                            <i class="bi bi-arrow-90deg-left" style="color: white;"></i>
                        </a>

                        <a href=" {{ route('file_template.create', $id_template) }}" class="btn btn bg-gradient-warning">
                            <i class="bi bi-plus-lg" style="color: white;"></i>
                        </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        </a>
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
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar Icon</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar Template</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            File</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $id = 0;
                                    @endphp
                                    @forelse ($TemplateIndex as $template)
                                        @php
                                            $id = $template->id_file_template;
                                        @endphp
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="text-xs font-weight-bold mb-0">
                                                            {{ $loop->iteration }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            {{ $template->kategori }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <img src='{{ asset("gambar/icon_template/$template->icon") }}'
                                                        width="100" alt="Icon Template">
                                                </p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <img src='{{ asset("gambar/gambar_template/$template->gambar_template") }}'
                                                        width="100" alt="Gambar Template">
                                                </p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <iframe src='{{ asset("file/file_template/$template->file") }}'
                                                        title="W3Schools Free Online Web Tutorials">
                                                    </iframe>
                                                </p>
                                            </td>


                                            <td class="align-middle text-center">
                                                <span class="badge badge bg-gradient-success">
                                                    <a
                                                        href="{{ route('file_template.edit', $template->id_file_template) }}">
                                                        <i class="bi bi-pencil"
                                                            style="font-size: 1.5rem; color:white"></i>
                                                    </a>
                                                </span>

                                                <form method="POST" id="formHeroDelete">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="button"
                                                        onclick="hapusFile('{{ $template->id_file_template }}')"
                                                        class="
                                                        badge badge-sm bg-gradient-danger mt-2">
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
                        {!! $TemplateIndex->links() !!}
                    </ul>
                </nav>

            </div>
        </div>

    </div>
@endsection

@push('script')
    <script>
        function hapusFile(id) {
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
                    axios.delete("{{ route('file_template.destroy', $id) }}")
                        .then(function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Deleted!',
                                    response.data.success,
                                    'success'
                                ).then(function() {
                                    window.location.href = "{{ route('file_template.show', $id) }}"
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
