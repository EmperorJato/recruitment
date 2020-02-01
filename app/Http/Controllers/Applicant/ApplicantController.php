<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApplicantController extends Controller
{
    public function index(){
        return view('pages.application_form');
    }

    public function validator(array $data){
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:applicant'],
            'email' => ['required', 'string', 'max:255', 'email', 'unique:applicant'],
            'gender' => ['required'],
        ]);
    }

}
