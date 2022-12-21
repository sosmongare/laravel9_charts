<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    use HasFactory;

    protected $fillable=[
        'county', 'total_population', 'male_population', 'female_population', 'households', 'av_hh_size', 'land_area', 'population_density', 'population_in_2009', 'population_change', 'intersex_population',
    ];
}
