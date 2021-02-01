<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;


class PropertieAttribute extends Model
{
    public function property(){
        return $this->belongsTo(Property::class, 'id', 'propertie_id');
    }
}
