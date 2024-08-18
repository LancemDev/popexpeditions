<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Index;
use App\Livewire\Packages;
use App\Livewire\Accommodation;
use App\Livewire\Contact;
use App\Livewire\Country\Destination as CountryDestination;
// use App\Livewire\Package\Specific as PackageSpecific;
use App\Livewire\About;
use App\Livewire\Destinations;
use App\Livewire\DestinationDetails;
use App\Livewire\PackageDetails;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Index::class)->name('index');
Route::get('/packages', Packages::class)->name('packages');
Route::get('/accomodation', Accommodation::class)->name('accommodation');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/country/destination', CountryDestination::class)->name('country.destination');
// Route::get('/destination/{slug}', CountryDestination::class)->name('destination');
// Route::get('/package/{slug}', PackageSpecific::class)->name('package');
Route::get('/about', About::class)->name('about');
Route::get('/destinations', Destinations::class)->name('destinations');

Route::get('/destination/{id}', DestinationDetails::class)->name('destination.details');
Route::get('/package/{id}', PackageDetails::class)->name('package.details');

Route::get('/accommodation/{id}', [AccommodationController::class, 'show']);