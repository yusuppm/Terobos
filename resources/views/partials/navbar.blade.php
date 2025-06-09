<!-- Navbar -->
<header class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-lg border-b border-gray-200 shadow-sm">
    <nav class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <img src="images/Tajuk (2).png" alt="Rosus Logo" class="h-12 w-auto">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ url('/about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                    About
                </a>
                <a href="{{ url('/services') }}" class="nav-link {{ request()->is('services') ? 'active' : '' }}">
                    Services
                </a>
                <a href="{{ url('/projects') }}" class="nav-link {{ request()->is('projects') ? 'active' : '' }}">
                    Projects
                </a>
                <a href="{{ url('/store') }}" class="nav-link {{ request()->is('store') ? 'active' : '' }}">
                    Store
                </a>
                <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                    Contact
                </a>
                <a href="{{ url('/blog') }}" class="nav-link {{ request()->is('blog') ? 'active' : '' }}">
                    Berita
                </a>
            </div>

            <!-- Auth Buttons -->
            <div class="hidden lg:flex items-center space-x-4">
                @auth
                    <!-- User Menu Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-full hover:from-blue-600 hover:to-blue-700 transition-all duration-300">
                            <span>{{ Auth::user()->name ?? 'User' }}</span>
                            <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform"></i>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                            <div class="py-2">
                                <a href="{{ url('/profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <i class="fas fa-user mr-2"></i> Profile
                                </a>
                                <a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                                </a>
                                <hr class="my-2">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 transition-colors">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ url('/login') }}" class="px-6 py-2 text-blue-600 hover:text-blue-700 font-medium transition-colors">
                        Login
                    </a>
                    <a href="{{ url('/register') }}" class="px-6 py-2 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white rounded-full font-medium transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Get Started
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button id="mobile-menu-button" class="p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-200">
            <div class="px-4 py-6 space-y-4">
                <a href="{{ url('/') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors {{ request()->is('/') ? 'text-blue-600' : '' }}">
                    Home
                </a>
                <a href="{{ url('/about') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors {{ request()->is('about') ? 'text-blue-600' : '' }}">
                    About
                </a>
                <a href="{{ url('/services') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors {{ request()->is('services') ? 'text-blue-600' : '' }}">
                    Services
                </a>
                <a href="{{ url('/projects') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors {{ request()->is('projects') ? 'text-blue-600' : '' }}">
                    Projects
                </a>
                <a href="{{ url('/store') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors {{ request()->is('store') ? 'text-blue-600' : '' }}">
                    Store
                </a>
                <a href="{{ url('/contact') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors {{ request()->is('contact') ? 'text-blue-600' : '' }}">
                    Contact
                </a>
                
                <hr class="my-4">
                
                @auth
                    <a href="{{ url('/profile') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                        <i class="fas fa-user mr-2"></i> {{ Auth::user()->name ?? 'Profile' }}
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left py-2 text-red-600 hover:text-red-700 font-medium transition-colors">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </button>
                    </form>
                @else
                    <a href="{{ url('/login') }}" class="block py-2 text-blue-600 hover:text-blue-700 font-medium transition-colors">
                        Login
                    </a>
                    <a href="{{ url('/register') }}" class="block py-2 px-4 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg font-medium text-center transition-all duration-300">
                        Get Started
                    </a>
                @endauth
            </div>
        </div>
    </nav>
</header>

<!-- Spacer for fixed navbar -->
<div class="h-20"></div>

<style>
.nav-link {
    @apply text-gray-700 hover:text-blue-600 font-medium transition-all duration-300 relative;
}

.nav-link.active {
    @apply text-blue-600;
}

.nav-link:hover::after,
.nav-link.active::after {
    content: '';
    @apply absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-blue-600 transform origin-left;
    animation: slideIn 0.3s ease-out;
}

@keyframes slideIn {
    from {
        transform: scaleX(0);
    }
    to {
        transform: scaleX(1);
    }
}
</style>

<script>
// Mobile menu toggle
document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});

// Close mobile menu when clicking outside
document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    
    if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
        mobileMenu.classList.add('hidden');
    }
});
</script>