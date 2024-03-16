<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function city()
    {
        return $this->belongsTo(cities::class);
    }

    public function division()
    {
        return $this->belongsTo(divisions::class);
    }

    public function conference()
    {
        return $this->belongsTo(conferences::class);
    }
}
