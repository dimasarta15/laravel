<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    
    public $title = "judul....." ;
    public function ganti() {

        $this->title ="judul yang baru" ;

    }
    public function render()
    {
        return view('livewire.create-post')->with ('penulis', 'budi');
    }
}
