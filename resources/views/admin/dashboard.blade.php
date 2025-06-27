@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Products -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Total Produk</p>
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white">24</h3>
                </div>
                <div class="p-3 bg-accent/10 rounded-lg">
                    <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-sm text-green-500">+12% dari bulan lalu</span>
            </div>
        </div>

        <!-- Total Orders -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Total Pesanan</p>
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white">156</h3>
                </div>
                <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-sm text-green-500">+8% dari bulan lalu</span>
            </div>
        </div>

        <!-- Revenue -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Pendapatan</p>
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white">Rp 45.2M</h3>
                </div>
                <div class="p-3 bg-green-100 dark:bg-green-900 rounded-lg">
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-sm text-green-500">+15% dari bulan lalu</span>
            </div>
        </div>

        <!-- Customers -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Pelanggan</p>
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white">892</h3>
                </div>
                <div class="p-3 bg-purple-100 dark:bg-purple-900 rounded-lg">
                    <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-sm text-green-500">+5% dari bulan lalu</span>
            </div>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg">
        <div class="p-6 border-b dark:border-gray-700">
            <h2 class="text-xl font-bold text-gray-800 dark:text-white">Pesanan Terbaru</h2>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-left text-sm text-gray-600 dark:text-gray-400">
                            <th class="pb-4">ID</th>
                            <th class="pb-4">Pelanggan</th>
                            <th class="pb-4">Produk</th>
                            <th class="pb-4">Total</th>
                            <th class="pb-4">Status</th>
                            <th class="pb-4">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="border-t dark:border-gray-700">
                            <td class="py-4">#ORD-001</td>
                            <td class="py-4">John Doe</td>
                            <td class="py-4">GO WIZ Fixie Pro</td>
                            <td class="py-4">Rp 4.999.000</td>
                            <td class="py-4">
                                <span class="px-2 py-1 text-xs font-semibold text-green-500 bg-green-100 dark:bg-green-900 rounded-full">
                                    Selesai
                                </span>
                            </td>
                            <td class="py-4">2024-03-21</td>
                        </tr>
                        <tr class="border-t dark:border-gray-700">
                            <td class="py-4">#ORD-002</td>
                            <td class="py-4">Jane Smith</td>
                            <td class="py-4">GO WIZ Road Elite</td>
                            <td class="py-4">Rp 8.999.000</td>
                            <td class="py-4">
                                <span class="px-2 py-1 text-xs font-semibold text-yellow-500 bg-yellow-100 dark:bg-yellow-900 rounded-full">
                                    Proses
                                </span>
                            </td>
                            <td class="py-4">2024-03-20</td>
                        </tr>
                        <tr class="border-t dark:border-gray-700">
                            <td class="py-4">#ORD-003</td>
                            <td class="py-4">Mike Johnson</td>
                            <td class="py-4">GO WIZ Fixie Urban</td>
                            <td class="py-4">Rp 3.999.000</td>
                            <td class="py-4">
                                <span class="px-2 py-1 text-xs font-semibold text-blue-500 bg-blue-100 dark:bg-blue-900 rounded-full">
                                    Dikirim
                                </span>
                            </td>
                            <td class="py-4">2024-03-19</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="p-6 border-t dark:border-gray-700">
            <a href="/admin/orders" class="text-accent hover:text-accent/80 font-semibold">Lihat Semua Pesanan →</a>
        </div>
    </div>
@endsection 