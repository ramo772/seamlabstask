<?php

namespace App\Http\Controllers\ProbleSolving;

use App\Helpers\Messages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProblemSolvingController extends Controller
{
    public function numbers_without_5($start, $end)
    {
        if ($start < $end) {
            $arr = [];
            for ($i = $start; $i <= $end; $i++) {
                $flag = 0;
                $chars = str_split($i);
                foreach ($chars as $char) {
                    if ($char == '5') {
                        $flag = 1;
                    }
                }
                if ($flag == 0) {
                    array_push($arr, (int)$i);
                }
            }
        } else {
            return Messages::STARTBIGGER;
        }
        return $arr;
    }

    public function input_string($input_sting)
    {
        $alpha =   ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
        $len = strlen($input_sting);
        $res = 0;
        if ($len > 1) {
            $arr = str_split(strtoupper($input_sting));
            foreach ($arr as $i) {
                $res +=  pow(26, $len - 1) * (array_search($i, $alpha) + 1);
                $len--;
            }
        }
        return 'The result is ' . $res;
    }

    public function reduce_steps($q, $n)
    {
        $q = json_decode($q);
        $steps = array_fill(0, $n, 0);
        for ($i = 0; $i < (int)$n; $i++) {
            while ($q[$i] > 0) {
                if ($q[$i] % 2 == 0) {
                    $div1 = 2;
                    $div2 = $q[$i] / 2;
                    if ($div2 > 1) {
                        $div = max($div1, $div2);
                        $q[$i] = $q[$i] - $div;
                    } else {
                        $q[$i] = $q[$i] - 1;
                    }
                    $steps[$i]++;
                } else {
                    if ($q[$i] % 3 == 0) {
                        $div1 = 3;
                    } elseif ($q[$i] % 5 == 0) {
                        $div1 = 5;
                    } elseif ($q[$i] % 7 == 0) {
                        $div1 = 7;
                    } elseif ($q[$i] % 9 == 0) {
                        $div1 = 9;
                    } elseif ($q[$i]  == 1) {
                        $steps[$i]++;
                        $q[$i] = $q[$i] - 1;
                        break;
                    }
                    $div2 = $q[$i] / $div1;
                    if ($div2 > 1) {
                        $div = max($div1, $div2);
                        $q[$i] = $q[$i] - $div;
                    } else {
                        $q[$i] = $q[$i] - 1;
                    }
                    $steps[$i]++;
                }
            }
        };
        return $steps;
    }
}
