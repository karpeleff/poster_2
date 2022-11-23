<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\AdvertResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\City;
use App\Models\Board;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $data['status'] = 'unpublic';

        $advt = Advert::create($data);

       // return new UserResource($user);
       return new AdvertResource($advt);

      
    }

 


       public  function  getCity()
    { 

        $data = City::all();

        return response()->json($data);
    }

    public  function  getCategory($id)
    {
        $data = Category::where('board_id',$id)->get();
    }

    public  function  getSubCategory($id)
    {
         $data = SubCategory::where('board_id',$id)->get();

         return response()->json($data)->cookie(
        'userid', '1', 100 );

    }

    public  function  getAccount()
    {
        
    }   
    
   
   



  
}
