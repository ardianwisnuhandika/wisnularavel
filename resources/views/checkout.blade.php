@extends('layouts.app')

@section('content')
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold mb-4">Checkout</h1>
                    <p class="text-gray-600">Lengkapi informasi pembayaran Anda</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    <!-- Order Summary -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                            <h2 class="text-2xl font-bold mb-6">Ringkasan Pesanan</h2>
                            
                            <!-- Product List -->
                            <div class="space-y-4 mb-6">
                                <div class="flex items-center justify-between py-4 border-b">
                                    <div class="flex items-center">
                                        <img src="/images/fixie-1.jpg" alt="Fixie Bike" class="w-20 h-20 object-cover rounded-lg">
                                        <div class="ml-4">
                                            <h3 class="font-semibold">GO WIZ Fixie Pro</h3>
                                            <p class="text-gray-600">Warna: Hitam</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-semibold">Rp 4.999.000</p>
                                        <p class="text-gray-600">Qty: 1</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Shipping Information -->
                            <div class="space-y-6">
                                <h3 class="text-xl font-semibold">Informasi Pengiriman</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent">
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat Lengkap</label>
                                        <textarea id="address" name="address" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent"></textarea>
                                    </div>
                                    <div>
                                        <label for="city" class="block text-sm font-medium text-gray-700 mb-1">Kota</label>
                                        <input type="text" id="city" name="city" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent">
                                    </div>
                                    <div>
                                        <label for="postal-code" class="block text-sm font-medium text-gray-700 mb-1">Kode Pos</label>
                                        <input type="text" id="postal-code" name="postal-code" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Summary -->
                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-lg shadow-lg p-8">
                            <h2 class="text-2xl font-bold mb-6">Pembayaran</h2>
                            
                            <!-- Order Summary -->
                            <div class="space-y-4 mb-6">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Subtotal</span>
                                    <span>Rp 4.999.000</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Pengiriman</span>
                                    <span>Rp 150.000</span>
                                </div>
                                <div class="border-t pt-4">
                                    <div class="flex justify-between font-bold">
                                        <span>Total</span>
                                        <span>Rp 5.149.000</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Method -->
                            <div class="space-y-4">
                                <h3 class="font-semibold">Metode Pembayaran</h3>
                                <div class="space-y-2">
                                    <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                                        <input type="radio" name="payment" class="text-accent focus:ring-accent">
                                        <span class="ml-3">Transfer Bank</span>
                                    </label>
                                    <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                                        <input type="radio" name="payment" class="text-accent focus:ring-accent">
                                        <span class="ml-3">E-Wallet</span>
                                    </label>
                                    <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                                        <input type="radio" name="payment" class="text-accent focus:ring-accent">
                                        <span class="ml-3">Kartu Kredit</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Payment Button -->
                            <button class="w-full bg-primary text-white py-4 rounded-lg font-semibold mt-8 hover:bg-primary/90 transition-colors">
                                Bayar Sekarang
                            </button>

                            <!-- Secure Payment Notice -->
                            <p class="text-center text-sm text-gray-500 mt-4">
                                Pembayaran aman dan terenkripsi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 