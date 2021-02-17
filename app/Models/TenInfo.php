<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenInfo extends Model
{
    use HasFactory;
    protected $table = 'info';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable =
        ['id','date','gender','type','ranking','player','country','age','points','tournaments'];
}

//class UserData extends Model {
//    protected $guarded = [‘id’];
//    protected $fillable = ['userId','userName','account','pw','email'];
//}
