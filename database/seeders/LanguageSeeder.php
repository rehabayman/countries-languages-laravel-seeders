<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;
use Carbon\Carbon;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = json_decode(file_get_contents(public_path()."/json/languages.json"), true);
        $languages_count = count($languages);

        for ($i=0; $i < $languages_count; $i++) { 
            Language::insert([
                "name" => json_encode($languages[$i]["name"]),
                "code" => $languages[$i]["code"],
                "created_at" => Carbon::now()->toDateTimeString(),
                "updated_at" => Carbon::now()->toDateTimeString()
            ]);
        }
    }
}
