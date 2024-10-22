<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'event' => 'cita 1',
                'start_date' => '2024-12-05 08:00',
                'end_date' => '2024-12-05 10:00',
            ],
            [
                'event' => 'cita 2',
                'start_date' => '2024-12-05 08:00',
                'end_date' => '2024-12-05 10:00',
            ],
            [
                'event' => 'cita 3',
                'start_date' => '2024-12-05 08:00',
                'end_date' => '2024-12-05 10:00',
            ],
            [
                'event' => 'cita 4',
                'start_date' => '2024-12-05 08:00',
                'end_date' => '2024-12-05 10:00'
            ]
        ];
        foreach ($events as $event){
            Event::create($event);
        }
    }
}
