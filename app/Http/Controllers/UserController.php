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
            return "User Are Not Inserteded";
        }
    }



    function userLogin(Request $request)
    {
        $userInput = $request->input();

        // Find the user by email
        $registeredUser = User::where('email', $userInput['email'])->first();

        if ($registeredUser && Hash::check($userInput['password'], $registeredUser->password)) {
            return redirect('add');
        } else {
            return "Not Logged In";
        }
    }



    function addProduct(Request $request)
    {
        $request->validate([
            'productTitle' => 'required',
            'productPrice' => 'required|numeric',
            'productNotes' => 'nullable|string',
        ]);

        //Store user request in database
        $Products = new product();

        $Products->productTitle = $request->productTitle;
        $Products->productPrice = $request->productPrice;
        $Products->productNotes = $request->productNotes;

        if ($Products->save()) {
            // Set flash message
            return redirect()->back()->with('success', 'Product added successfully!');
            // return view('Product.displayProduct',['productData'=> $Products]);
        } else {
            return "Product Not Added";
        }
    }



    function dataList()
    {
        // Fetch all products
        $ProductList = Product::all();

        // Pass the data to the view
        return view('Product.displayProduct', ['alldata' => $ProductList]);
    }



    function deleteProduct($id){


  $Product=product::destroy($id);

  if($Product){
    return redirect('dataList');
  }else{
    echo"not";
  }

    }
}
