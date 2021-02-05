<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\SiteSetting;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\admin\AdminController;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';



    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if (Auth::check()) {
            return redirect('cms.index');
        }else{
            $site = SiteSetting::first();
            return view('admin.login', compact('site'));
        }
    }


    public function loginAdmin(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt($credentials)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('cms.index'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        \Session::flash('error', 'Your credentials do not match our records.');
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
