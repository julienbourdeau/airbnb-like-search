<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Home extends Model
{
    use Searchable;

    public function toSearchableArray()
    {
        $record = $this->toArray();

        $record['_geoloc'] = [
            'lat' => (float) $record['lat'],
            'lng' => (float) $record['lng'],
        ];

        return $record;
    }
}
