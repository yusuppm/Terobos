@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-72 h-72 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8" data-aos="fade-right">
                <div class="space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                        Recycling, Sharing, and Learning 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-500">
                            Robotik Platform
                        </span>
                        Towards Revolution Industry 5.0
                    </h1>
                    
                    <p class="text-lg md:text-xl text-blue-100 leading-relaxed max-w-2xl">
                        We provide environmentally friendly and sustainable robotics learning facilities using recycled materials and the concept of resource sharing to prepare human resources that are capable of operating artificial intelligence-based industry environments.
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Read More
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    
                    <a href="#" class="group inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-blue-900 font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
                        Contact Us
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
            
            <!-- Right Content - Image -->
            <div class="relative" data-aos="fade-left" data-aos-delay="200">
                <div class="relative z-10">
                    <img src="./assets/images/banner-image.png" alt="Robotics Platform" class="w-full h-auto max-w-lg mx-auto drop-shadow-2xl">
                </div>
                
                <!-- Floating Elements -->
                <div class="absolute top-1/4 -left-4 w-20 h-20 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full opacity-20 animate-pulse"></div>
                <div class="absolute bottom-1/4 -right-4 w-16 h-16 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
            </div>
        </div>
    </div>
    
    <!-- Decorative Shape -->
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-r from-blue-600 to-indigo-600 transform skew-y-1 origin-bottom-left"></div>
</section>

<!-- About Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500 rounded-full"></div>
        <div class="absolute bottom-1/4 right-1/4 w-48 h-48 bg-orange-500 rounded-full"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content - Images -->
            <div class="relative" data-aos="fade-right">
                <div class="grid grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 transform hover:scale-105 transition-transform duration-300">
                            <img src="./assets/images/about-image1.png" alt="About Image 1" class="w-full h-auto rounded-xl shadow-lg">
                        </div>
                    </div>
                    <div class="space-y-6 mt-8">
                        <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 transform hover:scale-105 transition-transform duration-300">
                            <img src="./assets/images/about-image2.png" alt="About Image 2" class="w-full h-auto rounded-xl shadow-lg">
                        </div>
                    </div>
                </div>
                
                <!-- Floating Badge -->
                <div class="absolute -top-4 -right-4 bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-6 py-3 rounded-full font-bold shadow-lg">
                    Industry 5.0 Ready
                </div>
            </div>
            
            <!-- Right Content -->
            <div class="space-y-8" data-aos="fade-left" data-aos-delay="200">
                <div class="space-y-4">
                    <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                        About Us
                    </span>
                    
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                        Empowering 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                            People
                        </span>
                    </h2>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Learn robotics with a curriculum designed to face the era of the industrial revolution 5.0. You can design, program, build, and deploy robots in one Rosus learning platform.
                    </p>
                </div>
                
                <!-- Features -->
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 p-6 bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                                <img src="./assets/images/about-customer.png" alt="Support" class="w-6 h-6">
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Free 24 Hours Support</h4>
                            <p class="text-gray-600">We support 24 hours per day to make you feel comfortable</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 p-6 bg-gradient-to-r from-green-50 to-green-100 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center">
                                <img src="./assets/images/about-quality.png" alt="Sustainability" class="w-6 h-6">
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Sustainability Aspect</h4>
                            <p class="text-gray-600">We provide robot components with recycled materials</p>
                        </div>
                    </div>
                </div>
                
                <div class="pt-4">
                    <a href="#" class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Read More
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gradient-to-r from-blue-900 to-indigo-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8" data-aos="fade-up">
            <div class="text-center">
                <div class="text-4xl font-bold text-white mb-2">500+</div>
                <div class="text-blue-200">Students Trained</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-white mb-2">50+</div>
                <div class="text-blue-200">Robot Projects</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-white mb-2">95%</div>
                <div class="text-blue-200">Recycled Materials</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-white mb-2">24/7</div>
                <div class="text-blue-200">Support Available</div>
            </div>
        </div>
    </div>
</section>

@endsection