<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Accommodation as AccommodationModel;

class Accommodation extends Component
{
    use WithPagination;

    public $showModal = false;
    public $selectedAccommodation;

    public function selectAccommodation($accommodation)
    {
        $this->selectedAccommodation = $accommodation;
        $this->showModal = true;
    }

    public function render()
    {
        return view('livewire.accommodation', [
            'accommodations' => AccommodationModel::paginate(10),
        ]);
        // return view('livewire.accommodation');
    }
}