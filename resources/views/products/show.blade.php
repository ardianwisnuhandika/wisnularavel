@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Tombol Kembali -->
    <div class="mb-6">
        <a href="{{ route('products.user.index') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900 transition-colors duration-200">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali ke Daftar Produk
        </a>
    </div>

    <!-- Breadcrumb -->
    <nav class="flex mb-8 text-sm text-gray-600">
        <a href="/" class="hover:text-gray-900">Home</a>
        <span class="mx-2">/</span>
        <a href="{{ route('products.user.index') }}" class="hover:text-gray-900">Produk</a>
        <span class="mx-2">/</span>
        <span class="text-gray-900">{{ $product->nama }}</span>
    </nav>

    <!-- Detail Produk -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <!-- Gambar Produk -->
        <div class="relative group">
            <img src="{{ Storage::url($product->gambar) }}" alt="{{ $product->nama }}" 
                 class="w-full h-auto rounded-lg shadow-lg transform transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-opacity duration-300 rounded-lg"></div>
            <div class="absolute top-4 left-4 bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">
                {{ $product->kategori }}
            </div>
        </div>

        <!-- Informasi Produk -->
        <div class="space-y-6">
            <h1 class="text-3xl font-bold text-gray-900">{{ $product->nama }}</h1>
            <div class="text-2xl font-semibold text-blue-600">Rp {{ number_format($product->harga, 0, ',', '.') }}</div>
            
            <!-- Status Stok -->
            <div class="flex items-center">
                <span class="px-3 py-1 text-sm font-semibold {{ $product->stok > 0 ? 'text-green-800 bg-green-100' : 'text-red-800 bg-red-100' }} rounded-full">
                    {{ $product->stok > 0 ? 'Stok Tersedia' : 'Stok Habis' }}
                </span>
            </div>

            <!-- Deskripsi -->
            <div class="prose max-w-none">
                <h3 class="text-lg font-semibold mb-2">Deskripsi</h3>
                <p class="text-gray-600">{{ $product->deskripsi }}</p>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex space-x-4">
                <button class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-primary/90 transition-all duration-300 transform hover:scale-105 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Beli Sekarang
                </button>
                <button class="border border-primary text-primary px-6 py-3 rounded-lg hover:bg-primary/10 transition-all duration-300 transform hover:scale-105 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    Wishlist
                </button>
            </div>
        </div>
    </div>

    <!-- Produk Terkait -->
    @if($relatedProducts->count() > 0)
    <div class="mt-16">
        <h2 class="text-2xl font-bold mb-8">Produk Terkait</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($relatedProducts as $relatedProduct)
            <a href="{{ route('products.user.show', $relatedProduct->slug) }}" class="group">
                <div class="relative overflow-hidden rounded-lg shadow-lg transition-transform duration-300 group-hover:scale-105">
                    <img src="{{ Storage::url($relatedProduct->gambar) }}" alt="{{ $relatedProduct->nama }}" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-opacity duration-300"></div>
                    <div class="p-4 bg-white">
                        <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors duration-200">{{ $relatedProduct->nama }}</h3>
                        <p class="text-blue-600 font-medium">Rp {{ number_format($relatedProduct->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    @endif
</div>

@push('styles')
<style>
    .prose {
        max-width: none;
    }
    .prose p {
        margin-top: 0;
    }
</style>
@endpush
@endsection 