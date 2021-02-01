<?php

namespace App\Models;

use App\PropertieType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'slug',
        'image',
        'body',
        'status',
        'propertie_types',
        'user_id'
    ];

    public function blogType(){
        return $this->hasOne(BlogCategory::class, 'id', 'propertie_types');
    }

    public function blogUser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
