# BandungAppFAQ

**BandungAppFAQ** adalah aplikasi berbasis web yang dirancang untuk memberikan informasi Frequently Asked Questions (FAQ) terkait berbagai aplikasi yang digunakan di Kota Bandung. Proyek ini bertujuan untuk memudahkan pengguna dalam menemukan solusi atas pertanyaan umum secara cepat dan terorganisir.

## Fitur Utama

- **Manajemen FAQ**: Admin dapat menambah, mengedit, dan menghapus FAQ melalui CMS.
- **Pencarian FAQ**: Pengguna dapat mencari FAQ berdasarkan nama aplikasi.
- **Statistik Beranda**: Menampilkan jumlah aplikasi, jumlah FAQ yang tersedia, dan FAQ yang paling sering diakses.
- **Akses Admin Terbatas**: Hanya admin yang dapat masuk ke sistem CMS untuk mengelola konten.
- **Desain Responsif**: Menggunakan Tailwind CSS untuk antarmuka pengguna yang responsif dan modern.

## Teknologi yang Digunakan

- **Framework Backend**: Laravel 11 dengan Laravel Breeze untuk autentikasi.
- **Frontend**: Tailwind CSS untuk desain antarmuka.
- **Database**: MySQL untuk penyimpanan data.
- **Server Lokal**: Laragon pada sistem Windows.

## Instalasi

1. Clone repositori:
   ```bash
   
   git clone https://github.com/milkybluezzz/FAQ.git

   ```
2. Masuk ke direktori proyek:
   ```bash
   cd bandungappfaq
   ```
3. Instal dependensi dengan Composer:
   ```bash
   composer install
   ```
4. Copy file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:
   ```bash
   cp .env.example .env
   ```
5. Generate application key:
   ```bash
   php artisan key:generate
   ```
6. Migrasi database:
   ```bash
   php artisan migrate
   ```
7. Jalankan server lokal:
   ```bash
   php artisan serve
   ```

## Cara Menggunakan

1. **Admin**:
   - Login menggunakan akun admin untuk mengelola FAQ, logo, dan teks beranda.
   - Tambah, edit, dan hapus FAQ dengan mudah melalui CMS.

2. **Pengguna**:
   - Cari FAQ melalui kolom pencarian di halaman utama.
   - Lihat daftar aplikasi dan FAQ secara terorganisir.

## Kontribusi

Kami menerima kontribusi dari siapa saja untuk meningkatkan proyek ini. Jika Anda ingin berkontribusi:

1. Fork repositori ini.
2. Buat branch baru untuk fitur atau perbaikan Anda.
3. Kirim pull request ke branch `main`.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---

**Dibuat dengan ❤ oleh Tim BandungAppFAQ.**

