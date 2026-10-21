@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-0 p-4">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ $book->cover_image }}" class="img-fluid rounded shadow-sm mb-3" alt="{{ $book->title }}" style="max-height: 320px; object-fit: cover; width: 100%;">
                </div>
                <div class="col-md-8">
                    <h3 class="fw-bold">{{ $book->title }}</h3>
                    <hr>
                    <p><strong>Penulis:</strong> {{ $book->author }}</p>
                    <p><strong>Penerbit:</strong> {{ $book->publisher }}</p>
                    <p><strong>Tahun Terbit:</strong> {{ $book->year }}</p>
                    <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
                    <p><strong>Kategori:</strong> <span class="badge bg-secondary">{{ $book->category }}</span></p>
                    <a href="{{ url('/') }}" class="btn btn-outline-secondary mt-3">← Kembali ke Daftar Buku</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection