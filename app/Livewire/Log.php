<?php

namespace App\Livewire;

use Livewire\Component;

class Log extends Component
{
    public $title = "Log";
    public function render()
    {
        return view('livewire.log')
            ->layout('components.layouts.main')
            ->title($this->title);
    }
}
