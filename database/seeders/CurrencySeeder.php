<?php

namespace Database\Seeders;

use App\Models\Currency;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::insert([
            [
                "code" => "USD",
                "name" => "Dollar",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "code" => "RUB",
                "name" => "Rubley",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "code" => "EUR",
                "name" => "Euro",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
        ]);
    }
}
