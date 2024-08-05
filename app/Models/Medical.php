<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Medical extends Model
{
    use HasFactory;

    public function resident()
    {
        return $this->belongsTo(Resident::class);
    }
}
