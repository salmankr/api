<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\http\Resources\studentRes;
use App\http\Resources\studentResCollection;
use App\student;
use App\http\Requests\studentRequest;
class studentApiController extends Controller
{
	public function __construct(){
		$this->middleware('auth:api')->except('single', 'index');
	}


    public function single($id){
        return new studentRes(student::find($id)); 
    }


    public function index(){
    	return studentResCollection::collection(student::paginate(15));
    }


    public function create(studentRequest $request){
    	$student = new student;
    	$student->name = $request->name;
    	$student->roll_no = $request->roll_no;
    	$student->section = $request->section;
    	$student->teacher = $request->teacher;
    	$student->save();
    	return new studentRes($student);
    }
}
