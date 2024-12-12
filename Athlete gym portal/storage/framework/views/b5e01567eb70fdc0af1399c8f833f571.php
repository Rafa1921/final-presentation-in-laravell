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
            Add Blog
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                    <form method="POST" action="/new-blog" id="addBlogForm" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <!-- Title -->
                        <div>
                            <label for="blogTitle" class="block text-sm font-medium text-gray-700">Title</label>
                            <input id="blogTitle" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="blogTitle" required/>
                        </div>

                        <!-- Image Upload -->
                        <div class="mt-10">
                            <label for="blogImg" class="block text-sm font-medium text-gray-700">Upload Image</label>
                            <p class="mt-2 fw-bold">Current Blog Image</p>
                            <img src='https://www.pngkey.com/png/detail/233-2332677_image-500580-placeholder-transparent.png' alt="Blog Image" id="imgPreview" class="img img-rounded img-fluid mx-auto rounded-2" />
                            <input id="blogImg" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="file" name="blogImg" accept="image/*"/>
                            <span id="image-error" class="text-red-500 text-sm" style="display:none;">Please upload a valid image file.</span>
                        </div>

                        <!-- Description -->
                        <div class="mt-10">
                            <label for="blogDescription" class="block text-sm font-medium text-gray-700">Blog Content</label>
                            <textarea id="blogDescription" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" rows="20" name="blogDescription" placeholder="" required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6 flex justify-end">
                            <button class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                                Add Blog
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

     <!-- Client-Side Validation and Image Resizing -->
     <script>
        document.getElementById('addBlogForm').addEventListener('submit', function(event) {
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
                            document.getElementById('addBlogForm').submit();
                        }, file.type);
                    };
                    img.src = e.target.result;
                };
                reader.readAsDataURL(file);
                
                event.preventDefault(); // Prevent submission until resizing logic is complete
            }
        });

        var imgInp = document.getElementById("blogImg");
        var img = document.getElementById("imgPreview");

        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                img.src = URL.createObjectURL(file)
            }
        }
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
<?php endif; ?><?php /**PATH C:\Users\gbrls\Documents\Gym Portal Dec 2024\Athlete gym portal\resources\views/guest/add-blog.blade.php ENDPATH**/ ?>