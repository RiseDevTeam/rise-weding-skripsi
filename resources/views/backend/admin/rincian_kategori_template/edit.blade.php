@extends('layouts.admin')
@section('title', 'Rincian Kategori Template')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah Rincian Kategori</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">

                            <form method="POST" id="form-rincian-kategori">
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
                                    <label for="example-text-input" class="form-control-label">Rincian Kategori
                                        Template</label>
                                    <textarea class="text-area" id="rincian_kategori" placeholder="Rincian Kategori Template">
                                        {!! $edit->rincian_kategori_template !!}
                                    </textarea>
                                </div>
                                <div id="validationRincianKategori" class="invalid-feedback"></div>

                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('rincian_kategori.index') }}" class="btn btn-danger">Back</a>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('.text-area'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

@push('script')
    <script>
        let formRincianKategori = document.getElementById('form-rincian-kategori');
        formRincianKategori.addEventListener('submit', function(e) {
            e.preventDefault()

            let kategori = document.getElementById('kategori');
            let rincianKategori = document.getElementById('rincian_kategori');

            axios.put("{{ route('rincian_kategori.update', $edit->id_rincian_kategori) }}", {
                    kategori: kategori.value,
                    rincianKategori: rincianKategori.value,
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

                            if (dataError.rincianKategori) {
                                let validationRincian = document.getElementById(
                                    'validationRincianKategori')
                                rincianKategori.classList.add("is-invalid")
                                validationRincian.innerText = dataError.rincianKategori[0]
                                validationRincian.style.display = "block"
                            }

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('rincian_kategori.index') }}"
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
