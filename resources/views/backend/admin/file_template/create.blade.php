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
                                <input type="hidden" value="{{ $id_template_session }}" id="idTemplate">
                                <div class="form-group">
                                    <label for="gambar" class="form-label">Keterangan Template Icon</label>
                                    <select class="form-control" id="idSubKategori" onchange="kategoriTemplate(this.value)"
                                        aria-label="Default select example">
                                        <option value="">Kategori Template</option>
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
                                    <img id="slide-image" class="my-3" width="300"
                                        src="{{ asset('gambar/default_image.png') }}" />
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Upload File Template</label>
                                    <input class="form-control" id="fileTemplate" type="file" required>
                                    <div id="validationFile" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Upload Gambar
                                        Template</label>
                                    <input class="form-control" id="gambarTemplate" type="file" onchange="gambarSlide();"
                                        required>
                                    <div id="validationGambar" class="invalid-feedback"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar Template</label>
                                    <br>
                                    <img id="slideGambar" class="my-3" width="300"
                                        src="{{ asset('gambar/default_image.png') }}" />
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('file_template.show', $id_template_session) }}"
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

        // Proses Insert Data
        let formTemplate = document.getElementById('formTemplate-invitation');
        formTemplate.addEventListener('submit', function(e) {
            e.preventDefault()

            let idTemplate = document.getElementById('idTemplate');
            let idSubKategori = document.getElementById('idSubKategori');
            let fileTemplate = document.getElementById('fileTemplate');
            let gambarTemplate = document.getElementById('gambarTemplate');

            const formData = new FormData()
            formData.append("idTemplate", idTemplate.value)
            formData.append("idSubKategori", idSubKategori.value)
            formData.append("fileTemplate", fileTemplate.files[0])
            formData.append("gambarTemplate", gambarTemplate.files[0])
            // formData.append("_method", "put");

            axios.post("{{ route('file_template.store', $id_template_session) }}", formData)
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
                                "{{ route('file_template.show', $id_template_session) }}"
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
