<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\Hero;
use Illuminate\Support\Carbon;

class HeroController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function __construct(){
        $this->middleware('auth');
    }*/
    public function Index()
    {
       

       /* $proches = DB::table('sellers')->get();*/
        $heros =DB::table('heroes')->get();

     
        

        return view('admin.hero.index', compact('heros'));
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddHero()
    {
        $heros=DB::table('heroes')->get();
        
        return view('admin.hero.create', compact('heros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreHero(Request $request)
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
        Image::make($image)->resize(674,766)->save('hero/'.$name_gen);
        $last_img = 'hero/'.$name_gen;
 

    Hero::insert([
       'title' =>$request->title,
       'description_1' =>$request->description_1,
       'description_2' =>$request->description_2,
       'image' =>$last_img,
       
     
       'created_at' =>Carbon::now()

    ]);

    $notification = array(
           'message' => 'le hero a été ajouter!!',
           'alert-type' => 'success',

    );
    $olds = Hero::latest()->paginate(10);

    return redirect()->route('show.hero', $olds)->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Old  $old
     * @return \Illuminate\Http\Response
     * 
     */

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Old  $old
     * @return \Illuminate\Http\Response
     */
    

        
}
