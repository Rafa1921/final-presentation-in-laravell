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
            <?php echo e(__('Manage Reviews')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <section class="">

        <div class="container mt-6">
            <?php if(session('notification')): ?>
                <div class="w-full alert alert-success"><?php echo e(session('notification')); ?></div>
            <?php endif; ?>
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-5 mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <img src=" <?php echo e($review->user->profile_photo_url); ?> " class="img img-rounded img-fluid" />
                                <p class="text-secondary text-center"><?php echo e($review->created_at->diffForHumans()); ?></p>
                            </div>
                            <div class="col-md-10">`    
                                <p>
                                    <a class="float-left" href="#"><strong><?php echo e($review->user->name); ?></strong></a>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                </p>
                                <div class="clearfix"></div>
                                <p> <?php echo e($review->comment); ?></p>


                                <div class="mt-6 flex justify-end">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <form action="/edit-review/<?php echo e($review->id); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            <?php if($review->isFeatured == 1): ?>
                                                <input id="usertype" class="t-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="hidden" name="isFeatured" value="0"/>
                                                <button class="float-right btn btn-success ml-2 me-2">Featured</button>
                                            
                                            <?php else: ?> 
                                                <input id="isFeatured" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="hidden" name="isFeatured" value="1"/>
                                                <button class="float-right btn btn-outline-primary ml-2 me-2">Feature This Review</button>
                                            
                                            <?php endif; ?>
                                        </form>
                                        <span class="spacer"></span>
                                        <form action="/delete-review/<?php echo e($review->id); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button class="float-right btn text-white btn-danger">Delete</button>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="mx-5 mt-4 mb-10">
                <?php echo e($reviews->links()); ?>

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
<?php /**PATH C:\Users\gbrls\Documents\Gym Portal Dec 2024\Athlete gym portal\resources\views/manage-reviews.blade.php ENDPATH**/ ?>