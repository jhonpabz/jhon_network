<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jhonpabz extends Model
{
    protected $fillable = ['name', 'skill', 'bio'];
    use HasFactory;

    public function network()
    {
        return $this->belongsTo(Network::class);
    }
}
