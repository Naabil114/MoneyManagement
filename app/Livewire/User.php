<?php

namespace App\Livewire;

use Livewire\Component;

class User extends Component
{
    public $title = "User";
    public function render()
    {
        return view('livewire.user')
            ->layout('components.layouts.main')
            ->title($this->title);
    }
}
