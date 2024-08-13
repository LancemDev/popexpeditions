<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinations = [
            1 => [ // Kenya
                ['name' => 'Maasai Mara', 'photo_main' => 'maasai_mara_main.jpg', 'photo_profile' => 'maasai_mara_profile.jpg', 'photo_others' => 'maasai_mara_others.jpg', 'description' => 'A large game reserve in Narok', 'area' => '1510 km²'],
                ['name' => 'Amboseli', 'photo_main' => 'amboseli_main.jpg', 'photo_profile' => 'amboseli_profile.jpg', 'photo_others' => 'amboseli_others.jpg', 'description' => 'Known for its large elephant herds', 'area' => '392 km²'],
                ['name' => 'Tsavo East', 'photo_main' => 'tsavo_east_main.jpg', 'photo_profile' => 'tsavo_east_profile.jpg', 'photo_others' => 'tsavo_east_others.jpg', 'description' => 'One of the oldest and largest parks in Kenya', 'area' => '13747 km²'],
                ['name' => 'Tsavo West', 'photo_main' => 'tsavo_west_main.jpg', 'photo_profile' => 'tsavo_west_profile.jpg', 'photo_others' => 'tsavo_west_others.jpg', 'description' => 'Known for its beautiful scenery', 'area' => '9065 km²'],
                ['name' => 'Nairobi National Park', 'photo_main' => 'nairobi_np_main.jpg', 'photo_profile' => 'nairobi_np_profile.jpg', 'photo_others' => 'nairobi_np_others.jpg', 'description' => 'A unique wildlife park within the city', 'area' => '117 km²'],
                ['name' => 'Lake Nakuru', 'photo_main' => 'lake_nakuru_main.jpg', 'photo_profile' => 'lake_nakuru_profile.jpg', 'photo_others' => 'lake_nakuru_others.jpg', 'description' => 'Famous for its flamingos', 'area' => '188 km²'],
                ['name' => 'Mount Kenya', 'photo_main' => 'mount_kenya_main.jpg', 'photo_profile' => 'mount_kenya_profile.jpg', 'photo_others' => 'mount_kenya_others.jpg', 'description' => 'The highest mountain in Kenya', 'area' => '715 km²'],
                ['name' => 'Samburu', 'photo_main' => 'samburu_main.jpg', 'photo_profile' => 'samburu_profile.jpg', 'photo_others' => 'samburu_others.jpg', 'description' => 'Known for its unique species', 'area' => '165 km²'],
                ['name' => 'Aberdare', 'photo_main' => 'aberdare_main.jpg', 'photo_profile' => 'aberdare_profile.jpg', 'photo_others' => 'aberdare_others.jpg', 'description' => 'A mountain range in central Kenya', 'area' => '767 km²'],
                ['name' => 'Hell\'s Gate', 'photo_main' => 'hells_gate_main.jpg', 'photo_profile' => 'hells_gate_profile.jpg', 'photo_others' => 'hells_gate_others.jpg', 'description' => 'Known for its geothermal activity', 'area' => '68 km²'],
            ],
            2 => [ // Uganda
                ['name' => 'Bwindi Impenetrable Forest', 'photo_main' => 'bwindi_main.jpg', 'photo_profile' => 'bwindi_profile.jpg', 'photo_others' => 'bwindi_others.jpg', 'description' => 'Home to many of the world\'s mountain gorillas', 'area' => '331 km²'],
                ['name' => 'Queen Elizabeth', 'photo_main' => 'queen_elizabeth_main.jpg', 'photo_profile' => 'queen_elizabeth_profile.jpg', 'photo_others' => 'queen_elizabeth_others.jpg', 'description' => 'Famous for its wildlife', 'area' => '1978 km²'],
                ['name' => 'Murchison Falls', 'photo_main' => 'murchison_falls_main.jpg', 'photo_profile' => 'murchison_falls_profile.jpg', 'photo_others' => 'murchison_falls_others.jpg', 'description' => 'Known for the powerful Murchison Falls', 'area' => '3840 km²'],
                ['name' => 'Kibale Forest', 'photo_main' => 'kibale_forest_main.jpg', 'photo_profile' => 'kibale_forest_profile.jpg', 'photo_others' => 'kibale_forest_others.jpg', 'description' => 'Famous for its chimpanzee tracking', 'area' => '766 km²'],
                ['name' => 'Lake Mburo', 'photo_main' => 'lake_mburo_main.jpg', 'photo_profile' => 'lake_mburo_profile.jpg', 'photo_others' => 'lake_mburo_others.jpg', 'description' => 'Known for its zebras and birdlife', 'area' => '370 km²'],
                ['name' => 'Rwenzori Mountains', 'photo_main' => 'rwenzori_mountains_main.jpg', 'photo_profile' => 'rwenzori_mountains_profile.jpg', 'photo_others' => 'rwenzori_mountains_others.jpg', 'description' => 'Also known as the Mountains of the Moon', 'area' => '996 km²'],
                ['name' => 'Semuliki', 'photo_main' => 'semuliki_main.jpg', 'photo_profile' => 'semuliki_profile.jpg', 'photo_others' => 'semuliki_others.jpg', 'description' => 'Known for its hot springs and diverse wildlife', 'area' => '220 km²'],
                ['name' => 'Mgahinga Gorilla', 'photo_main' => 'mgahinga_gorilla_main.jpg', 'photo_profile' => 'mgahinga_gorilla_profile.jpg', 'photo_others' => 'mgahinga_gorilla_others.jpg', 'description' => 'Part of the Virunga Volcanoes', 'area' => '33.7 km²'],
                ['name' => 'Mount Elgon', 'photo_main' => 'mount_elgon_main.jpg', 'photo_profile' => 'mount_elgon_profile.jpg', 'photo_others' => 'mount_elgon_others.jpg', 'description' => 'An extinct shield volcano', 'area' => '1279 km²'],
                ['name' => 'Kidepo Valley', 'photo_main' => 'kidepo_valley_main.jpg', 'photo_profile' => 'kidepo_valley_profile.jpg', 'photo_others' => 'kidepo_valley_others.jpg', 'description' => 'Known for its rugged savannah', 'area' => '1442 km²'],
            ],
            3 => [ // Tanzania
                ['name' => 'Serengeti', 'photo_main' => 'serengeti_main.jpg', 'photo_profile' => 'serengeti_profile.jpg', 'photo_others' => 'serengeti_others.jpg', 'description' => 'Known for its annual migration of over 1.5 million white-bearded wildebeest', 'area' => '14763 km²'],
                ['name' => 'Ngorongoro', 'photo_main' => 'ngorongoro_main.jpg', 'photo_profile' => 'ngorongoro_profile.jpg', 'photo_others' => 'ngorongoro_others.jpg', 'description' => 'A large volcanic caldera', 'area' => '8292 km²'],
                ['name' => 'Tarangire', 'photo_main' => 'tarangire_main.jpg', 'photo_profile' => 'tarangire_profile.jpg', 'photo_others' => 'tarangire_others.jpg', 'description' => 'Known for its large elephant population', 'area' => '2850 km²'],
                ['name' => 'Lake Manyara', 'photo_main' => 'lake_manyara_main.jpg', 'photo_profile' => 'lake_manyara_profile.jpg', 'photo_others' => 'lake_manyara_others.jpg', 'description' => 'Famous for its tree-climbing lions', 'area' => '330 km²'],
                ['name' => 'Ruaha', 'photo_main' => 'ruaha_main.jpg', 'photo_profile' => 'ruaha_profile.jpg', 'photo_others' => 'ruaha_others.jpg', 'description' => 'The largest national park in Tanzania', 'area' => '20226 km²'],
                ['name' => 'Selous', 'photo_main' => 'selous_main.jpg', 'photo_profile' => 'selous_profile.jpg', 'photo_others' => 'selous_others.jpg', 'description' => 'One of the largest faunal reserves in the world', 'area' => '50000 km²'],
                ['name' => 'Mikumi', 'photo_main' => 'mikumi_main.jpg', 'photo_profile' => 'mikumi_profile.jpg', 'photo_others' => 'mikumi_others.jpg', 'description' => 'Known for its diverse wildlife', 'area' => '3230 km²'],
                ['name' => 'Katavi', 'photo_main' => 'katavi_main.jpg', 'photo_profile' => 'katavi_profile.jpg', 'photo_others' => 'katavi_others.jpg', 'description' => 'Remote and less visited park', 'area' => '4471 km²'],
                ['name' => 'Gombe Stream', 'photo_main' => 'gombe_stream_main.jpg', 'photo_profile' => 'gombe_stream_profile.jpg', 'photo_others' => 'gombe_stream_others.jpg', 'description' => 'Famous for its chimpanzee population', 'area' => '35 km²'],
                ['name' => 'Mahale Mountains', 'photo_main' => 'mahale_mountains_main.jpg', 'photo_profile' => 'mahale_mountains_profile.jpg', 'photo_others' => 'mahale_mountains_others.jpg', 'description' => 'Known for its chimpanzees and beautiful scenery', 'area' => '1613 km²'],
            ],
            4 => [ // Rwanda
                ['name' => 'Volcanoes National Park', 'photo_main' => 'volcanoes_main.jpg', 'photo_profile' => 'volcanoes_profile.jpg', 'photo_others' => 'volcanoes_others.jpg', 'description' => 'Home to mountain gorillas and golden monkeys', 'area' => '160 km²'],
                ['name' => 'Nyungwe Forest', 'photo_main' => 'nyungwe_main.jpg', 'photo_profile' => 'nyungwe_profile.jpg', 'photo_others' => 'nyungwe_others.jpg', 'description' => 'Known for its biodiversity', 'area' => '1019 km²'],
                
            ],
        ];

        foreach ($destinations as $country_id => $country_destinations) {
            foreach ($country_destinations as $destination) {
                Destination::create(array_merge($destination, ['country_id' => $country_id]));
            }
        }
    }
}
