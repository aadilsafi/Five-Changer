<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\LotteryNumber;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->email,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->has('user_type') && $request->user_type == 'partner') {
            $user->assignRole($request->user_type);
            // Generate unique referal code for the user
            do {
                $referralCode = Str::random(8);
            } while (User::where('referral_code', $referralCode)->exists());

            $user->referral_code = $referralCode;
            $user->save();
        } else {
            $user->assignRole('User');
            if($request->has('referral_code') && $request->referral_code) {
                $referralUser = User::where('referral_code', $request->referral_code)->first();
                if ($referralUser) {
                    $user->referred_by = $referralUser->id;
                    $user->save();
                    $this->generateRandomLotteryNumbers($user);
                    Session::flash('referral_message','Du hast einen Empfehlungscode verwendet – die ersten 2 Felder Deines ersten Lottoscheins sind bereits ausgefüllt!');

                }
            }
        }



        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home.index', absolute: false));
    }
      /**
     * Generate and store two random lottery numbers for a newly registered user.
     */
    private function generateRandomLotteryNumbers(User $user): void
    {
        try {
            // Get the latest lottery
            $lottery = LotteryNumber::latest('id')->first();

            if (!$lottery) {
                Log::warning('No lottery found when generating numbers for new user: ' . $user->id);
                return;
            }

            // The first try number is always 1 for new users
            $tryNumber = 1;

            // Generate two unique random numbers between 1 and 55
            $randomNumbers = array_unique($this->getRandomNumbers(2, 1, 55));

            // In case we got only one unique number, add one more
            while (count($randomNumbers) < 2) {
                $randomNumbers = array_unique(array_merge($randomNumbers, $this->getRandomNumbers(1, 1, 55)));
            }

            // Store each random number
            foreach ($randomNumbers as $number) {
                $user->lotteryTickets()->create([
                    'lottery_number' => $number,
                    'lottery_number_id' => $lottery->id,
                    'try_number' => $tryNumber,
                ]);
            }

            Log::info('Generated lottery numbers for new user: ' . $user->id . ', numbers: ' . implode(', ', $randomNumbers));
        } catch (\Throwable $th) {
            Log::error('Failed to generate lottery numbers for new user: ' . $user->id . ' - ' . $th->getMessage());
        }
    }

    /**
     * Get random unique numbers within a range.
     */
    private function getRandomNumbers(int $count, int $min, int $max): array
    {
        $numbers = [];
        for ($i = 0; $i < $count; $i++) {
            $numbers[] = rand($min, $max);
        }
        return $numbers;
    }
}
