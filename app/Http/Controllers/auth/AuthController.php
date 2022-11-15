<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function registerUser(Request $request){
        $data = $this->validate(request(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            //'mobile' => 'required|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'


        ],[],[]);
        // if($request->hasFile('user_image')){
        //     $file = $request->file('user_image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;


        // }
        // if ($user_image = $request->file('user_image') ) {

        //     $filename = $request->name.'.'.$user_image->getClientOriginalExtension();
        //     $path = public_path('assets/users/' . $filename);
        //     Image::make($user_image->getRealPath())->resize(300, 300, function ($constraint) {
        //         $constraint->aspectRatio();
        //     })->save($path, 100);


        // }
        $news = User::create( [

            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
           // 'mobile' => request('mobile'),
            'password' => bcrypt(request('password')),
           // 'user_image' => $filename,

        ]);
        return redirect('dashboard/index')->with([
            'message' => 'Your account registered successfully.',
            'alert-type' => 'success'
        ]);
    }


    public function login(){
        return view('auth.login');
    }
    public function loginUser(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])){

            return redirect('dashboard/index')->with([
                'message' => 'Logged in successfully.',
                'alert-type' => 'success'
            ]);

        }else{

            return back()->with([
                'message' => 'You are not logged, please try again.',
                'alert-type' => 'danger'
            ]);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->back();
       }
}
