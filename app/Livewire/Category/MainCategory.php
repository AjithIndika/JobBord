<?php

namespace App\Livewire\Category;

use Livewire\Component;



class MainCategory extends Component
{
    public function render()
    {


        return view('livewire.category.main-category')->layout('livewire.template.template')->title('Jobs Category');
    }
}
