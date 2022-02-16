<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'location',
        'sector',
        'amount',
        'mode_of_payment',
        'date_of_payment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
