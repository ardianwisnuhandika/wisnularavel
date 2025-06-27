@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center bg-primary text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="/images/hero-bike.jpg" alt="GO WIZ Bicycle" class="w-full h-full object-cover opacity-50 transform scale-105 transition-transform duration-10000 hover:scale-110 animate-pulse">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-transparent"></div>
        </div>
        <div class="container mx-auto px-4 text-left z-10">
            <div class="max-w-2xl">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in-up">
                    <span class="block hover-float">Ride Fast.</span>
                    <span class="block text-accent hover-pulse">Ride Smart.</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-200 animate-fade-in-up animation-delay-200">GO WIZ - Where Performance Meets Style</p>
                <div class="flex gap-4 animate-fade-in-up animation-delay-400">
                    <a href="/products" class="inline-block bg-accent text-primary px-8 py-4 rounded-lg text-lg font-semibold hover:bg-accent/90 transition-all duration-300 transform hover:scale-105 hover-shake">
                        Lihat Produk
                    </a>
                    <a href="/custom-bike" class="inline-block border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-primary transition-all duration-300 hover-float">
                        Custom Bike
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 hover:bg-gray-50 rounded-xl transition-all duration-300 interactive-card">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 interactive-icon">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 animate-slide-in-right">High Performance</h3>
                    <p class="text-gray-600">Engineered for maximum speed and efficiency</p>
                </div>
                <div class="text-center p-6 hover:bg-gray-50 rounded-xl transition-all duration-300 interactive-card">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 interactive-icon">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 animate-slide-in-right animation-delay-200">Premium Quality</h3>
                    <p class="text-gray-600">Built with the finest materials and craftsmanship</p>
                </div>
                <div class="text-center p-6 hover:bg-gray-50 rounded-xl transition-all duration-300 interactive-card">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 interactive-icon">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 animate-slide-in-right animation-delay-400">Stylish Design</h3>
                    <p class="text-gray-600">Modern aesthetics that turn heads</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-fade-in-up">Produk Unggulan</h2>
            <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto animate-fade-in-up animation-delay-200">Temukan koleksi sepeda premium kami yang dirancang untuk memberikan pengalaman berkendara yang tak tertandingi</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300 interactive-card">
                    <div class="relative overflow-hidden">
                        <img src="/images/fixie-tsunami.jpg" alt="Fixie Bike" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 hover-pulse">GO WIZ Fixie Tsunami</h3>
                        <p class="text-gray-600 mb-4">Sepeda Fixie premium dengan frame aluminium alloy</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">Rp 5.999.000</span>
                            <a href="/products/fixie-pro" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 transition-all duration-300 transform hover:scale-105 hover-shake">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300 interactive-card">
                    <div class="relative overflow-hidden">
                        <img src="/images/roadbike-1.jpg" alt="Road Bike" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 hover-pulse">GO WIZ Road Cervélo P5</h3>
                        <p class="text-gray-600 mb-4">Cervélo P5 Disc mengutamakan aerodinamika dan efisiensi</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">Rp 200.999.000</span>
                            <a href="/products/road-elite" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 transition-all duration-300 transform hover:scale-105 hover-shake">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300 interactive-card">
                    <div class="relative overflow-hidden">
                        <img src="/images/fixie-cervelo.jpg" alt="Fixie Bike" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 hover-pulse">GO WIZ Fixie Cervélo</h3>
                        <p class="text-gray-600 mb-4">Fixie stylish untuk gaya urban</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">Rp 99.999.000</span>
                            <a href="/products/fixie-urban" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 transition-all duration-300 transform hover:scale-105 hover-shake">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Brand -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="relative animate-slide-in-right">
                    <img src="/images/rider.jpg" alt="About GO WIZ" class="rounded-xl shadow-lg hover-float">
                    <div class="absolute -bottom-6 -right-6 bg-accent text-primary p-6 rounded-xl shadow-lg animate-bounce">
                        <p class="text-2xl font-bold">10+</p>
                        <p class="text-sm">Years of Excellence</p>
                    </div>
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-6 animate-fade-in-up">Tentang GO WIZ</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 animate-fade-in-up animation-delay-200">
                        GO WIZ adalah brand sepeda modern yang berfokus pada kualitas, performa, dan gaya. 
                        Kami menghadirkan koleksi sepeda Fixie dan Roadbike premium dengan desain minimalis 
                        dan teknologi terkini.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8 animate-fade-in-up animation-delay-400">
                        Setiap sepeda GO WIZ dirancang untuk memberikan pengalaman berkendara yang tak tertandingi, 
                        menggabungkan estetika modern dengan kinerja unggul.
                    </p>
                    <a href="/about" class="inline-block bg-primary text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-primary/90 transition-all duration-300 transform hover:scale-105 hover-float">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-primary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6 animate-fade-in-up">Siap untuk Memulai Petualangan?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto animate-fade-in-up animation-delay-200">Bergabunglah dengan komunitas GO WIZ dan temukan sepeda sempurna untuk gaya hidup Anda</p>
            <div class="flex justify-center gap-4 animate-fade-in-up animation-delay-400">
                <a href="/products" class="inline-block border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-primary transition-all duration-300 hover-float">
                    Lihat Koleksi
                </a>
            </div>
        </div>
    </section>
@endsection 