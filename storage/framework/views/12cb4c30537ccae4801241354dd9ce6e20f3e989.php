

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route('education.index')); ?>" class="btn btn-secondary">Kembali</a></div>

    <form action="<?php echo e(route('education.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="judul" class="form-label">Sekolah</label>
          <input type="text"
            class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" 
            placeholder="Sekolah/Universitas" value="<?php echo e(Session::get('Sekolah')); ?>">
        </div>

        <div class="mb-3">
          <label for="info1" class="form-label">Jurusan</label>
          <input type="text"
            class="form-control form-control-sm" name="info1" id="info1" aria-describedby="helpId" 
            placeholder="Jurusan" value="<?php echo e(Session::get('info1')); ?>">
        </div>

        <div class="mb-3">
          <label for="info1" class="form-label">Nilai</label>
          <input type="text"
            class="form-control form-control-sm" name="info2" id="info2" aria-describedby="helpId" 
            placeholder="Nilai/IPK" value="<?php echo e(Session::get('info2')); ?>">
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
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MyPortofolio\resources\views/dashboard/education/create.blade.php ENDPATH**/ ?>