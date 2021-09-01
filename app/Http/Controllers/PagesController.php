<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status_web;
use App\Models\Year;
use App\Models\News;
use App\Models\Studentone;
use App\Models\Studentfour;


class PagesController extends Controller
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
      $status = Status_web::where("id", 1)->get() ;
      $years = Year::where("id", 1)->get() ;
      $tels = News::where("id", 2)->get() ;
      return view("userInterface.index", [
        'status' => $status ,
        'years' => $years ,
        'tels' => $tels ,
    ]);
    }
    public function checklist() { 
      $studentones = Studentone::get() ;
      $studentfours = Studentfour::get() ;
      return view("userInterface.checklist", [
        'studentones' => $studentones ,
        'studentfours' => $studentfours ,
      ]);
    }
    public function doneRegister1($id) { 
      $students = Studentone::where("id", $id)->get() ;
      return view("userInterface.info", [
        'students' => $students ,
    ]);
    }

    public function doneRegister2($id) { 
      $students = Studentfour::where("id", $id)->get() ;
      return view("userInterface.info", [
        'students' => $students ,
    ]);
    }

    public function errorRegister1() { 
      $tels = News::where("id", 2)->get() ;
      return view("userInterface.error", [
        'tels' => $tels ,
    ]);
    }
    public function errorRegister2() { return view('userInterface.error2'); }

    public function announce() { 
      $news = News::where("id", 1)->get() ;
      $studentones = Studentone::where("status", 2)->get() ;
      return view("userInterface.announce", [
        'news' => $news ,
        'studentones' => $studentones ,
    ]);
    }

    public function announce_second() { 
      $news = News::where("id", 1)->get() ;
      $studentfours = Studentfour::where("status", 2)->get() ;
      return view("userInterface.announce_second", [
        'news' => $news ,
        'studentfours' => $studentfours ,
    ]);
    }

    public function user_print($id) { 
      $students = Studentone::where("id", $id)->get() ;
      $years = Year::where("id", 1)->get() ;
      return view("userInterface.user_print", [
        'years' => $years ,
        'students' => $students ,
      ]);
    }

    public function user_print2($id) { 
      $students = Studentfour::where("id", $id)->get() ;
      $years = Year::where("id", 1)->get() ;
      return view("userInterface.user_print2", [
        'years' => $years ,
        'students' => $students ,
      ]);
    }

    
    public function register_first() { 
      $years = Year::where("id", 1)->get() ;
      return view("auth.register_first", [
        'years' => $years ,
      ]);
    }
    
    public function register_second() { 
      $years = Year::where("id", 1)->get() ;
      return view("auth.register_second", [
        'years' => $years ,
      ]);
    }

    public function searchannonce1(Request $request)
    {

      $value = $request->input('value');
      $card_idones = Studentone::where("number_id",  $request->input('value') )->where("status", 2)->pluck('number_id') ;
      $student_idones = Studentone::where("student_id",  $request->input('value') )->where("status", 2)->pluck('student_id') ;
      $fnameones = Studentone::where("fname",  $request->input('value') )->where("status", 2)->pluck('fname') ;

      
      if( empty($card_idones[0]) ){ 
        if( empty($student_idones[0])){
          if( empty($fnameones[0])){
            $studentones = [] ;
          }
          else{
            $studentones = Studentone::where("fname", $request->input('value'))->where("status", 2)->get() ;
          }
        }
        else{
          $studentones = Studentone::where("student_id", $request->input('value'))->where("status", 2)->get() ;
        }
      }
      else{
        $studentones = Studentone::where("number_id", $request->input('value'))->where("status", 2)->get() ;
      }


      $news = News::where("id", 1)->get() ;
      return view("userInterface.announce", [
        'news' => $news ,
        'studentones' => $studentones ,
    ]);
   
       
    }


    public function searchannonce2(Request $request)
    {

      $value = $request->input('value');

      $card_idfours = Studentfour::where("number_id",  $request->input('value') )->where("status", 2)->pluck('number_id') ;
      $student_idfours = Studentfour::where("student_id",  $request->input('value') )->where("status", 2)->pluck('student_id') ;
      $fnamefours = Studentfour::where("fname",  $request->input('value') )->where("status", 2)->pluck('fname') ;

      
      if( empty($card_idfours[0]) ){ 
        if( empty($student_idfours[0])){
          if( empty($fnamefours[0])){
            $studentfours = [] ;
          }
          else{
            $studentfours = Studentfour::where("fname", $request->input('value'))->where("status", 2)->get() ;
          }
        }
        else{
          $studentfours = Studentfour::where("student_id", $request->input('value'))->where("status", 2)->get() ;
        }
      }
      else{
        $studentfours = Studentfour::where("number_id", $request->input('value'))->where("status", 2)->get() ;
      }
      
      $news = News::where("id", 1)->get() ;
      return view("userInterface.announce_second", [
        'news' => $news ,
        'studentfours' => $studentfours ,
    ]);
   
       
    }



    public function searchchecklist(Request $request)
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


        return view("userInterface.checklist", [
          'studentones' => $studentones ,
          'studentfours' => $studentfours ,
        ]);
    }

    public function postregister1(Request $request)
    {
        $card_id = Studentone::where("number_id",  $request->post('number_id') )->pluck('number_id') ;
        $y = Year::where("id", 1)->pluck('year') ;
        $y = $y[0];

        if(empty($card_id[0])){
   
        }
        else {
          return redirect()->route('errorRegister1');
        }

        $student = Studentone::get();
   
        $str1 = Year::where("id", 2)->pluck('year') ;

        if(empty($student[0])){
          $number = Status_web::where("id", 2)->pluck('status') ;
          $str2 = $number[0] + 1 ;
          
          $request->validate([
            'tname' => ['required'],
            'file-upload-1'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-3'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-4'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-5'=> 'required|mimes:pdf,jpg,jpeg,png',
       ]);
  
            $file1 = $request->file('file-upload-1');
            $filename1 = $str1[0].$str2."pic.{$file1->extension()}";
            $file1->storeAs("public/".$y."/".$str1[0].$str2."/", $filename1);
  
            if(empty($request->file('file-upload-2'))){
              $filename2 = "" ;
            }
            else{
              $file2 = $request->file('file-upload-2');
              $filename2 = $str1[0].$str2."end.{$file2->extension()}";
              $file2->storeAs("public/".$y."/".$str1[0].$str2."/", $filename2);
            }
         
  
            $file3 = $request->file('file-upload-3');
            $filename3 = $str1[0].$str2."home.{$file3->extension()}";
            $file3->storeAs("public/".$y."/".$str1[0].$str2."/", $filename3);
  
            $file4 = $request->file('file-upload-4');
            $filename4 = $str1[0].$str2."number.{$file4->extension()}";
            $file4->storeAs("public/".$y."/".$str1[0].$str2."/", $filename4);
  
            $file5 = $request->file('file-upload-5');
            $filename5 = $str1[0].$str2."onet.{$file5->extension()}";
            $file5->storeAs("public/".$y."/".$str1[0].$str2."/", $filename5);
   
             Studentone::create([
               'student_id' =>  $str1[0].$str2 ,        
   
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
   
               'pic_file' => $filename1 ,
               'end_file' => $filename2 ,
               'home_file' =>  $filename3 ,
               'number_file' => $filename4 ,
               'onet_file' =>  $filename5 ,
   
               'status' => 1,
               
             ]);

        }
        else {
          $number = Studentone::orderBy('created_at', 'desc')->pluck('student_id') ;
          $str2 = $number[0] +1 ;

          $request->validate([
            'tname' => ['required'],
            'file-upload-1'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-3'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-4'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-5'=> 'required|mimes:pdf,jpg,jpeg,png',
       ]);
  
            $file1 = $request->file('file-upload-1');
            $filename1 = $str1[0].$str2."pic.{$file1->extension()}";
            $file1->storeAs("public/".$y."/".$str2."/", $filename1);
  
            if(empty($request->file('file-upload-2'))){
              $filename2 = "" ;
            }
            else{
              $file2 = $request->file('file-upload-2');
              $filename2 = $str1[0].$str2."end.{$file2->extension()}";
              $file2->storeAs("public/".$y."/".$str2."/", $filename2);
            }
          
            $file3 = $request->file('file-upload-3');
            $filename3 = $str1[0].$str2."home.{$file3->extension()}";
            $file3->storeAs("public/".$y."/".$str2."/", $filename3);
  
            $file4 = $request->file('file-upload-4');
            $filename4 = $str1[0].$str2."number.{$file4->extension()}";
            $file4->storeAs("public/".$y."/".$str2."/", $filename4);
  
            $file5 = $request->file('file-upload-5');
            $filename5 = $str1[0].$str2."onet.{$file5->extension()}";
            $file5->storeAs("public/".$y."/".$str2."/", $filename5);
   
             Studentone::create([
               'student_id' =>  $str2 ,        
   
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
               'pic_file' => $filename1 ,
               'end_file' => $filename2 ,
               'home_file' =>  $filename3 ,
               'number_file' => $filename4 ,
               'onet_file' =>  $filename5 ,
   
               'status' => 1,
               
             ]);
        }

        $id = Studentone::where("number_id", $request->post('number_id'))->pluck('id') ;
        $id = $id[0];
        return redirect()->route('doneRegister1' , $id);
    }


    public function postregister2(Request $request)
    {
        $card_id = Studentfour::where("number_id",  $request->post('number_id') )->pluck('number_id') ;
        $y = Year::where("id", 1)->pluck('year') ;
        $y = $y[0];

        if(empty($card_id[0])){
   
        }
        else {
          return redirect()->route('errorRegister1');
        }

        $student = Studentfour::get();
   
        $str1 = Year::where("id", 2)->pluck('year') ;

        if(empty($student[0])){
          $number = Status_web::where("id", 3)->pluck('status') ;
          $str2 = $number[0] + 1 ;
          
          $request->validate([
            'tname' => ['required'],
            'rank_edu1' => ['required'],
            'rank_edu2' => ['required'],
            'rank_edu3' => ['required'],
            'extra' => ['required'],
            'file-upload-1'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-3'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-4'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-5'=> 'required|mimes:pdf,jpg,jpeg,png',
       ]);
  
            $file1 = $request->file('file-upload-1');
            $filename1 = $str1[0].$str2."pic.{$file1->extension()}";
            $file1->storeAs("public/".$y."/".$str1[0].$str2."/", $filename1);
  
            if(empty($request->file('file-upload-2'))){
              $filename2 = "" ;
            }
            else{
              $file2 = $request->file('file-upload-2');
              $filename2 = $str1[0].$str2."end.{$file2->extension()}";
              $file2->storeAs("public/".$y."/".$str1[0].$str2."/", $filename2);
            }     
  
            $file3 = $request->file('file-upload-3');
            $filename3 = $str1[0].$str2."home.{$file3->extension()}";
            $file3->storeAs("public/".$y."/".$str1[0].$str2."/", $filename3);
  
            $file4 = $request->file('file-upload-4');
            $filename4 = $str1[0].$str2."number.{$file4->extension()}";
            $file4->storeAs("public/".$y."/".$str1[0].$str2."/", $filename4);
  
            $file5 = $request->file('file-upload-5');
            $filename5 = $str1[0].$str2."onet.{$file5->extension()}";
            $file5->storeAs("public/".$y."/".$str1[0].$str2."/", $filename5);
   
            Studentfour::create([
               'student_id' =>  $str1[0].$str2 ,        
   
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

               'rank_edu1' => $request->post('rank_edu1'),
               'rank_edu2' => $request->post('rank_edu2'),
               'rank_edu3' => $request->post('rank_edu3'),
               'extra' => $request->post('extra'),
               
               'thai_onet' => $request->post('thai_onet'),
               'math_onet' => $request->post('math_onet'),
               'science_onet' => $request->post('science_onet'),
               'eng_onet' => $request->post('eng_onet'),
               'sum_onet' => $request->post('sum_onet'),
   
               'pic_file' => $filename1 ,
               'end_file' => $filename2 ,
               'home_file' =>  $filename3 ,
               'number_file' => $filename4 ,
               'onet_file' =>  $filename5 ,
   
               'status' => 1,
               
             ]);

        }
        else {
          $number = Studentfour::orderBy('created_at', 'desc')->pluck('student_id') ;
          $str2 = $number[0] +1 ;

          $request->validate([
            'tname' => ['required'],
            'rank_edu1' => ['required'],
            'rank_edu2' => ['required'],
            'rank_edu3' => ['required'],
            'extra' => ['required'],
            'file-upload-1'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-3'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-4'=> 'required|mimes:pdf,jpg,jpeg,png',
            'file-upload-5'=> 'required|mimes:pdf,jpg,jpeg,png',
       ]);
  
            $file1 = $request->file('file-upload-1');
            $filename1 = $str1[0].$str2."pic.{$file1->extension()}";
            $file1->storeAs("public/".$y."/".$str2."/", $filename1);
  
            if(empty($request->file('file-upload-2'))){
              $filename2 = "" ;
            }
            else{
              $file2 = $request->file('file-upload-2');
              $filename2 = $str1[0].$str2."end.{$file2->extension()}";
              $file2->storeAs("public/".$y."/".$str2."/", $filename2);
            }
  
            $file3 = $request->file('file-upload-3');
            $filename3 = $str1[0].$str2."home.{$file3->extension()}";
            $file3->storeAs("public/".$y."/".$str2."/", $filename3);
  
            $file4 = $request->file('file-upload-4');
            $filename4 = $str1[0].$str2."number.{$file4->extension()}";
            $file4->storeAs("public/".$y."/".$str2."/", $filename4);
  
            $file5 = $request->file('file-upload-5');
            $filename5 = $str1[0].$str2."onet.{$file5->extension()}";
            $file5->storeAs("public/".$y."/".$str2."/", $filename5);
   
            Studentfour::create([
               'student_id' =>  $str2 ,        
   
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

               'rank_edu1' => $request->post('rank_edu1'),
               'rank_edu2' => $request->post('rank_edu2'),
               'rank_edu3' => $request->post('rank_edu3'),
               'extra' => $request->post('extra'),
               
               'thai_onet' => $request->post('thai_onet'),
               'math_onet' => $request->post('math_onet'),
               'science_onet' => $request->post('science_onet'),
               'eng_onet' => $request->post('eng_onet'),
               'sum_onet' => $request->post('sum_onet'),
               'pic_file' => $filename1 ,
               'end_file' => $filename2 ,
               'home_file' =>  $filename3 ,
               'number_file' => $filename4 ,
               'onet_file' =>  $filename5 ,
   
               'status' => 1,
               
             ]);
        }

        $id = Studentfour::where("number_id", $request->post('number_id'))->pluck('id') ;
        $id = $id[0];
        return redirect()->route('doneRegister2' , $id);
    }
}
