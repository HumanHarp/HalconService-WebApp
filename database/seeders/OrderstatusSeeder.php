<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Orderstatus;

class OrderstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enumValues = Orderstatus::getEnumValues();

        foreach ($enumValues as $status) {
            Orderstatus::create(['type_status' => $status]);
        }
    }
}
