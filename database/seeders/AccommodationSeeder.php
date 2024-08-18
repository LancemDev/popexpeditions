<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accommodation;

class AccommodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accommodations = [
            ['name' => 'Serena Hotel', 'country' => 'Kenya', 'city' => 'Nairobi', 'image' => 'accommodations/serena_hotel.jpg'],
            ['name' => 'Sarova Stanley', 'country' => 'Kenya', 'city' => 'Nairobi', 'image' => 'accommodations/sarova_stanley.jpg'],
            ['name' => 'Kampala Serena Hotel', 'country' => 'Uganda', 'city' => 'Kampala', 'image' => 'accommodations/kampala_serena_hotel.jpg'],
            ['name' => 'Sheraton Kampala Hotel', 'country' => 'Uganda', 'city' => 'Kampala', 'image' => 'accommodations/sheraton_kampala_hotel.jpg'],
            ['name' => 'Kigali Marriott Hotel', 'country' => 'Rwanda', 'city' => 'Kigali', 'image' => 'accommodations/kigali_marriott_hotel.jpg'],
            ['name' => 'Radisson Blu Hotel & Convention Centre', 'country' => 'Rwanda', 'city' => 'Kigali', 'image' => 'accommodations/radisson_blu_kigali.jpg'],
            ['name' => 'Hyatt Regency Dar es Salaam', 'country' => 'Tanzania', 'city' => 'Dar es Salaam', 'image' => 'accommodations/hyatt_regency_dar.jpg'],
            ['name' => 'Four Points by Sheraton Arusha', 'country' => 'Tanzania', 'city' => 'Arusha', 'image' => 'accommodations/four_points_arusha.jpg'],
            ['name' => 'Fairmont The Norfolk', 'country' => 'Kenya', 'city' => 'Nairobi', 'image' => 'accommodations/fairmont_norfolk.jpg'],
            ['name' => 'Hemingways Nairobi', 'country' => 'Kenya', 'city' => 'Nairobi', 'image' => 'accommodations/hemingways_nairobi.jpg'],
            ['name' => 'Enashipai Resort & Spa', 'country' => 'Kenya', 'city' => 'Naivasha', 'image' => 'accommodations/enashipai_resort.jpg'],
            ['name' => 'Mara Serena Safari Lodge', 'country' => 'Kenya', 'city' => 'Maasai Mara', 'image' => 'accommodations/mara_serena.jpg'],
            ['name' => 'Lake Victoria Serena Golf Resort & Spa', 'country' => 'Uganda', 'city' => 'Kampala', 'image' => 'accommodations/lake_victoria_serena.jpg'],
            ['name' => 'Speke Resort Munyonyo', 'country' => 'Uganda', 'city' => 'Kampala', 'image' => 'accommodations/speke_resort.jpg'],
            ['name' => 'Hotel des Mille Collines', 'country' => 'Rwanda', 'city' => 'Kigali', 'image' => 'accommodations/mille_collines.jpg'],
            ['name' => 'Heaven Boutique Hotel', 'country' => 'Rwanda', 'city' => 'Kigali', 'image' => 'accommodations/heaven_boutique.jpg'],
            ['name' => 'Gorillas Golf Hotel', 'country' => 'Rwanda', 'city' => 'Kigali', 'image' => 'accommodations/gorillas_golf.jpg'],
            ['name' => 'Mount Meru Hotel', 'country' => 'Tanzania', 'city' => 'Arusha', 'image' => 'accommodations/mount_meru.jpg'],
            ['name' => 'The Arusha Hotel', 'country' => 'Tanzania', 'city' => 'Arusha', 'image' => 'accommodations/arusha_hotel.jpg'],
            ['name' => 'DoubleTree by Hilton Dar es Salaam', 'country' => 'Tanzania', 'city' => 'Dar es Salaam', 'image' => 'accommodations/doubletree_dar.jpg'],
            ['name' => 'Sea Cliff Hotel', 'country' => 'Tanzania', 'city' => 'Dar es Salaam', 'image' => 'accommodations/sea_cliff.jpg'],
            ['name' => 'Zanzibar Serena Hotel', 'country' => 'Tanzania', 'city' => 'Zanzibar', 'image' => 'accommodations/zanzibar_serena.jpg'],
            ['name' => 'Melia Zanzibar', 'country' => 'Tanzania', 'city' => 'Zanzibar', 'image' => 'accommodations/melia_zanzibar.jpg'],
            ['name' => 'Park Hyatt Zanzibar', 'country' => 'Tanzania', 'city' => 'Zanzibar', 'image' => 'accommodations/park_hyatt_zanzibar.jpg'],
            ['name' => 'Serena Beach Resort & Spa', 'country' => 'Kenya', 'city' => 'Mombasa', 'image' => 'accommodations/serena_beach.jpg'],
            ['name' => 'Voyager Beach Resort', 'country' => 'Kenya', 'city' => 'Mombasa', 'image' => 'accommodations/voyager_beach.jpg'],
            ['name' => 'Sarova Whitesands Beach Resort & Spa', 'country' => 'Kenya', 'city' => 'Mombasa', 'image' => 'accommodations/sarova_whitesands.jpg'],
            ['name' => 'PrideInn Paradise Beach Resort', 'country' => 'Kenya', 'city' => 'Mombasa', 'image' => 'accommodations/prideinn_paradise.jpg'],
            ['name' => 'Baobab Beach Resort & Spa', 'country' => 'Kenya', 'city' => 'Diani Beach', 'image' => 'accommodations/baobab_beach.jpg'],
            ['name' => 'Leopard Beach Resort & Spa', 'country' => 'Kenya', 'city' => 'Diani Beach', 'image' => 'accommodations/leopard_beach.jpg'],
        ];

        foreach ($accommodations as $accommodation) {
            Accommodation::create($accommodation);
        }
    }
}