<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_detail_id',
        'charge',
        'amount',
    ];

    public function loanDetail()
    {
        return $this->belongsTo(
            LoanDetail::class,
            'loan_detail_id'
        );
    }

    protected $guarded = [];
    protected $table = 'returns';
}