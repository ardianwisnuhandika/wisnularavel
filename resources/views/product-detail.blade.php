@extends('layouts.app')

@section('content')
<div class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <div class="flex items-center text-sm text-gray-600 mb-8">
            <a href="/" class="hover:text-primary">Home</a>
            <span class="mx-2">/</span>
            <a href="/products" class="hover:text-primary">Produk</a>
            <span class="mx-2">/</span>
            <span class="text-gray-900">GO WIZ Fixie Tsunami</span>
        </div>

        <!-- Product Detail -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden animate-fade-in-up">
            <div class="md:flex">
                <!-- Product Image Section -->
                <div class="md:w-1/2">
                    <div class="relative h-96 md:h-full overflow-hidden group">
                        <img src="/images/fixie-tsunami.jpg" alt="GO WIZ Fixie Tsunami" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold animate-bounce">
                            Fixie
                        </div>
                    </div>
                </div>
                
                <!-- Product Info Section -->
                <div class="md:w-1/2 p-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-4 hover-pulse">GO WIZ Fixie Tsunami</h1>
                    
                    <div class="flex items-center mb-6">
                        <div class="flex text-accent">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.799-2.034c-.784-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.799-2.034c-.784-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.799-2.034c-.784-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.799-2.034c-.784-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.799-2.034c-.784-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600 ml-2">(27 reviews)</span>
                    </div>
                    
                    <div class="mb-6">
                        <span class="text-3xl font-bold text-primary">Rp 5.999.000</span>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Deskripsi</h3>
                        <p class="text-gray-600 mb-4">
                            Sepeda Fixie premium dengan frame aluminium alloy. GO WIZ Fixie Tsunami adalah pilihan tepat bagi penikmat sepeda urban yang menginginkan kecepatan dan gaya.
                        </p>
                        <p class="text-gray-600">
                            Didesain dengan ergonomi terbaik, sepeda ini memberikan performa optimal baik untuk penggunaan harian maupun untuk perjalanan jarak jauh. Frame aluminium alloy yang ringan namun kuat membuat sepeda ini mudah untuk dikendarai.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="font-semibold text-gray-800">Berat</div>
                            <div class="text-gray-600">7.8 kg</div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="font-semibold text-gray-800">Frame Material</div>
                            <div class="text-gray-600">Aluminium Alloy</div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="font-semibold text-gray-800">Ukuran Roda</div>
                            <div class="text-gray-600">700c</div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="font-semibold text-gray-800">Warna</div>
                            <div class="text-gray-600">Matte Black</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="w-24">
                            <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Jumlah</label>
                            <input type="number" id="quantity" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" value="1" min="1">
                        </div>
                        <div>
                            <span class="block text-sm font-medium text-gray-700 mb-1">Stok</span>
                            <span class="text-green-600 font-semibold">Tersedia (15)</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <button class="bg-primary hover:bg-primary/90 text-white font-semibold py-3 px-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 hover-shake flex-1 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            Tambah ke Keranjang
                        </button>
                        <button class="bg-accent hover:bg-accent/90 text-primary font-semibold py-3 px-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 hover-shake flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                            Wishlist
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Related Products -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-gray-800 mb-8">Produk Terkait</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Related Product 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden interactive-card">
                    <div class="relative overflow-hidden group">
                        <img src="/images/fixie-cervelo.jpg" alt="Fixie Bike" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute top-4 left-4 bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">
                            Fixie
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">GO WIZ Fixie Cervélo</h3>
                        <p class="text-gray-600 mb-4">Fixie stylish untuk gaya urban</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-primary">Rp 99.500.000</span>
                            <a href="/products/fixie-urban" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 transition-all duration-300 transform hover:scale-105">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Related Product 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden interactive-card">
                    <div class="relative overflow-hidden group">
                        <img src="/images/fixie-look.jpg" alt="Fixie Bike" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute top-4 left-4 bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">
                            Fixie
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">GO WIZ Fixie Look</h3>
                        <p class="text-gray-600 mb-4">Desain aerodinamis, rangka full carbon</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-primary">Rp 68.499.000</span>
                            <a href="/products/fixie-classic" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 transition-all duration-300 transform hover:scale-105">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Related Product 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden interactive-card">
                    <div class="relative overflow-hidden group">
                        <img src="/images/roadbike-1.jpg" alt="Road Bike" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute top-4 left-4 bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">
                            Roadbike
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">GO WIZ Road Cervélo P5</h3>
                        <p class="text-gray-600 mb-4">Aerodinamis dan efisien</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-primary">Rp 200.999.000</span>
                            <a href="/products/road-elite" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 transition-all duration-300 transform hover:scale-105">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 