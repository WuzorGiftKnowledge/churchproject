<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;


class ChurchProjectController extends Controller
{
    public function page(){
        return view("page");
        }

        public function create(Request $request) {
            $request->validate([
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'email' => 'required',
                'phone' => 'required|string',
                'password' => 'required|string|min:6|confirmed',
            ]);

            try{
                $firstname = $request->input('firstname');
                $lastname = $request->input('lastname');
                $email = $request->input('email');
                $phone = $request->input('phone');
                $password = $request->input('password');


                $user=Register::create([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'phone' => $phone,
                'password' => $password
            ]);

            if ($user){
                return back()->with('message','new user record was created successfully.');
            }
           } catch (\Throwable $e){
                //dd($e);
                return back()->with('Incorrect','Sorry go back and fill correctly.');
            }
        }

}
