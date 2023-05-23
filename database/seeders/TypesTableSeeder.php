<?php

namespace Database\Seeders;
use App\Models\Type;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'type' => 'Monitor',
                'description' => 'Description Monitor',
            ],
            [
                'type' => 'Keyboard',
                'description' => 'Description Keyboard',
            ],
            [
                'type' => 'Mouse',
                'description' => 'Description Mouse',
            ],
            [
                'type' => 'Peripherals',
                'description' => 'Description Peripherals',
            ],
        ];
        
        foreach($data as $key => $value){
            Type::create($value);
        }
    }
}
