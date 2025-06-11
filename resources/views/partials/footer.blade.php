<!-- Footer Section -->
<footer class="relative bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 text-white overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-white rounded-full -translate-x-1/2 translate-y-1/2"></div>
    </div>

    <!-- Main Footer Content -->
    <div class="relative z-10 container mx-auto px-4 py-16">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 mb-12">
            <!-- Company Info -->
            <div class="lg:col-span-1 space-y-6" data-aos="fade-right">
                <a href="{{ url('/') }}" class="inline-block">
                    <img src="images/logo.png" alt="Rosus Logo" class="h-12 w-auto">
                </a>
                <p class="text-gray-300 leading-relaxed">
                    Recycling, Sharing, and Learning Robotik Platform Towards Revolution Industry 5.0
                </p>
                
                <!-- Social Links -->
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-white/10 hover:bg-blue-600 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 hover:bg-blue-400 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 hover:bg-blue-700 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 hover:bg-red-600 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Useful Links -->
            <div class="space-y-6" data-aos="fade-up" data-aos-delay="100">
                <h4 class="text-xl font-bold text-white mb-6">Useful Links</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ url('/') }}" class="flex items-center text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-blue-400"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="flex items-center text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-blue-400"></i>
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/services') }}" class="flex items-center text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-blue-400"></i>
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/projects') }}" class="flex items-center text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-blue-400"></i>
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="flex items-center text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-blue-400"></i>
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Our Services -->
            <div class="space-y-6" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-xl font-bold text-white mb-6">Our Services</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="flex items-center text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-green-400"></i>
                            Robotic Learning Platform
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-green-400"></i>
                            Green Robot Component Supplier
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-green-400"></i>
                            Industry 5.0 Training
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-green-400"></i>
                            Sustainability Consulting
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="space-y-6" data-aos="fade-left" data-aos-delay="300">
                <h4 class="text-xl font-bold text-white mb-6">Contact Us</h4>
                <ul class="space-y-4">
                    <li class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-phone text-xs"></i>
                        </div>
                        <div>
                            <a href="tel:+62895802850204" class="text-gray-300 hover:text-white transition-colors">
                                +62 895-8028-50204
                            </a>
                        </div>
                    </li>
                    <li class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-envelope text-xs"></i>
                        </div>
                        <div>
                            <a href="mailto:admin@rosus.my.id" class="text-gray-300 hover:text-white transition-colors">
                                admin@rosus.my.id
                            </a>
                        </div>
                    </li>
                    <li class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-map-marker-alt text-xs"></i>
                        </div>
                        <div>
                            <p class="text-gray-300 leading-relaxed">
                                Daratan, RT 02/RW 06, Tohudan, Colomadu, Karanganyar
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

  
    <!-- Copyright Section -->
    <div class="relative z-10 bg-black/20 border-t border-white/10">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-gray-300 text-center md:text-left">
                    © {{ date('Y') }} Rosus Platform. All Rights Reserved.
                </p>
                
                <div class="flex items-center space-x-6 text-sm text-gray-300">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                    <a href="#" class="hover:text-white transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-green-500"></div>
</footer>