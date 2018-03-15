<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(LanguagesTableSeeder::class);
    	$this->call(LevelsTableSeeder::class);
     	$this->call(UsersTableSeeder::class);
     	$this->call(LessonsTableSeeder::class);
     	$this->call(TypesTableSeeder::class);
     	$this->call(AnswersTableSeeder::class);
     	$this->call(TestsTableSeeder::class);
     	$this->call(QuestionsTableSeeder::class);
     	$this->call(WordsTableSeeder::class);
       $this->call(LessonUserTableSeeder::class);
       $this->call(AnswerQuestionTableSeeder::class);
    }
}
