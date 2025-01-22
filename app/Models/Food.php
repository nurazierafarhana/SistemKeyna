<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's convention
    protected $table = 'foods'; // Optional, only if the table name isn't the plural form of the model

    // Define the fields that can be mass-assigned
    protected $fillable = [
        'name',
        'description',
        'price',
        'type',
        'picture'
    ];

    // Optionally, define any relationships or additional methods here
}
