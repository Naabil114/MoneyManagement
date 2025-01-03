<?php

namespace App\Livewire;

use Livewire\Component;

class Wallet extends Component
{
    public $title = "Wallet";
    public function render()
    {
        return view('livewire.wallet')
            ->layout('components.layouts.main')
            ->title($this->title);
    }
}
