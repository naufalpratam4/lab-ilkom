<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Ruangan Lab - Lab Ilmu Komputer</title>
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
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <nav class="bg-blue-700 text-white p-4 shadow-md rounded-b-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="index.html" class="text-2xl font-bold rounded-md px-2 py-1 hover:bg-blue-600 transition-colors">Lab
                Komputer</a>
            <div class="hidden md:flex space-x-6">
                <a href="index.html#beranda" class="hover:text-blue-200 transition-colors">Beranda</a>
                <a href="index.html#layanan" class="hover:text-blue-200 transition-colors">Layanan</a>
                <a href="about.html" class="hover:text-blue-200 transition-colors">Tentang Kami</a>
                <a href="index.html#kontak" class="hover:text-blue-200 transition-colors">Kontak</a>
            </div>
            <button id="mobile-menu-button" class="md:hidden focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
        <div id="mobile-menu" class="md:hidden hidden mt-3 space-y-2 px-2 pb-2">
            <a href="index.html#beranda"
                class="block px-4 py-2 text-white hover:bg-blue-600 rounded-md transition-colors">Beranda</a>
            <a href="index.html#layanan"
                class="block px-4 py-2 text-white hover:bg-blue-600 rounded-md transition-colors">Layanan</a>
            <a href="about.html"
                class="block px-4 py-2 text-white hover:bg-blue-600 rounded-md transition-colors">Tentang Kami</a>
            <a href="index.html#kontak"
                class="block px-4 py-2 text-white hover:bg-blue-600 rounded-md transition-colors">Kontak</a>
        </div>
    </nav>

    <header
        class="relative bg-gradient-to-r from-orange-500 to-red-600 text-white py-20 md:py-24 px-4 rounded-b-xl shadow-lg">
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
                Jadwal Penggunaan Ruangan Lab
            </h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto opacity-90">
                Lihat ketersediaan ruangan lab berdasarkan tanggal dan waktu.
            </p>
        </div>
    </header>

    <section id="jadwal-lab" class="py-16 md:py-20 px-4 bg-white">
        <div class="container mx-auto max-w-5xl">
            <h2 class="text-4xl font-bold text-center mb-10 text-gray-800">Cek Jadwal Ruangan</h2>

            <div class="flex flex-col md:flex-row items-center justify-center mb-8 space-y-4 md:space-y-0 md:space-x-4">
                <label for="schedule-date" class="text-lg font-medium text-gray-700">Pilih Tanggal:</label>
                <input type="date" id="schedule-date"
                    class="mt-1 block w-full md:w-auto px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg">
            </div>

            <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg border border-gray-200 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Waktu</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Lab Pemrograman Dasar</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Lab Jaringan Komputer</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Lab Kecerdasan Buatan</th>
                        </tr>
                    </thead>
                    <tbody id="schedule-table-body" class="bg-white divide-y divide-gray-200">
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-8 text-gray-600">
                <p>Sel Merah: Terisi | Sel Hijau: Tersedia</p>
            </div>
        </div>
    </section>

    <footer id="kontak" class="bg-gray-800 text-gray-300 py-12 px-4 rounded-t-xl shadow-inner">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Lab Ilmu Komputer</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                Sistem Informasi Laboratorium Ilmu Komputer.
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
            const scheduleDateInput = document.getElementById('schedule-date');
            const scheduleTableBody = document.getElementById('schedule-table-body');

            // Toggle mobile menu
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            // Close mobile menu when a link is clicked
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function() {
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                });
            });

            // Set current year in footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();

            // Dummy data for reservations
            // Format: { ruangan: "Nama Lab", tanggal: "YYYY-MM-DD", waktu_mulai: "HH:MM", waktu_selesai: "HH:MM", kegiatan: "Nama Kegiatan" }
            const dummyReservations = [{
                    ruangan: "Lab Pemrograman Dasar",
                    tanggal: "2025-06-01",
                    waktu_mulai: "08:00",
                    waktu_selesai: "10:00",
                    kegiatan: "Praktikum Algoritma"
                },
                {
                    ruangan: "Lab Jaringan Komputer",
                    tanggal: "2025-06-01",
                    waktu_mulai: "10:00",
                    waktu_selesai: "12:00",
                    kegiatan: "Praktikum Jaringan"
                },
                {
                    ruangan: "Lab Kecerdasan Buatan",
                    tanggal: "2025-06-01",
                    waktu_mulai: "13:00",
                    waktu_selesai: "15:00",
                    kegiatan: "Penelitian TA"
                },
                {
                    ruangan: "Lab Pemrograman Dasar",
                    tanggal: "2025-06-02",
                    waktu_mulai: "09:00",
                    waktu_selesai: "11:00",
                    kegiatan: "Workshop Python"
                },
                {
                    ruangan: "Lab Jaringan Komputer",
                    tanggal: "2025-06-02",
                    waktu_mulai: "14:00",
                    waktu_selesai: "16:00",
                    kegiatan: "Ujian Cisco"
                },
                {
                    ruangan: "Lab Kecerdasan Buatan",
                    tanggal: "2025-06-02",
                    waktu_mulai: "08:00",
                    waktu_selesai: "10:00",
                    kegiatan: "Diskusi Proyek AI"
                },
                {
                    ruangan: "Lab Pemrograman Dasar",
                    tanggal: "2025-06-03",
                    waktu_mulai: "10:00",
                    waktu_selesai: "12:00",
                    kegiatan: "Praktikum Web"
                },
                {
                    ruangan: "Lab Pemrograman Dasar",
                    tanggal: "2025-06-03",
                    waktu_mulai: "13:00",
                    waktu_selesai: "15:00",
                    kegiatan: "Praktikum Basis Data"
                },
                {
                    ruangan: "Lab Jaringan Komputer",
                    tanggal: "2025-06-03",
                    waktu_mulai: "09:00",
                    waktu_selesai: "11:00",
                    kegiatan: "Praktikum Keamanan Jaringan"
                },
            ];

            const labRooms = ["Lab Pemrograman Dasar", "Lab Jaringan Komputer", "Lab Kecerdasan Buatan"];
            const timeSlots = [
                "08:00", "09:00", "10:00", "11:00", "12:00",
                "13:00", "14:00", "15:00", "16:00", "17:00"
            ];

            // Fungsi untuk membuat jadwal berdasarkan tanggal yang dipilih
            function generateSchedule() {
                const selectedDate = scheduleDateInput.value;
                scheduleTableBody.innerHTML = ''; // Kosongkan tabel

                if (!selectedDate) {
                    scheduleTableBody.innerHTML =
                        `<tr><td colspan="${labRooms.length + 1}" class="text-center py-4 text-gray-500">Pilih tanggal untuk melihat jadwal.</td></tr>`;
                    return;
                }

                const dailyReservations = dummyReservations.filter(res => res.tanggal === selectedDate);

                timeSlots.forEach(time => {
                    const row = document.createElement('tr');
                    row.innerHTML =
                        `<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${time}</td>`;

                    labRooms.forEach(room => {
                        let isReserved = false;
                        let reservationInfo = '';

                        // Cek apakah ada reservasi untuk slot waktu dan ruangan ini
                        dailyReservations.forEach(res => {
                            if (res.ruangan === room) {
                                // Konversi waktu ke format Date untuk perbandingan yang lebih mudah
                                const startTime = new Date(
                                    `${selectedDate}T${res.waktu_mulai}:00`);
                                const endTime = new Date(
                                    `${selectedDate}T${res.waktu_selesai}:00`);
                                const slotTime = new Date(`${selectedDate}T${time}:00`);
                                const nextSlotTime = new Date(slotTime.getTime() + 60 * 60 *
                                    1000); // 1 jam setelah slot

                                // Cek apakah slot waktu ini tumpang tindih dengan reservasi
                                if (slotTime >= startTime && slotTime < endTime) {
                                    isReserved = true;
                                    reservationInfo = res.kegiatan;
                                }
                            }
                        });

                        const cellClass = isReserved ? 'bg-red-100 text-red-800' :
                            'bg-green-100 text-green-800';
                        const cellContent = isReserved ? reservationInfo : 'Tersedia';

                        row.innerHTML += `
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center ${cellClass} rounded-md">
                                ${cellContent}
                            </td>
                        `;
                    });
                    scheduleTableBody.appendChild(row);
                });
            }

            // Set tanggal default ke hari ini
            const today = new Date();
            const year = today.getFullYear();
            const month = String(today.getMonth() + 1).padStart(2, '0'); // Months are 0-indexed
            const day = String(today.getDate()).padStart(2, '0');
            scheduleDateInput.value = `${year}-${month}-${day}`;

            // Panggil generateSchedule saat tanggal berubah
            scheduleDateInput.addEventListener('change', generateSchedule);

            // Panggil generateSchedule saat halaman pertama kali dimuat
            generateSchedule();
        });
    </script>

</body>

</html>
