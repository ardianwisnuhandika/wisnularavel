@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Edit Produk</h1>
        <a href="{{ route('products.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm font-semibold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Kembali
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
        <form id="productForm" action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Produk</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $product->nama) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary @error('nama') border-red-500 @enderror" required>
                @error('nama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="harga" class="block text-gray-700 font-semibold mb-2">Harga</label>
                    <input type="number" name="harga" id="harga" value="{{ old('harga', $product->harga) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary @error('harga') border-red-500 @enderror" required>
                    @error('harga')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="stok" class="block text-gray-700 font-semibold mb-2">Stok</label>
                    <input type="number" name="stok" id="stok" value="{{ old('stok', $product->stok) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary @error('stok') border-red-500 @enderror" required>
                    @error('stok')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary @error('deskripsi') border-red-500 @enderror" required>{{ old('deskripsi', $product->deskripsi) }}</textarea>
                @error('deskripsi')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="kategori" class="block text-gray-700 font-semibold mb-2">Kategori</label>
                <select name="kategori" id="kategori" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary @error('kategori') border-red-500 @enderror" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Fixie" {{ old('kategori', $product->kategori) == 'Fixie' ? 'selected' : '' }}>Fixie</option>
                    <option value="Road Bike" {{ old('kategori', $product->kategori) == 'Road Bike' ? 'selected' : '' }}>Road Bike</option>
                </select>
                @error('kategori')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700 font-semibold mb-2">Gambar Produk</label>
                @if($product->gambar)
                <div class="mb-2">
                    <img src="{{ Storage::url($product->gambar) }}" alt="{{ $product->nama }}" class="h-32 w-32 object-cover rounded border">
                    <p class="text-gray-500 text-sm mt-1">Gambar saat ini</p>
                </div>
                @endif
                <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary @error('gambar') border-red-500 @enderror">
                <p class="text-gray-500 text-sm mt-1">Format: JPG, PNG, GIF (Maks: 2MB). Kosongkan jika tidak ingin mengubah gambar.</p>
                @error('gambar')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-lg font-semibold">
                    Update Produk
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    // Form validation
    function validateForm() {
        let isValid = true;
        let errorMessage = '';
        let errorFields = [];
        
        // Validate name
        const nama = document.getElementById('nama').value.trim();
        if (nama.length < 3) {
            errorMessage += '- Nama produk minimal 3 karakter\n';
            errorFields.push('nama');
            isValid = false;
        }
        
        // Validate price
        const harga = document.getElementById('harga').value;
        if (harga <= 0) {
            errorMessage += '- Harga produk harus lebih dari 0\n';
            errorFields.push('harga');
            isValid = false;
        }
        
        // Validate stock
        const stok = document.getElementById('stok').value;
        if (stok < 0) {
            errorMessage += '- Stok tidak boleh negatif\n';
            errorFields.push('stok');
            isValid = false;
        }
        
        // Validate description
        const deskripsi = document.getElementById('deskripsi').value.trim();
        if (deskripsi.length < 20) {
            errorMessage += '- Deskripsi produk minimal 20 karakter\n';
            errorFields.push('deskripsi');
            isValid = false;
        }
        
        // Validate category
        const kategori = document.getElementById('kategori').value;
        if (!kategori) {
            errorMessage += '- Kategori harus dipilih\n';
            errorFields.push('kategori');
            isValid = false;
        }
        
        if (!isValid) {
            // Highlight error fields
            errorFields.forEach(field => {
                const element = document.getElementById(field);
                element.classList.add('border-red-500');
                element.classList.add('bg-red-50');
                
                // Auto remove highlight after 3 seconds
                setTimeout(() => {
                    element.classList.remove('border-red-500');
                    element.classList.remove('bg-red-50');
                }, 3000);
            });
            
            alert(errorMessage);
            return false;
        }
        
        return true;
    }
</script>
@endpush
@endsection