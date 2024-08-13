<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'name' => 'Kenya',
            'languages' => 'English',
            'currency' => 'Kenyan Shilling',
            'visa_required' => 'Yes',
        ]);

        Country::create([
            'name' => 'Tanzania',
            'languages' => 'Swahili',
            'currency' => 'Tanzanian Shilling',
            'visa_required' => 'Yes',
        ]);

        Country::create([
            'name' => 'Uganda',
            'languages' => 'English',
            'currency' => 'Ugandan Shilling',
            'visa_required' => 'Yes',
        ]);

        Country::create([
            'name' => 'Rwanda',
            'languages' => 'English',
            'currency' => 'Rwandan Franc',
            'visa_required' => 'Yes',
        ]);

    }
}
