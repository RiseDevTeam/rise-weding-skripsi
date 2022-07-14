@extends('layouts.admin')
@section('title', 'Petugas')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah Petugas</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">

                            <form method="POST" id="form-petugas">
                                @csrf
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                    <input class="form-control" id="nama" type="text" placeholder="Nama Lengkap">
                                    <div id="validationNama" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email">
                                    <div id="validationEmail" class="invalid-feedback"></div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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
        let formHero = document.getElementById('form-petugas');
        formHero.addEventListener('submit', function(e) {
            e.preventDefault()

            let nama = document.getElementById('nama');
            let email = document.getElementById('email');

            axios.post("{{ route('petugas.store') }}", {
                    nama: nama.value,
                    email: email.value,
                }).then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            if (dataError.nama) {
                                let headerNama = document.getElementById('validationNama')
                                nama.classList.add("is-invalid")
                                headerNama.innerText = dataError.nama[0]
                                headerNama.style.display = "block"
                            }

                            if (dataError.email) {
                                let headerEmail = document.getElementById('validationEmail')
                                email.classList.add("is-invalid")
                                headerEmail.innerText = dataError.email[0]
                                headerEmail.style.display = "block"
                            }

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('petugas.index') }}"
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
