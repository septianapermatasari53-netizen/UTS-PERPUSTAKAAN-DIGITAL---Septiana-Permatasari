<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman Web dengan Laravel',
            'author' => 'Afif Efendi',
            'publisher' => 'Unpam Press',
            'year' => 2026,
            'isbn' => '978-602-000-001',
            'category' => 'Teknologi',
            'cover_image' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?w=500',
        ]);

        Book::create([
            'title' => 'Belajar PHP dan MySQL Dasar',
            'author' => 'Tim Dosen',
            'publisher' => 'Sasmita Jaya',
            'year' => 2025,
            'isbn' => '978-602-000-002',
            'category' => 'Pemrograman',
            'cover_image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=500',
        ]);

        Book::create([
            'title' => 'Algoritma dan Pemrograman',
            'author' => 'Ahmad Dani',
            'publisher' => 'Informatika',
            'year' => 2024,
            'isbn' => '978-602-000-003',
            'category' => 'Ilmu Komputer',
            'cover_image' => 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=500',
        ]);

        Book::create([
            'title' => 'Sistem Basis Data Relasional',
            'author' => 'Siti Aminah',
            'publisher' => 'Unpam Press',
            'year' => 2025,
            'isbn' => '978-602-000-004',
            'category' => 'Database',
            'cover_image' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=500',
        ]);

        Book::create([
            'title' => 'Desain Antarmuka Web (UI/UX)',
            'author' => 'Rian Hidayat',
            'publisher' => 'Sasmita Jaya',
            'year' => 2026,
            'isbn' => '978-602-000-005',
            'category' => 'Desain',
            'cover_image' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=500',
        ]);

        Book::create([
            'title' => 'Jaringan Komputer dan Keamanan',
            'author' => 'Budi Santoso',
            'publisher' => 'Global Media',
            'year' => 2023,
            'isbn' => '978-602-000-006',
            'category' => 'Jaringan',
            'cover_image' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=500',
        ]);

        Book::create([
            'title' => 'Kecerdasan Buatan dalam Sistem Informasi',
            'author' => 'Dr. Maya Sofa',
            'publisher' => 'Erlangga',
            'year' => 2026,
            'isbn' => '978-602-000-007',
            'category' => 'AI & Machine Learning',
            'cover_image'=> 'https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?w=500',
        ]);

        Book::create([
            'title' => 'Manajemen Proyek Perangkat Lunak',
            'author' => 'Hendra Gunawan',
            'publisher' => 'Informatika',
            'year' => 2024,
            'isbn' => '978-602-000-008',
            'category' => 'Manajemen',
            'cover_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=500',
        ]);

        Book::create([
            'title' => 'Pemrograman Berorientasi Objek (OOP)',
            'author' => 'Dewi Lestari',
            'publisher' => 'Unpam Press',
            'year' => 2025,
            'isbn' => '978-602-000-009',
            'category' => 'Pemrograman',
            'cover_image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=500',
        ]);

        Book::create([
            'title' => 'Keamanan Informasi dan Kriptografi',
            'author' => 'Fajar Nugraha',
            'publisher' => 'Sasmita Jaya',
            'year' => 2026,
            'isbn' => '978-602-000-010',
            'category' => 'Keamanan',
            'cover_image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=500',
        ]);
    }
}