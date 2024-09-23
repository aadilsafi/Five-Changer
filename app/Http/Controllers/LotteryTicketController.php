<?php

namespace App\Http\Controllers;

use App\Models\LotteryNumber;
use App\Models\LotteryTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LotteryTicketController extends Controller
{

    public function index()
    {
        $lottertTickets = LotteryTicket::with('lotteryNumber:id,draw_number')
            ->select('id', 'lottery_number', 'try_number', 'lottery_number_id')
            ->where('user_id', auth()->user()->id)
            ->get()
            ->groupBy(['lottery_number_id', 'try_number']);

        return view('lottery-ticket.index', compact('lottertTickets'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'lottery_number' => 'required|numeric|min:1|max:55',
        ]);

        try {
            $lottery = LotteryNumber::latest('id')->first();


            $try_number = auth()->user()->lotteryTickets()->where('lottery_number_id', $lottery->id)->latest()->first()?->try_number ?? 1;

            $tries = auth()->user()->lotteryTickets()->where('lottery_number_id', $lottery->id)->where('try_number', $try_number)->count();

            if ($tries >= 5) {
                $try_number = $try_number + 1;
            }

            auth()->user()->lotteryTickets()->create([
                'lottery_number' => $data['lottery_number'],
                'lottery_number_id' => $lottery->id,
                'try_number' => $try_number,
            ]);

            return back()->with('success', 'Lottery ticket created successfully!');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('error', 'Something went wrong!');
        }
    }
}
