<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studentone extends Model
{
    protected $table = "studentone";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id', 'tname', 'fname', 'lname', 'number_id', 'name_school', 'district_school', 'province_school', 'home_id', 'group',
         'road', 'parish', 'district', 'province', 'postcode', 'tel', 'thai_onet', 'math_onet',  'science_onet', 'eng_onet', 
         'sum_onet', 'pic_file', 'end_file', 'home_file', 'number_file', 'onet_file',  'status', 
    ];

  

}
