<?php

namespace App\Console\Commands;

use App\Models\Brand;
use Illuminate\Console\Command;

class UpdateCarBrands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-car-brands';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $strJsonFileContents = file_get_contents(base_path('storage/car_brands.json'));

        $array = json_decode($strJsonFileContents, true);
        $brands = [];

        foreach ($array as $car) {
            $brands[]['brand'] = $car['name'];
        }

        Brand::truncate();
        Brand::insert($brands);
    }
}
