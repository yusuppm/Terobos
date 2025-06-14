@extends('layouts.app')

@section('title', $product->title)

@section('content')
<!-- Breadcrumb -->
<section class="py-8 bg-gray-100">
    <div class="container mx-auto px-4">
        <nav class="flex items-center space-x-2 text-sm text-gray-600">
            <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors duration-300">Home</a>
            <span>/</span>
            <a href="{{ route('shop.index') }}" class="hover:text-blue-600 transition-colors duration-300">Shop</a>
            <span>/</span>
            <span class="text-gray-900">{{ $product->title }}</span>
        </nav>
    </div>
</section>

<!-- Product Details -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Product Images -->
                <div class="space-y-4" data-aos="fade-right">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                        <img src="{{ Storage::url($product->foto_product) }}" 
                             class="w-full h-96 object-cover" 
                             alt="{{ $product->title }}"
                             id="mainImage">
                        <div class="absolute top-4 right-4">
                            <button class="bg-white/90 hover:bg-white text-gray-800 p-3 rounded-full shadow-lg transition-all duration-300 transform hover:scale-110">
                                <i class="fas fa-heart text-lg"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Thumbnail Gallery (if you have multiple images) -->
                    <div class="grid grid-cols-4 gap-4">
                        <div class="relative overflow-hidden rounded-lg cursor-pointer border-2 border-blue-500">
                            <img src="{{ Storage::url($product->foto_product) }}" 
                                 class="w-full h-20 object-cover hover:scale-110 transition-transform duration-300" 
                                 alt="{{ $product->title }}">
                        </div>
                        <!-- Add more thumbnails here if available -->
                    </div>
                </div>

                <!-- Product Info -->
                <div class="space-y-6" data-aos="fade-left">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                            {{ $product->title }}
                        </h1>
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="flex items-center space-x-1">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star text-yellow-400"></i>
                                @endfor
                                <span class="text-gray-600 ml-2">(4.8/5 - 24 reviews)</span>
                            </div>
                        </div>
                        <div class="text-4xl font-bold text-blue-600 mb-6">
                            ${{ number_format($product->price, 2) }}
                        </div>
                    </div>

                    <div class="prose prose-gray max-w-none">
                        {!! $product->description !!}
                    </div>

                    <!-- Product Actions -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <label class="text-sm font-semibold text-gray-700">Quantity:</label>
                            <div class="flex items-center border border-gray-300 rounded-lg">
                                <button class="px-3 py-2 text-gray-600 hover:text-gray-800 transition-colors duration-300" onclick="decreaseQuantity()">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input type="number" 
                                       id="quantity" 
                                       value="1" 
                                       min="1" 
                                       class="w-16 text-center py-2 border-0 focus:ring-0">
                                <button class="px-3 py-2 text-gray-600 hover:text-gray-800 transition-colors duration-300" onclick="increaseQuantity()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="flex space-x-4">
                            <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-semibold transition-colors duration-300">
                                <i class="fas fa-shopping-cart mr-2"></i>Add to Cart
                            </button>
                            <button class="bg-gray-100 hover:bg-gray-200 text-gray-800 py-3 px-6 rounded-lg font-semibold transition-colors duration-300">
                                <i class="fas fa-heart mr-2"></i>Wishlist
                            </button>
                        </div>

                        <button class="w-full bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-lg font-semibold transition-colors duration-300">
                            <i class="fas fa-bolt mr-2"></i>Buy Now
                        </button>
                    </div>

                    <!-- Product Features -->
                    <div class="border-t pt-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Key Features</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-green-500"></i>
                                <span class="text-gray-700">2-Year Warranty</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-green-500"></i>
                                <span class="text-gray-700">Free Shipping</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-green-500"></i>
                                <span class="text-gray-700">24/7 Support</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-green-500"></i>
                                <span class="text-gray-700">Easy Returns</span>
                            </div>
                        </div>
                    </div>

                    <!-- Share Product -->
                    <div class="border-t pt-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Share this product</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-facebook-f mr-2"></i>Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($product->title) }}" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-sky-500 hover:bg-sky-600 text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-twitter mr-2"></i>Twitter
                            </a>
                            <a href="whatsapp://send?text={{ urlencode($product->title . ' ' . request()->fullUrl()) }}" 
                               class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Specifications -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Product Specifications</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <div class="flex justify-between py-3 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">Brand</span>
                            <span class="text-gray-600">RoboTech</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">Model</span>
                            <span class="text-gray-600">{{ $product->title }}</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">Weight</span>
                            <span class="text-gray-600">2.5 kg</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">Dimensions</span>
                            <span class="text-gray-600">30 x 20 x 15 cm</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between py-3 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">Power Source</span>
                            <span class="text-gray-600">Rechargeable Battery</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">Battery Life</span>
                            <span class="text-gray-600">8-10 hours</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">Connectivity</span>
                            <span class="text-gray-600">WiFi, Bluetooth</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">Warranty</span>
                            <span class="text-gray-600">2 Years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Customer Reviews</h2>
            
            <!-- Review Summary -->
            <div class="bg-gray-50 rounded-2xl p-8 mb-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-blue-600 mb-2">4.8</div>
                        <div class="flex items-center justify-center space-x-1 mb-2">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star text-yellow-400"></i>
                            @endfor
                        </div>
                        <p class="text-gray-600">Based on 24 reviews</p>
                    </div>
                    <div class="space-y-2">
                        @for($i = 5; $i >= 1; $i--)
                            <div class="flex items-center space-x-2">
                                <span class="text-sm font-medium text-gray-700">{{ $i }}</span>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <div class="flex-1 bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: {{ $i == 5 ? '70' : ($i == 4 ? '20' : '5') }}%"></div>
                                </div>
                                <span class="text-sm text-gray-600">{{ $i == 5 ? '17' : ($i == 4 ? '5' : '2') }}</span>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Individual Reviews -->
            <div class="space-y-6">
                <div class="bg-white border border-gray-200 rounded-xl p-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-semibold">
                            JD
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <h4 class="font-semibold text-gray-900">John Doe</h4>
                                <div class="flex items-center space-x-1">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    @endfor
                                </div>
                                <span class="text-sm text-gray-500">2 days ago</span>
                            </div>
                            <p class="text-gray-700">
                                Excellent product! The build quality is outstanding and it works exactly as described. 
                                Highly recommend for anyone looking for a reliable robotics solution.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-semibold">
                            MS
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <h4 class="font-semibold text-gray-900">Maria Smith</h4>
                                <div class="flex items-center space-x-1">
                                    @for($i = 1; $i <= 4; $i++)
                                        <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    @endfor
                                    <i class="far fa-star text-yellow-400 text-sm"></i>
                                </div>
                                <span class="text-sm text-gray-500">1 week ago</span>
                            </div>
                            <p class="text-gray-700">
                                Great value for money. The setup was easy and the performance is impressive. 
                                Only minor issue is the battery life could be longer.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <button class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition-colors duration-300">
                    Load More Reviews
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
@if(isset($relatedProducts) && $relatedProducts->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12" data-aos="fade-up">
                Related Products
            </h2>
            <div class="grid md:grid-cols-4 gap-8">
                @foreach($relatedProducts as $related)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="relative overflow-hidden group">
                            <img src="{{ Storage::url($related->foto_product) }}" 
                                 class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" 
                                 alt="{{ $related->title }}">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-4 left-4 right-4 transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <a href="{{ route('shop.show', $related->slug) }}" 
                                   class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center py-2 rounded-lg font-semibold transition-colors duration-300">
                                    <i class="fas fa-eye mr-2"></i>View Details
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2 hover:text-blue-600 transition-colors duration-300">
                                <a href="{{ route('shop.show', $related->slug) }}">
                                    {{ $related->title }}
                                </a>
                            </h3>
                            <div class="text-gray-600 mb-4 text-sm line-clamp-2">
                                {!! Str::limit(strip_tags($related->description), 80) !!}
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-xl font-bold text-blue-600">
                                    ${{ number_format($related->price, 2) }}
                                </div>
                                <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-lg font-semibold transition-colors duration-300">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

<!-- Newsletter Subscription -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Stay Updated
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Subscribe to our newsletter for exclusive deals and the latest robotics products.
        </p>
        <div class="max-w-md mx-auto">
            <div class="flex gap-2">
                <input type="email" 
                       placeholder="Enter your email..." 
                       class="flex-1 px-4 py-3 rounded-lg border-0 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-600">
                <button class="px-6 py-3 bg-white text-blue-600 hover:bg-gray-100 font-semibold rounded-lg transition-all duration-300">
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Back to Top Button -->
<button id="backToTop" class="fixed bottom-8 right-8 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition-all duration-300 transform scale-0">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
    // Quantity controls
    function increaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        quantityInput.value = parseInt(quantityInput.value) + 1;
    }

    function decreaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }
    }

    // Back to top functionality
    window.addEventListener('scroll', function() {
        const backToTopButton = document.getElementById('backToTop');
        if (window.pageYOffset > 300) {
            backToTopButton.classList.remove('scale-0');
            backToTopButton.classList.add('scale-100');
        } else {
            backToTopButton.classList.remove('scale-100');
            backToTopButton.classList.add('scale-0');
        }
    });

    document.getElementById('backToTop').addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Image gallery functionality (if you add more images)
    function changeMainImage(src) {
        document.getElementById('mainImage').src = src;
    }
</script>
@endsection