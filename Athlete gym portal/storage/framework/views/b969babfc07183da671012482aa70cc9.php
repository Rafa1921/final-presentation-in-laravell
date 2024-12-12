<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add User
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <?php if(session('notification')): ?>
                        <div class="w-full alert alert-danger"><?php echo e(session('notification')); ?></div>
                    <?php endif; ?>
                    <form method="POST" action="/new-user" id="addUserForm" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name" required/>
                        </div>
            
                        <!-- Email -->
                        <div class="mt-3">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" required/>
                            <span id="email-error" class="text-red-500 text-sm" style="display:none;">Invalid email format. Please include an "@" and a domain.</span>
                        </div>
            
                        <!-- Temporary Password -->
                        <div class="mt-3">
                            <label for="password" class="block text-sm font-medium text-gray-700">Temporary Password</label>
                            <input id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" required/>
                            <span id="password-error" class="text-red-500 text-sm" style="display:none;">Password must be at least 8 characters.</span>
                        </div>

                        <!-- Hidden User Type -->
                        <div>
                            <input id="usertype" type="hidden" name="usertype" value="user"/>
                        </div>

                        <!-- Age -->
                        <div class="mt-3">
                            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                            <input id="age" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="age" required/>
                        </div>

                        <!-- Address -->
                        <div class="mt-3">
                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                            <input id="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="address" required/>
                            <span id="address-error" class="text-red-500 text-sm" style="display:none;">Address is required and must be at least 5 characters long.</span>
                        </div>

                        <!-- Phone -->
                        <div class="mt-3">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <input id="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="phone" required/>
                            <span id="phone-error" class="text-red-500 text-sm" style="display:none;">Phone number must be at least 11 digits.</span>
                        </div>

                        <!-- Contract -->
                        <div class="mt-3">
                            <label for="contract" class="block text-sm font-medium text-gray-700">Contract</label>
                            <input id="contract" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="contract" />
                        </div>

                        <!-- Image Upload -->
                        <div class="mt-3">
                            <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                            <input id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="file" name="image" accept="image/*" required/>
                            <span id="image-error" class="text-red-500 text-sm" style="display:none;">Please upload a valid image file.</span>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6 flex justify-end">
                            <button class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                                Add User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Client-Side Validation -->
    <script>

        document.getElementById('email').addEventListener('blur', function() {
            var emailField = document.getElementById('email');
            var email = emailField.value;
            var emailError = document.getElementById('email-error');

            // Check if the email contains "@" and has a valid format
            if (email.indexOf('@') === -1 || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                emailError.style.display = 'block'; // Show the error message
            } else {
                emailError.style.display = 'none'; // Hide the error message
            }
        });

        document.getElementById('password').addEventListener('blur', function() {
            var passwordField = document.getElementById('password');
            var password = passwordField.value;
            var passwordError = document.getElementById('password-error');

            // Check if the password has at least 8 characters
            if (password.length < 8) {
                passwordError.style.display = 'block'; // Show the error message
            } else {
                passwordError.style.display = 'none'; // Hide the error message
            }
        });

        document.getElementById('address').addEventListener('blur', function() {
            var addressField = document.getElementById('address');
            var address = addressField.value;
            var addressError = document.getElementById('address-error');

            // Check if the address is at least 5 characters
            if (address.length < 5) {
                addressError.style.display = 'block'; // Show the error message
            } else {
                addressError.style.display = 'none'; // Hide the error message
            }
        });


        document.getElementById('phone').addEventListener('blur', function() {
            var phoneField = document.getElementById('phone');
            var phone = phoneField.value;
            var phoneError = document.getElementById('phone-error');

            // Check if the phone number has 11 digits
            if (!/^\d{11}$/.test(phone)) {
                phoneError.style.display = 'block'; // Show the error message
            } else {
                phoneError.style.display = 'none'; // Hide the error message
            }
        });

        // Age validation
        document.getElementById('age').addEventListener('blur', function() {
            var ageField = document.getElementById('age');
            var age = ageField.value;
            var ageError = document.getElementById('age-error');

            // Check if age is a valid number between 1 and 100
            if (isNaN(age) || age < 1 || age > 65) {
                ageError.style.display = 'block'; // Show the error message
            } else {
                ageError.style.display = 'none'; // Hide the error message
            }
         
            // Validate Image
            const image = document.getElementById('image').files[0];
            if (!image || !image.type.startsWith('image/')) {
                document.getElementById('image-error').style.display = 'block';
                valid = false;
            }

            // Prevent form submission if there are validation errors
            if (!valid) {
                event.preventDefault();
            }
        });
    </script>

     <!-- Client-Side Validation and Image Resizing -->
     <script>
        document.getElementById('addUserForm').addEventListener('submit', function(event) {
            let valid = true;
            const imageInput = document.getElementById('image');
            const imageError = document.getElementById('image-error');
        
            if (!imageInput.files.length) {
                imageError.style.display = 'block';
                valid = false;
            } else {
                const file = imageInput.files[0];
                
                if (!file.type.startsWith('image/')) {
                    imageError.style.display = 'block';
                    valid = false;
                } else {
                    imageError.style.display = 'none';
                }
            }
        
            if (valid && imageInput.files[0]) {
                const file = imageInput.files[0];
                const maxWidth = 300; // Set max width for resizing
                const maxHeight = 300; // Set max height for resizing
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = new Image();
                    img.onload = function() {
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');
        
                        if (img.width > img.height) {
                            canvas.width = Math.min(img.width, maxWidth);
                            canvas.height = (img.height * maxWidth) / img.width;
                        } else {
                            canvas.height = Math.min(img.height, maxHeight);
                            canvas.width = (img.width * maxHeight) / img.height;
                        }
        
                        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
        
                        canvas.toBlob(function(blob) {
                            const resizedFile = new File([blob], file.name, {
                                type: file.type,
                                lastModified: Date.now()
                            });
        
                            const dataTransfer = new DataTransfer();
                            dataTransfer.items.add(resizedFile);
                            imageInput.files = dataTransfer.files;
        
                            // Allow the form submission to continue now
                            document.getElementById('addUserForm').submit();
                        }, file.type);
                    };
                    img.src = e.target.result;
                };
                reader.readAsDataURL(file);
                
                event.preventDefault(); // Prevent submission until resizing logic is complete
            }
        });
        </script>
        
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\gbrls\Documents\Gym Portal Dec 2024\Athlete gym portal\resources\views/add-user.blade.php ENDPATH**/ ?>