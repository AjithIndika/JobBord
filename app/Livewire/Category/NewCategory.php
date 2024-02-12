<?php

namespace App\Livewire\Category;
use Livewire\Component;


class NewCategory extends Component
{

    public $category_Name;

    public function submit(){

        $this->validate([
            'category_Name'=>'required',
        ]);

        $this->dispatchBrowserEvent('success',['message' => 'User Created Successfully!']);
    }

    public function render()
    {
        return view('livewire.category.new-category')->layout('livewire.template.template')->title('New Category');;
    }



    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('success',['message' => 'User Created Successfully!']);
    }
}
