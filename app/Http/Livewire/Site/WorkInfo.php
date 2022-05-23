<?php

namespace App\Http\Livewire\Site;

use App\Models\Work;
use Livewire\Component;

class WorkInfo extends Component
{
    public $modelId;
    public $title_ru;
    public function showWork($id)
    {
      $this->modelId=$id;
  
    }
    public function render()
    {
        return view('livewire.site.work-info',[
            'work'=>Work::where('id', $work)->first(),

        ]);
    }
}
