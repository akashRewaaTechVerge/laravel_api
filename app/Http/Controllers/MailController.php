<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Mail;

class MailController extends Controller
{
  
    // ---------------- ['For Send Mail'] -----------------
    public function sendMail(Request $request){ 
        try { 
            $mail = $request->email; 
            $details = [
                'title' => "Job Subject", 
                'fullname' => $request->first_name. ' '.$request->last_name,  
                'email'   => $request->email,  
                'contact' => $request->phone_number,
                'experience' => $request->experience, 
                'current_salary' => $request->current_salary,  
                'expected_salary' => $request->expected_salary, 
                'Resume_Name' => $request->resume_name,
                'mail' => $request->email,
                'first_name' => $request->first_name, 
                'resume' => $request->resume 
            ];
              \Mail::to($mail)->send(new \App\Mail\MyTestMail($details)) ;
              $response = array('status' => true, 'message' => 'Send Mail Success');
              $seccess = json_encode($response);
              return $seccess;
        }catch ( Exception $e ) {
            return response()->json( 'false' );
        }
    }

}
