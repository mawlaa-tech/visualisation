<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Carbon;
use App\Models\Team;

class TeamController extends Controller
{
    public function Index()
    {
       

       /* $proches = DB::table('sellers')->get();*/
        $teams =DB::table('teams')->get();

     
        

        return view('admin.team.index', compact('teams'));
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddTeam()
    {
        $teams=DB::table('teams')->get();
        
        return view('admin.team.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreTeam(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|min:3',
            'fonction' => 'required',
            'lien_1' =>'required'

            
        ],
        [
        'name.required' => 'SVP entrez une nom',
        'fonction.required' => 'SVP entrer une fonction ',
         'lien_1.required' => 'SVP entrer une lien 1',

        ]);
        $image= $request->file('image');

        $name_gen = hexdec(uniqid().'.'.$image->getClientOriginalExtension());
        Image::make($image)->resize(600,600)->save('team/'.$name_gen);
        $last_img = 'team/'.$name_gen;
 

    Team::insert([
       'name' =>$request->name,
       'lien_1' =>$request->lien_1,
       'lien_2' =>$request->lien_2,
       'lien_3' =>$request->lien_3,
       'lien_4' =>$request->lien_4,

       'fonction' =>$request->fonction,


       'image' =>$last_img,
       
     
       'created_at' =>Carbon::now()

    ]);

    $notification = array(
           'message' => 'le team a été ajouter!!',
           'alert-type' => 'success',

    );
    $teams = Team::latest()->paginate(10);

    return redirect()->route('show.team', $teams)->with($notification);
    }
}
