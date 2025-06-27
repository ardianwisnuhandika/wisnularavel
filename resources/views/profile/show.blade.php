@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-12">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="flex flex-col items-center mb-6">
            @if($user->profile_picture)
                <img src="{{ Storage::url($user->profile_picture) }}" alt="Foto Profil" class="w-32 h-32 rounded-full object-cover mb-4 border-4 border-primary">
            @else
                <div class="w-32 h-32 rounded-full bg-gray-200 flex items-center justify-center mb-4 text-4xl text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
            @endif
            <h2 class="text-2xl font-bold text-gray-900">{{ $user->name }}</h2>
            <p class="text-gray-600">{{ $user->email }}</p>
            <span class="mt-2 px-3 py-1 rounded-full text-xs font-semibold {{ $user->role == 'admin' ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800' }}">
                {{ ucfirst($user->role) }}
            </span>
        </div>
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif
        <div class="flex justify-center gap-4 mt-6">
            <a href="{{ route('profile.edit') }}" class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-primary/90 transition">Edit Profil</a>
            <form action="{{ route('profile.destroy') }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus akun? Semua data Anda akan hilang!')">
                @csrf
                <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-700 transition">Hapus Akun</button>
            </form>
        </div>
    </div>
</div>
@endsection 