@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-12">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Edit Profil</h2>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div class="flex flex-col items-center">
                @if($user->profile_picture)
                    <img src="{{ Storage::url($user->profile_picture) }}" alt="Foto Profil" class="w-24 h-24 rounded-full object-cover mb-2 border-4 border-primary">
                @else
                    <div class="w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center mb-2 text-2xl text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                @endif
                <input type="file" name="profile_picture" class="mt-2 text-sm text-gray-500">
                <p class="text-xs text-gray-400 mt-1">Format: JPG, PNG, Maks: 2MB</p>
            </div>
            <div>
                <label class="block mb-1 font-semibold">Nama</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>
            <div>
                <label class="block mb-1 font-semibold">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>
            <div>
                <label class="block mb-1 font-semibold">Password Baru <span class="text-xs text-gray-400">(Opsional)</span></label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label class="block mb-1 font-semibold">Konfirmasi Password Baru</label>
                <input type="password" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            @if($errors->any())
                <div class="text-red-500 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif
            <div class="flex justify-between mt-6">
                <a href="{{ route('profile.show') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-gray-700 transition">Batal</a>
                <button type="submit" class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-primary/90 transition">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection 