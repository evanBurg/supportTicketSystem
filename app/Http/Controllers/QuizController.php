<?php
/**
 * Created by PhpStorm.
 * User: evana
 * Date: 4/14/2018
 * Time: 3:21 PM
 */

namespace App\Http\Controllers;


class QuizController extends Controller
{

    function index($quiz_guy){
        \Log::alert($quiz_guy);
        return view('quiz.index', [
            'quizGuy' => $quiz_guy,
        ]);
    }

}