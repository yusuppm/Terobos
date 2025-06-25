

<?php $__env->startSection('title', 'Latest News'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900 overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Latest 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-300">
                    News
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
                Stay updated with the latest developments in robotics, technology, and innovation
            </p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-8 bg-white border-b">
    <div class="container mx-auto px-4">
        <form method="GET" action="<?php echo e(route('news.index')); ?>" class="flex flex-wrap gap-4 items-center justify-between">
            <div class="flex flex-wrap gap-4">
                <!-- Search Input -->
                <div class="relative">
                    <input type="text" 
                           name="search" 
                           value="<?php echo e(request('search')); ?>"
                           placeholder="Search news..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <!-- Category Filter -->
                <select name="kategori" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Categories</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category); ?>" <?php echo e(request('kategori') == $category ? 'selected' : ''); ?>>
                            <?php echo e($category); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <button type="submit" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-300">
                    <i class="fas fa-filter mr-2"></i>Filter
                </button>
            </div>

            <?php if(request()->hasAny(['search', 'kategori'])): ?>
                <a href="<?php echo e(route('news.index')); ?>" class="px-4 py-2 text-gray-600 hover:text-gray-800 transition-colors duration-300">
                    <i class="fas fa-times mr-2"></i>Clear Filters
                </a>
            <?php endif; ?>
        </form>
    </div>
</section>

<!-- News Grid -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <?php if($news->count() > 0): ?>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mb-12">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up">
                        <div class="relative overflow-hidden">
                            <img src="<?php echo e(Storage::url($article->thumbnail)); ?>" 
                                 class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" 
                                 alt="<?php echo e($article->title); ?>">
                            <div class="absolute top-4 left-4">
                                <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    <?php echo e($article->kategory); ?>

                                </span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span><?php echo e(\Carbon\Carbon::parse($article->tanggal)->format('M d, Y')); ?></span>
                                <span class="mx-2">•</span>
                                <i class="fas fa-user mr-2"></i>
                                <span><?php echo e($article->ditulis_oleh); ?></span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors duration-300">
                                <a href="<?php echo e(route('news.show', $article->slug)); ?>">
                                    <?php echo e($article->title); ?>

                                </a>
                            </h3>
                            <div class="text-gray-600 mb-4 line-clamp-3">
                                <?php echo Str::limit(strip_tags($article->description), 150); ?>

                            </div>
                            <a href="<?php echo e(route('news.show', $article->slug)); ?>" 
                               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                                Read More
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                <?php echo e($news->appends(request()->query())->links()); ?>

            </div>
        <?php else: ?>
            <div class="text-center py-16">
                <div class="text-6xl text-gray-300 mb-4">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-600 mb-2">No News Found</h3>
                <p class="text-gray-500">
                    <?php if(request()->hasAny(['search', 'kategori'])): ?>
                        Try adjusting your search criteria or <a href="<?php echo e(route('news.index')); ?>" class="text-blue-600 hover:text-blue-800">view all news</a>.
                    <?php else: ?>
                        Check back later for the latest updates!
                    <?php endif; ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Stay Updated
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Subscribe to our newsletter and never miss the latest news and updates from the world of robotics.
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\rosus\resources\views\news\index.blade.php ENDPATH**/ ?>