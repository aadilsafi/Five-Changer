<?php

namespace App\Http\Controllers;

use App\Models\LotteryNumber;
use App\Models\LotteryTicket;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LotteryTicketController extends Controller
{

    public function index()
    {
        $latest_draw_id = LotteryNumber::latest()->first()?->id;
        $lottertTickets = LotteryTicket::with('drawNumber:id,draw_number')
            ->select('id', 'lottery_number', 'try_number', 'lottery_number_id')
            ->where('user_id', auth()->user()->id)
            ->where('lottery_number_id', $latest_draw_id)
            ->latest('id')
            ->get()
            ->groupBy(['lottery_number_id', 'try_number']);
        // return $lottertTickets;
        $numbers = range(1, 55);
        $grid = array_chunk($numbers, 8);

        return view('lottery-ticket.index', compact('lottertTickets', 'grid'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'lottery_number' => 'required|numeric|min:1|max:55',
        ]);

        try {
            $user = auth()->user();
            $lottery = LotteryNumber::latest('id')->first();

            $try_number = $user->lotteryTickets()->where('lottery_number_id', $lottery->id)->latest()->first()?->try_number ?? 1;

            $tries = $user->lotteryTickets()->where('lottery_number_id', $lottery->id)->where('try_number', $try_number)->count();

            if ($tries >= 5) {
                $try_number = $try_number + 1;
            }

            if ($user->lotteryTickets()
                ->where('lottery_number_id', $lottery->id)
                ->where('try_number', $try_number)
                ->where('lottery_number', $data['lottery_number'])->exists()
            ) {
                return response()->json(array('success' => false, 'message' => 'Lottery ticket number already added!'));
            }

            $user->lotteryTickets()->create([
                'lottery_number' => $data['lottery_number'],
                'lottery_number_id' => $lottery->id,
                'try_number' => $try_number,
            ]);
            $user->update(['video_id' => $request->video_id]);
            $tries = $user->lotteryTickets()->where('lottery_number_id', $lottery->id)->where('try_number', $try_number)->count();
            return response()->json(array('success' => true, 'message' => 'Lottery ticket created successfully!', 'tries' => $tries));
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(array('success' => false, 'message' => 'Something went wrong!'));
        }
    }
}
