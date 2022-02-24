<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Str;

class state_location extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response_state = Http::get('https://locus.fkkas.com/api/states');
        $raw_state =  json_decode($response_state, true);
        foreach ($raw_state['data'] as $state) {
            // print_r ($state['name']);
            $response_LGA = Http::get("https://locus.fkkas.com/api/regions/".$state['alias']);
            $raw_LGA = json_decode($response_LGA, true);
            foreach ($raw_LGA['data'] as $lga) {
                // echo $state['name'].' '.$lga['name'].', ';
                DB::table('state_lgas')->insert([
                    'location'=> $state['name'].' '.$lga['name']
                ]);
            }
        }
    }
}
