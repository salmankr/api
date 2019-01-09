<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Resources\studentRes;
use App\http\Resources\studentResCollection;
use App\student;

class studentApiController extends Controller
{
    public function single($id){
        return new studentRes(student::find($id)); 
    }
    public function index(){
    	return studentResCollection::collection(student::paginate(15));
    }
}
