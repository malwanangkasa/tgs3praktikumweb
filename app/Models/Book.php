<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'author',
        'year',
        'publisher',
        'city',
        'cover',
        'bookshelf_id',
        'category_id',
    ];

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bookshelf()
    {
        return $this->belongsTo(Bookshelf::class);
    }

    public function loanDetails()
    {
        return $this->hasMany(LoanDetail::class);
    }
}