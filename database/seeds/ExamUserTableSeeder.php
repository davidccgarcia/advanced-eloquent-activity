<?php

use Illuminate\Database\Seeder;

use App\Exam;
use App\User;

class ExamUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $exams = Exam::all();

        foreach ($exams as $exam) {
            $users->random()->exams()->attach($exam);
        }
    }
}
