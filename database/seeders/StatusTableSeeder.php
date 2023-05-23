<?php

namespace Database\Seeders;
use App\Models\Status;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            [
                'status_name' => 'Ready to Deploy',
                'status_description' => 'Ready to Deploy/For Deployement',
            ],
            [
                'status_name' => 'Deployed',
                'status_description' => 'Currently Deployed',
            ],
            [
                'status_name' => 'Pulled-out',
                'status_description' => 'Pulled-out',
            ],
            [
                'status_name' => 'For Disposal',
                'status_description' => 'For Disposal',
            ],
        ];
        
        foreach($status as $key => $value){
            Status::create($value);
        }
    }
}
