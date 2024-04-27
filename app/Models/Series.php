<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

        /**
     * Get the episodes for the series.
     */
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
