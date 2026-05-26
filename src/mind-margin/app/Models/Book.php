<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Fillable(['title', 'author', 'thumbnail'])]

class Book extends Model
{
    use HasFactory;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('status')
            ->withTimestamps();
    }

    public function userBooks()
    {
        return $this->hasMany(UserBook::class);
    }

    public function publicReviews()
    {
        return $this->hasMany(Review::class)
            ->where('is_public', true);
    }

    public function latestReview()
    {
        return $this->hasOne(Review::class)
            ->where('is_public', true)
            ->latestOfMany();
    }
}
