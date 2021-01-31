<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use Carbon\Carbon;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = json_decode(file_get_contents(public_path()."/json/countries.json"), true);
        $countries_count = count($countries);

        for ($i=0; $i < $countries_count; $i++) { 
            Country::insert([
                "name" => json_encode($countries[$i]["name"]),
                "code" => $countries[$i]["code"],
                "created_at" => Carbon::now()->toDateTimeString(),
                "updated_at" => Carbon::now()->toDateTimeString()
            ]);
        }
    }
}
