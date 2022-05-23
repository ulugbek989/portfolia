<?php

namespace App\Http\Livewire\Site;

use App\Models\About;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class About1 extends Component
{
    use WithFileUploads, WithPagination;

    public function export()
    {
        return response()->download(storage_path('app/malumot/malumotnoma.docx'));
     
    }
    
    public function mount(){
        
        $this->resetPage();

    }

    public function render()
    {
        return view('livewire.site.about',[
            'abouts'=>About::all()
        ]);
    }
}
