<?php

namespace App\Http\Livewire\Site;

use App\Models\Contact;
use Livewire\Component;

class Contact1 extends Component
{
    public function render()
    {
        return view('livewire.site.contact',[
            'contacts'=>Contact::all(),
        ]);
    }
}
