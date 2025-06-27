@extends('layouts.app')

@section('content')
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <h1 class="text-4xl font-bold mb-4 hover-pulse">Kenapa GO WIZ?</h1>
                <p class="text-gray-600 max-w-2xl mx-auto animate-fade-in-up animation-delay-200">Kami menghadirkan sepeda premium dengan desain minimalis dan teknologi terkini untuk pengalaman berkendara yang tak tertandingi.</p>
            </div>

            <!-- Two Column Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                <!-- Brand Story -->
                <div class="space-y-6 animate-fade-in-up animation-delay-400">
                    <h2 class="text-3xl font-bold hover-pulse">Cerita Kami</h2>
                    <div class="space-y-4 text-gray-600">
                        <p class="transform hover:translate-x-2 transition-transform duration-300">
                            GO WIZ lahir dari passion kami terhadap sepeda dan desain. Kami percaya bahwa sepeda bukan sekadar alat transportasi, 
                            tetapi juga ekspresi gaya hidup dan kepribadian.
                        </p>
                        <p class="transform hover:translate-x-2 transition-transform duration-300">
                            Dengan fokus pada sepeda Fixie dan Roadbike, kami menghadirkan produk berkualitas tinggi yang menggabungkan 
                            estetika modern dengan performa unggul. Setiap detail dirancang dengan cermat untuk memberikan pengalaman 
                            berkendara yang optimal.
                        </p>
                        <p class="transform hover:translate-x-2 transition-transform duration-300">
                            Kami berkomitmen untuk terus berinovasi dan menghadirkan produk terbaik bagi para penggemar sepeda di Indonesia.
                        </p>
                    </div>

                    <!-- Values -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group hover:bg-accent/5 transform hover:translate-y-1">
                            <div class="w-12 h-12 bg-accent/20 rounded-lg flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform duration-300">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 hover-pulse">Kualitas</h3>
                            <p class="text-gray-600">Menggunakan material dan komponen terbaik untuk performa maksimal</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group hover:bg-accent/5 transform hover:translate-y-1">
                            <div class="w-12 h-12 bg-accent/20 rounded-lg flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform duration-300">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 hover-pulse">Desain</h3>
                            <p class="text-gray-600">Desain minimalis dan modern yang timeless</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group hover:bg-accent/5 transform hover:translate-y-1">
                            <div class="w-12 h-12 bg-accent/20 rounded-lg flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform duration-300">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 hover-pulse">Inovasi</h3>
                            <p class="text-gray-600">Terus berinovasi untuk menghadirkan teknologi terkini</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group hover:bg-accent/5 transform hover:translate-y-1">
                            <div class="w-12 h-12 bg-accent/20 rounded-lg flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform duration-300">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 hover-pulse">Layanan</h3>
                            <p class="text-gray-600">Layanan pelanggan yang responsif dan profesional</p>
                        </div>
                    </div>
                </div>

                <!-- Lifestyle Illustration -->
                <div class="relative animate-fade-in-up animation-delay-600">
                    <img src="/images/fixie-rider.jpg" alt="Cycling Lifestyle" class="w-full h-[600px] object-cover rounded-xl transform hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent rounded-xl flex items-end">
                        <div class="p-8 text-white">
                            <h3 class="text-2xl font-bold mb-2 hover-pulse">Gaya Hidup Bersepeda</h3>
                            <p class="text-gray-200 animate-fade-in-up animation-delay-800">Bergabunglah dengan komunitas pesepeda yang stylish dan aktif</p>
                        </div>
                    </div>
                    <!-- Floating Elements -->
                    <div class="absolute top-8 right-8 bg-accent text-primary p-4 rounded-xl shadow-lg animate-float hover:rotate-3 transition-transform duration-300">
                        <p class="text-2xl font-bold">10+</p>
                        <p class="text-sm">Years of Excellence</p>
                    </div>
                    <div class="absolute bottom-8 left-8 bg-white p-4 rounded-xl shadow-lg animate-float animation-delay-200 hover:rotate-3 transition-transform duration-300">
                        <p class="text-2xl font-bold text-primary">1000+</p>
                        <p class="text-sm text-gray-600">Happy Customers</p>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="mt-20 text-center animate-fade-in-up animation-delay-1000">
                <h2 class="text-3xl font-bold mb-12 hover-pulse">Tim Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group transform hover:translate-y-2">
                        <div class="relative overflow-hidden rounded-full w-32 h-32 mx-auto mb-4">
                            <img src="/images/team-1.jpg" alt="Team Member" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <h3 class="text-xl font-semibold mb-1 hover-pulse">Ardian Wisnu Handika</h3>
                        <p class="text-gray-600">Founder & CEO</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group transform hover:translate-y-2">
                        <div class="relative overflow-hidden rounded-full w-32 h-32 mx-auto mb-4">
                            <img src="/images/team-2.jpg" alt="Team Member" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <h3 class="text-xl font-semibold mb-1 hover-pulse">M. Kanzul K.I</h3>
                        <p class="text-gray-600">Head of Design</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group transform hover:translate-y-2">
                        <div class="relative overflow-hidden rounded-full w-32 h-32 mx-auto mb-4">
                            <img src="/images/sugi-revisi.png" alt="Team Member" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <h3 class="text-xl font-semibold mb-1 hover-pulse">M. Farid</h3>
                        <p class="text-gray-600">Technical Director</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effect to team cards
            const teamCards = document.querySelectorAll('.group');
            teamCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.classList.add('hover:translate-y-2');
                });
                
                card.addEventListener('mouseleave', function() {
                    this.classList.remove('hover:translate-y-2');
                });
            });
        });
    </script>
    @endpush
@endsection 