<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Carbon;
use App\Models\About;


class AboutController extends Controller
{
    public function Index()
    {
       

       /* $proches = DB::table('sellers')->get();*/
        $abouts =DB::table('abouts')->get();

     
        

        return view('admin.about.index', compact('abouts'));
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddAbout()
    {
        $abouts=DB::table('abouts')->get();
        
        return view('admin.about.create', compact('abouts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreAbout(Request $request)
    {
        
        $validated = $request->validate([
            'title' => 'required|min:3',
            'description_1' => 'required',
            'description_2' =>'required'

            
        ],
        [
        'title.required' => 'SVP entrez une titre',
        'description_1.required' => 'SVP entrer une description ',
         'description_2.required' => 'SVP entrer une description',

        ]);
        $image= $request->file('image');

        $name_gen = hexdec(uniqid().'.'.$image->getClientOriginalExtension());
        Image::make($image)->resize(2000,2000)->save('about/'.$name_gen);
        $last_img = 'about/'.$name_gen;
 

    About::insert([
       'title' =>$request->title,
       'description_1' =>$request->description_1,
       'description_2' =>$request->description_2,
       'description_3' =>$request->description_3,

       'image' =>$last_img,
       
     
       'created_at' =>Carbon::now()

    ]);

    $notification = array(
           'message' => 'le about a été ajouter!!',
           'alert-type' => 'success',

    );
    $abouts = About::latest()->paginate(10);

    return redirect()->route('show.about', $abouts)->with($notification);
    }

}
