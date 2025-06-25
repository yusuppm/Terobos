

<?php $__env->startSection('title', 'Our Projects'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900 overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Our 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-300">
                    Projects
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
                Explore our innovative robotics projects that showcase the future of technology and sustainability
            </p>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <?php if($projects->count() > 0): ?>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mb-12">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up">
                        <div class="relative overflow-hidden">
                            <img src="<?php echo e(Storage::url($project->thumbnail)); ?>" 
                                 class="w-full h-64 object-cover transition-transform duration-300 hover:scale-110" 
                                 alt="<?php echo e($project->title); ?>">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors duration-300">
                                <?php echo e($project->title); ?>

                            </h3>
                            <div class="text-gray-600 mb-4 line-clamp-3">
                                <?php echo Str::limit(strip_tags($project->description), 150); ?>

                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-500">
                                    <i class="fas fa-calendar-alt mr-1"></i>
                                    <?php echo e($project->created_at->format('M d, Y')); ?>

                                </span>
                                <a href="<?php echo e(route('projects.show', $project->slug)); ?>" 
                                   class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-lg transition-all duration-300">
                                    View Details
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                <?php echo e($projects->links()); ?>

            </div>
        <?php else: ?>
            <div class="text-center py-16">
                <div class="text-6xl text-gray-300 mb-4">
                    <i class="fas fa-folder-open"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-600 mb-2">No Projects Found</h3>
                <p class="text-gray-500">Check back later for exciting new projects!</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Have a Project Idea?
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            We're always looking for innovative robotics projects. Get in touch with us to discuss your ideas!
        </p>
        <a href="#contact" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 hover:bg-gray-100 font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
            Contact Us
            <i class="fas fa-paper-plane ml-2"></i>
        </a>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\rosus\resources\views/projects/index.blade.php ENDPATH**/ ?>