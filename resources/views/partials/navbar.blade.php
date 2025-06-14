<!-- Navbar -->
<header class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 backdrop-blur-lg border-b border-white/10 shadow-lg ">
    <nav class="container mx-auto px-4 ">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Rosus Logo" class="h-10 w-auto">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="nav-link text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('home') ? 'font-bold text-white' : '' }}">
                    Home
                </a>
                <a href="#about" class="nav-link text-gray-300 hover:text-white transition-colors duration-300">
                    About
                </a>
                <a href="#services" class="nav-link text-gray-300 hover:text-white transition-colors duration-300">
                    Services
                </a>
                <a href="{{ route('projects.index') }}" class="nav-link text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('projects.*') ? 'font-bold text-white' : '' }}">
                    Projects
                </a>
                <a href="{{ route('shop.index') }}" class="nav-link text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('shop.*') ? 'font-bold text-white' : '' }}">
                    Store
                </a>
                <a href="#contact" class="nav-link text-gray-300 hover:text-white transition-colors duration-300">
                    Contact
                </a>   
                
                @auth('customer')
                    <!-- User Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center space-x-2 text-white hover:text-cyan-400 transition-colors duration-300 focus:outline-none">
                            <div class="w-8 h-8 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full flex items-center justify-center">
                                @if(auth('customer')->user()->avatar)
                                    <img src="{{ auth('customer')->user()->avatar_url }}" alt="Avatar" class="w-8 h-8 rounded-full object-cover">
                                @else
                                    <i class="fas fa-user text-sm"></i>
                                @endif
                            </div>
                            <span class="font-medium">{{ auth('customer')->user()->first_name }}</span>
                            <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-300"></i>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div class="absolute right-0 mt-2 w-56 bg-gray-800/95 backdrop-blur-lg rounded-lg shadow-2xl border border-white/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                            <div class="p-4 border-b border-white/10">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full flex items-center justify-center">
                                        @if(auth('customer')->user()->avatar)
                                            <img src="{{ auth('customer')->user()->avatar_url }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover">
                                        @else
                                            <i class="fas fa-user"></i>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="text-white font-medium">{{ auth('customer')->user()->name }}</p>
                                        <p class="text-gray-400 text-sm">{{ auth('customer')->user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <a href="{{ route('auth.profile') }}" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-200">
                                    <i class="fas fa-user-circle mr-3 text-cyan-400"></i>
                                    My Profile
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-200">
                                    <i class="fas fa-shopping-bag mr-3 text-cyan-400"></i>
                                    My Orders
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-200">
                                    <i class="fas fa-heart mr-3 text-cyan-400"></i>
                                    Wishlist
                                </a>
                                <div class="border-t border-white/10 my-2"></div>
                                <form method="POST" action="{{ route('auth.logout') }}">
                                    @csrf
                                    <button type="submit" class="flex items-center w-full px-4 py-2 text-gray-300 hover:text-red-400 hover:bg-white/5 transition-all duration-200">
                                        <i class="fas fa-sign-out-alt mr-3"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Login Button -->
                    <a href="{{ route('auth.login') }}" class="relative group inline-block px-6 py-2 font-semibold text-white border-2 border-cyan-400 rounded-full overflow-hidden transition-all duration-300 hover:bg-cyan-400 hover:text-gray-900 shadow-md hover:shadow-cyan-400/40">
                        <span class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500 via-blue-600 to-indigo-500 opacity-30 blur-sm group-hover:opacity-100 transition-all duration-500"></span>
                        <span class="relative z-10 flex items-center gap-2">
                            <i class="fas fa-robot text-cyan-300 animate-pulse"></i> Login
                        </span>
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="lg:hidden">
                <button id="mobile-menu-toggle" class="text-white focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 px-4 py-6 space-y-4 text-center text-white">
        <a href="{{ route('home') }}" class="block hover:text-blue-400 {{ request()->routeIs('home') ? 'font-bold text-blue-400' : '' }}">Home</a>
        <a href="#about" class="block hover:text-blue-400">About</a>
        <a href="#services" class="block hover:text-blue-400">Services</a>
        <a href="{{ route('projects.index') }}" class="block hover:text-blue-400 {{ request()->routeIs('projects.*') ? 'font-bold text-blue-400' : '' }}">Projects</a>
        <a href="{{ route('shop.index') }}" class="block hover:text-blue-400 {{ request()->routeIs('shop.*') ? 'font-bold text-blue-400' : '' }}">Store</a>
        <a href="#contact" class="block hover:text-blue-400">Contact</a>
        
        @auth('customer')
            <!-- Mobile User Menu -->
            <div class="border-t border-white/20 pt-4 mt-4">
                <div class="flex items-center justify-center space-x-3 mb-4">
                    <div class="w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full flex items-center justify-center">
                        @if(auth('customer')->user()->avatar)
                            <img src="{{ auth('customer')->user()->avatar_url }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover">
                        @else
                            <i class="fas fa-user"></i>
                        @endif
                    </div>
                    <div class="text-left">
                        <p class="text-white font-medium">{{ auth('customer')->user()->first_name }}</p>
                        <p class="text-gray-400 text-sm">{{ auth('customer')->user()->email }}</p>
                    </div>
                </div>
                <a href="{{ route('auth.profile') }}" class="block py-2 px-4 bg-white/5 rounded-lg mb-2 hover:bg-white/10 transition-all duration-300">
                    <i class="fas fa-user-circle mr-2 text-cyan-400"></i>My Profile
                </a>
                <form method="POST" action="{{ route('auth.logout') }}">
                    @csrf
                    <button type="submit" class="w-full py-2 px-4 bg-red-500/20 text-red-400 rounded-lg hover:bg-red-500/30 transition-all duration-300">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </button>
                </form>
            </div>
        @else
            <a href="{{ route('auth.login') }}" class="block bg-cyan-500 text-white py-2 px-4 rounded-full hover:bg-cyan-400 transition-all duration-300 shadow-md hover:shadow-cyan-300/50">
                <i class="fas fa-robot mr-2"></i> Login
            </a>
        @endauth
    </div>
</header>

<!-- Script Toggle Mobile Menu -->
<script>
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!toggleBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>