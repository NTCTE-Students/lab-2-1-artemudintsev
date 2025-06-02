<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <a href="<?php echo e(route('posts.index')); ?>">Назад</a>
    <h1>Просмотр поста</h1>
    <h2><?php echo e($post -> title); ?></h2>
    <p><?php echo e($post -> content); ?></p>
    <form action="<?php echo e(route('posts.delete', ['id' => $post->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>  <!-- Для защиты от CSRF атак -->
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class='btn'>Удалить</button>
    </form>
    <br>
    <a href="<?php echo e(route('posts.edit', ['id' => $post->id])); ?>" class="btn">Редактировать</a>
</body>
</html><?php /**PATH /nfs/home/ydincev.artem/php-learning/laravel-2.1/laravel/resources/views/posts/show.blade.php ENDPATH**/ ?>