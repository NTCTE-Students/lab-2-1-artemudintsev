<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="<?php echo e(route('posts.create')); ?>">Create New Post</a>
    <ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <a href="<?php echo e(route('posts.show',  $post->id)); ?>"><li><?php echo e($post->title); ?></li></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH /nfs/home/ydincev.artem/php-learning/laravel-2.1/laravel/resources/views/posts/index.blade.php ENDPATH**/ ?>