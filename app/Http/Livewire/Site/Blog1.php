<?php

namespace App\Http\Livewire\Site;

use App\Models\Blog;

use Livewire\Component;

class Blog1 extends Component
{
    public $count=3;
    public $perPage=3;
    public $modelId;
    public $title_uz;
    public $text_uz;
    public $img;
    public function showWork($id)
    {
        $this->modelId=$id;
        $blog = Blog::find($this->modelId);
        $this->title_uz = $blog->title_uz;
        $this->text_uz = $blog->text_uz;
        $this->img = $blog->img;
    }
    public function showMore()
    {
        $this->count+=$this->perPage;
    }
    public function render()
    {
        return view('livewire.site.blog',[
            'blogs'=> Blog::limit($this->count)->get()
        ]);
    }
}
