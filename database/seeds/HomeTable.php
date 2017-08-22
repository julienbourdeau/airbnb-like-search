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
        $data = json_decode(\File::get(resource_path('datasets/airbnb_small.json')), true);

        foreach ($data as $item) {
            $home = [
                'id' => $item['objectID'],
                'name' => $item['name'],
                'picture_url' => $item['picture_url'],
                'user_thumbnail_url' => $item['user']['user']['thumbnail_url'],
                'room_type' => $item['room_type'],
                'address' => $item['address'],
                'city' => $item['city'],
                'country' => $item['country'],
                'lat' => $item['lat'],
                'lng' => $item['lng'],
                'price' => $item['price'],
            ];

            \DB::table('homes')->insert($home);
        }

    }
}
