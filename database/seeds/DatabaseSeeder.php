<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CiudadesSeeder::class);
        $this->call(AeropuertosSeeder::class);
        $this->call(HotelsSeeder::class);
        $this->call(HabitacionsSeeder::class);
        $this->call(AutomotorasSeeder::class);
        $this->call(VehiculosSeeder::class);
        $this->call(ViajesSeeder::class);
        $this->call(RecorridosSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}