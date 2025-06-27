@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Detail Produk</h1>
        <div class="flex space-x-2">
            <a href="{{ route('products.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm font-semibold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali
            </a>
            <a href="{{ route('products.edit', $product) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-semibold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Edit
            </a>
        </div>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="md:flex">
            <div class="md:w-1/3 p-6 flex items-center justify-center bg-gray-50">
                @if($product->gambar)
                <img src="{{ Storage::url($product->gambar) }}" alt="{{ $product->nama }}" class="max-w-full h-auto rounded-lg shadow-md">
                @else
                <div class="h-64 w-64 bg-gray-200 rounded-lg flex items-center justify-center">
                    <span class="text-gray-500">Tidak ada gambar</span>
                </div>
                @endif
            </div>
            <div class="md:w-2/3 p-6">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $product->nama }}</h2>
                    <div class="flex items-center space-x-4 mb-4">
                        <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                        <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Stok: {{ $product->stok }}</span>
                    </div>
                    <div class="text-gray-700">
                        <h3 class="font-semibold mb-2">Deskripsi</h3>
                        <p class="text-gray-600 whitespace-pre-line">{{ $product->deskripsi }}</p>
                    </div>
                </div>
                
                <div class="border-t border-gray-200 pt-4">
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <p>ID: {{ $product->id }}</p>
                            <p>Dibuat: {{ $product->created_at->format('d M Y H:i') }}</p>
                            <p>Diupdate: {{ $product->updated_at->format('d M Y H:i') }}</p>
                        </div>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-semibold flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 