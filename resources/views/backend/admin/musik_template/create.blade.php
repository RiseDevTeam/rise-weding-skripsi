@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah Musik</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">

                            <form method="POST" id="form-musik">
                                @csrf

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Judul Musik</label>
                                    <input class="form-control" id="judul_musik" type="text" placeholder="Judul Musik">
                                    <div id="validationJudulMusik" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Musik</label>
                                    <input class="form-control" id="musik" type="file" placeholder="Musik">
                                    <div id="validationMusik" class="invalid-feedback"></div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('musik.index') }}" class="btn btn-danger">Back</a>
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
        let formMusik = document.getElementById('form-musik');
        formMusik.addEventListener('submit', function(e) {
            e.preventDefault()

            let Judulmusik = document.getElementById('judul_musik');
            let musik = document.getElementById('musik');

            const formData = new FormData()
            formData.append("Judulmusik", Judulmusik.value)
            formData.append("musik", musik.files[0])

            axios.post("{{ route('musik.store') }}", formData)
                .then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            if (dataError.musik) {
                                let validationJudulMusik = document.getElementById('validationJudulMusik')
                                Judulmusik.classList.add("is-invalid")
                                validationJudulMusik.innerText = dataError.Judulmusik[0]
                                validationJudulMusik.style.display = "block"
                            }

                            if (dataError.harga) {
                                let validationMusik = document.getElementById('validationMusik')
                                musik.classList.add("is-invalid")
                                validationMusik.innerText = dataError.musik[0]
                                validationMusik.style.display = "block"
                            }

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('musik.index') }}"
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
