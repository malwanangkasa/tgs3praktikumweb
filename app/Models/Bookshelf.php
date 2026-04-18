<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
    ];

    protected $guarded = [];
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}