<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'country_id', 'photo_main', 'photo_profile', 'photo_others', 'description', 'area'];


    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
