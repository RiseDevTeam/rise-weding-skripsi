@extends('layouts.admin')
@section('title', 'Template Invitation')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah Template Invitation</h6>
                        <br>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">

                            <form method="POST" id="formTemplate-invitation">
                                @csrf

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Link Hosting Template</label>
                                    <input class="form-control" id="linkHosting" type="text"
                                        placeholder="Inputkan Link Hosting">
                                    <div id="validationLink" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="gambar" class="form-label">Ketegori Template</label>
                                    <select class="form-control" id="idKategori" aria-label="Default select example">
                                        <option value="">Pilih Kategori Template</option>
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id_kategori_template }}">
                                                {{ $kategori->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div id="validationKategori" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Gambar Cover Template</label>
                                    <input class="form-control" id="gambarTemplate" type="file" onchange="gambarSlide();">
                                    <div id="validationGambar" class="invalid-feedback"></div>
                                </div>


                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar Cover Template</label>
                                    <br>
                                    <img id="slide-image" class="my-3" width="300"
                                        src="{{ asset('gambar/default_image.png') }}" />
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('template.index') }}" class="btn btn-danger">Back</a>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <!--Initializing a wizard with no configuration -->
    {{-- <script>
        new Wizard("#basicwizard", {
            progress: true
        });
    </script> --}}

    <script>
        // untuk menampilkan gambar ketika upload gambar
        function gambarSlide() {
            document.getElementById("slide-image").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("gambarTemplate").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("slide-image").src = oFREvent.target.result;
            };
        };

        let formTemplate = document.getElementById('formTemplate-invitation');
        formTemplate.addEventListener('submit', function(e) {
            e.preventDefault()

            let idKategori = document.getElementById('idKategori');
            let linkHosting = document.getElementById('linkHosting');
            let gambarTemplate = document.getElementById('gambarTemplate');

            const formData = new FormData()
            formData.append("idKategori", idKategori.value)
            formData.append("linkHosting", linkHosting.value)
            formData.append("gambarTemplate", gambarTemplate.files[0])

            axios.post("{{ route('template.store') }}", formData)
                .then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            if (dataError.linkHosting) {
                                let validationLink = document.getElementById('validationLink')
                                linkHosting.classList.add("is-invalid")
                                validationLink.innerText = dataError.linkHosting[0]
                                validationLink.style.display = "block"
                            }

                            if (dataError.idKategori) {
                                let validationKategori = document.getElementById('validationKategori')
                                idKategori.classList.add("is-invalid")
                                validationKategori.innerText = dataError.idKategori[0]
                                validationKategori.style.display = "block"
                            }

                            if (dataError.gambarTemplate) {
                                let validasiGambar = document.getElementById('validationGambar')
                                gambarTemplate.classList.add("is-invalid")
                                validasiGambar.innerText = dataError.gambarTemplate[0]
                                validasiGambar.style.display = "block"
                            }

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('template.index') }}"
                            })
                        }
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        })
    </script>
@endpush
