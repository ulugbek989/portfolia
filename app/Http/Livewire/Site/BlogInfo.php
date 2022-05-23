<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use App\Models\Blog;

class BlogInfo extends Component
{
    public $modelId;
    public $title_uz;
    public $text_uz;
    public $img;
    public function showBlog($id)
    {
        $this->modelId=$id;
        $blog = Blog::find($this->modelId);
        $this->title_uz = $blog->title_uz;
        $this->text_uz = $blog->text_uz;
        $this->img = $blog->img;
    }
    public function render()
    {
        return view('livewire.site.blog-info',[
            'blogs'=>Blog::all()
        ]);
    }
}
