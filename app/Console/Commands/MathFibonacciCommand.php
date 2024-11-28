<?php

namespace App\Console\Commands;

use App\Services\MathService;
use Illuminate\Console\Command;

class MathFibonacciCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'math:fibonacci {position}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get fibonacci number';

    /**
     * Execute the console command.
     */
    public function handle(MathService $math)
    {
        $position = $this->argument('position');

        try {
            $result = $math->fibonacci($position);
        } catch (\Exception $ex) {
            $this->fail($ex->getMessage());
        }

        $this->info("{$position}th fibonacci number is $result");
    }
}
