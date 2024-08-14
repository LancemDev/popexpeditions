<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Destination;
use App\Models\Country;

class Index extends Component
{
    public $selectedCountry = 'All';
    public $destinations;

    public function mount()
    {
        $this->destinations = Destination::where('country_id', 1)->take(3)->get();
    }

    public function setSelectedCountry($country)
    {
        $this->selectedCountry = $country;
        $this->filterDestinations();
    }

    public function filterDestinations()
    {
        if ($this->selectedCountry === 'All') {
            $this->destinations = Destination::all();
        } elseif ($this->selectedCountry === 'Kenya') {
            $this->destinations = Destination::where('country_id', 1)->take(3)->get();
        } else {
            $country = Country::where('name', $this->selectedCountry)->first();
            $this->destinations = Destination::where('country_id', $country->id)->get();
        }
    }

    public function render()
    {
        return view('livewire.index');
    }
}