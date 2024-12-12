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
        <div  class="d-flex d-flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Blog')); ?>

            </h2>
        </div>

     <?php $__env->endSlot(); ?>

    <section class="pb-4">
    <div class="container mt-6  bg-white rounded-3 px-4 py-5">
            <?php if(session('notification')): ?>
                <div class="w-full alert alert-success"><?php echo e(session('notification')); ?></div>
            <?php endif; ?>
                <div class="blog-container mb-5">
                
                    <div class="d-flex flex-col justify-between border-bottom pb-2">
                        <div class="d-flex flex-row justify-between">

                            <h1 class="blog-title"><?php echo e($blog->blogTitle); ?></h1>


                            <?php if($blog->user_id == $auth[0] || $auth[1] == "admin"): ?>
                            <div class="dropdown">
                                <a class="btn " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical pt-2 cursor-pointer"></i>

                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/edit-blog/<?php echo e($blog->id); ?>">Edit</a></li>
                                    <li>
                                    <form action="/delete-blog/<?php echo e($blog->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <li><button type="submit" class="dropdown-item text-danger">Delete</button></li>
                                     </form>
                                    </li>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="d-flex flex-row justify-between">
                            <p class="text-secondary">Posted by <span class="text-black opacity-40"><?php echo e($blog->user->name); ?></span></p>
                            <p class="text-secondary">Publihsed <span class="text-black opacity-40"><?php echo e($blog->created_at->diffForHumans()); ?></span></p>
                            
                        </div>
                    </div>


                    <div class="d-flex flex-col justify-between items-center mt-4">
                        <img src=' <?php echo e(url($blog->blogImg)); ?> ' alt="Blog Image" class="img img-rounded img-fluid blog-image rounded-2" />
                        <div class="relative shadow ">
                            <div class="bg-white rounded-top-4 z-3 blog-desc d-flex flex-col justify-between">
                                <p class="preserveLines lh-lg"><?php echo e($blog->blogDescription); ?></p>

                                <p class="text-secondary italic">Last updated <?php echo e($blog->updated_at->diffForHumans()); ?></span></p>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\gbrls\Documents\Gym Portal Dec 2024\Athlete gym portal\resources\views/guest/blog.blade.php ENDPATH**/ ?>