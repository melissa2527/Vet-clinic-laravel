<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StHectorsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->truncate();
        DB::table('pets')->truncate();

        $json_string = file_get_contents(storage_path('clients.json'));
        $data = json_decode($json_string); // decode the string into data

        foreach($data as $client_data){
           $client = new Client;
           $client->first_name = $client_data->first_name;
           $client->surname = $client_data->surname;
           $client->save();

           foreach($client_data->pets as $pet_data ){
            $pet = new Pet;
            $pet->client_id = $client->id;
            $pet->name = $pet_data->name;
            $pet->breed = $pet_data->breed;
            $pet->weight = $pet_data->weight;
            $pet->age = $pet_data->age;
            $pet->photo = $pet_data->photo;
            $pet->save();
        }
        }
    }
}
