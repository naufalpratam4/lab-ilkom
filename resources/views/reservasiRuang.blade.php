<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Ruangan Lab - Lab Ilmu Komputer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom style untuk input date agar terlihat lebih konsisten */
        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(0.5) sepia(1) saturate(5) hue-rotate(175deg);
            /* Mengubah warna ikon kalender */
            cursor: pointer;
        }

        input[type="time"]::-webkit-calendar-picker-indicator {
            filter: invert(0.5) sepia(1) saturate(5) hue-rotate(175deg);
            /* Mengubah warna ikon jam */
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    @include('template.navbar')

    <header
        class="relative bg-gradient-to-r from-green-600 to-teal-700 text-white py-20 md:py-24 px-4 rounded-b-xl shadow-lg">
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
                Reservasi Ruangan Laboratorium
            </h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto opacity-90">
                Pesan ruangan lab untuk kegiatan praktikum, penelitian, atau workshop Anda.
            </p>
        </div>
    </header>

    <section id="form-reservasi" class="py-16 md:py-20 px-4 bg-white">
        <div class="container mx-auto max-w-3xl">
            <h2 class="text-4xl font-bold text-center mb-10 text-gray-800">Formulir Reservasi</h2>
            <div class="bg-white p-8 md:p-10 rounded-xl shadow-lg border border-gray-200">
                <form action="{{ route('addreservasi') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg">
                    </div>

                    <div>
                        <label for="nim" class="block text-lg font-medium text-gray-700 mb-2">NIM / NIP</label>
                        <input type="text" id="nim" name="nim" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg">
                    </div>

                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg">
                    </div>

                    <div>
                        <label for="no" class="block text-lg font-medium text-gray-700 mb-2">Nomor Telepon</label>
                        <input type="tel" id="no" name="no" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg">
                    </div>

                    <div>
                        <label for="ruang" class="block text-lg font-medium text-gray-700 mb-2">Pilih Ruangan
                            Lab</label>
                        <select id="ruang" name="ruang" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg">
                            <option value="">-- Pilih Ruangan --</option>
                            <option value="lab_pemrograman">Lab Pemrograman Dasar (Kapasitas 30)</option>
                            <option value="lab_jaringan">Lab Jaringan Komputer (Kapasitas 25)</option>
                            <option value="lab_ai">Lab Kecerdasan Buatan (Kapasitas 20)</option>
                            <option value="lab_multimedia">Lab Multimedia (Kapasitas 15)</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="tgl" class="block text-lg font-medium text-gray-700 mb-2">Tanggal
                                Reservasi</label>
                            <input type="date" id="tgl" name="tgl" required
                                class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg">
                        </div>
                        <div>
                            <label for="waktu_mulai" class="block text-lg font-medium text-gray-700 mb-2">Waktu
                                Mulai</label>
                            <input type="time" id="waktu_mulai" name="waktu_mulai" required
                                class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg">
                        </div>
                        <div>
                            <label for="waktu_selesai" class="block text-lg font-medium text-gray-700 mb-2">Waktu
                                Selesai</label>
                            <input type="time" id="waktu_selesai" name="waktu_selesai" required
                                class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg">
                        </div>
                    </div>

                    <div>
                        <label for="tujuan" class="block text-lg font-medium text-gray-700 mb-2">Tujuan
                            Penggunaan</label>
                        <textarea id="tujuan" name="deskripsi" rows="4" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg"
                            placeholder="Contoh: Praktikum Basis Data, Penelitian Tugas Akhir, Workshop AI..."></textarea>
                    </div>

                    <div class="text-center pt-4">
                        <button type="submit"
                            class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-bold rounded-full shadow-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform hover:scale-105 transition-all duration-300">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Ajukan Reservasi
                        </button>
                    </div>
                </form>
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
