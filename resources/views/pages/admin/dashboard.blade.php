@extends('layouts.admin')
@section('content')
<h3 class="text-dark mb-5">Selamat Datang Kembali, {{ Auth::user()->name }}</h3>
<div class="row">
    <div class="col-md-3">
        <a href="{{ route('kuis.index') }}" class="card">
            <div class="card-body">
                <i class='bx bx-brain fs-1 text-primary'></i>
                <h5 class="text-dark mt-2">{{ $quizzes }} Kuis</h5>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ route('pengguna.index') }}" class="card">
            <div class="card-body">
                <i class='bx bx-user fs-1 text-primary'></i>
                <h5 class="text-dark mt-2">{{ $users }} Pengguna</h5>
            </div>
        </a>
    </div>
</div>
@endsection