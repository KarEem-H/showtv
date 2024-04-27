<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

      /**
     * Get the series that owns the episode.
     */
    public function series()
    {
        return $this->belongsTo(Series::class);
    }
}
