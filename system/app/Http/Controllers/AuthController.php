<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

  function showlogin()
  {
    return view('template.login');
  }

  function loginproces()
  {
    // if (Auth::attempt(['email' => request('email'), 'password' => request('password')])){
    //   return redirect('admin/dashboard')->with('success', 'login berhasil');
    // }else{
    //   return back()->with('danger','login anda gagal');
    // }

    // multi table  Authentication

    // $email = request('email');
    // $user = Admin::where('email', $email)->first();
    // if ($user) {
    //   $guard = "admin";
    // } else {
    //   $user = Pengguna::where('email', $email)->first();
    //   if ($user) {
    //     $guard = "pengguna";
    //   } else {
    //     $guard = false;
    //   }
    // }

    // if (!$guard) {
    //   return back()->with('danger', 'email tidak di temukan di database');
    // } else {
    //   if (Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])) {
    //     return redirect("dashboard/$guard")->with('success', 'login berhasil');
    //   } else {
    //     return back()->with('danger', 'login gagal, silakan cek pasword dan email anda');
    //   }
    // }


    // level login

    if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
      $user =Auth::user();
      if($user->level == 1) return redirect('dashboard/admin')-> with('success', 'login sebagai admin');
      if($user->level == 0) return redirect('dashboard/pengguna') -> with ('success', 'login sebagai pengguna');
    }else{
      return back()->with('danger','login gagal, silahkan cek password dan email anda');
    }

  }

  function logout()
  {
    Auth::logout();
    return redirect('login');
  }
}
