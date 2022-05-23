<?php

namespace App\Http\Livewire\Admin;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Work1 extends Component
{
    use WithFileUploads, WithPagination;
    public $modalConfirmDeleteVisible = false;
    public $modalFormVisible = false;
    public $modelId;
    public $title_uz;
    public $title_ru;
    public $text_uz;
    public $text_ru;
    public $site;
    public $slug;
    public $img;



    public function create()
    {
        $this->validate();
        Work::create($this->modelData());
        $this->modalFormVisible = false;
    }

    public function createModal()
    {
        $this->resetValidation();
        $this->clearVars();
        $this->modalFormVisible = true;
    }

    public function modelData()
    {
        return [
            'title_uz' => $this->title_uz,
            'title_ru' => $this->title_ru,
            'text_uz' => $this->text_uz,
            'text_ru' => $this->text_ru,
            'slug' => $this->slug,
            'site' => $this->site,
            'img' => $this->img->store('work', 'public')
        ];
    }

    public function update()
    {
        $this->validate();
        Work::find($this->modelId)
            ->update($this->modelDataUpdate());
        $this->modalFormVisible = false;
        $this->clearVars();
    }
    public function updateModal($id)
    {
        $this->clearVars();
        $this->resetValidation();
        $this->modelId = $id;
        $this->modalFormVisible = true;
        $this->loadModel();
    }
    public function deleteModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }
    public function delete()
    {
        Work::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
    }
    public function modelDataUpdate()
    {
        $work = Work::find($this->modelId);

        if ($this->img != $work->img) {
            return [
                'title_uz' => $this->title_uz,
                'title_ru' => $this->title_ru,
                'text_uz' => $this->text_uz,
                'text_ru' => $this->text_ru,
                'slug' => $this->slug,
                'site' => $this->site,
                'img' => $this->img->store('work', 'public')
            ];
        } else {
            return [
                'title_uz' => $this->title_uz,
                'title_ru' => $this->title_ru,
                'text_uz' => $this->text_uz,
                'text_ru' => $this->text_ru,
                'slug' => $this->slug,
                'site' => $this->site,
                'img' => $this->img
            ];
        }
    }
    public function loadModel()
    {

        $work = Work::find($this->modelId);
        $this->title_uz = $work->title_uz;
        $this->title_ru = $work->title_ru;
        $this->text_uz = $work->text_uz;
        $this->text_ru = $work->text_ru;
        $this->slug = $work->slug;
        $this->site = $work->site;
        $this->img = $work->img;
    }
    public function clearVars()
    {
        $this->modelId = null;
        $this->title_uz = null;
        $this->title_ru = null;
        $this->text_uz = null;
        $this->text_ru = null;
        $this->slug = null;
        $this->site = null;
        $this->img = null;
    }

    public function rules()
    {
        $work = Work::find($this->modelId);

        if ( ($this->modelId!=0) && ($this->img != $work->img)) {
            return [
                'title_uz' => 'required|min:3',
                'title_ru' => 'required|min:3',
                'text_uz' => 'required|min:3',
                'text_ru' => 'required|min:3',
                'slug' => 'required|min:3',
                'site' => 'required|min:3',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,ico'
            ];
        } else {
            return [
                'title_uz' => 'required|min:3',
                'title_ru' => 'required|min:3',
                'text_uz' => 'required|min:3',
                'text_ru' => 'required|min:3',
                'slug' => 'required|min:3',
                'site' => 'required|min:3',
            ];
        }
    }
    public function mount()
    {

        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.work.work',[
            'works'=>Work::all()
        ]);
    }
}
