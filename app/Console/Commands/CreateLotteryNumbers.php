<?php

namespace App\Console\Commands;

use App\Models\LotteryNumber;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateLotteryNumbers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:lottery-numbers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will create lottery numbers';

    private function randomNumbers($count)
    {
        $numbers = [];
        do {
            $number = rand(1, 55);
            if (!in_array($number, $numbers)) {
                $numbers[] = $number;
            }
        } while (count($numbers) < $count);

        return $numbers;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $this->info('Creating lottery numbers...');

        $randomNumbers = static::randomNumbers(5);

        $this->info(json_encode($randomNumbers));

        do {
            $draw_number = Str::random(10);
        } while (LotteryNumber::where('draw_number', $draw_number)->exists());

        LotteryNumber::create([
            'draw_number' => $draw_number,
            'number_one' => $randomNumbers[0],
            'number_two' => $randomNumbers[1],
            'number_three' => $randomNumbers[2],
            'number_four' => $randomNumbers[3],
            'number_five' => $randomNumbers[4],
        ]);

        $this->info('Lottery numbers created successfully!');
    }
}
