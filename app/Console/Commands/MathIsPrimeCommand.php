<?php

namespace App\Console\Commands;

use App\Services\MathService;
use Illuminate\Console\Command;

class MathIsPrimeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'math:prime {number}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Determine if a number is prime';

    /**
     * Execute the console command.
     */
    public function handle(MathService $math)
    {
        $number = $this->argument('number');

        try {
            if ($math->isPrime($number)) {
                $this->info("{$number} is prime");
            } else {
                $this->info("{$number} is not prime");
            }
        } catch (\Exception $ex) {
            $this->fail($ex->getMessage());
        }
    }
}
