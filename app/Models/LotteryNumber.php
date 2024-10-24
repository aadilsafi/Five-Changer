<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotteryNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'draw_number',
        'number_one',
        'number_two',
        'number_three',
        'number_four',
        'number_five',
    ];

    protected function numbers(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                return [
                    $attributes['number_one'],
                    $attributes['number_two'],
                    $attributes['number_three'],
                    $attributes['number_four'],
                    $attributes['number_five'],
                ];
            },
        );
    }
}
