<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Contact1 extends Component
{
    use WithFileUploads, WithPagination;
    public $modalConfirmDeleteVisible = false;
    public $modalFormVisible = false;
    public $modelId;
    public $title_uz;
    public $title_ru;
    public $text_uz;
    public $text_ru;
    public $img;



    public function create()
    {
        $this->validate();
        Contact::create($this->modelData());
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
            'img' => $this->img->store('contact', 'public')
        ];
    }

    public function update()
    {
        $this->validate();
        Contact::find($this->modelId)
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
        Contact::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
    }
    public function modelDataUpdate()
    {
        $contact = Contact::find($this->modelId);

        if ($this->img != $contact->img) {
            return [
                'title_uz' => $this->title_uz,
                'title_ru' => $this->title_ru,
                'text_uz' => $this->text_uz,
                'text_ru' => $this->text_ru,
                'img' => $this->img->store('contact', 'public')
            ];
        } else {
            return [
                'title_uz' => $this->title_uz,
                'title_ru' => $this->title_ru,
                'text_uz' => $this->text_uz,
                'text_ru' => $this->text_ru,
                'img' => $this->img
            ];
        }
    }
    public function loadModel()
    {

        $contact = Contact::find($this->modelId);
        $this->title_uz = $contact->title_uz;
        $this->title_ru = $contact->title_ru;
        $this->text_uz = $contact->text_uz;
        $this->text_ru = $contact->text_ru;
        $this->img = $contact->img;
    }
    public function clearVars()
    {
        $this->modelId = null;
        $this->title_uz = null;
        $this->title_ru = null;
        $this->text_uz = null;
        $this->text_ru = null;
        $this->img = null;
    }

    public function rules()
    {
        $contact = Contact::find($this->modelId);

        if ( ($this->modelId!=0) && ($this->img != $contact->img)) {
            return [
                'title_uz' => 'required|min:3',
                'title_ru' => 'required|min:3',
                'text_uz' => 'required|min:3',
                'text_ru' => 'required|min:3',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,ico'
            ];
        } else {
            return [
                'title_uz' => 'required|min:3',
                'title_ru' => 'required|min:3',
                'text_uz' => 'required|min:3',
                'text_ru' => 'required|min:3',
            ];
        }
    }
    public function mount()
    {

        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.admin.contact.contact',[
            'contacts'=>Contact::all()
        ]);
    }
}
