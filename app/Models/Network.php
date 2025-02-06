<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    protected $fillable = ['name', 'location', 'description'];

    use HasFactory;

    public function jhonpabzs()
    {
        return $this->hasMany(Jhonpabz::class);
    }
}
