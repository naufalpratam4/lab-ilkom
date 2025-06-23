<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Lab Ilmu Komputer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    @include('template.navbar')

    <header
        class="relative bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-20 md:py-24 px-4 rounded-b-xl shadow-lg">
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
                Mengenal Lebih Dekat Lab Ilmu Komputer
            </h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto opacity-90">
                Dedikasi kami untuk keunggulan dalam pendidikan dan penelitian.
            </p>
        </div>
    </header>

    <section id="visi" class="py-16 md:py-20 px-4 bg-white">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-4xl font-bold text-center mb-10 text-gray-800">Visi Kami</h2>
            <div class="bg-blue-50 p-8 rounded-xl shadow-lg border border-blue-200">
                <p class="text-lg leading-relaxed text-gray-700 text-center">
                    Menjadi laboratorium ilmu komputer terkemuka yang inovatif dan relevan, menghasilkan lulusan yang
                    kompeten serta kontribusi nyata bagi pengembangan ilmu pengetahuan dan teknologi.
                </p>
            </div>
        </div>
    </section>

    <section id="misi" class="py-16 md:py-20 px-4 bg-gray-100">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-4xl font-bold text-center mb-10 text-gray-800">Misi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center">
                        <svg class="w-8 h-8 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Pendidikan Berkualitas
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Menyediakan fasilitas dan lingkungan belajar yang mendukung proses pendidikan berkualitas tinggi
                        di bidang ilmu komputer.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center">
                        <svg class="w-8 h-8 text-green-600 mr-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                        Riset dan Inovasi
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Mendorong dan memfasilitasi kegiatan penelitian dan inovasi yang relevan dengan perkembangan
                        teknologi.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center">
                        <svg class="w-8 h-8 text-purple-600 mr-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        Pengabdian Masyarakat
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Berpartisipasi aktif dalam kegiatan pengabdian masyarakat melalui penerapan ilmu komputer.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center">
                        <svg class="w-8 h-8 text-yellow-600 mr-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.942 3.33.83 2.864 2.345a1.724 1.724 0 00.003 2.549c.546 1.613-.998 3.287-2.648 3.287a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.942-3.33-.83-2.864-2.345a1.724 1.724 0 00-.003-2.549c-.546-1.613.998-3.287 2.648-3.287a1.724 1.724 0 002.573-1.066z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Pengembangan Kompetensi
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Meningkatkan kompetensi staf dan asisten lab melalui pelatihan dan sertifikasi berkelanjutan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="fasilitas" class="py-16 md:py-20 px-4 bg-white">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-4xl font-bold text-center mb-10 text-gray-800">Fasilitas Utama</h2>
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-1/2">
                    <img src="https://placehold.co/600x400/D1D5DB/1F2937?text=Ruang+Lab+Modern"
                        alt="Gambar Ruang Lab Modern" class="rounded-xl shadow-xl border-4 border-white">
                </div>
                <div class="md:w-1/2">
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Ruang Lab Ber-AC dengan kapasitas besar
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Komputer Spesifikasi Tinggi untuk komputasi berat
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Akses Internet Kecepatan Tinggi
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Koleksi Software Berlisensi (IDE, Simulasi, Desain)
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Peralatan Jaringan dan IoT
                        </li>
                    </ul>
                </div>
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
