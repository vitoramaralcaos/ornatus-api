<?php

namespace Database\Seeders;

use App\Models\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 40; $i++){
            Request::create([
                'amount' => '500',
                'items' => '{
                    "id": 1,
                    "product_id": '.rand(1,30).',
                    "quantity": '.rand(1,5).',
                    "amount": 50
                }',
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}