<?php

namespace Database\Seeders;

use App\Models\images;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jersey;

class JerseySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jerseys = Jersey::factory(20)->create();

        foreach ($jerseys as $jersey){
            images::factory(1)->create(
                [
                    'imageable_id' => $jersey->id,
                    'imageable_type' => Jersey::class

                ]);
        }

    }
}
