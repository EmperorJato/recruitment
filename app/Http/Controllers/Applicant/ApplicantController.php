<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Applicants;
Use Illuminate\Support\Carbon;

class ApplicantController extends Controller
{
    public function index(){
        return view('pages.application_form');
    }

    public function validator(array $data){
        return Validator::make($data, [
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'phone' => ['required', 'string', 'unique:applicants'],
            'email' => ['required', 'string', 'email', 'unique:applicants'],
            'gender' => ['required'],
        ]);
    }

    public function create(array $data){
        return Applicants::create([
            'date' => Carbon::now(),
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'phone' => $data['phone'],
            'birthdate' => $data['birthdate'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'marital_status' => $data['marital_status'],
            'education' => $data['education'],
            'course' => $data['course'],
            'year_graduated' => $data['year_graduated'],
            'present_address' => $data['present_address'],
            'home_address' => $data['home_address'],
            'work_experience' => $data['work_experience'],
            'experience_from' => $data['experience_from'],
            'experience_to' => $data['experience_to'],
            'person' => $data['person'],
            'person_phone' => $data['person_phone'],
            'person_address' => $data['person_address'],
            'relationship' => $data['relationship']

        ]);
    }


    public function store(Request $request){

        $this->validator($request->all())->validate();
        $this->create($request->all());

    }

}
