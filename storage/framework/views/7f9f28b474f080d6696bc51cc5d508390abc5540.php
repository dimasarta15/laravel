<?php $__env->startPush('sisipan'); ?>

<script>
    function loadDoc() {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("demo").innerHTML =
        this.responseText;
      }
      xhttp.open("GET", "ajax_info.txt");
      xhttp.send();
    }
    function loadDoc() {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("demo").innerHTML =
        this.responseText;
      }
      xhttp.open("GET", "/getmsg");
      xhttp.send();
    }
    
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div id="demo">
    <h2>The XMLHttpRequest Object</h2>
    <button type="button" onclick="loadDoc()">Change Content</button>
    </div>
<!-- START DATA -->
<?php $__env->startSection('konten'); ?>


<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('create-post', [])->html();
} elseif ($_instance->childHasBeenRendered('MFFn3fG')) {
    $componentId = $_instance->getRenderedChildComponentId('MFFn3fG');
    $componentTag = $_instance->getRenderedChildComponentTagName('MFFn3fG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MFFn3fG');
} else {
    $response = \Livewire\Livewire::mount('create-post', []);
    $html = $response->html();
    $_instance->logRenderedChild('MFFn3fG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('create-post', ['title' => 'nilai awal '])->html();
} elseif ($_instance->childHasBeenRendered('jP1bVFv')) {
    $componentId = $_instance->getRenderedChildComponentId('jP1bVFv');
    $componentTag = $_instance->getRenderedChildComponentTagName('jP1bVFv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jP1bVFv');
} else {
    $response = \Livewire\Livewire::mount('create-post', ['title' => 'nilai awal ']);
    $html = $response->html();
    $_instance->logRenderedChild('jP1bVFv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <div class="pb-3">
        <form class="d-flex" action="<?php echo e(url('mahasiswa')); ?>" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="<?php echo e(Request::get('katakunci')); ?>" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" onclick="cari()" type="submit">Cari</button>
        </form>
    </div>
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='<?php echo e(url('mahasiswa/create')); ?>' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">NIM</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Jurusan</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem() ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($item->nim); ?></td>
                <td><?php echo e($item->nama); ?></td>
                <td><?php echo e($item->jurusan); ?></td>
                <td>
                    <a href='<?php echo e(url('mahasiswa/'.$item->nim.'/edit')); ?>' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="<?php echo e(url('mahasiswa/'.$item->nim)); ?>" method="post">
                        <?php echo csrf_field(); ?> 
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($data->withQueryString()->links()); ?>

</div>
<!-- AKHIR DATA -->
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dimas\Documents\crud laravel\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>