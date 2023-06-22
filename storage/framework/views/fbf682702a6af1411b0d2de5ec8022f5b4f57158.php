

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route('organization.index')); ?>" class="btn btn-secondary">Kembali</a></div>

    <form action="<?php echo e(route('organization.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="judul" class="form-label">Nama Organisasi</label>
          <input type="text"
            class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" 
            placeholder="Nama Organisasi" value="<?php echo e(Session::get('judul')); ?>">
        </div>

        <div class="mb-3">
          <label for="info1" class="form-label">Jabatan</label>
          <input type="text"
            class="form-control form-control-sm" name="info1" id="info1" aria-describedby="helpId" 
            placeholder="Jabatan" value="<?php echo e(Session::get('info1')); ?>">
        </div>

  
        <div class="mb-3">
          <div class="row">
            <div class="col-auto">Tanggal Mulai</div>
            <div class="col-auto"><input type="date" class="form-control 
              form-control sm" name="tgl_mulai"
              placeholder="dd/mm/yyy" value="<?php echo e(Session::get('tgl_mulai')); ?>"></div>
            <div class="col-auto">Tanggal Akhir</div>
            <div class="col-auto"><input type="date" placeholder="dd/mm/yyyy"
              class="form-control form-control sm" name="tgl_akhir" value="<?php echo e(Session::get('tgl_akhir')); ?>"></div>
          </div>
        </div> 

        <div class="mb-3"> 
            <label for="isi" class="form-label">Isi</label>
           <textarea class="form-control summernote"  rows="5" name="isi"><?php echo e(Session::get('isi')); ?></textarea>
        </div>
          <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
     </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MyPortofolio\resources\views/dashboard/organization/create.blade.php ENDPATH**/ ?>