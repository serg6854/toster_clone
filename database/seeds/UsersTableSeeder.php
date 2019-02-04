<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->isLocal()) {
            factory(User::class)->create([
                'email' => 'admin@mail.com'
            ]);
        }

        factory(User::class, 50)->create();
    }
}
