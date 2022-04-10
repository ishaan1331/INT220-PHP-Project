<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Popular;
use App\Models\booktrip;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

$count = 0;
class HomeController extends Controller
{
    public function index(){
        $count = 0;
        $data = Popular::all();
        // $usertype = Auth::user()->usertype;
        $user_id = Auth::id();
            $count = booktrip::where('user_id' , $user_id)->count();

       return view("home" , compact("data" , "count"));
    // return view('home', $count);

    }




    public function booktrip(Request $request , $id){
        if(Auth::id()){
            $user_id = Auth::id();
          $tripid = $id;
          $quantity = $request->quantity;

          $date = $request->date;

          $trip_title = $request->trip_title;


          $booktrip = new booktrip;

          $booktrip-> user_id = $user_id;
          $booktrip->tripid = $tripid;
          $booktrip-> quantity = $quantity;
          $booktrip-> date = $date;

          $booktrip->save();
            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
    }

                public function mytrips(Request $request , $id){
                    $count = booktrip::where('user_id' , $id)->count();



                    $data = booktrip::where('user_id' , $id)->join('populars' , 'booktrips.tripid' , '=' , 'populars.id')->get();
                    return view('mytrips' , compact('count' , 'data' ));
                    }


public function goa(){
    return view("goa");
}


    public function redirects(){
        $count = 0;
        $data = Popular::all();
        $usertype = Auth::user()->usertype;

        if($usertype == '1') {
            return view('admin.adminhome');
        }
        else{

            $user_id = Auth::id();
            $count = booktrip::where('user_id' , $user_id)->count();

return view('home' , compact('data' , 'count'));
        }
    }
}
