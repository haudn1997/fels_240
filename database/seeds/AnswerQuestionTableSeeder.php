<?php

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class AnswerQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::all()->each(function ($question){
            $question->answers()->attach(
                Answer::all()->random()->id
            ); 
        });
    }
}
