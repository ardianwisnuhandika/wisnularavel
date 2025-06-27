@extends('layouts.app')

@section('content')
<div class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Admin CRUD Buttons - only visible to logged-in admin -->
        @auth
        @if(Auth::user()->role == 'admin')
        <div class="bg-white p-4 rounded-lg shadow-md mb-8 animate-fade-in-up">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <h2 class="text-xl font-bold text-primary mb-4 sm:mb-0">Admin Panel - Produk</h2>
                <div class="flex space-x-4">
                    <a href="{{ route('products.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition hover:shadow-lg flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                        Daftar Produk
                    </a>
                    <a href="{{ route('products.create') }}" class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg text-sm font-semibold transition hover:shadow-lg flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Tambah Produk
                    </a>
                </div>
            </div>
        </div>
        @endif
        @endauth

        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Koleksi Sepeda</h1>
            <p class="text-lg text-gray-600">Temukan sepeda impian Anda</p>
        </div>

        <!-- Filter Kategori -->
        <div class="flex justify-center mb-8">
            <div class="inline-flex rounded-lg border border-gray-200 p-1 bg-white shadow-sm">
                <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 active" data-filter="all">
                    Semua
                </button>
                <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200" data-filter="Fixie">
                    Fixie
                </button>
                <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200" data-filter="Roadbike">
                    Roadbike
                </button>
            </div>
        </div>

        <!-- Daftar Produk -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($products as $product)
            <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden interactive-card animate-fade-in-up" data-category="{{ $product->kategori }}">
                <div class="relative overflow-hidden group">
                    <img src="{{ Storage::url($product->gambar) }}" alt="{{ $product->nama }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">
                        {{ $product->kategori }}
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 hover-pulse">{{ $product->nama }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($product->deskripsi, 100) }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-primary">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                        <a href="{{ route('products.user.show', $product->slug) }}" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 transition-all duration-300 transform hover:scale-105 hover-shake">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $products->links() }}
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const productCards = document.querySelectorAll('.product-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Update active state
                filterButtons.forEach(btn => btn.classList.remove('active', 'bg-primary', 'text-white'));
                this.classList.add('active', 'bg-primary', 'text-white');

                const filterValue = this.getAttribute('data-filter');

                // Filter products
                productCards.forEach((card, index) => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'block';
                        card.style.animation = `fadeInUp 0.6s ease-out forwards`;
                        card.style.animationDelay = `${index * 0.1}s`;
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush

@push('styles')
<style>
    .filter-btn.active {
        background-color: var(--primary);
        color: white;
    }
    
    .hover-pulse:hover {
        animation: pulse 1s infinite;
    }
    
    .hover-shake:hover {
        animation: shake 0.5s;
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endpush
@endsection 