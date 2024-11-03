<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'question' => 'Apa itu BandungAppFAQ?',
            'answer' => 'BandungAppFAQ adalah platform yang menyediakan informasi dan FAQ mengenai aplikasi-aplikasi di Kota Bandung.'
        ]);

        Faq::create([
            'question' => 'Bagaimana cara menggunakan platform ini?',
            'answer' => 'Anda dapat mencari aplikasi yang tersedia dan membaca FAQ terkait dengan mudah.'
        ]);

        Faq::create([
            'question' => 'Di mana saya dapat menemukan informasi lebih lanjut?',
            'answer' => 'Informasi lebih lanjut bisa ditemukan di halaman Kontak atau melalui dukungan pelanggan.'
        ]);
    }
}
