<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'title',
        'author',
        'description',
    ];
}
