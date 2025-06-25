

<?php $__env->startSection('title', $project->title); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900 overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <nav class="mb-8">
                <a href="<?php echo e(route('projects.index')); ?>" class="text-blue-300 hover:text-white transition-colors duration-300">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Projects
                </a>
            </nav>
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                <?php echo e($project->title); ?>

            </h1>
            <div class="flex items-center justify-center text-blue-200">
                <i class="fas fa-calendar-alt mr-2"></i>
                <span>Created <?php echo e($project->created_at->format('F d, Y')); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Project Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Featured Image -->
            <div class="mb-12">
                <img src="<?php echo e(Storage::url($project->thumbnail)); ?>" 
                     alt="<?php echo e($project->title); ?>" 
                     class="w-full h-96 object-cover rounded-2xl shadow-2xl">
            </div>

            <!-- Project Description -->
            <div class="prose prose-lg max-w-none mb-16">
                <div class="text-gray-700 leading-relaxed">
                    <?php echo $project->description; ?>

                </div>
            </div>

            <!-- Project Actions -->
            <div class="flex flex-wrap gap-4 justify-center mb-16">
                <button class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-lg transition-all duration-300">
                    <i class="fas fa-share-alt mr-2"></i>
                    Share Project
                </button>
                <button class="inline-flex items-center px-6 py-3 border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-semibold rounded-lg transition-all duration-300">
                    <i class="fas fa-bookmark mr-2"></i>
                    Save Project
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
<?php if($relatedProjects->count() > 0): ?>
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Related Projects
            </h2>
            <p class="text-lg text-gray-600">
                Discover more innovative projects from our portfolio
            </p>
        </div>
        
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
            <?php $__currentLoopData = $relatedProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="relative overflow-hidden">
                        <img src="<?php echo e(Storage::url($relatedProject->thumbnail)); ?>" 
                             class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" 
                             alt="<?php echo e($relatedProject->title); ?>">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            <?php echo e($relatedProject->title); ?>

                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            <?php echo Str::limit(strip_tags($relatedProject->description), 120); ?>

                        </p>
                        <a href="<?php echo e(route('projects.show', $relatedProject->slug)); ?>" 
                           class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                            View Project
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Call to Action -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Interested in This Project?
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Get in touch with us to learn more about this project or discuss similar solutions for your needs.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="#contact" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 hover:bg-gray-100 font-semibold rounded-full transition-all duration-300">
                Contact Us
                <i class="fas fa-paper-plane ml-2"></i>
            </a>
            <a href="<?php echo e(route('projects.index')); ?>" class="inline-flex items-center px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-blue-600 font-semibold rounded-full transition-all duration-300">
                View All Projects
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\rosus\resources\views\projects\show.blade.php ENDPATH**/ ?>