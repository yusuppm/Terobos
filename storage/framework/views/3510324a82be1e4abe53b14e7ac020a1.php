

<?php $__env->startSection('title', $news->title); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900 overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <nav class="mb-8">
                <a href="<?php echo e(route('news.index')); ?>" class="text-blue-300 hover:text-white transition-colors duration-300">
                    <i class="fas fa-arrow-left mr-2"></i>Back to News
                </a>
            </nav>
            <div class="mb-4">
                <span class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                    <?php echo e($news->kategory); ?>

                </span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                <?php echo e($news->title); ?>

            </h1>
            <div class="flex items-center justify-center text-blue-200 space-x-6">
                <div class="flex items-center">
                    <i class="fas fa-user mr-2"></i>
                    <span><?php echo e($news->ditulis_oleh); ?></span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <span><?php echo e(\Carbon\Carbon::parse($news->tanggal)->format('M d, Y')); ?></span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-clock mr-2"></i>
                    <span><?php echo e(\Carbon\Carbon::parse($news->created_at)->diffForHumans()); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Featured Image -->
            <div class="mb-12 relative overflow-hidden rounded-2xl shadow-2xl" data-aos="fade-up">
                <img src="<?php echo e(Storage::url($news->thumbnail)); ?>" 
                     class="w-full h-96 object-cover" 
                     alt="<?php echo e($news->title); ?>">
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
            </div>

            <!-- Article Body -->
            <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="200">
                <div class="text-gray-700 leading-relaxed">
                    <?php echo $news->description; ?>

                </div>
            </div>

            <!-- Social Share -->
            <div class="mt-12 pt-8 border-t border-gray-200" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Share this article</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(request()->fullUrl())); ?>" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-facebook-f mr-2"></i>Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(request()->fullUrl())); ?>&text=<?php echo e(urlencode($news->title)); ?>" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-sky-500 hover:bg-sky-600 text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-twitter mr-2"></i>Twitter
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(urlencode(request()->fullUrl())); ?>" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-blue-700 hover:bg-blue-800 text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-linkedin-in mr-2"></i>LinkedIn
                            </a>
                            <a href="whatsapp://send?text=<?php echo e(urlencode($news->title . ' ' . request()->fullUrl())); ?>" 
                               class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                            </a>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-500">Published on</p>
                        <p class="text-lg font-semibold text-gray-900"><?php echo e(\Carbon\Carbon::parse($news->tanggal)->format('F d, Y')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related News -->
<?php if(isset($relatedNews) && $relatedNews->count() > 0): ?>
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12" data-aos="fade-up">
                Related Articles
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <?php $__currentLoopData = $relatedNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="<?php echo e($loop->iteration * 100); ?>">
                        <div class="relative overflow-hidden">
                            <img src="<?php echo e(Storage::url($related->thumbnail)); ?>" 
                                 class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" 
                                 alt="<?php echo e($related->title); ?>">
                            <div class="absolute top-4 left-4">
                                <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    <?php echo e($related->kategory); ?>

                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span><?php echo e(\Carbon\Carbon::parse($related->tanggal)->format('M d, Y')); ?></span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors duration-300">
                                <a href="<?php echo e(route('news.show', $related->slug)); ?>">
                                    <?php echo e($related->title); ?>

                                </a>
                            </h3>
                            <div class="text-gray-600 mb-4 line-clamp-2">
                                <?php echo Str::limit(strip_tags($related->description), 100); ?>

                            </div>
                            <a href="<?php echo e(route('news.show', $related->slug)); ?>" 
                               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                                Read More
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

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

<!-- Back to Top Button -->
<button id="backToTop" class="fixed bottom-8 right-8 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition-all duration-300 transform scale-0">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\rosus\resources\views\news\show.blade.php ENDPATH**/ ?>