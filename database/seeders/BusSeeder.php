<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;
use App\Models\Bus;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $from = [
        //     'Cubao', 'Cubao', 'Cubao',
        //     'Baguio', 'Baguio', 'Baguio',
        //     'Cubao', 'Cubao', 'Cubao',
        //     'Tuguegarao', 'Tuguegarao', 'Tuguegarao',
        //     'Pasay', 'Pasay', 'Pasay',
        //     'Baguio', 'Baguio', 'Baguio',
        //     'Tuguegarao', 'Tuguegarao', 'Tuguegarao',
        //     'Pasay', 'Pasay', 'Pasay',
        // ];

        // $to = [
        //     'Baguio', 'Baguio', 'Baguio',
        //     'Cubao', 'Cubao', 'Cubao',
        //     'Tuguegarao', 'Tuguegarao', 'Tuguegarao',
        //     'Cubao', 'Cubao', 'Cubao',
        //     'Baguio', 'Baguio', 'Baguio',
        //     'Pasay', 'Pasay', 'Pasay',
        //     'Pasay', 'Pasay', 'Pasay',
        //     'Tuguegarao', 'Tuguegarao', 'Tuguegarao',
        // ];
        $departureTimes = [
            '2:00 am', '4:00 am', '6:00 am',
            '9:00 am', '11:00 am', '1:00 pm',
            '3:00 am', '5:00 am', '7:00 am',
            '10:00 am', '12:00 pm', '2:00 pm',
            '4:00 am', '6:00 am', '8:00am',
            '11:00 am', '1:00 pm', '3:00 pm',
            '12:00 pm', '1:00 pm', '4:00 pm',
            '5:00 am', '7:00 am', '9:00 am',
            '4:00 pm', '6:00 pm', '8:00 pm',
            '11:00 pm', '1:00 am', '3:00 am',
            '5:00 pm', '7:00 pm', '9:00 pm',
            '12:00 am', '2:00 am', '4:00 am',
            '6:00 pm', '8:00 pm', '10:00 pm',
            '1:00 am', '3:00 am', '5:00 am',
            '2:00 am', '4:00 am', '6:00 am',
            '7:00 pm', '9:00 pm', '11:00 pm'  
        ];

        $date = [
            '17/11/2023',
            '18/11/2023',
            '19/11/2023',
            '20/11/2023',
            '21/11/2023',
            '22/11/2023',
            '23/11/2023',
            '24/11/2023',
        ];

        $busTypes = ['Regular', 'Premium', 'P2P'];
        $prices = [600, 700, 900];

        $busNumber = 101;

        $objectLength = 48;

        $destination = Destination::pluck('id');

        
        for ($i = 0; $i < $objectLength; $i++) {
            $destinations = $destination[$i % count($destination)];
            $busType = $busTypes[$i % count($busTypes)];
            $price = $prices[$i % count($prices)];
            // $destinationFrom = $from[$i % count($from)];
            // $destinationTo = $to[$i % count($to)];
            $departureTime = $departureTimes[$i % count($departureTimes)];
            $departureDate = $date[$i % count($date)];

            if ('destination_to_id' !== 'destination_to_id') {
                $places[] = $destinations;
            }
    
            
            Bus::factory()->create([
                'destination_to_id' => fake()->randomElement(Destination::pluck('id')),
                'destination_from_id' => $destinations,
                'bus_number' => $busNumber++,
                'bus_type' => $busType,
                'price' => $price,
                // 'destinationFrom' => $destinationFrom,
                // 'destinationTo' => $destinationTo,
                'departure_time' => $departureTime,
                'departure_date' => $departureDate
            ]);
        
        };
    }
}
