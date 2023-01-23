<?php

namespace App\Http\Livewire\Categories;

use App\Models\LflbCategory;
use App\Models\LflbSubCategory;

use Illuminate\Support\Collection;

use Livewire\Component;

class Categories extends Component
{

    public $header = 'New Category';

    public $categories; //Collections property
    // public $_id, $_oldid, $_newid;
    public $title, $description, $coverPhoto, $sub_categories_old, $sub_categories, $featured, $introText, $bodyText, $mainImage; //Collections field names
    public $category_id;
    public $isOpen = 0;

    public $stored_sub_categories;
    public $selected_sub_categories = [];

    public function render()
    {
        $this->categories = LflbCategory::all();
        // $this->sub_categories = LflbSubCategory::all();
        // $this->subCategories();
        return view('livewire.categories.categories');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    // public function subCategories()
    // {
    //     $this->sub_categories = LflbCategory::find(1)->lflbSubCategory;
    //     // $this->sub_categories = new Collection();
    //     // if($this->)
    // }

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
        $this->sub_categories_old = '';
        $this->sub_categories = '';
        $this->featured = '';
        $this->introText = '';
        $this->bodyText = '';
        $this->mainImage = '';
        $this->sub_categories = [];

        $this->category_id = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
   
        LflbCategory::updateOrCreate(['id' => $this->category_id], [
            'title' => $this->title,
            'description' => $this->description
        ]);
  
        session()->flash('message', 
            $this->category_id ? 'Topic Updated Successfully.' : 'Topic Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    
    public function edit($id)
    {
        $category = LflbCategory::findOrFail($id);
        $this->_oldid = $category->_oldid;
        $this->title = $category->title;
        $this->description = $category->description;
        $this->coverPhoto = $category->coverPhoto;
        $this->sub_categories_old = $category->sub_categories_old;
        $this->sub_categories = $category->sub_categories;
        $this->featured = $category->featured;
        $this->introText = $category->introText;
        $this->bodyText = $category->bodyText;
        $this->mainImage = $category->mainImage;
        $this->sub_categories = $category->lflbSubCategories;

        $this->category_id = $id;
    
        $this->openModal();
    }
    
    public function delete($id)
    {
        LflbCategory::find($id)->delete();
        session()->flash('message', 'Topic Deleted Successfully.');
    }    

}