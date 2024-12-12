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
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <?php if(session('notification')): ?>
                <div class="w-full alert alert-success"><?php echo e(session('notification')); ?></div>
            <?php endif; ?>
            <div></div>
            <h2 class="bg-white overflow-hidden shadow-xl font-bold text-gray-800 mt-10 rounded-lg px-2 py-2">Recently Created Accounts</h2>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>         
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reviews Submitted</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($i++); ?></th>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->name); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->email); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->id); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e(ucwords($user->usertype)); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->reviewCount($user->id)); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->created_at->diffForHumans()); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="mx-5 mt-4">
                    <?php echo e($users->links()); ?>

                </div>

                <div class="mt-6 flex justify-end">
            
                    <a href="/created-accounts" class="inline-flex items-center px-4 py-2 mx-4 my-4 text-decoration-none bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                        See All Results
                    </a>
                </div>
            </div>


            <h2 class="bg-white overflow-hidden shadow-xl font-bold text-gray-800 mt-10 rounded-lg px-2 py-2">Recent Website Reviews</h2>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-20">
                
                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mx-4 my-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 mt-2 mr-4">
                                <?php if(empty($review->user->profile_photo_url) || is_null($review->user->profile_photo_url) ): ?>
                                <img src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                    class="img img-rounded img-fluid mb-4" />
                                <?php else: ?>
                                <img src="<?php echo e($review->user->profile_photo_url); ?>" alt="<?php echo e($review->user->profile_photo_url); ?>"
                                    class="img img-rounded img-fluid mb-4" />
                                <?php endif; ?>

                                    
                                <p class="text-secondary text-center"><?php echo e($review->created_at->diffForHumans()); ?></p>
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <a class="float-left"
                                        href="#"><strong><?php echo e($review->user->name); ?></strong></a>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                </p>
                                <div class="clearfix"></div>
                                <p> <?php echo e($review->comment); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="mt-6 flex justify-end">
            
                    <a href="/manage-reviews" class="inline-flex items-center px-4 py-2 mx-4 my-4 text-decoration-none bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                        Manage Reviews
                    </a>
                </div>
            </div>


        </div>
    </div>
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
<?php /**PATH C:\Users\gbrls\Documents\Gym Portal Dec 2024\Athlete gym portal\resources\views/dashboard.blade.php ENDPATH**/ ?>