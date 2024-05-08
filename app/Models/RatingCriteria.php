<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingCriteria extends Model
{
    use HasFactory;

    protected $table = 'rating_criteria'; // Correct table name for rating criteria
    protected $fillable = ['name', 'description']; // Correct attributes that can be mass assigned

}
