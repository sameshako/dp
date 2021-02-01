<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\PropertieAttribute;


class Property extends Model
{
    protected $table = 'properties';
    protected $fillable = [
        'judet',
        'localitate',
        'strada',
        'apartament',
        'nr_strada',
        'lat',
        'long',
        'type',
        'pret',
        'title',
        'description',
        'transaction_type',
        'images'
    ];

    public function propertyAtr(){
        return $this->hasOne(PropertieAttribute::class, 'propertie_id', 'id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
