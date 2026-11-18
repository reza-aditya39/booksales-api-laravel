<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    
    public function run(): void
    {
        $books =[
            [
            'title'=>'Danur',
            'description'=>'Sebuah novel fiksi-otobiografi misteri yang mengangkat kisah nyata sang penulis saat menyadari kemampuan indigo-nya sejak kecil',
            'price'=>35000,
            'stock'=>21,
            'genre_id'=>3,
            'author_id'=>2
            ],
            [
            'title'=>'Bumi',
            'description'=>'Menceritakan tentang Raib, seorang remaja perempuan berusia 15 tahun yang memiliki kemampuan ajaib bisa menghilang hanya dengan menutup wajahnya menggunakan kedua telapak tangan',
            'price'=>114000,
            'stock'=>78,
            'genre_id'=>1,
            'author_id'=>1
            ],
            [
            'title'=>'Hujan',
            'description'=>'Berlatar belakang masa depan (tahun 2042) pasca-bencana alam dahsyat, novel ini menceritakan tentang persahabatan, perpisahan, dan cinta antara Lail dan Esok.',
            'price'=>109000,
            'stock'=>56,
            'genre_id'=>2,
            'author_id'=>1
            ],
            [
            'title'=>'Cosmos',
            'description'=>'Buku ini menggabungkan sains dasar, astronomi, sejarah peradaban, dan filsafat untuk menjelaskan bagaimana materi kosmik membentuk kehidupan di Bumi dan bagaimana manusia berusaha memahami alam semesta.',
            'price'=>93750,
            'stock'=>121,
            'genre_id'=>5,
            'author_id'=>4
            ],
            [
            'title'=>'Steve Jobs',
            'description'=>'Biografi resmi yang disusun berdasarkan lebih dari 40 wawancara langsung dengan Steve Jobs selama dua tahun, serta wawancara dengan ratusan anggota keluarga',
            'price'=>81500,
            'stock'=>88,
            'genre_id'=>4,
            'author_id'=>'3'
            ]
        ];

        foreach ($books as $book){
            Book::create($book);
        }
    }
}
