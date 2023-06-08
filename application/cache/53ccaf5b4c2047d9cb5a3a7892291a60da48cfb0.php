

<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $post_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1"><?php echo e($post->title); ?></h2>
        <p class="blog-post-meta"><?php echo e($post->created_at->isoFormat('MMMM DD, YYYY - h:mm:ss a')); ?></p>
        <p class="blog-post-meta"><?php echo e($post->article); ?></p>
      </article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.frontend.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\appblog\application\views/post.blade.php ENDPATH**/ ?>