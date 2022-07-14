@extends('layouts.admin')
@section('title', 'Sub Kategori')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah Kategori</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">

                            <form method="POST" id="form-subKategori" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <select class="form-control" id="kategori" aria-label="Default select example"
                                        required>
                                        <option value="{{ $data->id_kategori_template }}">{{ $data->kategori }}
                                        </option>
                                        @foreach ($kategori_template as $kategori)
                                            <option value="{{ $kategori->id_kategori_template }}">
                                                {{ $kategori->kategori }}</option>
                                        @endforeach
                                    </select>
                                    <div id="validationKategori" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="gambar" class="form-label">Keterangan Icon</label>
                                    <input type="text" class="form-control" id="keterangan"
                                        value="{{ $edit->keterangan }}" placeholder="keterangan Icon">
                                    <div id="validationKeterangan" class="invalid-feedback"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" onchange="gambarSlide();">
                                    <div id="validationGambar" class="invalid-feedback"></div>

                                    @if ($edit->icon)
                                        <img id="slide-gambar" class="my-3" width="300"
                                            src='{{ asset("gambar/icon_template/$edit->icon") }}' />
                                    @else
                                        <img id="slide-gambar" class="my-3" width="300"
                                            src='{{ asset('gambar/default_image.png') }}' />
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('sub_kategori.index') }}" class="btn btn-danger">Back</a>
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
        function gambarSlide() {
            document.getElementById("slide-gambar").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("gambar").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("slide-gambar").src = oFREvent.target.result;
            };
        };

        let subKategori = document.getElementById('form-subKategori');
        subKategori.addEventListener('submit', function(e) {
            e.preventDefault()

            let kategori = document.getElementById('kategori');
            let gambar = document.getElementById('gambar');
            let keterangan = document.getElementById('keterangan');

            const formData = new FormData()
            formData.append("kategori", kategori.value)
            formData.append("keterangan", keterangan.value)
            formData.append("gambar", gambar.files[0])
            formData.append("_method", "put");

            axios.post("{{ route('sub_kategori.update', $edit->id_sub_kategori) }}", formData)
                .then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('sub_kategori.index') }}"
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
