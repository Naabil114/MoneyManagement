<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $title = "Home";
    
    public function render()
    {
        return view('livewire.home')
            ->layout('components.layouts.main')
            ->title($this->title);
    }
}
