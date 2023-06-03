<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Heritage extends Model
{
    use HasFactory;

    protected $table = 'Heritages';
    protected $fillable = [
        'name',
        'country_name',
        'explanation',
        'registered_year',
        'continent'
    ];

    public function post(): HasMany
    {
        return $this->hasMany(Post::class, 'heritage_id');
    }

}
