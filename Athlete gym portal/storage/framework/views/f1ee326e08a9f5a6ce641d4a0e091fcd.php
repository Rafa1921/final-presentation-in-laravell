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
                <?php echo e(__('Blogs')); ?>

            </h2>
            <a href="/add-blog" class="float-right btn btn-primary ml-2 me-2">Create Blog Post</a>
        </div>

     <?php $__env->endSlot(); ?>

    <section class="">
    <div class="container mt-6">
            <?php if(session('notification')): ?>
                <div class="w-full alert alert-success"><?php echo e(session('notification')); ?></div>
            <?php endif; ?>
            <div class="container text-center">
            <div class="blogs justify-center">

            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php             
                $blogUrl = "blog" . "/" . $blog->id
            ?>


                <div class="card mb-5 mt-5 cursor-pointer" onclick=" window.location = '<?php echo e(url($blogUrl)); ?>';">
                    <div class="card-body d-flex flex-col justify-between">
                                <div class="d-flex flex-col blogs-header">
                                    <img src="<?php echo e($blog->blogImg); ?>" class="img rounded-1 img-fluid h-5" />
                                    <p class="fw-bold text-start mt-2"> <?php echo e($blog->blogTitle); ?></p>
                                </div>
                                <div class="d-flex flex-col">
                                    <hr >
                                    <div class="d-flex flex-row justify-between">
                                        <p>
                                            <?php echo e($blog->user->name); ?>

                                        </p>
                                        <p class="text-secondary"><?php echo e($blog->created_at->diffForHumans()); ?></p>
                                </div>
                                </div>
                    </div>
                </div>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
            <div class="mx-5 mt-4 mb-10">
                <?php echo e($blogs->links()); ?>

            </div>
        </div>

    </section>
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
<?php /**PATH C:\Users\gbrls\Documents\Gym Portal Dec 2024\Athlete gym portal\resources\views/guest/blogs.blade.php ENDPATH**/ ?>