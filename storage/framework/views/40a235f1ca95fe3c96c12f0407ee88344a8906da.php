<div>
    <h2> <?php echo e($title); ?> </h2>
    <span> <?php echo e($penulis); ?></span>



    <form wire:submit="ganti ">

        <label for="title"> judul</label>
        <input id="title" type="text" wire:model="title">
        <button type="submit"> simpan </button>

    </form>

</div>
<?php /**PATH C:\Users\dimas\Documents\crud laravel\resources\views/livewire/create-post.blade.php ENDPATH**/ ?>