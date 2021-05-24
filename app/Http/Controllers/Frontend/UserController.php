<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function userregistration(){
        return view('frontend.layouts.registration.user');
    }

    public function createregistration(Request $request){
$request->validate([
'name'=>'required',
'email'=>'email|unique:users',
'password'=>'required:min:6',
]);

$filename='';
if($request->hasFile('image'))
{
    //some code here to store into directory
        $file = $request->file('image');

        if ($file->isValid()) {
            $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
           
            $file->storeAs('users', $filename);
        }
}   
User::create([
'name'=>$request->name,
'email'=>$request->email,
'password'=>bcrypt($request->password),
'number'=>$request->number,
'image'=>$filename
]);

return redirect()->back()->with('message','Registration completed successfully');

    }
    public function userlogin(){
        return view('frontend.layouts.login.user');
    }
    
public function dologin(Request $request){
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->route('homepage');
    }

    return back()->withErrors([
        'email' => 'Invalid username or password',
    ]);
    
}

public function userlogout(){

    Auth::logout();
    return redirect()->route('user.login')->with('message','Logout completed');
}


    public function userslist(){
        $users=User::paginate(15);
        return view('backend.layouts.usertable',compact('users'));
    }

    public function createplannerregistration(Request $request){
        
        $request->validate([
            'name'=>'required',
            'email'=>'email|unique:users',
            'password'=>'required:min:6',
            ]);
            
            $filename='';
            if($request->hasFile('image'))
            {
                //some code here to store into directory
                    $file = $request->file('image');
            
                    if ($file->isValid()) {
                        $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                       
                        $file->storeAs('users', $filename);
                    }
            }   
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>bcrypt($request->password),
            'number'=>$request->number,
            'image'=>$filename
            ]);
            return redirect()->back()->with('message','Registration completed successfully');
    }
}
