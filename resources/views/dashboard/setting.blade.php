@extends('dashboard.template.templatedashboard')
@section('content')

    <body class="bg-gray-100 font-sans antialiased">
        <div class="flex min-h-screen">
            <main class="flex-1">
                <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-6">Pengaturan</h1>

                    <div class="flex border-b border-gray-200 mb-8">
                        <button
                            class="py-3 px-6 text-gray-600 border-b-2 border-transparent hover:border-blue-500 hover:text-blue-500 focus:outline-none current-tab"
                            data-tab="profile">Profil</button>
                        <button
                            class="py-3 px-6 text-gray-600 border-b-2 border-transparent hover:border-blue-500 hover:text-blue-500 focus:outline-none"
                            data-tab="notifications">Notifikasi</button>
                        <button
                            class="py-3 px-6 text-gray-600 border-b-2 border-transparent hover:border-blue-500 hover:text-blue-500 focus:outline-none"
                            data-tab="security">Keamanan</button>
                        <button
                            class="py-3 px-6 text-gray-600 border-b-2 border-transparent hover:border-blue-500 hover:text-blue-500 focus:outline-none"
                            data-tab="appearance">Tampilan</button>
                    </div>

                    <div id="profile" class="settings-section active-section">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Pengaturan Profil</h2>
                        <form>
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama
                                    Lengkap</label>
                                <input type="text" id="name"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    value="John Doe">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                <input type="email" id="email"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    value="john.doe@example.com">
                            </div>
                            <div class="mb-6">
                                <label for="bio" class="block text-gray-700 text-sm font-bold mb-2">Bio</label>
                                <textarea id="bio" rows="4"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">Seorang pengembang web dengan fokus pada Tailwind CSS dan React.</textarea>
                            </div>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan
                                Perubahan</button>
                        </form>
                    </div>

                    <div id="notifications" class="settings-section hidden">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Pengaturan Notifikasi</h2>
                        <div class="mb-4">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" checked>
                                <span class="ml-2 text-gray-700">Email Notifikasi</span>
                            </label>
                        </div>
                        <div class="mb-4">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Push Notifikasi</span>
                            </label>
                        </div>
                        <div class="mb-6">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" checked>
                                <span class="ml-2 text-gray-700">Notifikasi Pesan Baru</span>
                            </label>
                        </div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan
                            Perubahan</button>
                    </div>

                    <div id="security" class="settings-section hidden">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Pengaturan Keamanan</h2>
                        <div class="mb-4">
                            <label for="current-password" class="block text-gray-700 text-sm font-bold mb-2">Kata Sandi Saat
                                Ini</label>
                            <input type="password" id="current-password"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="new-password" class="block text-gray-700 text-sm font-bold mb-2">Kata Sandi
                                Baru</label>
                            <input type="password" id="new-password"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-6">
                            <label for="confirm-password" class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Kata
                                Sandi Baru</label>
                            <input type="password" id="confirm-password"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ubah
                            Kata Sandi</button>
                    </div>

                    <div id="appearance" class="settings-section hidden">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Pengaturan Tampilan</h2>
                        <div class="mb-4">
                            <label for="theme" class="block text-gray-700 text-sm font-bold mb-2">Tema</label>
                            <select id="theme"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="light">Terang</option>
                                <option value="dark">Gelap</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="font-size" class="block text-gray-700 text-sm font-bold mb-2">Ukuran Font</label>
                            <select id="font-size"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="small">Kecil</option>
                                <option value="medium" selected>Sedang</option>
                                <option value="large">Besar</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan
                            Perubahan</button>
                    </div>
                </div>
            </main>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabs = document.querySelectorAll('.flex button');
                const sections = document.querySelectorAll('.settings-section');

                tabs.forEach(tab => {
                    tab.addEventListener('click', function() {
                        // Hapus kelas 'current-tab' dan 'active-section' dari semua
                        tabs.forEach(t => t.classList.remove('current-tab', 'border-blue-500',
                            'text-blue-500'));
                        sections.forEach(s => s.classList.add('hidden'));

                        // Tambahkan kelas 'current-tab' dan 'active-section' ke yang diklik
                        this.classList.add('current-tab', 'border-blue-500', 'text-blue-500');
                        const targetTab = this.dataset.tab;
                        document.getElementById(targetTab).classList.remove('hidden');
                    });
                });

                // Set tab 'Profil' sebagai default aktif saat pertama kali dimuat
                document.querySelector('.current-tab').click();
            });
        </script>

    </body>
@endsection
