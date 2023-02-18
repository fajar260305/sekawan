<?php echo $__env->make('Atasan.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-dark" style="">
          <i class="menu-icon tf-icons bx bx-log-out"></i>
          <div data-i18n="Analytics">Logout</div>
        </button>
      </form>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <?php echo $__env->make('Atasan.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>

      
      <div class="row">
        <div class="col">

          <!-- form tambah kendaraan -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 500px;">
              <div class="modal-content">    
                <div class="modal-body">
                  <form class="row g-3" action="/dashboard/pesanan" method="POST">
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Driver</label>
                      <input type="text" class="form-control <?php $__errorArgs = ['driver'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="driver" id="inputPassword4">
                      <?php $__errorArgs = ['driver'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">No hp</label>
                      <input type="number" class="form-control <?php $__errorArgs = ['telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="telp" id="inputCity">
                      <?php $__errorArgs = ['telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Mobil</label>
                      <select class="form-select  <?php $__errorArgs = ['mobil_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="mobil_id">
                        <?php $__currentLoopData = $kendaraans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Kendaraan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if(old('mobil_id') == $Kendaraan->id): ?>
                            <option value="<?php echo e($Kendaraan->id); ?>" selected><?php echo e($Kendaraan->mobil); ?></option>
                          <?php else: ?>
                            <option value="<?php echo e($Kendaraan->id); ?>"><?php echo e($Kendaraan->mobil); ?></option>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                      <?php $__errorArgs = ['mobil_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-6">
                      <label for="inputAddress2" class="form-label">Atasan</label>
                      <select class="form-select  <?php $__errorArgs = ['atasan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="atasan_id">
                        <?php $__currentLoopData = $atasans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atasan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if(old('atasan_id') == $atasan->id): ?>
                            <option value="<?php echo e($atasan->id); ?>" selected><?php echo e($atasan->name); ?></option>
                          <?php else: ?>
                            <option value="<?php echo e($atasan->id); ?>"><?php echo e($atasan->name); ?></option>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                      <?php $__errorArgs = ['atasan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-md-12 mt-3">
                      <label for="inputPassword4" class="form-label">Plat Mobil</label>
                      <input type="text" class="form-control <?php $__errorArgs = ['plat_mobil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="plat_mobil" id="inputPassword4">
                      <?php $__errorArgs = ['plat_mobil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="sumbit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-white table-striped table-responsive">
          <thead class="table-dark">
            <tr>
              <th class="col">No</th>
              <th class="col">Gambar</th>
              <th class="col">Mobil</th>
              <th class="col">Driver</th>
              <th class="col">Telp</th>
              <th class="col">Plat Mobil</th>
              <th class="col">Atasan</th>
              <th class="col">Status</th>
              <th class="col" style="width: 130px;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $pesanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
            <tr>
              <td class="col pt-3">No</td>
              <td class="col">
                <img src="<?php echo e(asset('../../storage/'. $pesanan->mobil->image)); ?>" width="80px" alt="">
              </td>
              <td class="col pt-3"><?php echo e($pesanan->mobil->mobil); ?></td>
              <td class="col pt-3"><?php echo e($pesanan->driver); ?></td>
              <td class="col pt-3"><?php echo e($pesanan->telp); ?></td>
              <td class="col pt-3"><?php echo e($pesanan->plat_mobil); ?></td>
              <td class="col pt-3"><?php echo e($pesanan->atasan->name); ?></td>
              <td class="col pt-3"><?php echo e($pesanan->izin == 0 ? 'Tidak setuju' : 'Setuju'); ?></td>
              <td class="col">
                  <button type="submit"<?php echo e($pesanan->izin == 1 ? 'disabled' : ''); ?> class="btn btn-outline-<?php echo e($pesanan->izin == 1 ? 'secondary' : 'primary'); ?>" data-bs-toggle="modal" data-bs-target="#example">
                    Setuju <i class="bi bi-check2-square"></i>
                  </button>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Persetujuan Atasan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Apakah anda yankin menyetujuinya?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="/atasan/<?php echo e($pesanan->id); ?>/izin" method="post">
                          <?php echo csrf_field(); ?>
                          <input type="hidden" name="izin" value="1">
                          <button type="submit" class="btn btn-outline-primary">Setujui</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
      
    </main>
  </div>
</div>


<?php echo $__env->make('Atasan.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\sekawan\Pemesanan_kendaraan\resources\views/Atasan/pesanan/index.blade.php ENDPATH**/ ?>