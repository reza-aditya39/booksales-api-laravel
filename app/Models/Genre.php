<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //menyimpan data genre
    private $genres =[
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

    public function getGenres(){
        return $this->genres;
    }
}
