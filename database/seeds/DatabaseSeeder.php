<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $faker = Faker\Factory::create();

        // User
        $user = new User();
        $user->name = $faker->name;
        $user->email = $faker->unique()->safeEmail;
        $user->password = bcrypt('password');
        $user->remember_token = str_random(10);
        $user->save();

        // Item
        $item = new Item();
        $item->user_id = $user->id;
        $item->content = $faker->text();
        $item->save();
    }
}
