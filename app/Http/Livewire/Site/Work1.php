<?php

namespace App\Http\Livewire\Site;
use App\Models\Work;
use Livewire\Component;

class Work1 extends Component
{
    public $modalFormVisible=true;
    public $count=3;
    public $perPage=3;
    public $modelId;
    public $title_uz;
    public $text_uz;
    public $img;
    public function showWork($id)
    {
        $this->modelId=$id;
        $this->modalFormVisible = true;
        $work = Work::find($this->modelId);
        $this->title_uz = $work->title_uz;
        $this->text_uz = $work->text_uz;
        $this->img = $work->img;
    }
    public function showMore()
    {
        $this->count+=$this->perPage;
    }
    public function render()
    {
        return view('livewire.site.work',[
            'works'=> Work::limit($this->count)->get()
        ]);
    }
}
