<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function quizz(Request $request){

        $lam_quizz = new Quiz();
        dd($lam_quizz);
    }
}
