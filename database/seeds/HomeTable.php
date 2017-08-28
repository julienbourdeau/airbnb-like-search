<?php

use Illuminate\Database\Seeder;

class HomeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(\File::get(resource_path('datasets/airbnb_final.json')), true);

        foreach ($data as $item) {
            \DB::table('homes')->insert($item);
        }

    }
}
