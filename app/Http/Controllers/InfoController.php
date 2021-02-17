<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers;

class InfoController extends Controller
{
    public function read()
    {
        //echo "123123123";

        $data = DB::table('info')->get();
//        $date = $data->only('date');
//        $gender = $data->only('gender');
//        $type = $data->only('type');
//        $ranking = $data->only('ranking');
//        $player = $data->only('player');
//        $country = $data->only('country');
//        $age = $data->only('age');
//        $points = $data->only('points');
//        $tournaments = $data->only('tournaments');

        return view('user')->with("data", $data);
    }
}
