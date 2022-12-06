<?php

namespace App\Models;

use App\Models\Materiel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];

    public function materiels()
    {
        return $this->belongsToMany(Materiel::class);
    }
}
