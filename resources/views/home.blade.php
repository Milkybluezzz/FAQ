<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BandungAppFAQ - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com">
    </script>
</head>
<style>
        .hero-section {
        position: relative;
        height: 30vh;
        background-image: linear-gradient(to bottom, #0a5ac2, #3498db); /* Add a subtle gradient to the background */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        overflow: hidden;
        }

        .hero-section-inner {
        overflow: hidden;
        height: 100%;
        }

        .hero-section .content {
        position: relative;
        z-index: 1;
        padding: 20px; /* Add some padding to the content */
        font-family: 'Open Sans', sans-serif; /* Use a more modern font */
        }

        .hero-section .content h1 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 10px;
        }

        .hero-section .content p {
        font-size: 18px;
        margin-bottom: 20px;
        }


        .hero-section .wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 250%;
        height: 120px;
        line-height: 10%;
        z-index: 0;
        }

        .hero-section .wave svg {
        position: relative;
        display: block;
        width: calc(180% + 2px);
        height: 145px;
        }

        @keyframes waveAnimation {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
}

        .wave > svg > path {
            animation: waveAnimation 11s linear infinite;
        }
</style>
<body class="bg-gray-100 font-roboto">
    
    @include('component.navbar')

    
    <header class="hero-section">
        <div class="content">
            <h1>Selamat Datang di BandungAppFAQ </h1>
            <p>Platform informasi lengkap terkait Aplikasi Bandung.</p>
            <a href="#about" class="btn">Learn More</a>
        </div>
        <div class="wave">
            <svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,60 C150,120 350,0 500,60 C650,120 850,0 1000,60 C1150,120 1350,0 1500,60 L1500,100 L0,100 Z" style="fill:#ffffff;"></path>
            </svg>
        </div>
    </header>


    <!-- Statistik Section -->
    <div class="dashboard-container">
        <h1>BandungAppFAQ Stats</h1>

        <div class="stats-container">
            <div class="stat-box">
                <h2>Jumlah Aplikasi</h2>
                <p id="total-apps">0</p>
            </div>
            <div class="stat-box">
                <h2>Jumlah FAQ Terdaftar</h2>
                <p id="total-faqs">0</p>
            </div>
            <div class="stat-box">
                <h2>FAQ yang Sering Diakses</h2>
                <p id="most-accessed-faq">Loading...</p>
            </div>
        </div>
            <div class="chart-container">
                <div class="bar-chart-title">Aplikasi yang Paling sering Diakses</div>
                <div id="chart"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <section id="about" class="content-section">
        <h2>Tentang BandungAppFAQ</h2>
        <p>BandungAppFAQ adalah sebuah platform yang dirancang khusus untuk membantu pengguna aplikasi-aplikasi di Kota Bandung dengan menyediakan
           informasi dan jawaban atas pertanyaan yang sering diajukan (FAQ). Melalui situs ini, pengguna dapat dengan mudah menemukan solusi atas
           berbagai masalah yang mungkin mereka hadapi saat menggunakan aplikasi yang disediakan oleh pemerintah atau organisasi lain di kota ini.</p>
    </section>

    <section id="faq" class="content-section">
        <h2>Frequently Asked Questions</h2>
        <ul>
            <li>apa itu BandungAppFAQ?</li>
            <li>Bagaimana cara menggunakan platform ini?</li>
            <li>Di mana saya dapat menemukan informasi lebih lanjut?</li>
        </ul>
    </section>

    <section id="contact" class="content-section">
        <h2>Hubungi kami</h2>
        <p>Jika Anda memiliki pertanyaan, jangan ragu untuk <a href="mailto:support@bandungappfaq.com">Hubungi kami</a>.</p>
    </section>

    @include('component.footer')

    <script src="js/stats.js"></script>
</body>
</html>