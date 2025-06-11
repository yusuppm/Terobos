<!-- Navbar -->
<header class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 backdrop-blur-lg border-b border-white/10 shadow-lg">
    <nav class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <img src="images/logo.png" alt="Rosus Logo" class="h-10 w-auto">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="nav-link text-gray-300 hover:text-white transition-colors duration-300 {{ request()->is('/') ? 'font-bold text-white' : '' }}">
                    Home
                </a>
                <a href="{{ url('/about') }}" class="nav-link text-gray-300 hover:text-white transition-colors duration-300 {{ request()->is('about') ? 'font-bold text-white' : '' }}">
                    About
                </a>
                <a href="{{ url('/services') }}" class="nav-link text-gray-300 hover:text-white transition-colors duration-300 {{ request()->is('services') ? 'font-bold text-white' : '' }}">
                    Services
                </a>
                <a href="{{ url('/projects') }}" class="nav-link text-gray-300 hover:text-white transition-colors duration-300 {{ request()->is('projects') ? 'font-bold text-white' : '' }}">
                    Projects
                </a>
                <a href="{{ url('/store') }}" class="nav-link text-gray-300 hover:text-white transition-colors duration-300 {{ request()->is('store') ? 'font-bold text-white' : '' }}">
                    Store
                </a>
                <a href="{{ url('/contact') }}" class="nav-link text-gray-300 hover:text-white transition-colors duration-300 {{ request()->is('contact') ? 'font-bold text-white' : '' }}">
                    Contact
                </a>
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
        <a href="{{ url('/') }}" class="block hover:text-blue-400 {{ request()->is('/') ? 'font-bold text-blue-400' : '' }}">Home</a>
        <a href="{{ url('/about') }}" class="block hover:text-blue-400 {{ request()->is('about') ? 'font-bold text-blue-400' : '' }}">About</a>
        <a href="{{ url('/services') }}" class="block hover:text-blue-400 {{ request()->is('services') ? 'font-bold text-blue-400' : '' }}">Services</a>
        <a href="{{ url('/projects') }}" class="block hover:text-blue-400 {{ request()->is('projects') ? 'font-bold text-blue-400' : '' }}">Projects</a>
        <a href="{{ url('/store') }}" class="block hover:text-blue-400 {{ request()->is('store') ? 'font-bold text-blue-400' : '' }}">Store</a>
        <a href="{{ url('/contact') }}" class="block hover:text-blue-400 {{ request()->is('contact') ? 'font-bold text-blue-400' : '' }}">Contact</a>
    </div>
</header>

<!-- Script Toggle Mobile Menu -->
<script>
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
