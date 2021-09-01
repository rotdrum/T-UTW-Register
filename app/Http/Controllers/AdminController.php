<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status_web;
use App\Models\Year;
use App\Models\News;
use App\Models\Studentone;
use App\Models\Studentfour;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() { 
      $studentones = Studentone::get() ;
      $studentfours = Studentfour::get() ;
      $years = Year::where("id", 1)->get() ;
      return view("adminInterface.index", [
        'years' => $years ,
        'studentones' => $studentones ,
        'studentfours' => $studentfours ,
      ]);
    }
    
    public function loginAdmin() { 
      return view('adminInterface.loginAdmin'); 
    }

    public function exportexcel() { 
      $students = Studentone::where("status", 2)->get() ;
      return view("adminInterface.export_excel", [
        'students' => $students ,
      ]);
    }

    public function exportexcel2() { 
      $students = Studentfour::where("status", 2)->get() ;
      return view("adminInterface.export_excel2", [
        'students' => $students ,
      ]);
    }


    public function check_user1($id) { 
      $students = Studentone::where("id", $id)->get() ;
      $years = Year::where("id", 1)->get() ;

      return view("adminInterface.check_user1", [
        'years' => $years ,
        'students' => $students ,
      ]);
    }
    public function check_user2($id) { 
      $students = Studentfour::where("id", $id)->get() ;
      $years = Year::where("id", 1)->get() ;
      return view("adminInterface.check_user2", [
        'years' => $years ,
        'students' => $students ,
      ]);
    }
    public function approve1() { 
      $years = Year::where("id", 1)->get() ;
      $studentones = Studentone::where("status", 1)->get() ;
      return view("adminInterface.approve1", [
        'years' => $years ,
        'studentones' => $studentones ,
      ]);
    }
    public function approve2() {
      $years = Year::where("id", 1)->get() ;
      $studentfours = Studentfour::where("status", 1)->get() ;
      return view("adminInterface.approve2", [
        'years' => $years ,
        'studentfours' => $studentfours ,
      ]); 
    }

    public function getapprove1($id) { 

        $model = Studentone::findOrFail($id);

        $model->update([
            'status' => 2 ,
        ]);

      return redirect()->route('approve1');
    }

    public function getapprove2($id) { 

      $model = Studentfour::findOrFail($id);

      $model->update([
          'status' => 2 ,
      ]);

    return redirect()->route('approve2');
  }

    public function deletes() {
      $y = Year::where("id", 1)->pluck('year') ;
      $y = "public/".$y[0];
      Storage::deleteDirectory($y);
      Studentone::truncate();
      Studentfour::truncate();
      return redirect()->route('setting');
    }


    public function setting() { 
      $status = Status_web::where("id", 1)->get() ;
      $years = Year::where("id", 1)->get() ;
      $yearstudents  = Year::where("id", 2)->get() ;
      $news = News::where("id", 1)->get() ;
      $tels = News::where("id", 2)->get() ;
      return view("adminInterface.setting", [
        'status' => $status ,
        'years' => $years ,
        'yearstudents' => $yearstudents ,
        'news' => $news ,
        'tels' => $tels ,
    ]);
    }

    public function deletestudent($id)
    {
      $model = Studentone::findOrFail($id);
      $model->delete();
      return redirect()->route('approve1');
    }

    public function deletestudent2($id)
    {
      $model = Studentfour::findOrFail($id);
      $model->delete();
      return redirect()->route('approve2');
    }

    public function updatestatus1()
    {
      $model = Status_web::findOrFail(1);

      $model->update([
          'status' => 1 ,
      ]);

      return redirect()->route('setting');
    }

    public function updatestatus2()
    {
      $model = Status_web::findOrFail(1);

      $model->update([
          'status' => 2 ,
      ]);

      return redirect()->route('setting');
    }


    public function postlogin(Request $request)
    {
        
        $username = $request->input('username');
        $password = $request->input('password');
        
            if($username=='admin' && $password=='RubStudent2563'){
                return redirect()->route('indexAdmin');
            }
            elseif($username=='drumzioo' && $password=='drumzioo'){
              return redirect()->route('indexAdmin');
            }
            else {
                return redirect()->route('loginAdmin');
            }

    }

    public function postsetyear(Request $request)
    {

        $value = $request->input('value');
        $value2 = $request->input('value2');

        $model = Year::findOrFail(1);

        $model->update([
            'year' => $value ,
        ]);
  
        $model = Year::findOrFail(2);

        $model->update([
            'year' => $value2 ,
        ]);
  
        return redirect()->route('setting');

    }

    public function postsetnews(Request $request)
    {

        $value = $request->input('value');

        $model = News::findOrFail(1);

        $model->update([
            'news' => $value ,
        ]);
  
        return redirect()->route('setting');

    }

    public function postsettels(Request $request)
    {

        $value = $request->input('value');
        $model = News::findOrFail(2);

        $model->update([
            'news' => $value ,
        ]);
  
        return redirect()->route('setting');

    }

    public function searchapprove1(Request $request)
    {
        $value = $request->input('value');
        $card_idones = Studentone::where("number_id",  $request->input('value') )->where("status", 1)->pluck('number_id') ;
        $student_idones = Studentone::where("student_id",  $request->input('value') )->where("status", 1)->pluck('student_id') ;
        $fnameones = Studentone::where("fname",  $request->input('value') )->where("status", 1)->pluck('fname') ;

        
        if( empty($card_idones[0]) ){ 
          if( empty($student_idones[0])){
            if( empty($fnameones[0])){
              $studentones = [] ;
            }
            else{
              $studentones = Studentone::where("fname", $request->input('value'))->where("status", 1)->get() ;
            }
          }
          else{
            $studentones = Studentone::where("student_id", $request->input('value'))->where("status", 1)->get() ;
          }
        }
        else{
          $studentones = Studentone::where("number_id", $request->input('value'))->where("status", 1)->get() ;
        }


        $years = Year::where("id", 1)->get() ;
        return view("adminInterface.approve1", [
          'years' => $years ,
          'studentones' => $studentones ,
        ]);
        
    }


    public function searchapprove2(Request $request)
    {
        $value = $request->input('value');

        $card_idfours = Studentfour::where("number_id",  $request->input('value') )->where("status", 1)->pluck('number_id') ;
        $student_idfours = Studentfour::where("student_id",  $request->input('value') )->where("status", 1)->pluck('student_id') ;
        $fnamefours = Studentfour::where("fname",  $request->input('value') )->where("status", 1)->pluck('fname') ;

        
        if( empty($card_idfours[0]) ){ 
          if( empty($student_idfours[0])){
            if( empty($fnamefours[0])){
              $studentfours = [] ;
            }
            else{
              $studentfours = Studentfour::where("fname", $request->input('value'))->where("status", 1)->get() ;
            }
          }
          else{
            $studentfours = Studentfour::where("student_id", $request->input('value'))->where("status", 1)->get() ;
          }
        }
        else{
          $studentfours = Studentfour::where("number_id", $request->input('value'))->where("status", 1)->get() ;
        }

        $years = Year::where("id", 1)->get() ;
        return view("adminInterface.approve2", [
          'years' => $years ,
          'studentfours' => $studentfours ,
        ]); 
        
    }



    public function searchindexadmin(Request $request)
    {
        $value = $request->input('value');

        $card_idones = Studentone::where("number_id",  $request->input('value') )->pluck('number_id') ;
        $card_idfours = Studentfour::where("number_id",  $request->input('value') )->pluck('number_id') ;

        $student_idones = Studentone::where("student_id",  $request->input('value') )->pluck('student_id') ;
        $student_idfours = Studentfour::where("student_id",  $request->input('value') )->pluck('student_id') ;

        $fnameones = Studentone::where("fname",  $request->input('value') )->pluck('fname') ;
        $fnamefours = Studentfour::where("fname",  $request->input('value') )->pluck('fname') ;

        
        if( empty($card_idones[0]) and empty($card_idfours[0]) ){ 
          if( empty($student_idones[0]) and empty($student_idfours[0]) ){
            if( empty($fnameones[0]) and empty($fnamefours[0]) ){
              $studentones = [] ;
              $studentfours = [] ;
            }
            else{
              $studentones = Studentone::where("fname", $request->input('value'))->get() ;
              $studentfours = Studentfour::where("fname", $request->input('value'))->get() ;
            }
          }
          else{
            $studentones = Studentone::where("student_id", $request->input('value'))->get() ;
            $studentfours = Studentfour::where("student_id", $request->input('value'))->get() ;
          }
        }
        else{
          $studentones = Studentone::where("number_id", $request->input('value'))->get() ;
          $studentfours = Studentfour::where("number_id", $request->input('value'))->get() ;
        }


      $years = Year::where("id", 1)->get() ;
      return view("adminInterface.index", [
        'years' => $years ,
        'studentones' => $studentones ,
        'studentfours' => $studentfours ,
      ]);
        

    }

    public function updatesstudentone(Request $request)
    {
      $id = $request->post('id');
      $model = Studentone::findOrFail($id);

      $request->validate([

       ]);


       $model->update([
         'tname' => $request->post('tname'),
         'fname' => $request->post('fname'),
         'lname' => $request->post('lname'),
         'number_id' => $request->post('number_id'),


         'name_school' => $request->post('name_school'),
         'district_school' => $request->post('district_school'),
         'province_school' => $request->post('province_school'),
         'home_id' => $request->post('home_id'),
         'group' => $request->post('group'),
         'road' => $request->post('road'),
         'parish' => $request->post('parish'),
         'district' => $request->post('district'),
         'province' => $request->post('province'),
         'postcode' => $request->post('postcode'),
         'tel' => $request->post('tel'),
         
         'thai_onet' => $request->post('thai_onet'),
         'math_onet' => $request->post('math_onet'),
         'science_onet' => $request->post('science_onet'),
         'eng_onet' => $request->post('eng_onet'),
         'sum_onet' => $request->post('sum_onet'),
         'status' => 1,
         
         ]);

       return redirect()->route('check_user1', $id);
       
    }

    
    public function updatesstudentfour(Request $request)
    {
      $id = $request->post('id');
      $model = Studentfour::findOrFail($id);

      $request->validate([

       ]);


       $model->update([
         'tname' => $request->post('tname'),
         'fname' => $request->post('fname'),
         'lname' => $request->post('lname'),
         'number_id' => $request->post('number_id'),


         'name_school' => $request->post('name_school'),
         'district_school' => $request->post('district_school'),
         'province_school' => $request->post('province_school'),
         'home_id' => $request->post('home_id'),
         'group' => $request->post('group'),
         'road' => $request->post('road'),
         'parish' => $request->post('parish'),
         'district' => $request->post('district'),
         'province' => $request->post('province'),
         'postcode' => $request->post('postcode'),
         'tel' => $request->post('tel'),
         
         'thai_onet' => $request->post('thai_onet'),
         'math_onet' => $request->post('math_onet'),
         'science_onet' => $request->post('science_onet'),
         'eng_onet' => $request->post('eng_onet'),
         'sum_onet' => $request->post('sum_onet'),
         'status' => 1,
         
         ]);

       return redirect()->route('check_user2', $id);
       
    }
}
