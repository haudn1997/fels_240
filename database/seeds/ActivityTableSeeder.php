<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Lesson;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ((range(1, 20)) as $b) {
            DB::table('activities')->insert([
                'user_id' => User::all()->random()->id,
                'target_id' => rand(1, 20),
                'action_type' => rand(0, 1) == 1 ? (Lesson::class) : (Word::class)
            ]);
        }
    }
}
