<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Popular;
use App\Models\employee;

class AdminController extends Controller
{
    public function user(){
        $data = user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function packages(){
        $data = popular::all();
        return view("admin.packages" , compact("data"));
    }

    public function updatepackage($id){
        $data = Popular::find($id);
        return view("admin.updatepackage" , compact("data"));
    }


    public function update(Request $request ,$id){
        $data = Popular::find($id);
        $image=$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('packageimage' , $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }


    public function employee(){
        $data = employee::all();
        return view("admin.employee",compact("data"));
        }

        public function updateemployee($id){
            $data = employee::find($id);
            return view("admin.updateemployee" , compact("data"));
        }

        public function deletepackage($id){
            $data = popular::find($id);
            $data->delete();
            return redirect()->back();
        }





      












        public function updatetouremployee(Request $request , $id){
            $data = employee::find($id);
            $image=$request->image;

            if($image){
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->image->move('employeeimage' , $imagename);
                $data->image=$imagename;
            }

            $data->name=$request->name;
            $data->position=$request->position;
            $data->save();
            return redirect()->back();

        }

    // public function viewemployee(){
    //     $data = employee::all();
    //     return view("admin.employee" , compact("data"));
    // }

    public function uploademployee(Request $request){
$data = new employee;
$image=$request->image;
$imagename = time().'.'.$image->getClientOriginalExtension();
$request->image->move('employeeimage' , $imagename);
$data->image=$imagename;
$data->name=$request->name;
$data->position=$request->position;
$data->save();
return redirect()->back();
    }

    public function deleteemployee($id){
        $data = employee::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function upload(Request $request){
$data = new popular;
$image=$request->image;
$imagename = time().'.'.$image->getClientOriginalExtension();
$request->image->move('packageimage' , $imagename);
$data->image=$imagename;
$data->title=$request->title;
$data->price=$request->price;
$data->description=$request->description;
$data->save();
return redirect()->back();
}
}
