<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Accommodation as AccommodationModel;
use Livewire\WithPagination;

class Accomodation extends Component
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
        return view('livewire.accommodations', [
            'accommodations' => Accommodation::paginate(10),
        ]);
    }
}
