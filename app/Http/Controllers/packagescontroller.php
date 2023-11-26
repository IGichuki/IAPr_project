<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\packages;

class packagescontroller extends Controller
{
    function showpackages(){
        $data=packages::all();
         return view('packages',['packages'=>$data]);
    }
    public function addpackages(Request $request) {

        $package= new packages;
        $package->package_name=$request->package_name;
        //the first first_name is fromthe database name the second first_name is from the registration_admin name attribute
        
        $package->package_desc=$request->package_desc;
        $package->hotel=$request->hotel;
        $packages->package_image = $imageUrl;
        $package->price=$request->price;
        $package->uploaded_at=$request->uploaded_at;
        $package->save();
        return redirect('add_packages');
        return view('add_   packages');
  
        $request->validate([
          'package_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
        ]);
        $packages= new package;
            $packages->package_image = $imageUrl; // Use the generated image URL

           $packages->save();
      
           $file = $request->file('package_image');
           $filename = uniqid() . '.' . $file->getClientOriginalExtension();
           $file->storeAs('public/storage', $filename);
            //  $imageUrl = Storage::url($);


       
      
       
      }
    //   function signup(Request $req){
    //     $package= new username;
    //     $package->name=$req->name;
    //     //the first first_name is fromthe database name the second first_name is from the registration_admin name attribute
        
    //     $package->email=$req->email;
    //     $package->password=$req->password;
    //     $package->phone=$req->phone;
    //     $package->save();
    //     return redirect('login');
        
        
       


    
}
