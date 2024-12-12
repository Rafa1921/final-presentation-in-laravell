<?php $__env->startSection('title', 'Guest Page'); ?> <!-- Optional title -->

<?php $__env->startSection('content'); ?>
    <header>
        <h1>Welcome to the Guest Page</h1>
        <a href="<?php echo e(route('index')); ?>" class="btn btn-primary">Create New Post</a>
    </header>

    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($post->title); ?></h5>
                            <p class="card-text"><?php echo e(Str::limit($post->content, 100)); ?></p>
                            <a href="<?php echo e(route('user.blog.show', $post->id)); ?>" class="btn btn-info">Read More</a>
                            <a href="<?php echo e(route('user.blog.edit', $post->id)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('user.blog.destroy', $post->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rafaelfernandez/Pictures/Athlete gym portal/resources/views/guest/index.blade.php ENDPATH**/ ?>