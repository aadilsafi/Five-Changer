<?php

namespace App\Http\Controllers;

use App\Models\LotteryNumber;
use App\Models\LotteryTicket;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Lottery;

class HomeController extends Controller
{
    //
    public function index()
    {
        $last_draw = LotteryNumber::latest('id')->skip(1)->first();
        $user = auth()->user();
        $video = Video::active()->where('id', '>', $user->video_id ?? 0)->first();
        if (!$video) {
            $video = Video::active()->first();
        }
        $user_video_id = $video?->id ?? null;
        // $video = [$videos];
        $numbers = range(1, 55);
        $grid = array_chunk($numbers, 8);

        $latest_lottery_number_id = LotteryTicket::max('lottery_number_id');
        $latest_try_number = LotteryTicket::where('lottery_number_id', $latest_lottery_number_id)->max('try_number');

        $user_numbers = LotteryTicket::where('user_id', $user->id)->where('lottery_number_id', $latest_lottery_number_id)
            ->where('try_number', $latest_try_number)->pluck('lottery_number')->toArray();

        if (count($user_numbers) >= 5) {
            $user_numbers = array();
        }

        // dd($last_draw);
        return view('dashboard', compact(
            'video',
            'last_draw',
            'user_numbers',
            'grid',
            'user_video_id'
        ));
    }
    public function so_funktionierts()
    {
        return view('so_funktionierts');
    }

    public function privacy_policy()
    {
        return view('privacy_policy');
    }
}
