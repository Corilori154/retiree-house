<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tretment extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'dosage', 'description', 'resident_id'
    ];


}
