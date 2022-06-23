<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Carbon;
use App\Models\Logo;

class LogoController extends Controller
{
    public function Index()
    {
       

       /* $proches = DB::table('sellers')->get();*/
        $logos =DB::table('logos')->get();

     
        

        return view('admin.logo.index', compact('logos'));
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddLogo()
    {
        $logos=DB::table('logos')->get();
        
        return view('admin.logo.create', compact('logos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreLogo(Request $request)
    {
        
        $validated = $request->validate([
            'title' => 'required|min:3'
            

            
        ],
        [
        'title.required' => 'SVP entrez un titre',
        

        ]);
        $image= $request->file('image');
        foreach($image as $multi_logo){

        $name_gen = hexdec(uniqid().'.'.$multi_logo->getClientOriginalExtension());
        Image::make($multi_logo)->resize(400,176)->save('logo/'.$name_gen);
        $last_img = 'logo/'.$name_gen;
      
 

    Logo::insert([
       'title' =>$request->title,
       


       'image' =>$last_img,
       
     
       'created_at' =>Carbon::now()

    ]);
}
    $notification = array(
           'message' => 'le team a été ajouter!!',
           'alert-type' => 'success',

    );
    $logos = Logo::latest()->paginate(10);

    return redirect()->route('show.logo', $logos)->with($notification);
    }
}
