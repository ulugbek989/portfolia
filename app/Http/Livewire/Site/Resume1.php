<?php

namespace App\Http\Livewire\Site;

use App\Models\Resume;
use Livewire\Component;

class Resume1 extends Component
{
    public function render()
    {
        return view('livewire.site.resume',[
            'resumes'=>Resume::all()
        ]);
    }
}
