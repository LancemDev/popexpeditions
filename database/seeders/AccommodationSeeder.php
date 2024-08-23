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
            ['name' => 'Serena Hotel', 'country' => 'Kenya', 'city' => 'Nairobi', 'image' => 'serena_hotel.jpg'],
            ['name' => 'Sarova Stanley', 'country' => 'Kenya', 'city' => 'Nairobi', 'image' => 'sarova_stanley.jpg'],
            ['name' => 'Kampala Serena Hotel', 'country' => 'Uganda', 'city' => 'Kampala', 'image' => 'kampala_serena_hotel.jpg'],
            ['name' => 'Sheraton Kampala Hotel', 'country' => 'Uganda', 'city' => 'Kampala', 'image' => 'sheraton_kampala_hotel.jpg'],
            ['name' => 'Kigali Marriott Hotel', 'country' => 'Rwanda', 'city' => 'Kigali', 'image' => 'kigali_marriott_hotel.jpg'],
            ['name' => 'Radisson Blu Hotel & Convention Centre', 'country' => 'Rwanda', 'city' => 'Kigali', 'image' => 'radisson_blu_kigali.jpg'],
            ['name' => 'Hyatt Regency Dar es Salaam', 'country' => 'Tanzania', 'city' => 'Dar es Salaam', 'image' => 'hyatt_regency_dar.jpg'],
            ['name' => 'Four Points by Sheraton Arusha', 'country' => 'Tanzania', 'city' => 'Arusha', 'image' => 'four_points_arusha.jpg'],
            ['name' => 'Fairmont The Norfolk', 'country' => 'Kenya', 'city' => 'Nairobi', 'image' => 'fairmont_norfolk.jpg'],
            ['name' => 'Hemingways Nairobi', 'country' => 'Kenya', 'city' => 'Nairobi', 'image' => 'hemingways_nairobi.jpg'],
            ['name' => 'Enashipai Resort & Spa', 'country' => 'Kenya', 'city' => 'Naivasha', 'image' => 'enashipai_resort.jpg'],
            ['name' => 'Mara Serena Safari Lodge', 'country' => 'Kenya', 'city' => 'Maasai Mara', 'image' => 'mara_serena.jpg'],
            ['name' => 'Lake Victoria Serena Golf Resort & Spa', 'country' => 'Uganda', 'city' => 'Kampala', 'image' => 'lake_victoria_serena.jpg'],
            ['name' => 'Speke Resort Munyonyo', 'country' => 'Uganda', 'city' => 'Kampala', 'image' => 'speke_resort.jpg'],
            ['name' => 'Hotel des Mille Collines', 'country' => 'Rwanda', 'city' => 'Kigali', 'image' => 'mille_collines.jpg'],
            ['name' => 'Heaven Boutique Hotel', 'country' => 'Rwanda', 'city' => 'Kigali', 'image' => 'heaven_boutique.jpg'],
            ['name' => 'Gorillas Golf Hotel', 'country' => 'Rwanda', 'city' => 'Kigali', 'image' => 'gorillas_golf.jpg'],
            ['name' => 'Mount Meru Hotel', 'country' => 'Tanzania', 'city' => 'Arusha', 'image' => 'mount_meru.jpg'],
            ['name' => 'The Arusha Hotel', 'country' => 'Tanzania', 'city' => 'Arusha', 'image' => 'arusha_hotel.jpg'],
            ['name' => 'DoubleTree by Hilton Dar es Salaam', 'country' => 'Tanzania', 'city' => 'Dar es Salaam', 'image' => 'doubletree_dar.jpg'],
            ['name' => 'Sea Cliff Hotel', 'country' => 'Tanzania', 'city' => 'Dar es Salaam', 'image' => 'sea_cliff.jpg'],
            ['name' => 'Zanzibar Serena Hotel', 'country' => 'Tanzania', 'city' => 'Zanzibar', 'image' => 'zanzibar_serena.jpg'],
            ['name' => 'Melia Zanzibar', 'country' => 'Tanzania', 'city' => 'Zanzibar', 'image' => 'melia_zanzibar.jpg'],
            ['name' => 'Park Hyatt Zanzibar', 'country' => 'Tanzania', 'city' => 'Zanzibar', 'image' => 'park_hyatt_zanzibar.jpg'],
            ['name' => 'Serena Beach Resort & Spa', 'country' => 'Kenya', 'city' => 'Mombasa', 'image' => 'serena_beach.jpg'],
            ['name' => 'Voyager Beach Resort', 'country' => 'Kenya', 'city' => 'Mombasa', 'image' => 'voyager_beach.jpg'],
            ['name' => 'Sarova Whitesands Beach Resort & Spa', 'country' => 'Kenya', 'city' => 'Mombasa', 'image' => 'sarova_whitesands.jpg'],
            ['name' => 'PrideInn Paradise Beach Resort', 'country' => 'Kenya', 'city' => 'Mombasa', 'image' => 'prideinn_paradise.jpg'],
            ['name' => 'Baobab Beach Resort & Spa', 'country' => 'Kenya', 'city' => 'Diani Beach', 'image' => 'baobab_beach.jpg'],
            ['name' => 'Leopard Beach Resort & Spa', 'country' => 'Kenya', 'city' => 'Diani Beach', 'image' => 'leopard_beach.jpg'],
        ];

        foreach ($accommodations as $accommodation) {
            Accommodation::create($accommodation);
        }
    }
}