@extends('dashboard.template.templatedashboard')

@section('content')

<div class="mx-auto max-w-screen-xl px-4 lg:px-12 py-8">
    <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">

        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 border-b border-gray-200">
            <div class="w-full md:w-1/2">
                <h2 class="text-2xl font-bold text-gray-800">Manajemen Reservasi Ruangan</h2>
                <p class="text-sm text-gray-600 mt-1">Tinjau dan kelola semua permintaan reservasi ruangan laboratorium.</p>
            </div>
            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                {{-- Tombol Add Product (Jika ada fungsi tambah reservasi) --}}
            </div>
        </div>

        <section id="reservasi" class="p-4">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-sm border border-gray-100 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ruangan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tujuan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="admin-reservations-table-body" class="bg-white divide-y divide-gray-200">
                        </tbody>
                </table>
            </div>
            <div class="text-center mt-8">
                <a href="#" class="inline-block bg-blue-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-blue-700 transition-colors">Lihat Semua Reservasi</a>
            </div>
        </section>

        <hr class="my-6 border-gray-200">

        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 border-b border-gray-200">
            <div class="w-full md:w-1/2">
                <h2 class="text-2xl font-bold text-gray-800">Manajemen Peminjaman Alat/Barang</h2>
                <p class="text-sm text-gray-600 mt-1">Tinjau dan kelola semua permintaan peminjaman alat/barang laboratorium.</p>
            </div>
            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                {{-- Tombol Add Product (Jika ada fungsi tambah peminjaman) --}}
            </div>
        </div>

        <section id="peminjaman" class="p-4">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-sm border border-gray-100 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alat/Barang</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tgl Pinjam</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tgl Kembali</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="admin-loans-table-body" class="bg-white divide-y divide-gray-200">
                        </tbody>
                </table>
            </div>
            <div class="text-center mt-8">
                <a href="#" class="inline-block bg-blue-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-blue-700 transition-colors">Lihat Semua Peminjaman</a>
            </div>
        </section>

        <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4 border-t border-gray-200" aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-500">
                Menampilkan
                <span class="font-semibold text-gray-900">1-10</span>
                dari
                <span class="font-semibold text-gray-900">1000</span>
            </span>
            <ul class="inline-flex items-stretch -space-x-px">
                <li>
                    <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                        <span class="sr-only">Previous</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">...</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">100</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                        <span class="sr-only">Next</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</div>

<footer id="kontak" class="bg-gray-900 text-gray-300 py-12 px-4 rounded-t-xl shadow-inner mt-8">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Lab Ilmu Komputer</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto">
            Sistem Administrasi Laboratorium Ilmu Komputer.
        </p>
        <div class="mt-10 border-t border-gray-700 pt-8 text-sm">
            <p>&copy; <span id="currentYear"></span> Laboratorium Ilmu Komputer. Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>

<div id="rejection-reason-modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 items-center justify-center z-50 hidden">
    <div class="bg-white p-8 rounded-lg shadow-xl w-full max-w-md mx-auto relative">
        <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600" id="close-modal-button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Berikan Alasan Penolakan</h3>
        <textarea id="rejection-reason-textarea" rows="5"
                  class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 text-base resize-none"
                  placeholder="Masukkan alasan penolakan di sini..."></textarea>
        <div class="flex justify-end space-x-4 mt-6">
            <button id="cancel-rejection-button" class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100 transition-colors">Batal</button>
            <button id="submit-rejection-button" class="px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors">Tolak</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const adminReservationsTableBody = document.getElementById('admin-reservations-table-body');
        const adminLoansTableBody = document.getElementById('admin-loans-table-body');
        // Pastikan elemen ini ada di HTML Anda jika ingin menampilkan hitungan pending
        const pendingReservationsCount = document.getElementById('pending-reservations-count');
        const pendingLoansCount = document.getElementById('pending-loans-count');

        // Modal elements
        const rejectionReasonModal = document.getElementById('rejection-reason-modal');
        const closeRejectionModalButton = document.getElementById('close-modal-button');
        const cancelRejectionButton = document.getElementById('cancel-rejection-button');
        const submitRejectionButton = document.getElementById('submit-rejection-button');
        const rejectionReasonTextarea = document.getElementById('rejection-reason-textarea');

        let currentActionTarget = null; // To store which item is being rejected

        // Toggle mobile menu (assuming these elements are part of your templatedashboard)
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function() {
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                });
            });
        }

        // Set current year in footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // Dummy data for reservations (including some pending for demonstration)
        let adminReservations = [
            {
                id: 'res001',
                nama: "Budi Santoso",
                ruangan: "Lab Pemrograman Dasar",
                tanggal: "2025-06-01",
                waktu: "09:00 - 11:00",
                tujuan: "Praktikum Struktur Data",
                status: "Dikonfirmasi",
                reason: null
            },
            {
                id: 'res002',
                nama: "Siti Aminah",
                ruangan: "Lab Jaringan Komputer",
                tanggal: "2025-06-01",
                waktu: "13:00 - 15:00",
                tujuan: "Penelitian Tugas Akhir",
                status: "Menunggu Konfirmasi",
                reason: null
            },
            {
                id: 'res003',
                nama: "Ahmad Fauzi",
                ruangan: "Lab Kecerdasan Buatan",
                tanggal: "2025-06-02",
                waktu: "10:00 - 12:00",
                tujuan: "Workshop Machine Learning",
                status: "Menunggu Konfirmasi",
                reason: null
            },
            {
                id: 'res004',
                nama: "Dewi Lestari",
                ruangan: "Lab Pemrograman Dasar",
                tanggal: "2025-06-03",
                waktu: "14:00 - 16:00",
                tujuan: "Diskusi Kelompok Proyek",
                status: "Ditolak",
                reason: "Ruangan sudah dibooking untuk kegiatan lain pada jam tersebut."
            }
        ];

        // Dummy data for loan requests
        let adminLoans = [
            {
                id: 'loan001',
                nama: "Andi Pratama",
                alat: "Arduino Uno",
                jumlah: 2,
                tgl_pinjam: "2025-05-29",
                tgl_kembali: "2025-06-05",
                status: "Menunggu Konfirmasi",
                reason: null
            },
            {
                id: 'loan002',
                nama: "Rina Wijaya",
                alat: "Kabel LAN 10m",
                jumlah: 5,
                tgl_pinjam: "2025-05-28",
                tgl_kembali: "2025-06-01",
                status: "Dikonfirmasi",
                reason: null
            },
            {
                id: 'loan003',
                nama: "Joko Susilo",
                alat: "Sensor Suhu DHT11",
                jumlah: 3,
                tgl_pinjam: "2025-06-01",
                tgl_kembali: "2025-06-08",
                status: "Menunggu Konfirmasi",
                reason: null
            },
            {
                id: 'loan004',
                nama: "Fitriani",
                alat: "Kamera Termal",
                jumlah: 1,
                tgl_pinjam: "2025-06-02",
                tgl_kembali: "2025-06-09",
                status: "Ditolak",
                reason: "Alat sedang dalam perbaikan."
            }
        ];

        // Function to populate reservations table
        function populateAdminReservationsTable() {
            adminReservationsTableBody.innerHTML = '';
            let pendingRes = 0;
            adminReservations.forEach(reservation => {
                const row = document.createElement('tr');
                let statusClass = '';
                let actionButtons = '';
                let reasonDisplay = '';

                if (reservation.status === 'Dikonfirmasi') {
                    statusClass = 'bg-green-100 text-green-800';
                    actionButtons = `<button data-id="${reservation.id}" data-type="reservasi" data-action="batal" class="text-red-600 hover:text-red-900 font-semibold text-sm">Batal</button>`;
                } else if (reservation.status === 'Menunggu Konfirmasi') {
                    statusClass = 'bg-yellow-100 text-yellow-800';
                    pendingRes++;
                    actionButtons = `
                        <button data-id="${reservation.id}" data-type="reservasi" data-action="konfirmasi" class="text-blue-600 hover:text-blue-900 font-semibold text-sm mr-2">Konfirmasi</button>
                        <button data-id="${reservation.id}" data-type="reservasi" data-action="tolak" class="text-red-600 hover:text-red-900 font-semibold text-sm">Tolak</button>
                    `;
                } else if (reservation.status === 'Dibatalkan') { // Menambahkan kondisi untuk "Dibatalkan"
                    statusClass = 'bg-gray-200 text-gray-700'; // Warna abu-abu untuk dibatalkan
                    actionButtons = `<button data-id="${reservation.id}" data-type="reservasi" data-action="hapus" class="text-gray-600 hover:text-gray-900 font-semibold text-sm">Hapus</button>`;
                } else { // Ditolak
                    statusClass = 'bg-red-100 text-red-800';
                    actionButtons = `<button data-id="${reservation.id}" data-type="reservasi" data-action="hapus" class="text-gray-600 hover:text-gray-900 font-semibold text-sm">Hapus</button>`;
                    if (reservation.reason) {
                        reasonDisplay = `<p class="text-gray-500 text-xs mt-1">Alasan: ${reservation.reason}</p>`;
                    }
                }

                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${reservation.nama}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${reservation.ruangan}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${reservation.tanggal}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${reservation.waktu}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">${reservation.tujuan}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${statusClass}">
                            ${reservation.status}
                        </span>
                        ${reasonDisplay}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        ${actionButtons}
                    </td>
                `;
                adminReservationsTableBody.appendChild(row);
            });
            if (pendingReservationsCount) {
                pendingReservationsCount.textContent = pendingRes;
            }
        }

        // Function to populate loans table
        function populateAdminLoansTable() {
            adminLoansTableBody.innerHTML = '';
            let pendingLns = 0;
            adminLoans.forEach(loan => {
                const row = document.createElement('tr');
                let statusClass = '';
                let actionButtons = '';
                let reasonDisplay = '';

                if (loan.status === 'Dikonfirmasi') {
                    statusClass = 'bg-green-100 text-green-800';
                    actionButtons = `<button data-id="${loan.id}" data-type="peminjaman" data-action="kembali" class="text-blue-600 hover:text-blue-900 font-semibold text-sm mr-2">Kembali</button>
                                     <button data-id="${loan.id}" data-type="peminjaman" data-action="batal" class="text-red-600 hover:text-red-900 font-semibold text-sm">Batal</button>`;
                } else if (loan.status === 'Menunggu Konfirmasi') {
                    statusClass = 'bg-yellow-100 text-yellow-800';
                    pendingLns++;
                    actionButtons = `
                        <button data-id="${loan.id}" data-type="peminjaman" data-action="konfirmasi" class="text-blue-600 hover:text-blue-900 font-semibold text-sm mr-2">Konfirmasi</button>
                        <button data-id="${loan.id}" data-type="peminjaman" data-action="tolak" class="text-red-600 hover:text-red-900 font-semibold text-sm">Tolak</button>
                    `;
                } else if (loan.status === 'Dikembalikan') {
                    statusClass = 'bg-blue-100 text-blue-800';
                    actionButtons = `<button data-id="${loan.id}" data-type="peminjaman" data-action="hapus" class="text-gray-600 hover:text-gray-900 font-semibold text-sm">Hapus</button>`;
                } else if (loan.status === 'Dibatalkan') { // Menambahkan kondisi untuk "Dibatalkan"
                    statusClass = 'bg-gray-200 text-gray-700'; // Warna abu-abu untuk dibatalkan
                    actionButtons = `<button data-id="${loan.id}" data-type="peminjaman" data-action="hapus" class="text-gray-600 hover:text-gray-900 font-semibold text-sm">Hapus</button>`;
                } else { // Ditolak
                    statusClass = 'bg-red-100 text-red-800';
                    actionButtons = `<button data-id="${loan.id}" data-type="peminjaman" data-action="hapus" class="text-gray-600 hover:text-gray-900 font-semibold text-sm">Hapus</button>`;
                    if (loan.reason) {
                        reasonDisplay = `<p class="text-gray-500 text-xs mt-1">Alasan: ${loan.reason}</p>`;
                    }
                }

                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${loan.nama}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${loan.alat}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${loan.jumlah}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${loan.tgl_pinjam}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${loan.tgl_kembali}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${statusClass}">
                            ${loan.status}
                        </span>
                        ${reasonDisplay}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        ${actionButtons}
                    </td>
                `;
                adminLoansTableBody.appendChild(row);
            });
            if (pendingLoansCount) {
                pendingLoansCount.textContent = pendingLns;
            }
        }

        // Handle action buttons (Konfirmasi, Tolak, Batal, Kembali, Hapus)
        document.addEventListener('click', function(event) {
            const target = event.target;
            if (target.tagName === 'BUTTON' && target.dataset.id && target.dataset.type && target.dataset.action) {
                const id = target.dataset.id;
                const type = target.dataset.type;
                const action = target.dataset.action;

                if (action === 'tolak') {
                    currentActionTarget = { id, type };
                    rejectionReasonModal.classList.remove('hidden'); // Show modal
                    rejectionReasonTextarea.value = ''; // Clear previous reason
                } else {
                    handleAction(id, type, action);
                }
            }
        });

        // Handle modal close button
        closeRejectionModalButton.addEventListener('click', function() {
            rejectionReasonModal.classList.add('hidden');
        });

        // Handle modal cancel button
        cancelRejectionButton.addEventListener('click', function() {
            rejectionReasonModal.classList.add('hidden');
        });

        // Handle modal submit button
        submitRejectionButton.addEventListener('click', function() {
            const reason = rejectionReasonTextarea.value.trim();
            if (currentActionTarget && reason) {
                handleAction(currentActionTarget.id, currentActionTarget.type, 'tolak', reason);
                rejectionReasonModal.classList.add('hidden');
            } else if (!reason) {
                alert('Alasan penolakan tidak boleh kosong.');
            }
        });

        // Close modal if clicked outside
        window.addEventListener('click', function(event) {
            if (event.target === rejectionReasonModal) {
                rejectionReasonModal.classList.add('hidden');
            }
        });

        // Central function to handle actions
        function handleAction(id, type, action, reason = null) {
            if (type === 'reservasi') {
                const index = adminReservations.findIndex(res => res.id === id);
                if (index !== -1) {
                    if (action === 'konfirmasi') {
                        adminReservations[index].status = 'Dikonfirmasi';
                        adminReservations[index].reason = null; // Clear reason if confirmed
                    } else if (action === 'tolak') {
                        adminReservations[index].status = 'Ditolak';
                        adminReservations[index].reason = reason;
                    } else if (action === 'batal') {
                        adminReservations[index].status = 'Dibatalkan';
                        adminReservations[index].reason = null;
                    } else if (action === 'hapus') {
                        adminReservations.splice(index, 1);
                    }
                    populateAdminReservationsTable(); // Refresh table
                }
            } else if (type === 'peminjaman') {
                const index = adminLoans.findIndex(loan => loan.id === id);
                if (index !== -1) {
                    if (action === 'konfirmasi') {
                        adminLoans[index].status = 'Dikonfirmasi';
                        adminLoans[index].reason = null; // Clear reason if confirmed
                    } else if (action === 'tolak') {
                        adminLoans[index].status = 'Ditolak';
                        adminLoans[index].reason = reason;
                    } else if (action === 'kembali') {
                        adminLoans[index].status = 'Dikembalikan';
                        adminLoans[index].reason = null;
                    } else if (action === 'batal') {
                        adminLoans[index].status = 'Dibatalkan';
                        adminLoans[index].reason = null;
                    } else if (action === 'hapus') {
                        adminLoans.splice(index, 1);
                    }
                    populateAdminLoansTable(); // Refresh table
                }
            }
        }

        // Initial population of tables
        populateAdminReservationsTable();
        populateAdminLoansTable();
    });
</script>

@endsection
