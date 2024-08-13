<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packages')->insert([
            [
                'name' => '9 Days Spirit Of Conservation Safari – Loisaba, Ol Pejeta And Naboisho',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $7,100 PRICE PER PERSON',
                'days' => '9 Days',
                'nights' => '8 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '10 Days Bush And Beach Combo – Masai Mara And Watamu/Vipingo',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $6,050 PRICE PER PERSON',
                'days' => '10 Days',
                'nights' => '9 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '3 Days Masai Mara Fly-in Safari',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $1,800 PER PERSON',
                'days' => '3 Days',
                'nights' => '2 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '3 Days Amboseli Fly-in Safari',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $2,250 PRICE PER PERSON',
                'days' => '3 Days',
                'nights' => '2 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '3 Days Tsavo Safari',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $1,750 PRICE PER PERSON',
                'days' => '3 Days',
                'nights' => '2 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => 'Masai Mara Day Trip',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $780 PRICE PER PERSON',
                'days' => '1 Day',
                'nights' => '',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => 'Ol Pejeta Day Trip',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $510 PRICE PER PERSON',
                'days' => '1 Day',
                'nights' => '',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '4 Days and Beyond Luxury Safari',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $2,400 PRICE PER PERSON',
                'days' => '4 Days',
                'nights' => '3 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '4 Days Gorilla Trekking Adventure',
                'location' => 'Entebbe - Uganda',
                'price_details' => 'FROM $2,800 PRICE PER PERSON',
                'days' => '4 Days',
                'nights' => '3 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '5 Days Masai mara luxury safari',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $2,600 PRICE PER PERSON',
                'days' => '5 Days',
                'nights' => '4 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '5 Days Tembo Safari – Amboseli and Tsavo',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $2,000 PRICE PER PERSON',
                'days' => '5 Days',
                'nights' => '4 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '5 Days Zanzibar Beach Vacation',
                'location' => 'Zanzibar - Tanzania',
                'price_details' => 'FROM $2,500 PRICE PER PERSON',
                'days' => '5 Days',
                'nights' => '4 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '6 Days Amboseli – Masai Mara Fly-in Safari',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $3,500 PRICE PER PERSON',
                'days' => '6 Days',
                'nights' => '5 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '6 Days Lake And Bush Luxury Safari - Lake Naivasha And Masai Mara',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $3,800 PRICE PER PERSON',
                'days' => '6 Days',
                'nights' => '5 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '6 Days Ngorongoro and Serengeti Luxury Safari',
                'location' => 'Arusha - Tanzania',
                'price_details' => 'FROM $3,900 PRICE PER PERSON',
                'days' => '6 Days',
                'nights' => '5 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '7 Days Governors Collection Safari- Laikipia, Lake Naivasha and Masai Mara',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $5,300 PRICE PER PERSON',
                'days' => '7 Days',
                'nights' => '6 Nights',
                'rating' => '4.9 / 5',
            ],
            // Additional entries
            [
                'name' => '8 Days Kenya Classic Safari',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $4,200 PRICE PER PERSON',
                'days' => '8 Days',
                'nights' => '7 Nights',
                'rating' => '4.8 / 5',
            ],
            [
                'name' => '12 Days Best of Kenya and Tanzania',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $8,500 PRICE PER PERSON',
                'days' => '12 Days',
                'nights' => '11 Nights',
                'rating' => '4.9 / 5',
            ],
            [
                'name' => '14 Days Ultimate African Safari',
                'location' => 'Nairobi - Kenya',
                'price_details' => 'FROM $10,000 PRICE PER PERSON',
                'days' => '14 Days',
                'nights' => '13 Nights',
                'rating' => '5.0 / 5',
            ],
        ]);
    }
}
