<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_client', 'logo'
      ];
    public function projets()
    {
        return $this->hasMany(Projet::class, 'id_client','id');
    }
}

