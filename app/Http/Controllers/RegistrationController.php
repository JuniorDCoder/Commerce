<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function index(){
        return view('register');
    }

    public function handleRegistration(RegistrationRequest $registrationRequest){
        return $registrationRequest;
    }
}
