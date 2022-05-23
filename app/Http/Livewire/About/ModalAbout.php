<?php

namespace App\Http\Livewire\About;

use Livewire\Component;
use App\Models\About;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ModalAbout extends Component
{
   
    public function render()
    {
        return view('livewire.about.modal-about');
    }
}
