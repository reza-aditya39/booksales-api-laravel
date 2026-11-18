<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
  
    public function run(): void
    {
        $authors =[
        [
        'name' => 'Tereliye',
        'cover_photo' => 'Tereliye.webp',
        'bio' => 'Tere Liye (nama pena dari Darwis) adalah salah satu penulis fiksi paling produktif dan populer di Indonesia.'
        ],
        [
        'name' => 'Risa Saraswati',
        'cover_photo' => 'RisaSaraswati.webp',
        'bio' => 'Risa Saraswati adalah seorang penulis, penyanyi, dan kreator konten asal Bandung yang dikenal memiliki kemampuan supranatural.'
        ],
        [
        'name' => 'Walter Isaacson',
        'cover_photo' => 'WalterIssac.webp',
        'bio' => 'Walter Isaacson adalah seorang jurnalis, sejarawan, dan penulis biografi ternama asal Amerika Serikat.'
        ],
        [
        'name' => 'Carl Sagan',
        'cover_photo' => 'CarlSagan.webp',
        'bio' => 'Carl Sagan adalah seorang astronom, astrofisikawan, penulis sains populer, dan komunikator sains terkenal asal Amerika Serikat.'
        ],
        [
        'name' => 'James Clear',
        'cover_photo' => 'JamesClear.webp',
        'bio' => 'James Clear adalah seorang penulis, wirausahawan, dan pembicara yang dikenal karena karyanya tentang topik kebiasaan, pengambilan keputusan, dan peningkatan berkelanjutan'
        ]
    ];

    foreach ($authors as $author){
        Author::create($author);
    }
    
    }
}
