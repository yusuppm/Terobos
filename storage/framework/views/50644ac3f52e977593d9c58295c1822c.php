

<?php $__env->startSection('title', 'Robot Shop'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900 overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Robot 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-300">
                    Shop
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
                Discover cutting-edge robotics products and innovative automation solutions
            </p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-8 bg-white border-b">
    <div class="container mx-auto px-4">
        <form method="GET" action="<?php echo e(route('shop.index')); ?>" class="flex flex-wrap gap-4 items-center justify-between">
            <div class="flex flex-wrap gap-4">
                <!-- Search Input -->
                <div class="relative">
                    <input type="text" 
                           name="search" 
                           value="<?php echo e(request('search')); ?>"
                           placeholder="Search products..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <!-- Price Range Filter -->
                <select name="price_range" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Prices</option>
                    <option value="0-100" <?php echo e(request('price_range') == '0-100' ? 'selected' : ''); ?>>Under $100</option>
                    <option value="100-500" <?php echo e(request('price_range') == '100-500' ? 'selected' : ''); ?>>$100 - $500</option>
                    <option value="500-1000" <?php echo e(request('price_range') == '500-1000' ? 'selected' : ''); ?>>$500 - $1000</option>
                    <option value="1000-5000" <?php echo e(request('price_range') == '1000-5000' ? 'selected' : ''); ?>>$1000 - $5000</option>
                    <option value="5000+" <?php echo e(request('price_range') == '5000+' ? 'selected' : ''); ?>>Above $5000</option>
                </select>

                <!-- Sort Filter -->
                <select name="sort" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Sort By</option>
                    <option value="price_asc" <?php echo e(request('sort') == 'price_asc' ? 'selected' : ''); ?>>Price: Low to High</option>
                    <option value="price_desc" <?php echo e(request('sort') == 'price_desc' ? 'selected' : ''); ?>>Price: High to Low</option>
                    <option value="newest" <?php echo e(request('sort') == 'newest' ? 'selected' : ''); ?>>Newest First</option>
                    <option value="title" <?php echo e(request('sort') == 'title' ? 'selected' : ''); ?>>Name A-Z</option>
                </select>

                <button type="submit" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-300">
                    <i class="fas fa-filter mr-2"></i>Filter
                </button>
            </div>

            <?php if(request()->hasAny(['search', 'price_range', 'sort'])): ?>
                <a href="<?php echo e(route('shop.index')); ?>" class="px-4 py-2 text-gray-600 hover:text-gray-800 transition-colors duration-300">
                    <i class="fas fa-times mr-2"></i>Clear Filters
                </a>
            <?php endif; ?>
        </form>
    </div>
</section>

<!-- Products Grid -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <?php if($products->count() > 0): ?>
            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-8 mb-12">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up">
                        <div class="relative overflow-hidden group">
                            <img src="<?php echo e(Storage::url($product->foto_product)); ?>" 
                                 class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110" 
                                 alt="<?php echo e($product->title); ?>">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-4 right-4">
                                <button class="bg-white/90 hover:bg-white text-gray-800 p-2 rounded-full shadow-lg transition-all duration-300 transform hover:scale-110">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <a href="<?php echo e(route('shop.show', $product->slug)); ?>" 
                                   class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center py-2 rounded-lg font-semibold transition-colors duration-300">
                                    <i class="fas fa-eye mr-2"></i>View Details
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2 hover:text-blue-600 transition-colors duration-300">
                                <a href="<?php echo e(route('shop.show', $product->slug)); ?>">
                                    <?php echo e($product->title); ?>

                                </a>
                            </h3>
                            <div class="text-gray-600 mb-4 text-sm line-clamp-2">
                                <?php echo Str::limit(strip_tags($product->description), 80); ?>

                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-2xl font-bold text-blue-600">
                                    $<?php echo e(number_format($product->price, 2)); ?>

                                </div>
                                <div class="flex space-x-2">
                                    <button class="bg-gray-100 hover:bg-gray-200 text-gray-600 p-2 rounded-lg transition-colors duration-300" title="Add to Wishlist">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-semibold transition-colors duration-300" title="Add to Cart">
                                        <i class="fas fa-shopping-cart mr-1"></i>Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                <?php echo e($products->appends(request()->query())->links()); ?>

            </div>
        <?php else: ?>
            <div class="text-center py-16">
                <div class="text-6xl text-gray-300 mb-4">
                    <i class="fas fa-robot"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-600 mb-2">No Products Found</h3>
                <p class="text-gray-500">
                    <?php if(request()->hasAny(['search', 'price_range', 'sort'])): ?>
                        Try adjusting your search criteria or <a href="<?php echo e(route('shop.index')); ?>" class="text-blue-600 hover:text-blue-800">view all products</a>.
                    <?php else: ?>
                        Check back later for new robotics products!
                    <?php endif; ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\rosus\resources\views\shop\index.blade.php ENDPATH**/ ?>