<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidationLogin;
use App\Http\Requests\ValidationRegister;

class AuthController extends Controller
{
    public function LoginPage(){
        if (Auth::check()) {
            if(Auth::user()->id_level == 1){
                return redirect()->route('AdminDashboard');
            } else {
                return redirect()->route('Dashboard');
            }
        }
        return view('login');
    }

    public function LoginAuthenticate(ValidationLogin $request){
        
        $credentials = $request->only('no_kp', 'password');

        if (Auth::attempt($credentials)) {
            // dd(Auth::user()->id_user_status);
            // Jika credential betul, semak user level
            // if (Auth::user()->id_user_status != '1')
            // {
            //     // Jika bukan level 1, pastikan akaun tidak login dan redirect ke halaman login
            //     Auth::logout();
 
            //     return back()->withInput()->with('failed-status', 'Akaun Anda Belum Aktif ! Sila Hubungi Bahagian Teknologi Maklumat Untuk Aktifkan Akaun !');
            // }

            // Jika semua OK, generate session login dan redirect ke dashboard
            $request->session()->regenerate();
            if (Auth::user()->id_level == 1) {
                return redirect()->route('AdminDashboard');
            } elseif (in_array(Auth::user()->id_level, [2, 3, 4, 5])) {
                return redirect()->route('Dashboard');
            } 
        }

        // Jika tak OK, redirect ke login semula dengan info error
        return back()->withInput()
        ->with('failed-login', 'No Kad Pengenalan atau Kata Laluan Salah!');

    }

    public function RegisterPage(){
        return view('register');
    }

    public function PostRegister(ValidationRegister $request){
    
        $encrypt = bcrypt($request->input('password'));

        $data = [
            'name' => $request->input('name'),
            'no_kp' => $request->input('no_kp'),
            'email' => $request->input('email'),
            'password' => $encrypt,
            'id_level' => 2,
            'created_at' => now()
        ];
    
        DB::table('users')->insert($data);
    
        return redirect()->route('login')
        ->with('success-insert', 'Record Updated!');
    }

    public function Logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
