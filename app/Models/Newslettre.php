<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newslettre extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'email', 'date'];
}
