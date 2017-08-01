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
        $filtered = [];
        $data = json_decode(\File::get(resource_path('datasets/airbnb.json')), true);

        foreach ($data as $item) {
            $item['id'] = $item['objectID'];

            $item['urls'] = json_encode([
                'thumbnail_url' => $item['thumbnail_url'],
                'medium_url' => $item['medium_url'],
                'picture_url' => $item['picture_url'],
                'xl_picture_url' => $item['xl_picture_url'],
                'picture_urls' => $item['picture_urls'],
                'thumbnail_urls' => $item['thumbnail_urls'],
                'xl_picture_urls' => $item['xl_picture_urls'],
            ]);

            $item['user'] = json_encode($item['user']['user']);

            unset(
                $item['thumbnail_url'],
                $item['medium_url'],
                $item['user_id'],
                $item['picture_url'],
                $item['xl_picture_url'],
                $item['native_currency'],
                $item['has_double_blind_reviews'],
                $item['market'],
                $item['min_nights'],
                $item['cancellation_policy'],
                $item['room_type_category'],
                $item['picture_urls'],
                $item['thumbnail_urls'],
                $item['xl_picture_urls'],
                $item['picture_count'],
                $item['_geoloc'],
                $item['objectID']
            );

            \DB::table('homes')->insert($item);
        }

    }
}
