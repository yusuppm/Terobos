@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section id="beranda" class="relative min-h-screen flex items-center bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 overflow-hidden">
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
                    <img src="images/banner-image.png" alt="Robotics Platform" class="w-full h-auto max-w-lg mx-auto drop-shadow-2xl">
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
<section id="about" class="py-20 bg-white relative overflow-hidden">
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
                            <img src="images/about-image1.png" alt="About Image 1" class="w-full h-auto rounded-xl shadow-lg">
                        </div>
                    </div>
                    <div class="space-y-6 mt-8">
                        <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 transform hover:scale-105 transition-transform duration-300">
                            <img src="images/about-image2.png" alt="About Image 2" class="w-full h-auto rounded-xl shadow-lg">
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
                    <!-- Support Box -->
                    <div class="flex items-start space-x-4 p-6 bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                                <!-- Heroicons: Support (Chat Bubble Left Ellipsis) -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4.9-1.3L3 20l1.3-4.1A8.96 8.96 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Free 24 Hours Support</h4>
                            <p class="text-gray-600">We support 24 hours per day to make you feel comfortable</p>
                        </div>
                    </div>

                    <!-- Sustainability Box -->
                    <div class="flex items-start space-x-4 p-6 bg-gradient-to-r from-green-50 to-green-100 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center">
                                <!-- Heroicons: Globe Alt -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.358 1.048-.835 2.028-1.414 2.914a17.936 17.936 0 01-3.296 3.408c-.633.5-1.31.926-2.014 1.274a9.014 9.014 0 01-8.36-.29 8.948 8.948 0 01-3.684-4.306z" />
                                </svg>
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

<section id="stats" class="py-20 bg-gradient-to-r from-indigo-900 to-purple-900">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

      <!-- Card -->
      <div class="group bg-gradient-to-br from-pink-500 to-red-400 text-white rounded-2xl p-6 text-center shadow-xl transform transition-all duration-500 hover:scale-105 animate-fade-in">
        <div class="flex justify-center mb-3">
          <svg class="w-10 h-10 text-white drop-shadow" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 14l9-5-9-5-9 5 9 5zm0 0v6m-4-3h8" />
          </svg>
        </div>
        <div class="text-4xl font-extrabold drop-shadow mb-1 group-hover:scale-110 transition-transform duration-300">500+</div>
        <div class="text-white/90 font-medium tracking-wide">Students Trained</div>
      </div>

      <!-- Card -->
      <div class="group bg-gradient-to-br from-cyan-500 to-blue-500 text-white rounded-2xl p-6 text-center shadow-xl transform transition-all duration-500 hover:scale-105 animate-fade-in delay-100">
        <div class="flex justify-center mb-3">
          <svg class="w-10 h-10 text-white drop-shadow" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </div>
        <div class="text-4xl font-extrabold drop-shadow mb-1 group-hover:scale-110 transition-transform duration-300">50+</div>
        <div class="text-white/90 font-medium tracking-wide">Robot Projects</div>
      </div>

      <!-- Card -->
      <div class="group bg-gradient-to-br from-green-400 to-emerald-500 text-white rounded-2xl p-6 text-center shadow-xl transform transition-all duration-500 hover:scale-105 animate-fade-in delay-200">
        <div class="flex justify-center mb-3">
          <svg class="w-10 h-10 text-white drop-shadow" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 4v5h.582a10 10 0 0114.3-4.419L20 5m0 0v5h-5m5-5l-7 7m-1 4a4 4 0 01-4-4H4a6 6 0 006 6v1l3-3-3-3v1z" />
          </svg>
        </div>
        <div class="text-4xl font-extrabold drop-shadow mb-1 group-hover:scale-110 transition-transform duration-300">95%</div>
        <div class="text-white/90 font-medium tracking-wide">Recycled Materials</div>
      </div>

      <!-- Card -->
      <div class="group bg-gradient-to-br from-yellow-400 to-orange-500 text-white rounded-2xl p-6 text-center shadow-xl transform transition-all duration-500 hover:scale-105 animate-fade-in delay-300">
        <div class="flex justify-center mb-3">
          <svg class="w-10 h-10 text-white drop-shadow" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M17 20h5v-2a4 4 0 00-5-4M9 20H4v-2a4 4 0 015-4m1-4a4 4 0 100-8 4 4 0 000 8zm6 4a4 4 0 100-8 4 4 0 000 8z" />
          </svg>
        </div>
        <div class="text-4xl font-extrabold drop-shadow mb-1 group-hover:scale-110 transition-transform duration-300">30+</div>
        <div class="text-white/90 font-medium tracking-wide">Active Communities</div>
      </div>

    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-4" data-aos="fade-right">   
        <div class="grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <!-- Left Content -->
            <div class="space-y-8" data-aos="fade-right">
                <div class="space-y-4">
                    <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                        What We Offer
                    </span>
                    
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                        Transforming Ideas Into 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                            Intelligent Solutions
                        </span>
                    </h2>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        We combine cutting-edge technology with deep industry expertise to deliver solutions that drive real business value. From automation to analytics, we help organizations unlock their potential through intelligent innovation.
                    </p>
                    
                    <a href="./service.html" class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Explore All Services
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
            
            <!-- Right Content - Service Cards -->
            <div class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-stretch">
                    
                    <!-- Card 1: Robotic Automation -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between cursor-pointer group">
                        <div>
                            <figure class="w-16 h-16 mb-4 bg-gradient-to-r from-blue-100 to-blue-200 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </figure>
                            <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">Robotic Process Automation</h4>
                            <p class="text-gray-600 leading-relaxed">Streamline repetitive tasks and boost productivity with intelligent automation solutions that adapt to your workflow and scale with your business needs.</p>
                        </div>
                    </div>

                    <!-- Card 2: Machine Learning -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between cursor-pointer group">
                        <div>
                            <figure class="w-16 h-16 mb-4 bg-gradient-to-r from-purple-100 to-purple-200 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </figure>
                            <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300">Machine Learning Solutions</h4>
                            <p class="text-gray-600 leading-relaxed">Unlock the power of your data with custom ML models that learn, adapt, and provide actionable insights to drive smarter business decisions.</p>
                        </div>
                    </div>

                    <!-- Card 3: Education & Science -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between cursor-pointer group">
                        <div>
                            <figure class="w-16 h-16 mb-4 bg-gradient-to-r from-green-100 to-green-200 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </figure>
                            <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">Educational Technology</h4>
                            <p class="text-gray-600 leading-relaxed">Transform learning experiences with innovative educational platforms and scientific computing solutions that make complex concepts accessible and engaging.</p>
                        </div>
                    </div>

                    <!-- Card 4: Predictive Analysis -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between cursor-pointer group">
                        <div>
                            <figure class="w-16 h-16 mb-4 bg-gradient-to-r from-orange-100 to-orange-200 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </figure>
                            <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-600 transition-colors duration-300">Predictive Analytics</h4>
                            <p class="text-gray-600 leading-relaxed">Anticipate trends and make proactive decisions with advanced analytics that turn historical data into future opportunities and competitive advantages.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-24 bg-white relative overflow-hidden">
    <div class="absolute inset-0 gradient-overlay"></div>
    <div class="container mx-auto px-4 relative z-10" data-aos="fade-right">
        <div class="text-center mb-20">
            <div class="inline-block">
                <span class="inline-block px-6 py-3 bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800 rounded-full text-sm font-bold mb-6 floating-animation">
                    <i class="fas fa-rocket mr-2"></i>
                    Our Projects
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6 leading-tight">
                Innovative 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 pulse-animation">
                    Projects
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Explore some of the innovative projects we have worked on, showcasing cutting-edge technology and creative solutions.
            </p>
        </div>
        
        <!-- Projects Swiper -->
        <div class="swiper projects-swiper mb-16">
            <div class="swiper-wrapper mb-2 rounded-3xl">
                <!-- Dynamic Project Cards -->
                @if($projects && $projects->count() > 0)
                    @foreach($projects as $project)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden card-hover group">
                            <div class="relative overflow-hidden">
                                <img src="{{ $project->thumbnail ? asset('storage/' . $project->thumbnail) : asset('assets/images/banner-image.png') }}" 
                                     class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" 
                                     alt="{{ $project->title }}">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                            </div>
                            <div class="p-8">
                                <h5 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">{{ $project->title }}</h5>
                                <p class="text-gray-600 mb-6 line-clamp-3 leading-relaxed">{!! Str::limit($project->description, 150) !!}</p>
                                <a href="{{ route('projects.show', $project->slug) }}" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    <span>Read More</span>
                                    <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="swiper-slide">
                        <div class="text-center py-20 bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl">
                            <div class="text-gray-400 mb-6 floating-animation">
                                <i class="fas fa-project-diagram text-8xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-600 mb-4">No Projects Available</h3>
                            <p class="text-gray-500 text-lg">Projects will appear here once they are added by the admin.</p>
                        </div>
                    </div>
                @endif
            </div>
            <div class="swiper-pagination mt-12"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
        <div class="text-center">
            <a href="{{ route('projects.index') }}" class=" bg-white inline-flex items-center justify-center px-12 py-5 border-3 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-lg">
                <i class="fas fa-eye mr-3"></i>
                View All Projects
                <i class="fas fa-arrow-right ml-3"></i>
            </a>
        </div>
    </div>
</section>

<!-- Shop Section -->
<section id="shop" class="py-24 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-600 rounded-full"></div>
        <div class="absolute bottom-10 right-10 w-24 h-24 bg-purple-600 rounded-full"></div>
        <div class="absolute top-1/2 left-1/3 w-16 h-16 bg-pink-600 rounded-full"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10" data-aos="fade-right">
        <div class="text-center mb-20">
            <div class="inline-block">
                <span class="inline-block px-6 py-3 bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800 rounded-full text-sm font-bold mb-6 floating-animation">
                    <i class="fas fa-store mr-2"></i>
                    Our Shop
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6 leading-tight">
                Robotics 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 pulse-animation">
                    Store
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Explore our wide range of robotics components and learning kits designed to empower you in the fascinating world of robotics and automation.
            </p>
        </div>
        
        <!-- Products Swiper -->
        <div class="swiper products-swiper mb-16">
            <div class="swiper-wrapper mb-2">
                <!-- Dynamic Product Cards -->
                @if($products && $products->count() > 0)
                    @foreach($products as $product)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden card-hover group">
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 p-8">
                                <img src="{{ $product->foto_product ? asset('storage/' . $product->foto_product) : asset('assets/images/choose-image.png') }}" 
                                     alt="{{ $product->title }}" 
                                     class="w-full h-48 object-contain transition-transform duration-500 group-hover:scale-110 floating-animation">
                                <div class="absolute top-4 right-4">
                                    <div class="bg-white/80 backdrop-blur-sm rounded-full p-2">
                                        <i class="fas fa-robot text-blue-600 text-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8 text-center">
                                <h4 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">{{ $product->title }}</h4>
                                <p class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 mb-6">
                                    Rp.{{ number_format($product->price, 2) }}
                                </p>
                                <a href="{{ route('shop.show', $product->slug) }}" class="w-full inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    <i class="fas fa-shopping-cart mr-2"></i>
                                    <span>View Details</span>
                                    <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="swiper-slide">
                        <div class="text-center py-20 bg-white rounded-3xl shadow-lg">
                            <div class="text-gray-400 mb-6 floating-animation">
                                <i class="fas fa-shopping-cart text-8xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-600 mb-4">No Products Available</h3>
                            <p class="text-gray-500 text-lg">Products will appear here once they are added by the admin.</p>
                        </div>
                    </div>
                @endif
            </div>
            <div class="swiper-pagination mt-12"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
        <div class="text-center">
            <a href="{{ route('shop.index') }}" class="inline-flex items-center justify-center px-12 py-5 border-3 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-lg">
                <i class="fas fa-store mr-3"></i>
                View All Products
                <i class="fas fa-arrow-right ml-3"></i>
            </a>
        </div>
    </div>
</section>

<!-- News Section -->
<section id="news" class="py-24 bg-white relative overflow-hidden">
    <div class="absolute inset-0 gradient-overlay"></div>
    <div class="container mx-auto px-4 relative z-10" data-aos="fade-up">
        <div class="text-center mb-20">
            <div class="inline-block">
                <span class="inline-block px-6 py-3 bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800 rounded-full text-sm font-bold mb-6 floating-animation">
                    <i class="fas fa-newspaper mr-2"></i>
                    Latest News
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6 leading-tight">
                Stay Updated with Our 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 pulse-animation">
                    Latest News
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Discover the latest developments in robotics, Industry 5.0 innovations, and updates from our sustainable learning platform and community.
            </p>
        </div>
        
        <!-- News Swiper -->
        <div class="swiper news-swiper mb-16">
            <div class="swiper-wrapper mb-2">
                <!-- Dynamic News Cards -->
                @if($news && $news->count() > 0)
                    @foreach($news as $article)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden card-hover group">
                            <div class="relative overflow-hidden">
                                <img src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : asset('assets/images/news-default.jpg') }}" 
                                     class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" 
                                     alt="{{ $article->title }}">
                                <div class="absolute top-4 left-4">
                                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-full text-sm font-bold">
                                        <i class="fas fa-tag mr-1"></i>
                                        {{ $article->kategory ?? 'News' }}
                                    </span>
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>

                            </div>
                            <div class="p-8">
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar-alt mr-2 text-blue-600"></i>
                                        <span class="font-semibold">{{ \Carbon\Carbon::parse($article->tanggal)->format('M d, Y') }}</span>
                                    </div>
                                    <span class="mx-3 text-gray-300">•</span>
                                    <div class="flex items-center">
                                        <i class="fas fa-user mr-2 text-purple-600"></i>
                                        <span class="font-semibold">{{ $article->ditulis_oleh ?? 'Admin' }}</span>
                                    </div>
                                </div>
                                <h5 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300 leading-tight">
                                    <a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
                                </h5>
                                <p class="text-gray-600 mb-6 line-clamp-3 leading-relaxed">
                                    {!! Str::limit($article->description, 150) !!}
                                </p>
                                <a href="{{ route('news.show', $article->slug) }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-bold transition-all duration-300 transform hover:scale-105">
                                    <span>Read More</span>
                                    <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="swiper-slide">
                        <div class="text-center py-20 bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl">
                            <div class="text-gray-400 mb-6 floating-animation">
                                <i class="fas fa-newspaper text-8xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-600 mb-4">No News Available</h3>
                            <p class="text-gray-500 text-lg">News articles will appear here once they are added by the admin.</p>
                        </div>
                    </div>
                @endif
            </div>
            <div class="swiper-pagination mt-12"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
        <div class="text-center">
            <a href="{{ route('news.index') }}" class="inline-flex items-center justify-center px-12 py-5 border-3 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-lg">
                <i class="fas fa-newspaper mr-3"></i>
                View All News
                <i class="fas fa-arrow-right ml-3"></i>
            </a>
        </div>
    </div>
</section>

<section id="contact" class="py-24 bg-gradient-to-br from-white via-blue-50 to-purple-50">
  <div class="container mx-auto px-4" data-aos="fade-right">
    <!-- Header -->
    <div class="text-center mb-20">
      <span class="inline-block px-5 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold tracking-wide mb-4">
        ✨ Contact Us
      </span>
      <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
        Let’s Get 
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
          In Touch
        </span>
      </h2>
      <p class="text-lg text-gray-600 max-w-xl mx-auto leading-relaxed">
        Have a question, suggestion, or just want to say hi? We’d love to hear from you. Our team is always ready to help!
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12">
      <!-- Contact Info Card -->
      <div class="space-y-10">
        <div class="bg-white p-8 shadow-xl rounded-3xl border border-blue-100 hover:shadow-2xl transition-shadow duration-500">
          <div class="space-y-6">
            <!-- Location -->
            <div class="flex items-start">
              <div class="text-blue-600 text-2xl mr-4">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <h4 class="font-bold text-gray-800 text-xl mb-1">Our Location</h4>
                <p class="text-gray-600">Daratan, RT 02/RW 06, Tohudan, Colomadu, Karanganyar</p>
              </div>
            </div>

            <!-- Phone -->
            <div class="flex items-start">
              <div class="text-blue-600 text-2xl mr-4">
                <i class="fas fa-phone"></i>
              </div>
              <div>
                <h4 class="font-bold text-gray-800 text-xl mb-1">Call Us</h4>
                <p><a href="tel:+62895802850204" class="text-blue-600 hover:underline">+62 895-8028-50204</a></p>
              </div>
            </div>

            <!-- Email -->
            <div class="flex items-start">
              <div class="text-blue-600 text-2xl mr-4">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <h4 class="font-bold text-gray-800 text-xl mb-1">Email Us</h4>
                <p><a href="mailto:admin@rosus.my.id" class="text-blue-600 hover:underline">admin@rosus.my.id</a></p>
              </div>
            </div>

            <!-- Hours -->
            <div class="flex items-start">
              <div class="text-blue-600 text-2xl mr-4">
                <i class="fas fa-clock"></i>
              </div>
              <div>
                <h4 class="font-bold text-gray-800 text-xl mb-1">Working Hours</h4>
                <p class="text-gray-600">Mon – Fri: 9 AM – 6 PM</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="bg-white p-10 rounded-3xl shadow-xl border border-gray-100">
        <h4 class="text-2xl font-bold text-gray-900 mb-8">📬 Drop Us a Message</h4>
        <form id="contact-form" method="POST" action="contact-form.php" class="space-y-6">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
            <input type="text" name="name" placeholder="John Doe" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-300" />
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
            <input type="email" name="email" placeholder="you@example.com" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-300" />
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="tel" name="phone" placeholder="+62 8xx" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-300" />
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
            <textarea name="message" rows="5" placeholder="Write your message here..." required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-300 resize-none"></textarea>
          </div>

          <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-md">
            Send Message <i class="fas fa-paper-plane ml-2"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>



@endsection