<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

use App\Lecturer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
use PDO;

use Hash;

class LecturerController extends Controller
{
    public function login(){

        $lecturer  = new Lecturer();
        $username = strtolower(Input::get('username'));
        $password = strtolower(Input::get('pass'));
        $results =  $lecturer->getUser($username,$password);
        if(!empty($results)){
            $result = $results[0];
            if(Hash::check($password,$result['password'])){
                Session::put('Lec_UserName', $username);
                Session::put('Lec_FullName', $result['full_name']);
                Session::put('lec_id', $result['lecturer_id']);

                return redirect('lecturer/dashboard');
//                return view('dashboard.lecturer', compact('courses'));
            }else{

                $errorMessage = 'Password incorrect';
                return view('errors.error', compact('errorMessage'));
            }
        }
        else{

            $errorMessage = 'User does not exist';
            return view('errors.error', compact('errorMessage'));
        }
    }
    public function dashboardLecturer(){
        $lec_id = Session::get('lec_id');
        $course_codes = Lecturer::getCourses($lec_id);
//        return $course_codes;
        return view ('dashboard.lecturer', compact('course_codes'));
    }

    public function course(){

        $course_code = strtoupper(Input::get('course'));
        Session::put('course_code',$course_code);
        $classList = Lecturer::getClassList($course_code);
//        return $classList;

       return view('lecturer.fill' , compact('classList'));
    }

    public function fillresult(){
        $data = Input::all();
        $course_code = Session::get('course_code');
        $dept = substr($course_code,0,2);
        $year  = substr($course_code,3,1);
        $class = $dept.$year;
        $approved = 0;
        $deptNo = 4240;
        $admissYear = 13;
        $indexNo = 0;

        //$insertArray = array();
//        for($i=1; $i < $length; ++$i ){
//            $val = array('index_no' =>  $deptNo .$length .$admissYear,'course_code' => $course_code,'class' => $class ,'marks'=> $data[$length], 'approved' => $approved);
//            $insertArray[] = $val;
//        }
        $indexNos = Input::get('indexNo');
        $length = sizeof($indexNos);
        $marks = Input::get('marks');
//        return $indexNos[0];
//        return  $indexNo[1] . " " . $marks[1];
        for($i=0; $i < $length; ++$i ){
            $val = array('index_no' =>  $indexNos[$i],'course_code' => $course_code,'class' => $class ,'marks'=> $marks[$i]);
            $insertArray[] = $val;
        }
        if(Result::insert($insertArray)){
            return 'true';
        }else {
            return 'false';
        }

    }
}
