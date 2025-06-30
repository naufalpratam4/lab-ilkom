<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Ilmu Komputer - Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    @include('template.navbar')

    <section id="beranda"
        class="relative bg-gradient-to-r from-blue-600 to-purple-700 text-white py-24 md:py-32 px-4 rounded-b-xl shadow-lg">
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6 animate-fade-in-up">
                Pusat Inovasi <br class="md:hidden"> Laboratorium Ilmu Komputer
            </h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto mb-10 opacity-90 animate-fade-in-up delay-200">
                Mendukung pembelajaran, penelitian, dan pengembangan teknologi terkini dengan fasilitas terbaik.
            </p>
            <a href="#layanan"
                class="bg-white text-blue-700 font-bold py-3 px-8 rounded-full shadow-lg hover:bg-blue-100 transform hover:scale-105 transition-all duration-300">
                Jelajahi Layanan Kami
            </a>
        </div>
    </section>

    <section id="layanan" class="py-16 md:py-20 px-4 bg-white">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">Layanan Unggulan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-blue-200">
                    <div class="text-blue-600 mb-6 text-center">
                        <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4 text-center">Peminjaman Alat</h3>
                    <p class="text-gray-700 text-center">
                        Pinjam berbagai peralatan dan komponen elektronik untuk proyek dan praktikum Anda.
                    </p>
                    <div class="text-center mt-6">
                        <a href="/peminjaman"
                            class="inline-block bg-blue-600 text-white py-2 px-6 rounded-full hover:bg-blue-700 transition-colors">Detail
                            & Pinjam</a>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-green-200">
                    <div class="text-green-600 mb-6 text-center">
                        <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4 text-center">Reservasi Ruang Lab</h3>
                    <p class="text-gray-700 text-center">
                        Booking ruang lab untuk kegiatan penelitian, tugas akhir, atau workshop.
                    </p>
                    <div class="text-center mt-6">
                        <a href="/reservasi"
                            class="inline-block bg-green-600 text-white py-2 px-6 rounded-full hover:bg-green-700 transition-colors">Cek
                            Ketersediaan</a>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-purple-200">
                    <div class="text-purple-600 mb-6 text-center">
                        <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4 text-center">Konsultasi Teknis</h3>
                    <p class="text-gray-700 text-center">
                        Dapatkan bantuan dan panduan dari teknisi atau asisten lab kami.
                    </p>
                    <div class="text-center mt-6">
                        <a href="#"
                            class="inline-block bg-purple-600 text-white py-2 px-6 rounded-full hover:bg-purple-700 transition-colors">Jadwalkan
                            Konsultasi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="py-16 md:py-20 px-4 bg-gray-100">
        <div class="container mx-auto flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x400/D1D5DB/1F2937?text=Lab+Komputer"
                    alt="Gambar Laboratorium Komputer" class="rounded-xl shadow-xl border-4 border-white">
            </div>
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl font-bold mb-6 text-gray-800">Tentang Laboratorium Kami</h2>
                <p class="text-lg leading-relaxed mb-6 text-gray-700">
                    Laboratorium Ilmu Komputer adalah pusat pengembangan keahlian praktis dan penelitian inovatif. Kami
                    menyediakan lingkungan belajar yang dinamis dengan fasilitas modern untuk mendukung mahasiswa dan
                    dosen dalam bidang ilmu komputer.
                </p>
                <p class="text-lg leading-relaxed mb-6 text-gray-700">
                    Dengan fokus pada kolaborasi dan eksplorasi teknologi terbaru, kami berkomitmen untuk mencetak
                    lulusan yang siap bersaing di dunia industri.
                </p>
                <a href="#"
                    class="inline-block bg-blue-600 text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-blue-700 transition-colors">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

    <footer id="kontak" class="bg-gray-800 text-gray-300 py-12 px-4 rounded-t-xl shadow-inner">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Hubungi Kami</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                Ada pertanyaan atau butuh bantuan? Jangan ragu untuk menghubungi tim Laboratorium Ilmu Komputer.
            </p>
            <a href="mailto:info@labkomputer.ac.id"
                class="inline-block bg-blue-600 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:bg-blue-700 transform hover:scale-105 transition-all duration-300">
                Kirim Email
            </a>
            <div class="mt-10 border-t border-gray-700 pt-8 text-sm">
                <p>&copy; <span id="currentYear"></span> Laboratorium Ilmu Komputer. Semua Hak Dilindungi.</p>
                <p class="mt-2">Jl. Contoh No. 123, Kota Contoh, Indonesia</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            // Toggle menu saat tombol diklik
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            // Menutup menu saat link di menu mobile diklik (opsional)
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function() {
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                });
            });

            // Set tahun saat ini di footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();
        });
    </script>

</body>

</html>
