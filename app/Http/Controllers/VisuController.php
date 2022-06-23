<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Carbon;
use App\Models\Visu;


class VisuController extends Controller
{
    public function Index()
    {
       

       /* $proches = DB::table('sellers')->get();*/
        $visus =DB::table('visus')->get();

     
        

        return view('admin.visu.index', compact('visus'));
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddVisu()
    {
        $visus=DB::table('visus')->get();
        
        return view('admin.visu.create', compact('visus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreVisu(Request $request)
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
        Image::make($image)->resize(1676,1616)->save('visu/'.$name_gen);
        $last_img = 'visu/'.$name_gen;
 

    Visu::insert([
       'title' =>$request->title,
       'description_1' =>$request->description_1,
       'description_2' =>$request->description_2,
       'description_3' =>$request->description_3,
       'description_4' =>$request->description_4,
       'description_5' =>$request->description_5,

       'lien' =>$request->lien,


       'image' =>$last_img,
       
     
       'created_at' =>Carbon::now()

    ]);

    $notification = array(
           'message' => 'le visu a été ajouter!!',
           'alert-type' => 'success',

    );
    $visus = Visu::latest()->paginate(10);

    return redirect()->route('show.visu', $visus)->with($notification);
    }
}
