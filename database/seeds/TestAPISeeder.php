<?php

use Illuminate\Database\Seeder;

class TestAPISeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	factory(App\TestAPI::class, 50)->create();
    }
}
