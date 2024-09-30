<?php

namespace App\Http\Controllers;

use App\Models\LotteryNumber;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Lottery;

class HomeController extends Controller
{
    //
    public function index()
    {
        $newLottery = LotteryNumber::latest('id')->first();
        $last_draw = LotteryNumber::latest('id')->skip(1)->first();
        $videos = Video::active()->get();

        return view('dashboard', compact(
            'newLottery',
            'videos',
            'last_draw',
        ));
    }
}
