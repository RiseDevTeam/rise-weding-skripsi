@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                @if (session('cash_out_admin'))
                    <div class="alert alert-warning">
                        <center>
                            {{ session('cash_out_admin') }}
                        </center>
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        Konfirmasi Cash Out
                        <hr>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            @php
                                
                            @endphp
                            @foreach ($cashOutAdmin as $cash)
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="{{ route('detail_cashout_admin', $cash->id_user) }}">{{ $cash->name }}
                                        </a>
                                        <span
                                            class="badge bg-primary rounded-pill justify-content-end">{{ $pending }}</span>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <nav class="app-pagination">
                    <ul class="pagination justify-content-center">
                        {{-- {!! $dataPetugas->links() !!} --}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
