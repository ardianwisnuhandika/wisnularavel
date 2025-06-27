@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8 mt-8">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo revisi.png') }}" alt="GO WIZ" class="w-16 h-16">
        </div>
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
        <form method="POST" action="/register" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1">Nama</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" required autofocus>
            </div>
            <div>
                <label class="block mb-1">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>
            <div>
                <label class="block mb-1">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>
            <div>
                <label class="block mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>
            <div>
                <label class="block mb-1">Daftar Sebagai</label>
                <select name="role" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            @if($errors->any())
                <div class="text-red-500 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif
            <button type="submit" class="w-full bg-primary text-white py-2 rounded-lg font-semibold hover:bg-primary/90">Register</button>
        </form>
        <p class="mt-4 text-center text-sm">Sudah punya akun? <a href="/login" class="text-accent hover:underline">Login</a></p>
    </div>
</div>
@endsection 