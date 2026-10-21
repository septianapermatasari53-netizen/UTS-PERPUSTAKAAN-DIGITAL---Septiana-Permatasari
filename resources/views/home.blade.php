@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center">
    <div class="container-fluid py-4">
        <h1 class="display-5 fw-bold text-primary">Welcome To</h1>
        <h2 class="fw-bold mb-3">Sistem Perpustakaan Digital</h2>
        <p class="col-md-8 fs-5 mx-auto text-muted">
            Selamat datang di aplikasi Perpustakaan Digital. Temukan berbagai koleksi buku pemrograman, teknologi, dan ilmu komputer secara mudah dan cepat.
        </p>
        <hr class="my-4">
        <p class="small text-secondary">NIM: 251011700010 | Prodi Sistem Informasi | Septiana Permatasari</p>
        <a href="{{ route('books.index') }}" class="btn btn-primary btn-lg mt-2">Lihat Katalog Buku &raquo;</a>
    </div>
</div>
@endsection