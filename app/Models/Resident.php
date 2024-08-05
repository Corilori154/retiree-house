<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'prénom', 'nom', 'régime'
    ];


    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function medicals()
    {
        return $this->hasMany(Medical::class);
    }

    


}
