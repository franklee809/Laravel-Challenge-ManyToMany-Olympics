<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'short_code'];

    public function sports()
    {
        return $this->belongsToMany(Sport::class)->withPivot('ranking');
    }

    public function rankings()
    {
        return $this->hasMany(CountrySport::class);
    }
}
