<?php

use Illuminate\Database\Seeder;
use App\Models\User;


class FollowingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ((range(1, 20)) as $b) {
            DB::table('followings')->insert([
                'following_id' => User::all()->random()->id,
                'follower_id' => User::all()->random()->id
            ]);
        }
    }
}
