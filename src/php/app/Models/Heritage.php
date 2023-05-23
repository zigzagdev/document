<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Heritage extends Model
{
    use SoftDeletes;

    protected $table = 'Heritage';
    protected $fillable = [
        'name',
        'country_name',
        'explanation',
        'registered_year',
        'continent'
    ];

}
