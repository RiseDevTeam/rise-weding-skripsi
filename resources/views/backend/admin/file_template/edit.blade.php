@extends('layouts.admin')
@section('title', 'File Template')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah File Template</h6>
                        <br>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">
                            <form method="POST" id="formTemplate-invitation">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="gambar" class="form-label">Keterangan Template Icon</label>
                                    <select class="form-control" id="idSubKategori" onchange="kategoriTemplate(this.value)"
                                        aria-label="Default select example">
                                        <option value="{{ $edit->id_sub_kategori }}">{{ $edit->keterangan }}</option>
                                        @foreach ($templateKategori as $kategori)
                                            <option value="{{ $kategori->id_sub_kategori }}">
                                                {{ $kategori->keterangan }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div id="validationKategori" class="invalid-feedback"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Icon Template</label>
                                    <br>
                                    @if ($edit->icon)
                                        <img id="slide-image" class="my-3" width="300"
                                            src="{{ asset("gambar/icon_template/$edit->icon") }}" />
                                    @else
                                        <img id="slide-image" class="my-3" width="300"
                                            src="{{ asset('gambar/default_image.png') }}" />
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Upload File Template</label>
                                    <input class="form-control" id="fileTemplate" value="{{ $edit->file }}" type="file">
                                    <div id="validationFile" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Upload Gambar
                                        Template</label>
                                    <input class="form-control" id="gambarTemplate" value="{{ $edit->file }}"
                                        type="file" onchange="gambarSlide();">
                                    <div id="validationGambar" class="invalid-feedback"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar Template</label>
                                    <br>
                                    @if ($edit->gambar_template)
                                        <img id="slideGambar" class="my-3" width="300"
                                            src="{{ asset("gambar/gambar_template/$edit->gambar_template") }}" />
                                    @else
                                        <img id="slideGambar" class="my-3" width="300"
                                            src="{{ asset('gambar/default_image.png') }}" />
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('file_template.show', $edit->id_template) }}"
                                    class="btn btn-danger">Back</a>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        // untuk menampilkan gambar ketika upload gambar
        function gambarSlide() {
            document.getElementById("slideGambar").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("gambarTemplate").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("slideGambar").src = oFREvent.target.result;
            };
        };
        // Proses Edit Data
        let formTemplate = document.getElementById('formTemplate-invitation');
        formTemplate.addEventListener('submit', function(e) {
            e.preventDefault()

            let idSubKategori = document.getElementById('idSubKategori');
            let fileTemplate = document.getElementById('fileTemplate');
            let gambarTemplate = document.getElementById('gambarTemplate');

            const formData = new FormData()
            formData.append("idSubKategori", idSubKategori.value)
            formData.append("fileTemplate", fileTemplate.files[0])
            formData.append("gambarTemplate", gambarTemplate.files[0])
            formData.append("_method", "put");

            axios.post("{{ route('file_template.update', $edit->id_file_template) }}", formData)
                .then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: data.success,
                            showConfirmButton: false,
                            timer: 1000
                        }).then(function() {
                            window.location.href =
                                "{{ route('file_template.show', $edit->id_template) }}"
                        })
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        })
    </script>

    <script>
        // untuk menampilkan gambar icon ketika di pilih keterangan icon
        function kategoriTemplate() {
            axios.post("{{ route('kategori_template') }}", {
                idSubKategori: idSubKategori.value,
            }).then(function(response) {
                const icon = response.data
                console.log(icon);

                document.getElementById('slide-image').src = `{{ asset('gambar/icon_template/') }}/` + icon.icon;
            })
        }
    </script>
@endpush
