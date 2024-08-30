<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Mail;
use App\Mail\passwordMail;
class UserController extends Controller
{
    //
    public function index() {
        if (auth()->user()->created_at == auth()->user()->updated_at) {
            return view('passwordreset');
        }
         return view('userhome');
    }
    //password change
    public function passwordChange(Request $request) {
        $request->validate([
            'new_password' => 'required|confirmed|min:8',
        ]);
     
        try {
            //code...
               #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
            return back()->with("success", "Password changed successfully!");
        } catch (\Exception $e) {
            // throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
       
        
    }
    public function testMail() {
        try {
          //code...
          Mail::to('arunskurup81@gmail.com')->send(new passwordMail([
            'name' => "hoshf",
                'password' =>"fsugfugf"
        ]));
        } catch (\Throwable $th) {
          throw $th;
        }
      }
}
