<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>
        <br>
        <button type="submit">Create</button>
    </form>
</body>
</html><?php /**PATH /nfs/home/ydincev.artem/php-learning/laravel-2.1/laravel/resources/views/posts/create.blade.php ENDPATH**/ ?>