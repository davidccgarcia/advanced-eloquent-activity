<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function getNumBooksAttribute()
    {
        return count($this->books->where('status', 'public'));
    }

    public function getPublicBooksAttribute()
    {
        return $this->books->where('status', 'public');
    }
}
