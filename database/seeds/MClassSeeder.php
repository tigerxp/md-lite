<?php

use Illuminate\Database\Seeder;
use App\MClass;

class MClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->delete();
        MClass::create(['title' => 'Rooms', 'description' => 'Rooms Description', ]);
        MClass::create(['title' => 'Computers', 'description' => 'Computers Description', ]);
    }
}
