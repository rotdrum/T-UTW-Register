<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studentfour extends Model
{
    protected $table = "studentfour";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id', 'tname', 'fname', 'lname', 'number_id', 'name_school', 'district_school', 'province_school', 'home_id', 'group',
         'road', 'parish', 'district', 'province', 'postcode', 'tel', 'rank_edu1', 'rank_edu2', 'rank_edu3', 'extra', 
         'thai_onet', 'math_onet',  'science_onet', 'eng_onet', 'sum_onet', 'pic_file', 'end_file', 'home_file', 'number_file', 'onet_file',  'status', 
    ];

  

}
