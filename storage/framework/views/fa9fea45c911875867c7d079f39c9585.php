



<?php $__env->startSection('title', 'My Profile - Rosus'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 pt-24 pb-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white mb-2">My Profile</h1>
            <p class="text-gray-300">Manage your account settings and preferences</p>
        </div>

        <?php if(session('success')): ?>
            <div class="mb-6 bg-green-500/10 border border-green-500/50 rounded-lg p-4">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-400 mr-2"></i>
                    <span class="text-green-300"><?php echo e(session('success')); ?></span>
                </div>
            </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Profile Card -->
            <div class="lg:col-span-1">
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 shadow-2xl border border-white/20">
                    <div class="text-center">
                        <div class="relative inline-block mb-4">
                            <div id="avatar-container" class="w-24 h-24 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full flex items-center justify-center mx-auto overflow-hidden">
                                <?php if($customer->avatar): ?>
                                    <img id="avatar-preview" src="<?php echo e($customer->avatar_url); ?>" alt="Avatar" class="w-24 h-24 rounded-full object-cover">
                                <?php else: ?>
                                    <i id="avatar-icon" class="fas fa-user text-white text-3xl"></i>
                                <?php endif; ?>
                            </div>
                            <button onclick="document.getElementById('avatar-input').click()" class="absolute bottom-0 right-0 bg-cyan-500 hover:bg-cyan-600 text-white rounded-full p-2 shadow-lg transition-colors">
                                <i class="fas fa-camera text-sm"></i>
                            </button>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-1"><?php echo e($customer->name); ?></h3>
                        <p class="text-gray-400 mb-2"><?php echo e($customer->email); ?></p>
                        <span class="inline-block px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">
                            <i class="fas fa-check-circle mr-1"></i>Active
                        </span>
                    </div>
                    
                    <div class="mt-6 space-y-3">
                        <div class="flex items-center text-gray-300">
                            <i class="fas fa-calendar-alt w-5 text-cyan-400 mr-3"></i>
                            <span class="text-sm">Joined <?php echo e($customer->created_at->format('M Y')); ?></span>
                        </div>
                        <?php if($customer->phone): ?>
                        <div class="flex items-center text-gray-300">
                            <i class="fas fa-phone w-5 text-cyan-400 mr-3"></i>
                            <span class="text-sm"><?php echo e($customer->phone); ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if($customer->birth_date): ?>
                        <div class="flex items-center text-gray-300">
                            <i class="fas fa-birthday-cake w-5 text-cyan-400 mr-3"></i>
                            <span class="text-sm"><?php echo e($customer->birth_date->format('M d, Y')); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Forms -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Update Profile Form -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 shadow-2xl border border-white/20">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center">
                        <i class="fas fa-user-edit text-cyan-400 mr-3"></i>
                        Update Profile
                    </h2>

                    <?php if($errors->any()): ?>
                        <div class="mb-6 bg-red-500/10 border border-red-500/50 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <i class="fas fa-exclamation-triangle text-red-400 mr-2"></i>
                                <span class="text-red-300 text-sm font-medium">Please fix the following errors:</span>
                            </div>
                            <ul class="text-red-300 text-sm space-y-1 ml-6">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>• <?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('auth.profile.update')); ?>" enctype="multipart/form-data" class="space-y-6">
                        <?php echo csrf_field(); ?>
                        
                        <!-- Hidden Avatar Input -->
                        <input type="file" id="avatar-input" name="avatar" accept="image/*" class="hidden" onchange="previewAvatar(this)">

                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-200 mb-2">
                                <i class="fas fa-user mr-2 text-cyan-400"></i>Full Name
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   value="<?php echo e(old('name', $customer->name)); ?>"
                                   required 
                                   class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-200 mb-2">
                                <i class="fas fa-envelope mr-2 text-cyan-400"></i>Email Address
                            </label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   value="<?php echo e(old('email', $customer->email)); ?>"
                                   required 
                                   class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300">
                        </div>

                        <!-- Phone & Gender -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-200 mb-2">
                                    <i class="fas fa-phone mr-2 text-cyan-400"></i>Phone Number
                                </label>
                                <input type="tel" 
                                       id="phone" 
                                       name="phone" 
                                       value="<?php echo e(old('phone', $customer->phone)); ?>"
                                       class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300">
                            </div>
                            <div>
                                <label for="gender" class="block text-sm font-medium text-gray-200 mb-2">
                                    <i class="fas fa-venus-mars mr-2 text-cyan-400"></i>Gender
                                </label>
                                <select name="gender" 
                                        id="gender"
                                        class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300">
                                    <option value="">Select Gender</option>
                                    <option value="male" <?php echo e(old('gender', $customer->gender) == 'male' ? 'selected' : ''); ?>>Male</option>
                                    <option value="female" <?php echo e(old('gender', $customer->gender) == 'female' ? 'selected' : ''); ?>>Female</option>
                                </select>
                            </div>
                        </div>

                        <!-- Birth Date -->
                        <div>
                            <label for="birth_date" class="block text-sm font-medium text-gray-200 mb-2">
                                <i class="fas fa-birthday-cake mr-2 text-cyan-400"></i>Birth Date
                            </label>
                            <input type="date" 
                                   id="birth_date" 
                                   name="birth_date" 
                                   value="<?php echo e(old('birth_date', $customer->birth_date?->format('Y-m-d'))); ?>"
                                   class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300">
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-200 mb-2">
                                <i class="fas fa-map-marker-alt mr-2 text-cyan-400"></i>Address
                            </label>
                            <textarea id="address" 
                                      name="address" 
                                      rows="3"
                                      class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 resize-none"><?php echo e(old('address', $customer->address)); ?></textarea>
                        </div>

                        <!-- Update Button -->
                        <button type="submit" 
                                class="w-full relative group bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-cyan-500/25">
                            <span class="relative flex items-center justify-center">
                                <i class="fas fa-save mr-2"></i>
                                Update Profile
                            </span>
                        </button>
                    </form>
                </div>

                <!-- Change Password Form -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 shadow-2xl border border-white/20">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center">
                        <i class="fas fa-lock text-cyan-400 mr-3"></i>
                        Change Password
                    </h2>

                    <form method="POST" action="<?php echo e(route('auth.change-password')); ?>" class="space-y-6">
                        <?php echo csrf_field(); ?>
                        
                        <!-- Current Password -->
                        <div>
                            <label for="current_password" class="block text-sm font-medium text-gray-200 mb-2">
                                <i class="fas fa-key mr-2 text-cyan-400"></i>Current Password
                            </label>
                            <div class="relative">
                                <input type="password" 
                                       id="current_password" 
                                       name="current_password" 
                                       required 
                                       class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 pr-12">
                                <button type="button" onclick="togglePassword('current_password')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                                    <i id="current_password_icon" class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <!-- New Password -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-200 mb-2">
                                    <i class="fas fa-lock mr-2 text-cyan-400"></i>New Password
                                </label>
                                <div class="relative">
                                    <input type="password" 
                                           id="password" 
                                           name="password" 
                                           required 
                                           class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 pr-12">
                                    <button type="button" onclick="togglePassword('password')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                                        <i id="password_icon" class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-200 mb-2">
                                    <i class="fas fa-lock mr-2 text-cyan-400"></i>Confirm New Password
                                </label>
                                <div class="relative">
                                    <input type="password" 
                                           id="password_confirmation" 
                                           name="password_confirmation" 
                                           required 
                                           class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 pr-12">
                                    <button type="button" onclick="togglePassword('password_confirmation')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                                        <i id="password_confirmation_icon" class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Password Strength Indicator -->
                        <div id="password-strength" class="hidden">
                            <div class="flex items-center mb-2">
                                <span class="text-sm text-gray-300 mr-2">Password Strength:</span>
                                <div class="flex space-x-1">
                                    <div id="strength-1" class="w-6 h-2 rounded bg-gray-600"></div>
                                    <div id="strength-2" class="w-6 h-2 rounded bg-gray-600"></div>
                                    <div id="strength-3" class="w-6 h-2 rounded bg-gray-600"></div>
                                    <div id="strength-4" class="w-6 h-2 rounded bg-gray-600"></div>
                                </div>
                                <span id="strength-text" class="text-sm ml-2"></span>
                            </div>
                        </div>

                        <!-- Change Password Button -->
                        <button type="submit" 
                                class="w-full relative group bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-orange-500/25">
                            <span class="relative flex items-center justify-center">
                                <i class="fas fa-key mr-2"></i>
                                Change Password
                            </span>
                        </button>
                    </form>
                </div>

                <!-- Account Actions -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 shadow-2xl border border-white/20">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center">
                        <i class="fas fa-cog text-cyan-400 mr-3"></i>
                        Account Actions
                    </h2>
                    
                    <div class="space-y-4">
                        <!-- Export Data -->
                        <button onclick="exportData()" class="w-full flex items-center justify-center px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                            <i class="fas fa-download mr-2"></i>
                            Export My Data
                        </button>
                        
                        <!-- Delete Account -->
                        <button onclick="confirmDelete()" class="w-full flex items-center justify-center px-4 py-3 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors">
                            <i class="fas fa-trash mr-2"></i>
                            Delete Account
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-8">
            <a href="<?php echo e(route('home')); ?>" class="text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-arrow-left mr-2"></i>Back to Home
            </a>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    // Avatar preview function
    function previewAvatar(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const avatarContainer = document.getElementById('avatar-container');
                const avatarIcon = document.getElementById('avatar-icon');
                let avatarPreview = document.getElementById('avatar-preview');
                
                if (!avatarPreview) {
                    avatarPreview = document.createElement('img');
                    avatarPreview.id = 'avatar-preview';
                    avatarPreview.className = 'w-24 h-24 rounded-full object-cover';
                    avatarContainer.appendChild(avatarPreview);
                }
                
                avatarPreview.src = e.target.result;
                avatarPreview.style.display = 'block';
                
                if (avatarIcon) {
                    avatarIcon.style.display = 'none';
                }
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Toggle password visibility
    function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        const icon = document.getElementById(fieldId + '_icon');
        
        if (field.type === 'password') {
            field.type = 'text';
            icon.className = 'fas fa-eye-slash';
        } else {
            field.type = 'password';
            icon.className = 'fas fa-eye';
        }
    }

    // Password strength checker
    function checkPasswordStrength(password) {
        let strength = 0;
        const strengthBar = document.getElementById('password-strength');
        const strengthText = document.getElementById('strength-text');
        
        if (password.length >= 8) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^A-Za-z0-9]/.test(password)) strength++;
        
        // Reset all bars
        for (let i = 1; i <= 4; i++) {
            document.getElementById('strength-' + i).className = 'w-6 h-2 rounded bg-gray-600';
        }
        
        let color, text;
        switch (strength) {
            case 0:
            case 1:
                color = 'bg-red-500';
                text = 'Weak';
                break;
            case 2:
                color = 'bg-yellow-500';
                text = 'Fair';
                break;
            case 3:
                color = 'bg-blue-500';
                text = 'Good';
                break;
            case 4:
                color = 'bg-green-500';
                text = 'Strong';
                break;
        }
        
        for (let i = 1; i <= strength; i++) {
            document.getElementById('strength-' + i).className = `w-6 h-2 rounded ${color}`;
        }
        
        strengthText.textContent = text;
        strengthText.className = `text-sm ml-2 ${color.replace('bg-', 'text-')}`;
        
        if (password.length > 0) {
            strengthBar.classList.remove('hidden');
        } else {
            strengthBar.classList.add('hidden');
        }
    }

    // Export data function
    function exportData() {
        if (confirm('Are you sure you want to export your data? This will download a file containing your personal information.')) {
            // You can implement the actual export functionality here
            window.location.href = "<?php echo e(route('auth.export-data') ?? '#'); ?>";
        }
    }

    // Confirm delete account
    function confirmDelete() {
        if (confirm('Are you absolutely sure you want to delete your account? This action cannot be undone and all your data will be permanently removed.')) {
            if (confirm('This is your final confirmation. Are you really sure you want to delete your account?')) {
                // You can implement the actual delete functionality here
                window.location.href = "<?php echo e(route('auth.delete-account') ?? '#'); ?>";
            }
        }
    }

    // Auto-hide success messages
    document.addEventListener('DOMContentLoaded', function() {
        const successMessage = document.querySelector('.bg-green-500\\/10');
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.transition = 'opacity 0.5s ease-out';
                successMessage.style.opacity = '0';
                setTimeout(function() {
                    successMessage.remove();
                }, 500);
            }, 5000);
        }

        // Add password strength checker
        const passwordField = document.getElementById('password');
        if (passwordField) {
            passwordField.addEventListener('input', function() {
                checkPasswordStrength(this.value);
            });
        }

        // Phone number formatting
        const phoneField = document.getElementById('phone');
        if (phoneField) {
            phoneField.addEventListener('input', function() {
                let value = this.value.replace(/\D/g, '');
                if (value.length > 0) {
                    if (value.startsWith('0')) {
                        value = '+62' + value.substring(1);
                    } else if (!value.startsWith('+62')) {
                        value = '+62' + value;
                    }
                }
                this.value = value;
            });
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\rosus\resources\views\auth\customer\profile.blade.php ENDPATH**/ ?>