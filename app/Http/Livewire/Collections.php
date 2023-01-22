<?php

namespace App\Http\Livewire;

use App\Models\LflbCollection;
use App\Models\LflbSubCollection;

use Illuminate\Support\Collection;

use Livewire\Component;

class Collections extends Component
{

    public $header = 'New Category';

    public $collections; //Collections property
    // public $_id, $_oldid, $_newid;
    public $title, $description, $coverPhoto, $subCollections, $subCollections_new, $featured, $introText, $bodyText, $mainImage; //Collections field names
    public $collection_id;
    public $isOpen = 0;

    public $sub_categories;

    public function render()
    {
        $this->collections = LflbCollection::all();
        // $this->subCategories();
        return view('livewire.collections.view');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function subCategories()
    {
        $this->sub_categories = LflbCollection::find(1)->lflbSubCollections;
        // $this->sub_categories = new Collection();
        // if($this->)
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->_oldid = '';
        // $this->_newid = '';
        $this->title = '';
        $this->description = '';
        $this->coverPhoto = '';
        $this->subCollections = '';
        $this->subCollections_new = '';
        $this->featured = '';
        $this->introText = '';
        $this->bodyText = '';
        $this->mainImage = '';

        $this->collection_id = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
   
        LflbCollection::updateOrCreate(['id' => $this->collection_id], [
            'title' => $this->title,
            'description' => $this->description
        ]);
  
        session()->flash('message', 
            $this->collection_id ? 'Topic Updated Successfully.' : 'Topic Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    
    public function edit($id)
    {
        $topic = LflbCollection::findOrFail($id);
        $this->_oldid = $topic->_oldid;
        $this->title = $topic->title;
        $this->description = $topic->description;
        $this->coverPhoto = $topic->coverPhoto;
        $this->subCollections = $topic->subCollections;
        $this->subCollections_new = $topic->subCollections_new;
        $this->featured = $topic->featured;
        $this->introText = $topic->introText;
        $this->bodyText = $topic->bodyText;
        $this->mainImage = $topic->mainImage;

        $this->collection_id = $id;
    
        $this->openModal();
    }
    
    public function delete($id)
    {
        LflbCollection::find($id)->delete();
        session()->flash('message', 'Topic Deleted Successfully.');
    }    

}
