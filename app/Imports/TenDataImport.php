<?php

namespace App\Imports;

use App\Models\TenInfo;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class TenDataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if ($row[0]=='Date')
            return null;
        return new TenInfo([
            'date'      => $row[0],
            'gender'    => $row[1],
            'type'      => $row[2],
            'ranking'   => $row[3],
            'player'    => $row[4],
            'country'   => $row[5],
            'age'       => $row[6],
            'points'    => $row[7],
            'tournaments'=> $row[8],
        ]);
    }
}
