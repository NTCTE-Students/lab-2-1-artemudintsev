<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Изменить пост</h1>
    <form <?php echo e(route('posts.store')); ?> method="POST">
        <?php echo csrf_field(); ?>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required value="<?php echo e($post -> title); ?>">
        <br>
        <label for="content">Content:</label>
        <textarea name="content" id="content" ><?php echo e($post -> content); ?></textarea>
        <br>
        <button type="submit" class="btn">Обновить</button>
    </form>
</body>
</html><?php /**PATH /nfs/home/ydincev.artem/php-learning/laravel-2.1/laravel/resources/views/posts/edit.blade.php ENDPATH**/ ?>