<?php

namespace App\Http\Livewire\Admin;

use App\Models\Resume;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Resume1 extends Component
{

    use WithFileUploads, WithPagination;
    public $modalConfirmDeleteVisible = false;
    public $modalFormVisible = false;
    public $modelId;
    public $title;
    public $percent;
    public $sort;


    public function create()
    {
        $this->validate();
        Resume::create($this->modelData());
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
            'title' => $this->title,
            'percent' => $this->percent,
            'sort' => $this->sort,
        ];
    }

    public function update()
    {
        $this->validate();
        Resume::find($this->modelId)
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
        Resume::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
    }
    public function modelDataUpdate()
    {

            return [
                'title' => $this->title,
                'percent' => $this->percent,
                'sort' => $this->sort
            ];
        }
    
    public function loadModel()
    {

        $resume = Resume::find($this->modelId);
        $this->title = $resume->title;
        $this->percent = $resume->percent;
        $this->sort = $resume->sort;
    }
    public function clearVars()
    {
        $this->modelId = null;
        $this->title = null;
        $this->percent = null;
        $this->sort = null;
    }

    public function rules()
    {
            return [
                'title' => 'required|min:3',
                'percent' => 'required',
                'sort' => 'required|min:3',
            ];
        }
    
    public function mount()
    {

        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.resume.resume',[
            'resumes'=>Resume::all()
        ]);
    }
}
