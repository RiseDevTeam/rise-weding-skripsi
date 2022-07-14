@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Edit Kategori</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">

                            <form method="POST" id="form-kategori">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kategori</label>
                                    <select class="form-control" id="kategori" aria-label="Default select example"
                                        required>
                                        <option value="{{ $edit->kategori }}">{{ $edit->kategori }}</option>
                                        <option value="Basic">Basic</option>
                                        <option value="Premium">Premium</option>
                                    </select>


                                    <div id="validationKategori" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Harga</label>
                                    <input class="form-control" id="harga" type="text" value="{{ $edit->harga }}"
                                        placeholder="Harga">
                                    <div id="validationHarga" class="invalid-feedback"></div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('kategori.index') }}" class="btn btn-danger">Back</a>
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
        let formKategori = document.getElementById('form-kategori');
        formKategori.addEventListener('submit', function(e) {
            e.preventDefault()

            let kategori = document.getElementById('kategori');

            axios.put("{{ route('kategori.update', $edit->id_kategori_template) }}", {
                    kategori: kategori.value,
                    harga: harga.value,
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

                            if (dataError.harga) {
                                let headerHarga = document.getElementById('validationHarga')
                                kategori.classList.add("is-invalid")
                                headerHarga.innerText = dataError.harga[0]
                                headerHarga.style.display = "block"
                            }

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('kategori.index') }}"
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
