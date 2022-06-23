<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon; 
use DB;
use Illuminate\Validation\Rules\Password;

class SellerController extends Controller
{
    public function SellerIndex(){
        return view('seller.seller_login');
    } // END METHOD 


    public function SellerDashboard(){
        return view('seller.index');
    }// END METHOD 


 public function SellerLogin(Request $request){
        // dd($request->all());

        $check = $request->all();
        if(Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password']  ])){
          
            
           
           
            return view('seller.index')->with('error','User Login Successfully');
        }else{
            return back()->with('error','Invaild Email Or Password');
        }

    } // end mehtod 

    


    public function SellerLogout(){

         Auth::guard('seller')->logout();
        return redirect()->route('seller_login_from')->with('error','User Logout Successfully');
    } // end mehtod 


    public function SellerRegister(){
        return view('seller.seller_register');
    }// end mehtod 


    public function SellerRegisterCreate(Request $request){

        // dd($request->all());

        Seller::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),

        ]);

         return redirect()->route('seller_login_from')->with('error','User Created Successfully');

    } // end mehtod 
// admi user
    public function Index()
    {
       

       /* $proches = DB::table('sellers')->get();*/
        $proches=DB::table('sellers')->get();
        

        return view('admin.proche.index', compact('proches'));
       }
       public function AddProche()
       {
           $proches=DB::table('sellers')->get();
          
           return view('admin.proche.create', compact('proches'));
       }
   
       /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
       public function StoreProche(Request $request)
       {
           
           $validated = $request->validate([
               'password' => ['min:8|required_with:password_confirmation|same:password_confirmation',
               Password::min(8)->mixedCase()->numbers()->symbols()],
               'email' =>'required|unique:sellers',
               'password_confirmation'=>'min:8',
               'name' => 'required|min:3',
               'phone'=> 'required|max:11'


   
               
           ],
           [
           'name.required' => 'Remplir le champ nom',
          'email.required'=>'Remplir le email',
           'name.min' => 'Le nom minmum 4 caracters',
           'password.required'=> 'entrer un mot de passe',
           'email.unique'=>'email existe deja',
           'password.min'=>'le password doit être minimum 8 max 22',
           'password_confirmation.min'=> 'le password doit être minimum 8 max 22',
           'phone.required'=>'Remplir le champ phone',
           'phone.max'=>'max 11 chiffre'
   
           ]);
   
    
   
       Seller::insert([
          'name' =>$request->name,
          'email' =>$request->email,
          'phone' =>$request->phone,
          'password' => Hash::make($request->password),
          
         // 'image' =>$last_img,
          'created_at' =>Carbon::now()
   
       ]);
   
       $notification = array(
              'message' => 'la proche a été ajouter!!',
              'alert-type' => 'success',
   
       );
       $proches = Seller::latest()->paginate(10);
   
       return redirect()->route('show.proche', $proches)->with($notification);
       }
   
       /**
        * Display the specified resource.
        *
        * @param  \App\Models\Old  $old
        * @return \Illuminate\Http\Response
        */
       public function show($id)
   
       {
          
           $proches =DB::table('sellers')->first();
           return view('admin.proche.show', compact('proches'));
       }
   
       /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\Models\Old  $old
        * @return \Illuminate\Http\Response
        */
       public function EditProche($id)
       {
           $proches=Seller::find($id);
         return  view('admin.proche.edit', compact('proches'));   
        

} 

public function UpdateProche(Request $request, $id)
    {
        $validated = $request->validate([
            'password' => ['min:8|required_with:password_confirmation|same:password_confirmation',
            Password::min(8)->mixedCase()->numbers()->symbols()],
            'email' =>'required',
            'password_confirmation'=>'min:8',
            'name' => 'required|min:3'



            
        ],
        [
        'name.required' => 'Remplir le champ nom',
       'email.required'=>'Remplir le email',
        'name.min' => 'Le nom minmum 4 caracters',
        'password.required'=> 'entrer un mot de passe',
        'email.unique'=>'email existe deja',
        'password.min'=>'le password doit être minimum 8 max 22',
        'password_confirmation.min'=> 'le password doit être minimum 8 max 22',

        ]);

        

    Seller::find($id)->update([
        'name' =>$request->name,
          'email' =>$request->email,
          'phone' =>$request->phone,
          'password' => Hash::make($request->password),
          
         // 'image' =>$last_img,
          'created_at' =>Carbon::now()


    ]);

    $notification = array(
           'message' => 'le proche a été modifié!!',
           'alert-type' => 'success',

    );
    $proches = Seller::latest()->paginate(10);

    return redirect()->route('show.proche', $proches)->with($notification);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Old  $old
     * @return \Illuminate\Http\Response
     */
    public function DeleteProche($id)
    {
        Seller::find($id)->delete();
        $notification = array(
                                 'message' => 'le proche a été supprimé',
                                 'alert-type' => 'error',
        );
        $proches = Seller::latest()->paginate(10);

    return redirect()->route('show.proche', $proches)->with($notification);
    }


    /** change password user */
    public function EditProcheUser($id)
    {
        $proches=Seller::find($id);
      return  view('seller.edit', compact('proches'));   
     

} 

public function UpdateProcheUser(Request $request, $id)
 {
     $validated = $request->validate([
         'password' => ['min:8|required_with:password_confirmation|same:password_confirmation',
         Password::min(8)->mixedCase()->numbers()->symbols()],
         'email' =>'required',
         'password_confirmation'=>'min:8',
         'name' => 'required|min:3'



         
     ],
     [
     'name.required' => 'Remplir le champ nom',
    'email.required'=>'Remplir le email',
     'name.min' => 'Le nom minmum 4 caracters',
     'password.required'=> 'entrer un mot de passe',
     'email.unique'=>'email existe deja',
     'password.min'=>'le password doit être minimum 8 max 22',
     'password_confirmation.min'=> 'le password doit être minimum 8 max 22',

     ]);

     

 Seller::find($id)->update([
     'name' =>$request->name,
       'email' =>$request->email,
       'phone' =>$request->phone,
       'password' => Hash::make($request->password),
       
      // 'image' =>$last_img,
       'created_at' =>Carbon::now()


 ]);

 $notification = array(
        'message' => 'le proche a été modifié!!',
        'alert-type' => 'success',

 );
 $proches = Seller::latest()->paginate(10);

 return redirect()->route('seller.dashboard', $proches)->with($notification);
 }
}