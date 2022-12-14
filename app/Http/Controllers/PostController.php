<?php

namespace App\Http\Controllers;


use App\Models\Advert;
use App\Models\Account;
use App\Models\Board;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\City;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function send(Request $request)
    {
        //

        return 'success';
    }


 


public function  add_advt()
{
    //echo Auth::user()->id ;

    return view('add_advt');
}


public function userinfo ()
{
    $id =  Auth::user()->id ;

   // echo Auth::user()->id ;

    return new UserResource(User::findOrFail($id));
}


public function  new_advrt()
{

$name = Auth::user()->name;

   // return view('new_advrt');
   return response(view('new_advrt'))->cookie('username',$name,10);
}

public  function  ffadvt_store(Request $request)
{
  // dd($request); 

  /// $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);

 
$mage = $request->image();

//$path = $request->file('image')->store('images');

//$image = $request->file('image');
//$path = $request->file('image')->store('images');

     $image->move(storage_path('images'), time() . '_' . $image->getClientOriginalName());

    // $name = $file->getClientOriginalName();


    foreach ($request->file() as $file) {
        foreach ($file as $f) {
            $f->move(storage_path('/'), time().'_'.$f->getClientOriginalName());
        }
    }



  

 $record = new Advert;
 
   $record->autor = $request->autor;
   $record-> tel= $request->tel;
   $record->email = $request->email;
   $record->sity = $request->sity;
   $record-> cat= $request->cat;
   $record->header = $request->header;
   $record->text = $request->text;
   $record->image = '1'; //$image->getClientOriginalName();
   $record->status = 'string';
   $record->save();
   return redirect()->route('add_advt');
}

public function advt_store(Request $request)
{
 /*    $request->validate([
        'name' => 'required',
        'detail' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
 */
    $input = $request->all();

    if ($image = $request->file('image')) {
        $destinationPath = storage_path('images/');//'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image']  = $profileImage;
        $input['status'] = 'unpablic';


        //dd($input);
    }
    //$input['status'] = "unpublished";
    Advert::create($input);
 
    return redirect()->route('add_advt')
                    ->with('success','???????????????????? ?????????????????? ?? ????????');
}






public function  akk_manager()
{
    return view('akk_manager');
}


public  function advt_list()
{
    $data = Advert::all();

     return view('advt_list')->with('data', $data);
   
}

public  function akk_list()
{
    $data = Account::all();
     return view('akk_list')->with('data', $data);
}

public  function advt_del($id)
{
    Advert::destroy($id);

     return $this->advt_list();
}

public  function akk_del($id)
{
    Account::destroy($id);

     return $this->akk_list();
}





public  function  akk_store(Request $request)
{
    $record = new Account;
 
   $record->login = $request->login;
   $record-> pass= $request->pass;
   $record->proxy = $request->proxy;
   $record-> place= $request->place;
   $record->save(); 
   return redirect()->route('akk_manager');
}




public function testRRR()
{
$login = 'avebrave75@gmail.com';
$pass  = 'i9pEYKDQNsbJ9';


$uri   = 'https://www.lemhira.com/personal.php?ns';

   // $response = Http::withBasicAuth($login, $pass)->post($uri);
    //dd($response);


    $response = Http::withHeaders([
        'Accept-Language' => 'ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3',
        'Connection' => 'keep-alive',
        'Content-Type' => 'multipart/form-data',
        'Cookie'=> 'lemhirassion=33b6c8b80f9a6b8cd7ecaa7af299d8dd'

    ])->post('https://www.lemhira.com/modifanad.php?cat_id=34', [
        'category' => '34',
        'area[0]' => '0',
        'rayon[0]' => '0',
        'itemname' => '??????????????????',
        'sphere' => '4',
        'item_desc' => '?????????? ????????????????????',
        'phone-1' => '33399933888',
        'name-1'  => 'name owner',
        'photo1' => '1.jpg'
    ]);

    dd($response);




}

public function  test3()
{
 /*    $login = '+79020648016';
$pass  = 'admin123';
$uri   = 'http://servicebox.info';

$token =  "vuPawlkCbI8KP8SLWvCkII4SRVlyar13XRcv0yip";

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => $uri,
    // You can set any number of default request options.
    'timeout'  => 10.0,
]);

$response = $client->request('POST', 'http://servicebox.info/login', [
    'form_params' => [
        'email' => '+79020648016',
        'password' => 'admin123',
        '_token' => 'vuPawlkCbI8KP8SLWvCkII4SRVlyar13XRcv0yip'
       
    ]
]);


dd($response); */

//echo __FILE__;

//$content = Storage::get('1.jpg');
$path = Storage::path('1.jpg');

echo $path;


}

public  function test()
{

  /*   $uri   = 'http://servicebox.info';
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => $uri,
        // You can set any number of default request options.
        'timeout'  => 10.0,
    ]);
    
    $response = $client->request('GET', '/login');

    dd($response); */

  /*   $uri   = 'http://servicebox.info';

    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => $uri,
        // You can set any number of default request options.
        'timeout'  => 10.0,
    ]);

    $jar = new \GuzzleHttp\Cookie\CookieJar;
    $r = $client->request('GET', 'http://servicebox.info/login', [
        'cookies' => $jar
    ]);

dd($r->getHeaders()); */  // Psr7\Utils::tryFopen('/1.jpg', 'r')


/* $uri   = 'http://127.0.0.1:8000';

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => $uri,
    // You can set any number of default request options.
    'timeout'  => 10.0,
]);


$response = $client->request('POST', 'http://127.0.0.1:8000/post', [
    'multipart' => [
        [
            'name'     => 'field_name',
            'contents' => 'abc'
        ],
        [
            'name'     => 'file_name',
            'contents' => '777'
        ],
        [
            'name'     => 'other_file',
            'contents' => 'hello',
            'filename' => 'filename.txt',
            'headers'  => [
                'X-Foo' => 'this is an extra header to include'
            ]
        ]
    ]
]); 

//$response = Curl::to('http://servicebox.info')->get();


$response = Curl::to('https://www.lemhira.com/personal.php?ns')
                ->withData( ['login'=> 'avebrave75@gmail.com',
                            'password'=> 'i9pEYKDQNsbJ9'
                            ])->withResponseHeaders()
                ->post();



$out = $response->headers;*/

/* $response = Curl::to('https://www.lemhira.com/personal.php?ns')->withData( ['login'=> 'avebrave75@gmail.com',
'password'=> 'i9pEYKDQNsbJ9'
])
->withResponseHeaders()
->returnResponseObject()
->post();
    
$content = $response->content;
$headers = $response->headers; */


//echo $content;     ->withHeader('MyFirstHeader: 123')  ->withData( array( 'foz' => 'baz' ) )
//->withFile( 'image_1', '/path/to/dir/image1.png', 'image/png', 'imageName1.png' )


//dd($headers);     ->withFile( 'image_1', 'storage/1.jpg', 'image/jpg', '1.jpg' )     'photo1'    => '1.jpg' ,

$row = Advert::latest()->first();

//dd($row->sity);

$path = Storage::path('images/');

//dd($path);
//lemhirassion=33b5cc1416b8dd2fb4d71fcc11c431b3;



$path = storage_path('images/');


$response = Curl::to('https://www.lemhira.com/itemdetails.php?id=0')
                    ->withData([
                       
                        'itemname'  => $row->header,
                        'sphere'    => '4',
                        'item_desc' => $row->text,
                        'phone-1'   => $row->tel,
                        'name-1'    => $row->autor,
                        'category'  => '34',
                        'passreg'  =>  'i9pEYKDQNsbJ9',
                        'register' => 'avebrave75@gmail.com',
                        'parnasa' => '*',
                        'city[0]' => '185214',
                       
                    ])
                    ->withResponseHeaders([
                        'Accept: application/x-www-form-urlencoded', 
                        'Cookie: lemhirassion=33b5cc1416b8dd2fb4d71fcc11c431b3', 
                        'Content-Type: multipart/form-data', 
                        'Accept-Encoding: gzip, deflate, br', 
                        'User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:106.0) Gecko/20100101 Firefox/106.0', 
                        'Connection: keep-alive'
                    ]) 
                    ->returnResponseObject()

                    ->withResponseHeaders()
                  ->withFile( 'photo1', $path.'/'.$row->image, 'image/jpg', $row->image )
                   
                        
                    ->post();



                    return redirect()->route('add_advt')
                    ->with('success','???????????????? ???????????????????? ????????????????????????');
                  //  dd($response);
                  
                //  dd($response->headers);

                   //$content = $response->content;

                   //echo $content;




}



public   function   post(Request $request)
{
   dd($request); 

   foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}

}

public function formSubmit(Request $request)
{

//dd($request);

/* $image = $request->file('image');

$name = $image->getClientOriginalExtension();
    
   // $fileName = time().'.'.$request->file->getClientOriginalExtension();
    $fileName = time().'.'.$name;
    $request->file->move(public_path('upload'), $fileName); */


/*    $request->validate([
        'name' => 'required',
        'detail' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
 */
$input = $request->all();

if ($image = $request->file('image')) {
    $destinationPath = storage_path('images/');//'image/';
    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    $image->move($destinationPath, $profileImage);
    $input['image']  = $profileImage;
    $input['status'] = 'unpablic';


    //dd($input);
}
//$input['status'] = "unpublished";
Advert::create($input);


//$out = dd()

return response();     
    //return response()->json(['success'=>'You have successfully upload file.']);
}

public  function  dispatcher()
{
    //echo 'its me';
 $this->getCookie();
}

public function getCookie($url= null)
{
    $response = Curl::to('http://www.isra.com/do/page7812sajlwq218/nothing')
        ->withResponseHeaders()
        ->returnResponseObject()
        ->get();
   
     //$content = $response->content;
     //dd($content);
     $headers = $response->headers;
     dd($headers);
}

public function posterIsracom()
{
   

$row = Advert::latest()->first();

//dd($row->sity);

//$path = Storage::path('images/');

//dd($path);
//lemhirassion=33b5cc1416b8dd2fb4d71fcc11c431b3;



$path = storage_path('images/');


$response = Curl::to('http://www.isra.com/do/page7812sajlwq218/nothing')
                    ->withData([
                       
                        'act'  => 'go',
                        'name'    => 'Aleksey',
                        'email' =>  'alekseykarpelev@gmail.com',
                        'icq'   => '',
                        'phone'    => '686858588484',
                        'city'  => '42',
                        'section'  =>  'cars',
                        'header' => 'header',
                        'leftt' => 'text text',
                      
                       
                    ])
                    ->withResponseHeaders([
                        'Accept: application/x-www-form-urlencoded', 
                        'Cookie: lemhirassion=33b5cc1416b8dd2fb4d71fcc11c431b3', 
                        'Content-Type: multipart/form-data', 
                        'Accept-Encoding: gzip, deflate, br', 
                        'User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:106.0) Gecko/20100101 Firefox/106.0', 
                        'Connection: keep-alive'
                    ]) 
                    ->returnResponseObject()

                    ->withResponseHeaders()
                  ->withFile( 'photo1', $path.'/'.$row->image, 'image/jpg', $row->image )
                   
                        
                    ->post();



                    return redirect()->route('add_advt')
                    ->with('success','???????????????? ???????????????????? ????????????????????????');
                  //  dd($response);
                  
                //  dd($response->headers);

                   //$content = $response->content;

                   //echo $content;
}



}
