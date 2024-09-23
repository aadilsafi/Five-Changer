<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotteryTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'lottery_number',
        'user_id',
        'lottery_number_id',
        'try_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lotteryNumber()
    {
        return $this->belongsTo(LotteryNumber::class);
    }
}
