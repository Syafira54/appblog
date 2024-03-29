

<?php $__env->startSection('content'); ?>
<br>
<a href="<?php echo e(site_url('backend/article/form')); ?>">Tambah Data</a>
      <br>
      <?php if(isset($flashdata['notif'])): ?>
      <br>
      <div class="alert alert-warning"><?php echo e($flashdata['notif']); ?></div>
      <?php endif; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Article</th>
              <th scope="col">Created At</th>
              <th scope="col">Updated At</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $post_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>-</td>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->article); ?></td>
                <td><?php echo e($post->created_at); ?></td>
                <td><?php echo e($post->updated_at); ?></td>
                <td>
                  <a class="btn btn-danger btn-sm" href="<?php echo e(site_url('backend/article/hapus/' . $post->id )); ?>" role="button"><i class="bi bi-trash"></i></a>
                  <a class="btn btn-success btn-sm" href="<?php echo e(site_url('backend/article/ubah/' . $post->id )); ?>"><i class="bi bi-pencil-square"></i></a>
                </td>
              <tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </tbody>
        </table>
      </div>  
      <?php $__env->stopSection(); ?>  
<?php echo $__env->make('template.backend.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\appblog\application\views/backend/Article/list.blade.php ENDPATH**/ ?>