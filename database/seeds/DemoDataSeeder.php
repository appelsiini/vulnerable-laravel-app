<?php

use App\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'Antti Rössi',
            'email'    => 'antti@jobilla.com',
            'avatar'   => null,
            'password' => bcrypt('password'),
        ]);

        factory(Event::class, 50)->create();
    }
}
