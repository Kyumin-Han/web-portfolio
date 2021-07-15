<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register() {
        return view('register');
    }

    public function store(Request $request) {
        $name=$request->name;
        $id=$request->id;
        $birth_y=$request->year;
        $birth_m=$request->month;
        $birth_d=$request->day;
        $email=$request->email;
        $phone=$request->phone;
        $birth=Carbon::create($birth_y, $birth_m, $birth_d)->toDateString();
        dd($request);
    }

    protected function uploadPostImage($request) {
        $name = $request->file('imageFile')->getClientOriginalName();
        $extension = $request->file('imageFile')->extension();
        $nameWithoutExtension = Str::of($name)->basename('.'.$extension);
        $fileName = $nameWithoutExtension . '_' . time() . '.' . $extension;
        $request->file('imageFile')->storeAs('public/images', $fileName);
        return $fileName;
    }
}
