<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Package;
use App\Models\Country;

class Packages extends Component
{
    public $selectedCountry = null;
    public $packages = [];

    public function mount()
    {
        $this->packages = Package::all();
    }

    public function setSelectedCountry($country)
    {
        $this->selectedCountry = $country;
        $this->filterPackages();
    }

    public function filterPackages()
    {
        if ($this->selectedCountry) {
            $this->packages = Package::whereHas('country', function ($query) {
                $query->where('name', $this->selectedCountry);
            })->get();
        } else {
            $this->packages = Package::all();
        }
    }

    public function render()
    {
        return view('livewire.packages', [
            'countryOptions' => Country::all()->pluck('name', 'name')
        ]);
    }
}