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

<!-- Services Section -->
<section class="py-20 bg-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-4" data-aos="fade-right">
        
        <div class="grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <!-- Left Content -->
            <div class="space-y-8" data-aos="fade-right">
                <div class="space-y-4">
                    <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                        Services we provide
                    </span>
                    
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                        Our Purpose is To Deliver Excellence in 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                            Service and Execution
                        </span>
                    </h2>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Repellendus autem ruibusdam et aut officiis debitis aut re necessitatibus saepe eveniet ut et voluptates repudianda sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus.
                    </p>
                    
                    <a href="./service.html" class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Read More
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
            
            <!-- Right Content - Service Cards -->
<div class="space-y-6">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-stretch">
    
    <!-- Card 1: Robotic Automation -->
    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between">
      <div>
        <figure class="w-16 h-16 mb-4 bg-gradient-to-r from-blue-100 to-blue-200 rounded-xl flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h4l2 2h6a2 2 0 012 2v12a2 2 0 01-2 2z" />
          </svg>
        </figure>
        <h4 class="text-xl font-bold text-gray-900 mb-2">Robotic Automation</h4>
        <p class="text-gray-600 mb-4">Autem vel eum iure reprehea rui in ea volutae velit...</p>
      </div>
      <a href="./service.html" class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">Read More →</a>
    </div>

    <!-- Card 2: Machine Learning -->
    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between">
      <div>
        <figure class="w-16 h-16 mb-4 bg-gradient-to-r from-purple-100 to-purple-200 rounded-xl flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h4l2 2h6a2 2 0 012 2v12a2 2 0 01-2 2z" />
          </svg>
        </figure>
        <h4 class="text-xl font-bold text-gray-900 mb-2">Machine Learning</h4>
        <p class="text-gray-600 mb-4">Butem vel eum iure reprehea rui in ea volutae velit...</p>
      </div>
      <a href="./service.html" class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">Read More →</a>
    </div>

    <!-- Card 3: Education & Science -->
    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between">
      <div>
        <figure class="w-16 h-16 mb-4 bg-gradient-to-r from-green-100 to-green-200 rounded-xl flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h4l2 2h6a2 2 0 012 2v12a2 2 0 01-2 2z" />
          </svg>
        </figure>
        <h4 class="text-xl font-bold text-gray-900 mb-2">Education & Science</h4>
        <p class="text-gray-600 mb-4">Eutem vel eum iure reprehea rui in ea volutae velit...</p>
      </div>
      <a href="./service.html" class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">Read More →</a>
    </div>

    <!-- Card 4: Predictive Analysis -->
    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between">
      <div>
        <figure class="w-16 h-16 mb-4 bg-gradient-to-r from-orange-100 to-orange-200 rounded-xl flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h4l2 2h6a2 2 0 012 2v12a2 2 0 01-2 2z" />
          </svg>
        </figure>
        <h4 class="text-xl font-bold text-gray-900 mb-2">Predictive Analysis</h4>
        <p class="text-gray-600 mb-4">Rutem vel eum iure reprehea rui in ea volutae velit...</p>
      </div>
      <a href="./service.html" class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">Read More →</a>
    </div>
  </div>
</div>

        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4" data-aos="fade-right">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">
                Our Projects
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Innovative 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                    Projects
                </span>
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Explore some of the innovative projects we have worked on.
            </p>
        </div>
        
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mb-12">
            <!-- Project 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="assets/images/banner-image.png" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" alt="Project 1">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <h5 class="text-xl font-bold text-gray-900 mb-2">Project Name 1</h5>
                    <p class="text-gray-600 mb-4">Brief description of the project and its impact.</p>
                    <a href="project-details.php?id=1" class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-lg transition-all duration-300">
                        Read More
                    </a>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="assets/images/banner-image.png" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" alt="Project 2">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <h5 class="text-xl font-bold text-gray-900 mb-2">Project Name 2</h5>
                    <p class="text-gray-600 mb-4">Brief description of the project and its impact.</p>
                    <a href="project-details.php?id=2" class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-lg transition-all duration-300">
                        Read More
                    </a>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="assets/images/banner-image.png" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" alt="Project 3">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <h5 class="text-xl font-bold text-gray-900 mb-2">Project Name 3</h5>
                    <p class="text-gray-600 mb-4">Brief description of the project and its impact.</p>
                    <a href="project-details.php?id=3" class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-lg transition-all duration-300">
                        Read More
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <a href="projects.php" class="inline-flex items-center justify-center px-8 py-4 border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
                View All Projects
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Shop Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4" data-aos="fade-right">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">
                Our Shop
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Robotics 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                    Store
                </span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Explore our wide range of robotics components and learning kits designed to empower you in the world of robotics.
            </p>
        </div>
        
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
            <!-- Product Item 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100 p-6">
                    <img src="assets/images/choose-image.png" alt="Product 1" class="w-full h-32 object-contain">
                </div>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Robotic Learning Kit</h4>
                    <p class="text-2xl font-bold text-blue-600 mb-4">$299.99</p>
                    <a href="product-detail.php?id=1" class="w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-lg transition-all duration-300">
                        View Details
                    </a>
                </div>
            </div>
            
            <!-- Product Item 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden bg-gradient-to-br from-green-50 to-green-100 p-6">
                    <img src="assets/images/choose-image.png" alt="Product 2" class="w-full h-32 object-contain">
                </div>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Robot Arm Kit</h4>
                    <p class="text-2xl font-bold text-blue-600 mb-4">$179.99</p>
                    <a href="product-detail.php?id=2" class="w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-lg transition-all duration-300">
                        View Details
                    </a>
                </div>
            </div>
            
            <!-- Product Item 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden bg-gradient-to-br from-orange-50 to-orange-100 p-6">
                    <img src="assets/images/choose-image.png" alt="Product 3" class="w-full h-32 object-contain">
                </div>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Green Robot Component</h4>
                    <p class="text-2xl font-bold text-blue-600 mb-4">$99.99</p>
                    <a href="product-detail.php?id=3" class="w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-lg transition-all duration-300">
                        View Details
                    </a>
                </div>
            </div>
            
            <!-- Product Item 4 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden bg-gradient-to-br from-purple-50 to-purple-100 p-6">
                    <img src="assets/images/choose-image.png" alt="Product 4" class="w-full h-32 object-contain">
                </div>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Solar Powered Kit</h4>
                    <p class="text-2xl font-bold text-blue-600 mb-4">$249.99</p>
                    <a href="product-detail.php?id=4" class="w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-lg transition-all duration-300">
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4" data-aos="fade-up">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">
                Latest News
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Stay Updated with Our 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                    Latest News
                </span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Discover the latest developments in robotics, Industry 5.0 innovations, and updates from our sustainable learning platform.
            </p>
        </div>
        
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mb-12">
            <!-- News Article 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="assets/images/news-1.jpg" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" alt="Industry 5.0 Revolution">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Industry 5.0
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>June 5, 2025</span>
                        <span class="mx-2">•</span>
                        <i class="fas fa-user mr-2"></i>
                        <span>Admin</span>
                    </div>
                    <h5 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors duration-300">
                        <a href="news-detail.php?id=1">The Future of Industry 5.0: Human-Robot Collaboration</a>
                    </h5>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Explore how Industry 5.0 is revolutionizing manufacturing by combining human creativity with robotic precision, creating a sustainable and efficient future...
                    </p>
                    <a href="news-detail.php?id=1" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                        Read More
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- News Article 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="assets/images/news-2.jpg" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" alt="Sustainable Robotics">
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Sustainability
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>June 3, 2025</span>
                        <span class="mx-2">•</span>
                        <i class="fas fa-user mr-2"></i>
                        <span>Research Team</span>
                    </div>
                    <h5 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors duration-300">
                        <a href="news-detail.php?id=2">Breakthrough in Recycled Materials for Robot Manufacturing</a>
                    </h5>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Our latest research shows a 95% efficiency rate in using recycled materials for robot components, paving the way for sustainable robotics education...
                    </p>
                    <a href="news-detail.php?id=2" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                        Read More
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- News Article 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="assets/images/news-3.jpg" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" alt="AI Education">
                    <div class="absolute top-4 left-4">
                        <span class="bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Education
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>May 30, 2025</span>
                        <span class="mx-2">•</span>
                        <i class="fas fa-user mr-2"></i>
                        <span>Education Team</span>
                    </div>
                    <h5 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors duration-300">
                        <a href="news-detail.php?id=3">New AI-Powered Learning Platform Launches Successfully</a>
                    </h5>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Our revolutionary AI-powered robotics learning platform has successfully trained over 500 students, with 98% satisfaction rate and improved learning outcomes...
                    </p>
                    <a href="news-detail.php?id=3" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                        Read More
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- News Article 4 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="assets/images/news-4.jpg" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" alt="Robot Competition">
                    <div class="absolute top-4 left-4">
                        <span class="bg-orange-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Competition
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>May 28, 2025</span>
                        <span class="mx-2">•</span>
                        <i class="fas fa-user mr-2"></i>
                        <span>Event Team</span>
                    </div>
                    <h5 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors duration-300">
                        <a href="news-detail.php?id=4">Students Win National Robotics Competition with Eco-Friendly Design</a>
                    </h5>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Our students secured first place in the National Robotics Championship using 100% recycled materials, showcasing the power of sustainable innovation...
                    </p>
                    <a href="news-detail.php?id=4" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                        Read More
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- News Article 5 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="assets/images/news-5.jpg" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" alt="Partnership News">
                    <div class="absolute top-4 left-4">
                        <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Partnership
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>May 25, 2025</span>
                        <span class="mx-2">•</span>
                        <i class="fas fa-user mr-2"></i>
                        <span>Partnership Team</span>
                    </div>
                    <h5 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors duration-300">
                        <a href="news-detail.php?id=5">Strategic Partnership with Leading Tech Universities Announced</a>
                    </h5>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        We're excited to announce partnerships with top technology universities to expand our robotics curriculum and provide students with world-class education...
                    </p>
                    <a href="news-detail.php?id=5" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                        Read More
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- News Article 6 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="assets/images/news-6.jpg" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" alt="Workshop News">
                    <div class="absolute top-4 left-4">
                        <span class="bg-teal-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Workshop
                        </span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>May 22, 2025</span>
                        <span class="mx-2">•</span>
                        <i class="fas fa-user mr-2"></i>
                        <span>Workshop Team</span>
                    </div>
                    <h5 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors duration-300">
                        <a href="news-detail.php?id=6">Free Robotics Workshop Series for Beginners Starts Next Month</a>
                    </h5>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Join our comprehensive robotics workshop series designed for beginners. Learn the fundamentals of robotics using sustainable materials and cutting-edge technology...
                    </p>
                    <a href="news-detail.php?id=6" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                        Read More
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <a href="news.php" class="inline-flex items-center justify-center px-8 py-4 border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
                View All News
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4" data-aos="fade-right">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">
                Contact Us
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Get In 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                    Touch
                </span>
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                We would love to hear from you! If you have any questions, concerns, or feedback, feel free to reach out to us.
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="space-y-8">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl">
                    <h4 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-map-marker-alt text-blue-600 mr-3"></i>
                        Our Location
                    </h4>
                    <p class="text-gray-700 mb-6 flex items-start">
                        <i class="fas fa-location-dot text-blue-600 mr-3 mt-1"></i>
                        Daratan, RT 02/RW 06, Tohudan, Colomadu, Karanganyar
                    </p>
                    
                    <h4 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                        <i class="fas fa-phone text-blue-600 mr-3"></i>
                        Contact Details
                    </h4>
                    <div class="space-y-3 mb-6">
                        <p class="flex items-center text-gray-700">
                            <i class="fas fa-phone-alt text-blue-600 mr-3"></i>
                            <a href="tel:+62895802850204" class="hover:text-blue-600 transition-colors duration-300">+62 895-8028-50204</a>
                        </p>
                        <p class="flex items-center text-gray-700">
                            <i class="fas fa-envelope text-blue-600 mr-3"></i>
                            <a href="mailto:admin@rosus.my.id" class="hover:text-blue-600 transition-colors duration-300">admin@rosus.my.id</a>
                        </p>
                    </div>
                    
                    <h4 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                        <i class="fas fa-clock text-blue-600 mr-3"></i>
                        Business Hours
                    </h4>
                    <p class="text-gray-700">Monday - Friday: 9:00 AM - 6:00 PM</p>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                <h4 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h4>
                <form id="contact-form" method="POST" action="contact-form.php" class="space-y-6">
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Your Name</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" placeholder="Enter your name" name="name" required>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Your Email</label>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" placeholder="Enter your email" name="email" required>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Phone Number</label>
                        <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" placeholder="Enter your phone number" name="phone" required>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Your Message</label>
                        <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 resize-none" placeholder="Enter your message" name="message" rows="4" required></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-4 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Send Message
                        <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection