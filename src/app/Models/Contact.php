<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $attributes = [
        'fullname' => '名無し'
    ];

    protected $fillable = [
        'name',
        'gender',
        'email',
        'mail',
        'address',
        'build',
        'opinion'
    ];

    static $genders = [
        '男性',
        '女性'
    ];

    public function scopeKeynameSearch($query, $keyname)
    {
        if(!empty($keyname)){
            $query->where('fullname', 'like', '%' . $keyname . '%');
        }
    }
    public function scopeKeygenderSearch($query, $keygender)
    {
        if(!empty($keygender)){
            $query->where('gender', $keygender);
        }
    }

    public function scopeStartdateSearch($query, $startdate)
    {
        if(!empty($startdate)){
            $query->where('startdate', $startdate);
        }
    }
    public function scopeEnddateSearch($query, $enddate)
    {
        if(!empty($enddate)){
            $query->where('enddate', $enddate);
        }
    }

    public function scopeKeyemailSearch($query, $keyemail)
    {
        if(!empty($keyemail)){
            $query->where('email', 'like', '%' . $keyemail . '%');
        }
    }


}
