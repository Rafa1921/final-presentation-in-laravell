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
            <?php echo e(__('Manage Users')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <?php if(session('notification')): ?>
                <div class="w-full alert alert-success"><?php echo e(session('notification')); ?></div>
            <?php endif; ?>
            <!-- Manage Active Users List - Start -->
            <h2 class="bg-white overflow-hidden shadow-xl font-bold text-gray-800 mt-10 rounded-lg px-2 py-2">Active Users</h2>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>       
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Age</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contract</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reviews Submitted</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php $i=1; ?>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($i++); ?></th>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->name); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->age); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->email); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->id); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->contract); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->reviewCount($user->id)); ?></td>
                            <td class="py-4 whitespace-nowrap"><a type="button" class="btn btn-outline-warning" href="/edit-user/<?php echo e($user->id); ?>">Edit</a> </td>
                            <td class="py-4 whitespace-nowrap">
                                <form action="/archive-user/<?php echo e($user->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <button class="btn btn-outline-secondary">Archive</button>
                                </form>
                                
                            </td>

                            <td class="py-4 whitespace-nowrap">
                                <form action="/delete-user/<?php echo e($user->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="mx-5 mt-4">
                    <?php echo e($users->links()); ?>

                </div>
            </div>
            <!-- Manage Active Users List - End -->

            <h2 class="bg-white overflow-hidden shadow-xl font-bold text-gray-800 mt-10 rounded-lg px-2 py-2">Archived Users</h2>
            <!-- Manage Archived/Inactive Users List - Start -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-24">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>       
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Age</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contract</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reviews Submitted</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php $i=1; ?>
                        <?php $__currentLoopData = $archived; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($i++); ?></th>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->name); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->age); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->email); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->id); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->contract); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->reviewCount($user->id)); ?></td>
                            <td class="py-4 whitespace-nowrap"><a type="button" class="btn btn-outline-warning" href="/edit-user/<?php echo e($user->id); ?>">Edit</a> </td>
                            <td class="py-4 whitespace-nowrap">
                                <form action="/archive-user/<?php echo e($user->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <button class="btn btn-outline-primary">Restore</button>
                                </form>
                                
                            </td>
                            <td class="py-4 whitespace-nowrap">
                                <form action="/delete-user/<?php echo e($user->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="mx-5 mt-4">
                    <?php echo e($users->links()); ?>

                </div>
            </div>
            <!-- Manage Active Users List - End -->

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
<?php /**PATH /Users/rafaelfernandez/Pictures/Athlete gym portal/resources/views/manage-user.blade.php ENDPATH**/ ?>