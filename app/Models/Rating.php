<?php

namespace App\Models;

use App\Models\University;
use App\Models\RatingCriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'ratings'; // Correct table name for ratings
    protected $fillable = ['user_id', 'university_id', 'criteria_id', 'score']; // Correct attributes for ratings

    // Relationship with University
    public function university()
    {
        return $this->belongsTo(University::class);
    }

    // Relationship with RatingCriteria
    public function criteria()
    {
        return $this->belongsTo(RatingCriteria::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

