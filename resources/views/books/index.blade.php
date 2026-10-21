@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold text-dark mb-1">Katalog Buku</h2>
        <p class="text-muted small mb-0">Menampilkan daftar buku perpustakaan digital</p>
    </div>
</div>

<div class="row">
    @forelse($books as $book)
    <div class="col-md-4 col-lg-2-4 mb-4"> <!-- Menyesuaikan grid kartu -->
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}" style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column p-3">
                <h6 class="card-title fw-bold text-truncate" title="{{ $book->title }}">{{ $book->title }}</h6>
                <p class="card-text text-muted mb-1 small text-truncate">Penulis: {{ $book->author }}</p>
                <p class="card-text text-muted mb-3 small">Kategori: {{ $book->category }}</p>
                <a href="{{ route('book.show', $book->id) }}" class="btn btn-primary btn-sm mt-auto w-100">Detail Buku</a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 text-center py-5">
        <p class="text-danger">Belum ada data buku di database.</p>
    </div>
    @endforelse
</div>

<!-- Tombol Pagination (Halaman 1, 2, dst) -->
<div class="d-flex justify-content-center mt-4">
    {{ $books->links('pagination::bootstrap-5') }}
</div>
@endsection