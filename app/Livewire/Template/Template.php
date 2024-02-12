<?php

namespace App\Livewire\Template;

use Livewire\Component;

class Template extends Component
{
    public function render()
    {
        return view('livewire.home-page')->layout('livewire.template.template');
    }
}
