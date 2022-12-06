<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materiel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price'
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
