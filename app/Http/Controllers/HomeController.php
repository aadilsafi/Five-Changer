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
        $last_draw = LotteryNumber::latest('id')->skip(1)->first();
        $videos = Video::active()->get();

        return view('dashboard', compact(
            'videos',
            'last_draw',
        ));
    }
}
