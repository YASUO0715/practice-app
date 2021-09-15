<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($num, $func, $num2)
    {
        if ($func === 'addition') {
            $answer = $num + $num2;
        } elseif ($func === 'subtraction') {
            $answer = $num - $num2;
        } elseif ($func === 'multiplication') {
            $answer = $num * $num2;
        } elseif ($func === 'division') {
            $answer = $num / $num2;
        } else {
            $answer = '四則演算を正式に入力して下さい。';
        }
        return view('comment.calcs02', ['answer' => $answer]);
    }
}
