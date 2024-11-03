<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqEpentingSeeder extends Seeder
{
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => 'Apa itu aplikasi e-penting?',
                'answer' => 'E-Penting adalah aplikasi elektronik pencatatan stunting yang digunakan di Kota Bandung.',
            ],
            [
                'question' => 'Apa tujuan dari aplikasi e-penting?',
                'answer' => 'Untuk meningkatkan tata kelola data stunting di Kota Bandung sehingga mendapatkan data yang berkualitas.',
            ],
            [
                'question' => 'Apa manfaat aplikasi ini untuk masyarakat Kota Bandung?',
                'answer' => '1. Memudahkan mendapatkan hasil pencatatan dan pendataan stunting yang akurat. <br> 2. Sebagai bahan pengambilan keputusan untuk intervensi yang tepat dari setiap kasus stunting yang ada di wilayah Kota Bandung. <br> 3. Membantu memudahkan dalam analisis data, validitas data, publikasi data, integrasi data dan edukasi masyarakat.',
            ],
        ]);
    }
}