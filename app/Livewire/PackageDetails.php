<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Package;

class PackageDetails extends Component
{
    public $destination;

    public function mount($id)
    {
        $this->destination = Package::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.package-details');
    }
}
