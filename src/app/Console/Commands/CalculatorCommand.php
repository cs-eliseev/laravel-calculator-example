<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Config\ErrorConfig;
use App\Config\ValidateRulesConfig;
use App\Services\CalculatorService\CalculatorService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

/**
 * Class CalculatorCommand
 *
 * @description Запуск калькулятора из командной строки.
 */
class CalculatorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculator:sum 
                            {operand1? : The first parameter of the sum }
                            {operand2? : The second parameter of the sum}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The sum of two positive numbers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return bool
     */
    public function handle()
    {
        $params = $this->argument();

        $validator = Validator::make($params, ValidateRulesConfig::SUM, trans('validation', [], ErrorConfig::LOCAL_BACK));

        if ($validator->fails()) {
            $this->warn('FAILS:');

            foreach ($validator->errors()->all() as $key => $error) {
                $this->error($error);
            }

            return false;
        }

        $calculator = new CalculatorService();
        $this->info("Result: {$calculator->sum($params['operand1'] ?? '', $params['operand2'] ?? '')}");

        return true;
    }
}
