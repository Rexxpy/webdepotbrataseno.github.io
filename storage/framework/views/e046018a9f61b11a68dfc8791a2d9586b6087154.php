

<?php $__env->startSection('container'); ?>
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My produk</h1>
   </div>   

   <div class="table-responsive col-lg-8">
     <a class="tambah, text-decoration-none" href="<?php echo e(route( 'menu.create')); ?>">
      <button class="btn btn-primary btn-sm btn-dark"><i class="bi bi-file-earmark-plus"></i> Tambah data</button>
     </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
          <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $men): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
          <tr>
              <td><?php echo e($no++); ?></td>
              <td><?php echo e($men->nama); ?></td>
              <td>Rp. <?php echo e($men->harga); ?></td>
              <td><?php echo e($men->deskripsi); ?></td>
              <td>
                <a href="<?php echo e(route(
                  'menu.edit', [$men->id])); ?>" class="badge bg-info"><span data-feather="edit"></span>
                </a>
                
                <a href="<?php echo e(route(
                    'menu.show', [$men->id])); ?>" class="badge bg-warning"><span data-feather="eye"></span>
                </a>

                <form action="/dashboard/menu/<?php echo e($men->id); ?>" method="POST" class="d-inline">
                   <?php echo csrf_field(); ?>
                   <?php echo method_field('delete'); ?>
                   <button class="badge bg-danger border-0"><span data-feather="trash-2"></span>
                 </form>
                </td>
                </tr>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andik\Documents\app\proyekeas\resources\views/dashboard/menu/index.blade.php ENDPATH**/ ?>