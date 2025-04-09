<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Indiquer les champs que l'on peut remplir directement
    protected $fillable = ['title', 'description'];
}
