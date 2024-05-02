<div>
    <h2> {{ $title }} </h2>
    <span> {{ $penulis }}</span>



    <form wire:submit="ganti ">

        <label for="title"> judul</label>
        <input id="title" type="text" wire:model="title">
        <button type="submit"> simpan </button>

    </form>

</div>
