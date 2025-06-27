@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Tambah Produk Baru</h1>
        <a href="/products" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm font-semibold flex items-center transition duration-300 ease-in-out transform hover:-translate-y-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Kembali
        </a>
    </div>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 border border-gray-200 transition-all duration-300 hover:shadow-xl">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" id="productForm" onsubmit="return validateForm()">
            @csrf
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 space-y-6">
                    <div class="mb-4 group">
                        <label for="nama" class="block text-gray-700 font-semibold mb-2 group-hover:text-primary transition-colors duration-200">Nama Produk</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300 @error('nama') border-red-500 @enderror" placeholder="Masukkan nama produk" required>
                        @error('nama')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div class="group">
                            <label for="harga" class="block text-gray-700 font-semibold mb-2 group-hover:text-primary transition-colors duration-200">Harga (Rp)</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500">Rp</span>
                                </div>
                                <input type="text" name="harga" id="harga" value="{{ old('harga') }}" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300 @error('harga') border-red-500 @enderror" placeholder="0" required>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span id="formattedPrice" class="text-sm text-gray-500"></span>
                                </div>
                            </div>
                            @error('harga')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="group">
                            <label for="stok" class="block text-gray-700 font-semibold mb-2 group-hover:text-primary transition-colors duration-200">Stok Tersedia</label>
                            <div class="relative">
                                <input type="number" name="stok" id="stok" value="{{ old('stok') }}" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300 @error('stok') border-red-500 @enderror" placeholder="0" required>
                            </div>
                            @error('stok')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-4 group">
                        <label for="deskripsi" class="block text-gray-700 font-semibold mb-2 group-hover:text-primary transition-colors duration-200">Deskripsi Produk</label>
                        <textarea name="deskripsi" id="deskripsi" rows="6" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300 @error('deskripsi') border-red-500 @enderror" placeholder="Tuliskan deskripsi lengkap produk di sini..." required>{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <div class="mt-1 text-sm text-gray-500">
                            <span id="char-count">0</span> karakter (min. 50 karakter direkomendasikan)
                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-1">
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 transition-all duration-300 hover:shadow-md">
                        <label for="gambar" class="block text-gray-700 font-semibold mb-2 group-hover:text-primary transition-colors duration-200">Gambar Produk</label>
                        
                        <div class="mb-4 text-center">
                            <div id="preview-container" class="border-2 border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center bg-white h-60 mb-3 transition-all duration-300 hover:border-primary hover:bg-gray-50 cursor-pointer">
                                <img id="image-preview" src="" alt="Preview" class="max-h-full max-w-full hidden object-contain transition-opacity duration-300">
                                <div id="upload-prompt" class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Klik untuk memilih gambar
                                    </p>
                                    <p class="text-xs text-gray-500 mt-2">PNG, JPG, GIF hingga 2MB</p>
                                </div>
                            </div>
                            
                            <div class="relative">
                                <input type="file" name="gambar" id="gambar" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                <button type="button" class="w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary transition-all duration-300 hover:shadow">
                                    Pilih Gambar
                                </button>
                            </div>
                            @error('gambar')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="text-xs text-gray-500 mt-3">
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Format yang didukung: JPG, PNG, GIF</li>
                                <li>Ukuran maksimal: 2MB</li>
                                <li>Resolusi optimal: 800x800 pixel</li>
                                <li>Gunakan gambar dengan latar belakang putih</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-end mt-8">
                <button type="button" onclick="resetForm()" class="bg-white border border-gray-300 text-gray-700 px-6 py-3 rounded-lg font-semibold mr-2 hover:bg-gray-50 transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow">
                    Reset
                </button>
                <button type="submit" class="bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-lg font-semibold flex items-center transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    // Preview image
    const imageInput = document.getElementById('gambar');
    const imagePreview = document.getElementById('image-preview');
    const uploadPrompt = document.getElementById('upload-prompt');
    const previewContainer = document.getElementById('preview-container');
    
    // Click on preview container to open file picker
    previewContainer.addEventListener('click', function() {
        imageInput.click();
    });
    
    imageInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('hidden');
                uploadPrompt.classList.add('hidden');
                
                // Fade in animation
                imagePreview.style.opacity = 0;
                setTimeout(function() {
                    imagePreview.style.opacity = 1;
                }, 50);
            }
            
            reader.readAsDataURL(this.files[0]);
        }
    });
    
    // Character counter for description
    const descriptionField = document.getElementById('deskripsi');
    const charCount = document.getElementById('char-count');
    
    // Set initial character count when page loads
    document.addEventListener('DOMContentLoaded', function() {
        const initialCount = descriptionField.value.length;
        charCount.textContent = initialCount;
        
        if (initialCount > 0) {
            if (initialCount < 50) {
                charCount.classList.add('text-red-500');
            } else {
                charCount.classList.add('text-green-500');
            }
        }
        
        // Add feedback animations to form fields
        const formInputs = document.querySelectorAll('input, textarea');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('scale-105');
                setTimeout(() => {
                    this.parentElement.classList.remove('scale-105');
                }, 200);
            });
        });
    });
    
    descriptionField.addEventListener('input', function() {
        const count = this.value.length;
        charCount.textContent = count;
        
        if (count < 50) {
            charCount.classList.add('text-red-500');
            charCount.classList.remove('text-green-500');
        } else {
            charCount.classList.add('text-green-500');
            charCount.classList.remove('text-red-500');
        }
    });
    
    // Reset form
    function resetForm() {
        // Add shake animation to form
        const form = document.getElementById('productForm');
        form.classList.add('animate-shake');
        setTimeout(() => {
            form.classList.remove('animate-shake');
        }, 500);
        
        document.getElementById('productForm').reset();
        imagePreview.classList.add('hidden');
        uploadPrompt.classList.remove('hidden');
        charCount.textContent = '0';
        charCount.classList.remove('text-green-500', 'text-red-500');
    }
    
    // Format currency
    const hargaInput = document.getElementById('harga');
    const formattedPrice = document.getElementById('formattedPrice');
    
    function formatRupiah(angka) {
        let number_string = angka.replace(/[^,\d]/g, '').toString();
        let split = number_string.split(',');
        let sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        let ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        return split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    }
    
    hargaInput.addEventListener('input', function() {
        // Remove non-numeric characters
        this.value = this.value.replace(/[^0-9]/g, '');
        
        // Show formatted value
        if (this.value) {
            const formatted = formatRupiah(this.value);
            formattedPrice.textContent = `(${formatted})`;
        } else {
            formattedPrice.textContent = '';
        }
    });
    
    // Initialize formatted value on page load
    document.addEventListener('DOMContentLoaded', function() {
        if (hargaInput.value) {
            const formatted = formatRupiah(hargaInput.value);
            formattedPrice.textContent = `(${formatted})`;
        }
    });
    
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
            
            // Show custom error notification instead of alert
            showNotification(errorMessage, 'error');
            
            // Shake form on error
            const form = document.getElementById('productForm');
            form.classList.add('animate-shake');
            setTimeout(() => {
                form.classList.remove('animate-shake');
            }, 500);
        } else {
            // Show loading effect on submit button
            const submitBtn = document.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<svg class="animate-spin h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Menyimpan...';
            submitBtn.disabled = true;
            showNotification('Menyimpan produk...', 'info');
        }
        
        return isValid;
    }
    
    // Show notification
    function showNotification(message, type = 'info') {
        // Create notification container if it doesn't exist
        let container = document.getElementById('notification-container');
        if (!container) {
            container = document.createElement('div');
            container.id = 'notification-container';
            container.className = 'fixed top-4 right-4 z-50 flex flex-col space-y-4 items-end';
            document.body.appendChild(container);
        }
        
        // Create notification
        const notification = document.createElement('div');
        notification.className = `transform transition-all duration-300 translate-x-full opacity-0 flex items-center p-4 mb-4 rounded-lg shadow-lg max-w-xs ${
            type === 'error' ? 'bg-red-500 text-white' : 
            type === 'success' ? 'bg-green-500 text-white' : 
            'bg-blue-500 text-white'
        }`;
        
        // Add icon based on type
        let icon = '';
        if (type === 'error') {
            icon = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>`;
        } else if (type === 'success') {
            icon = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>`;
        } else {
            icon = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>`;
        }
        
        // Format message - if it contains newlines, format as list
        let formattedMessage = message;
        if (message.includes('\n')) {
            formattedMessage = message.split('\n').filter(line => line.trim() !== '').map(line => 
                `<li>${line.replace(/^-\s+/, '')}</li>`
            ).join('');
            formattedMessage = `<ul class="list-disc pl-5">${formattedMessage}</ul>`;
        }
        
        notification.innerHTML = `
            <div class="flex items-start">
                ${icon}
                <div>${formattedMessage}</div>
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 text-white hover:text-gray-200 focus:outline-none" onclick="this.parentElement.remove()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        `;
        
        container.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.classList.remove('translate-x-full', 'opacity-0');
        }, 10);
        
        // Automatically remove after 5 seconds
        setTimeout(() => {
            notification.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 5000);
    }
    
    // Check for flash messages on page load
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
            showNotification("{{ session('success') }}", 'success');
        @endif
        
        @if(session('error'))
            showNotification("{{ session('error') }}", 'error');
        @endif
    });
</script>
@endpush

<style>
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
        20%, 40%, 60%, 80% { transform: translateX(5px); }
    }
    
    .animate-shake {
        animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
    }
    
    .scale-105 {
        transform: scale(1.05);
        transition: transform 0.2s ease;
    }
</style>
@endsection 