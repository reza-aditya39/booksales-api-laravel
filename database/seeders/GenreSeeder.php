<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    
    public function run(): void
    {
        $genres =[
           [
            'name' => 'Fantasi',
            'description' => 'Genre sastra yang menampilkan elemen-elemen yang tidak mungkin atau tidak ada dalam dunia nyata.'
            ],
            [
            'name'=> 'Romansa',
            'description' => 'Genre sastra yang fokus pada cerita cinta antara dua atau lebih karakter utama.'
            ],
            [
            'name' => 'Horror',
            'description' => 'Genre yang bertujuan untuk menakuti, membuat terkejut, atau mengguncang emosional pembaca.'
            ],
            [
            'name' => 'Biografi',
            'description' => 'Genre ini menceritakan tentang perjalanan hidup dan pengalaman seseorang dari masa kecil hingga dewasa atau hingga saat buku tersebut ditulis.'
            ],
            [
            'name' => 'Ilmiah',
            'description' => ' Jenis penulisan nonfiksi yang berfokus pada penyelidikan, penelitian, dan eksplorasi topik-topik ilmiah. '
            ]
        ];

        foreach ($genres as $genre){
            Genre::create($genre);
        }
    }
}
