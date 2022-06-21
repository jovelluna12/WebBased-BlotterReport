<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class authenticate extends Controller
{
    public function register(Request $request)
    {
     
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        
        $error = array('Name' => $name, 'Password' => $password, 'Email' => $email);
        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            $error['Password']='Invalid Password';
         
        }
      
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          
            $error['Email']='Invalid Email Format';
          
        }
        if (!isset($name)) {
            $error['Name']='Invalid Name Format';
         
  
        }
        if ($error['Name']!='Invalid Name Format' && $error['Password']!='Invalid Password' && $error['Email']!='Invalid Email Format') {
            User::create([
                'name' => $request->name,
                'email' => $email,
                'password' => Hash::make($password),
            ]);
            
        }

        return response()->json([
            'Message' => 'Data Sent and Validated',

            'Name' => $error['Name'],
            'Password' => $error['Password'],
            'Email' => $error['Email'],


        ]);
    }
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();
        $id=$user->id;
        $report=report::where('Reporter_id',$id)->get();
        Log::info($user->id);
        return response()->json([
            'message' => 'Success',
            'user' => $user,
            'reports'=>$report
        ]);
    }
}
