@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Custom Bike</h1>
            <p class="text-lg text-gray-600">Buat sepeda impian Anda dengan komponen pilihan</p>
        </div>

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

        <div class="bg-white rounded-lg shadow-lg p-6">
            <form action="{{ route('custom-bike.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Data Pribadi -->
                <div class="space-y-4">
                    <h2 class="text-xl font-semibold text-gray-900">Data Pribadi</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                            <input type="tel" name="telepon" id="telepon" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Spesifikasi Sepeda -->
                <div class="space-y-4">
                    <h2 class="text-xl font-semibold text-gray-900">Spesifikasi Sepeda</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="frame" class="block text-sm font-medium text-gray-700">Frame</label>
                            <select name="frame" id="frame" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Pilih Frame</option>
                                <option value="Aluminium">Aluminium</option>
                                <option value="Carbon">Carbon</option>
                                <option value="Steel">Steel</option>
                                <option value="Titanium">Titanium</option>
                            </select>
                        </div>
                        <div>
                            <label for="warna_frame" class="block text-sm font-medium text-gray-700">Warna Frame</label>
                            <input type="text" name="warna_frame" id="warna_frame" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="handlebar" class="block text-sm font-medium text-gray-700">Handlebar</label>
                            <select name="handlebar" id="handlebar" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Pilih Handlebar</option>
                                <option value="Drop Bar">Drop Bar</option>
                                <option value="Flat Bar">Flat Bar</option>
                                <option value="Riser Bar">Riser Bar</option>
                                <option value="Bullhorn">Bullhorn</option>
                            </select>
                        </div>
                        <div>
                            <label for="sadel" class="block text-sm font-medium text-gray-700">Sadel</label>
                            <select name="sadel" id="sadel" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Pilih Sadel</option>
                                <option value="Racing">Racing</option>
                                <option value="Comfort">Comfort</option>
                                <option value="Gel">Gel</option>
                                <option value="Leather">Leather</option>
                            </select>
                        </div>
                        <div>
                            <label for="ban" class="block text-sm font-medium text-gray-700">Ban</label>
                            <select name="ban" id="ban" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Pilih Ban</option>
                                <option value="Road">Road</option>
                                <option value="Mountain">Mountain</option>
                                <option value="Hybrid">Hybrid</option>
                                <option value="Gravel">Gravel</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Referensi Gambar -->
                <div class="space-y-4">
                    <h2 class="text-xl font-semibold text-gray-900">Referensi Gambar</h2>
                    <div>
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Upload Gambar Referensi</label>
                        <input type="file" name="gambar" id="gambar" accept="image/*"
                            class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>
                </div>

                <!-- Catatan Tambahan -->
                <div class="space-y-4">
                    <h2 class="text-xl font-semibold text-gray-900">Catatan Tambahan</h2>
                    <div>
                        <label for="catatan" class="block text-sm font-medium text-gray-700">Catatan atau Spesifikasi Khusus</label>
                        <textarea name="catatan" id="catatan" rows="4"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Kirim Pesanan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection