<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Package;

class Packages extends Component
{
    public $packages;

    public function mount()
    {
        $this->packages = Package::all();
    }
    public function render()
    {
        return view('livewire.packages');
    }
}
