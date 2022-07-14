@extends('layouts.admin')
@section('title', 'Template Invitation')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Template Invitation</h6>
                        <a href="{{ route('template.create') }}" class="btn btn-primary">
                            Tambah Template
                        </a>
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
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar Cover Template</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Link Hosting</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            File Template</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($FileTemplate->file_template == '0')
                                        <script>
                                            alert("Jagan Lupa Isi File Template nyaa yaaaaa")
                                        </script>
                                    @endif
                                    @forelse ($TemplateInvitation as $template)
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
                                                    <img src='{{ asset("gambar/gambar_cover_template/$template->gambar_cover") }}'
                                                        width="100" alt="Icon Template">
                                                </p>
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <a href="{{ $template->link_hosting }}"
                                                        target="_blank">{{ $template->link_hosting }}</a>
                                                </p>
                                            </td>

                                            <td class="text-center">
                                                <span class="badge badge bg-gradient-warning"><a
                                                        href="{{ route('file_template.show', $template->id_template) }}"
                                                        class="text-white"><i class="bi bi-file-earmark-code"
                                                            style="font-size: 1.5rem"></i></a></span>
                                            </td>


                                            <td class="align-middle text-center">
                                                <span class="badge badge bg-gradient-success"><a
                                                        href="{{ route('template.edit', $template->id_template) }}"
                                                        class="text-white"><i class="bi bi-pencil"
                                                            style="font-size: 1.5rem"></i></a></span>

                                                <form method="POST" id="formHeroDelete">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="button" class="badge badge-sm bg-gradient-danger mt-2"
                                                        onclick="hapusTemplate('{{ $template->id_template }}')"><i
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
                        {{-- {!! $TemplateInvitation->links() !!} --}}
                    </ul>
                </nav>

            </div>
        </div>

    </div>
@endsection

@push('script')
    <script>
        function hapusTemplate(id) {
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
                    axios.delete(`template/${id}`)
                        .then(function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Deleted!',
                                    response.data.success,
                                    'success'
                                ).then(function() {
                                    window.location.href = "{{ route('template.index') }}"
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
