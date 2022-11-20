<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advert;

class FormController extends Controller
{
    public function register(Request $request)
    {
     /*    $data = $request->validate([
            'avatar'   => ['image', 'dimensions:max_width=1000,max_height=1000'],
            'name'     => ['required', 'string'],
            'email'    => ['required', 'email'],
            'password' => ['required', 'confirmed'],
        ]); */


       $data = $request->all();

        $file = $request->file('avatar');
        $name = '/images/' . uniqid() . '.' . $file->extension();
        $file->storePubliclyAs('public', $name);
        $data['image'] = $name;
        $data['status'] = 'unpablic';

       // $user = User::create($data);

       // return new UserResource($user);

       Advert::create($data);
       //return response()->json(['success'=>'You have successfully upload file.']);

       return 'успех';    }
}
