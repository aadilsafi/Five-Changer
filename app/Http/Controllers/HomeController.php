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
        $videos = Video::active()->where('id', '>', $user->video_id ?? 0)->first();
        if (!$videos) {
            $videos = Video::active()->first();
        }
        $user_video_id = $videos?->id ?? null;
        $videos = [$videos];
        $numbers = range(1, 55);
        $grid = array_chunk($numbers, 8);

        $user_numbers = LotteryTicket::where('user_id', $user->id)->where('lottery_number_id', function ($query) {
            $query->from('lottery_tickets')->selectRaw('MAX(lottery_number_id)');
        })->where('try_number', function ($query) {
            $query->from('lottery_tickets')->selectRaw('MAX(try_number)');
        })->pluck('lottery_number')->toArray();

        dd($user_numbers);
        if (count($user_numbers) >= 5) {
            $user_numbers = array();
        }

        dd($user_numbers);

        return view('dashboard', compact(
            'videos',
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
