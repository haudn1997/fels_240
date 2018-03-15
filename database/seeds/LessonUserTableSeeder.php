<?php

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\User;

class LessonUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function ($user) {
            $user->lessons()->attach(
                Lesson::all()->random()->id, ['result' => rand(0,1)]
            );
        });
    }
}
