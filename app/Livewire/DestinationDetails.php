<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Destination;

class DestinationDetails extends Component
{
    public $destination;

    public function mount($id)
    {
        $this->destination = Destination::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.destination-details');
    }
}