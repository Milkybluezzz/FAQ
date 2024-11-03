<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{

    public function index(Request $request)
{
    $searchTerm = $request->input('search');

    // Data dummy aplikasi
    $applications = [
        [
            'name' => 'Pesona',
            'tagline' => 'Pengelolaan Surat Online dan Arsip Pemerintah Kota Bandung',
            'description' => 'Pesona Bandung adalah aplikasi manajemen korespondensi dan arsip digital untuk Pemerintah Kota Bandung.
                              Aplikasi ini memungkinkan pengguna yang memiliki akun email resmi @bandung.go.id untuk mengelola surat 
                              dan arsip dengan mudah, sebagai pengganti dari sistem Surat Online sebelumnya.',
            'image' => '/img/logo_pesona.png',
            'link' => 'angularjs.html',
        ],
        [
            'name' => 'PMO',
            'tagline' => 'Project Management Officer',
            'description' => 'PMO Project Management Officer Pemerintah Kota Bandung bertugas untuk mengelola aset,
                             usulan pembuatan, dan pengembangan sistem digital.',
            'image' => '/img/Logo_kota_Bandung.png',
            'link' => '/FAQ/pmoFAQ',
        ],
        [
            'name' => 'e-penting',
            'tagline' => 'Elektronik Pencatatan Stunting',
            'description' => 'E-Penting adalah aplikasi elektronik pencatatan stunting yang digunakan di Kota Bandung.
                             Aplikasi ini bertujuan untuk meningkatkan tata kelola data stunting dengan mendapatkan data
                             yang akurat dan membantu analisis data.',
            'image' => '/img/e-penting logo.png',
            'link' => '/FAQ/e-pentingFAQ',
        ],
    ];

    // Filter jika ada kata kunci pencarian
    if ($searchTerm) {
        $applications = array_filter($applications, function($app) use ($searchTerm) {
            return stripos($app['name'], $searchTerm) !== false;
        });
    }

    // Pastikan $applications selalu array, meskipun hasil kosong
    $applications = array_values($applications); // Reset keys

    return view('FAQ', ['applications' => $applications]);
}

    
}