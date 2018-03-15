<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Session;

class DaftarController extends Controller
{
    public function member(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $memberRole = Role::where('name','member')->first();
        $user->attachRole($memberRole);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Anda Telah Terdaftar Sebagai Admin Perusahaan, Silahkan Login Dengan Akun Baru Anda "]);
        return redirect('login');
    }

    public function perusahaan(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $memberRole = Role::where('name','perusahaan')->first();
        $user->attachRole($memberRole);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Anda Telah Terdaftar Sebagai Member, Silahkan Login Dengan Akun Baru Anda "]);
        return redirect('login');
    }
}
