<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    function userRegistration(Request $request)
    {


        $request->validate([
            "name" => 'required|min:3 |max:12',
            "email" => 'required|email',
            "password" => 'required|min:6|max:12'

        ]);




        $user = new User();

        $user->name = $request->name;

        $user->email = $request->email;

        $user->password = $request->password;

        if ($user->save()) {
            return view('User.userLogin');
        } else {
            return "User Are Not Inserted";
        }
    }



    function userLogin(Request $request)
    {


        $userInput = $request->input();

        // Find the user by email
        $registeredUser = User::where('email', $userInput['email'])->first();

        if ($registeredUser && Hash::check($userInput['password'], $registeredUser->password)) {
            return "You Are Logged In";
        } else {
            return "Not Logged In";
        }
    }


    function addProduct( Request $request){

        // return $request->all();

        $Products=new product();

        $Products->productTitle=$request->productTitle;
        $Products->productPrice=$request->productPrice;
        $Products->productNotes=$request->productNotes;
        
        if($Products->save()){
            // return redirect('display');
            // return view('Product.displayProduct',['productData'=> $Products]);
        }else{
            return "Product Not Added";
        }




    }


    function dataList(){

  $ProductList=product::all();

return view('displayProduct', ['alldata' => $ProductList]);



    }
}
