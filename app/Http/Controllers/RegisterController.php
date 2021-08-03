<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register() {
        return view('register');
    }

    public function store(Request $request) {
        $name=$request->name;
        $id=$request->id;
        $password=$request->password;
        $birth_y=$request->year;
        $birth_m=$request->month;
        $birth_d=$request->day;
        $email=$request->email;
        $phone=$request->phone;
        $birth=Carbon::create($birth_y, $birth_m, $birth_d)->toDateString();
        // dd($request);

        // $request->validate([
        //     'id' => 'required',
        //     'password' => 'required|min:8',
        //     'birth_y' => 'required',
        //     'birth_m' => 'required',
        //     'birth_d' => 'required',
        //     'email' => 'required',
        //     'image' => 'image|max:2000',
        //     'phone' => 'required'
        // ]);

        $user = new User();
        $user->uid = $id;
        $user->password = bcrypt($password);
        $user->email = $email;
        $user->birth = $birth;
        $user->phone = $phone;
        if($request->file('imageFile')) {
            $user->image=$this->uploadPostImage($request);
        }

        // dd($user);
        $user->save();
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