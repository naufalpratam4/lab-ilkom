@extends('dashboard.template.templatedashboard')
@section('content')
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12 py-8">
        <div class="bg-white shadow-md sm:rounded-lg overflow-hidden">
            <div
                class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 border-b border-gray-200">
                <div class="w-full md:w-1/2">
                    <h2 class="text-2xl font-bold text-gray-800">Manajemen Reservasi Ruangan</h2>
                    <p class="text-sm text-gray-600 mt-1">Tinjau dan kelola semua permintaan reservasi ruangan laboratorium.
                    </p>
                </div>
            </div>

            <section id="reservasi" class="p-4">
                <div class="bg-white  rounded-xl shadow-sm border border-gray-100 overflow-x-auto">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center" onsubmit="event.preventDefault(); /* tambahkan fungsi pencarian */">
                            <label for="search" class="sr-only">Cari</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.818a1 1 0 01-1.414 1.414l-4.818-4.817A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="search" placeholder="Cari reservasi..."
                                    class="block w-full pl-10 pr-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" />
                            </div>
                            <button type="submit"
                                class="ml-2 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Cari
                            </button>
                        </form>
                    </div>

                    <table class="min-w-full table-auto text-sm text-left text-gray-700">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-500">
                            <tr>
                                <th class="px-6 py-3">Nama</th>
                                <th class="px-6 py-3">Ruangan</th>
                                <th class="px-6 py-3">Tanggal</th>
                                <th class="px-6 py-3">Waktu</th>
                                <th class="px-6 py-3">Tujuan</th>
                                <th class="px-6 py-3">Status</th>
                                <th class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="admin-reservations-table-body" class="divide-y divide-gray-200">
                            @foreach ($reservasi as $reserv => $item)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">{{ $item->name }}</td>
                                    <td class="px-6 py-4">{{ $item->ruang }}</td>
                                    <td class="px-6 py-4">{{ $item->tgl }}</td>
                                    <td class="px-6 py-4">{{ $item->waktu_mulai }} - {{ $item->waktu_selesai }}</td>
                                    <td class="px-6 py-4">{{ $item->deskripsi }}</td>
                                    <td class="px-6 py-4">
                                        @if ($item->status === true)
                                            <span
                                                class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                Disetujui
                                            </span>
                                        @elseif ($item->status === false)
                                            <span
                                                class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                Tidak Disetujui
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                Tidak ada keterangan
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end space-x-2">
                                            <button
                                                class="px-3 py-1 text-sm font-medium text-white bg-green-600 rounded hover:bg-green-700">
                                                Konfirmasi
                                            </button>
                                            <button
                                                class="px-3 py-1 text-sm font-medium text-white bg-red-600 rounded hover:bg-red-700">
                                                Tolak
                                            </button>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>

                <div class="text-center mt-8">
                    <a href="#"
                        class="inline-block bg-blue-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-blue-700 transition-colors">
                        Lihat Semua Reservasi
                    </a>
                </div>
            </section>
        </div>
    </div>
@endsection
