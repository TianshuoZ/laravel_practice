<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers;

class InfoInsertController extends Controller
{
    public function insertform(){
        return view('insert_info');
    }

    public function insert(Request $request){

        $date = $request->input('Idate');
        //echo $date;
        $gender = $request->input('Igender');
        $type = $request->input('Itype');
        $player = $request->input('Iplayer');
        $ranking = $request->input('Iranking');
        $country = $request->input('Icountry');
//        $age = $request->input('Iage');
//        $points = $request->input('Ipoints');
//        $tournaments = $request->input('Itournaments');


        $a = DB::insert("insert into info (date,gender,type,player,ranking,country) values (?,?,?,?,?,?)",
        [$date,$gender,$type,$player,$ranking,$country]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}


