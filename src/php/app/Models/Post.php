<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $table = 'Posts';
    protected $guarded = [
      'id'
    ];

    public function heritage(): BelongsTo
    {
        return $this->belongsTo(Heritage::class, 'heritage_id');
    }
}
