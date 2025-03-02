<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Validator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    function userRegistration(Request $request)
    {
      $NewUserData=  $request->validate([
            "name" => 'required|min:3 |max:12',
            "email" => 'required|email',
            "password" => 'required|min:6|max:12'

        ]);
//1
$StoreData=User::create( $NewUserData);

//2-another method to store data in database
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;

        if ($StoreData->save()) {
            return view('User.userLogin');
        } else {
            return "User Are Not Inserteded";
        }
    }



    function userLogin(Request $request)
    {

        // info("userlogin",[$request->all()]);

        // $userInput = $request->input();

        // // Find the user by email
        // $registeredUser = User::where('email', $userInput['email'])->first();

        // $cheked=$registeredUser && Hash::check($userInput['password'], $registeredUser->password);

        // if ($cheked) {
        //     return redirect('add');
        // } else {
        //     return "Not Logged In";
        // }

 
        $newuUserData=  $request->validate([
            // "name" => 'required|min:3 |max:12',
            "email" => 'required|email',
            "password" => 'required|min:6|max:12'

        ]);
// info("validatd",[$newuUserData]);

        if (Auth::attempt($newuUserData)) {
            // info("authenticate",[Auth::user()]);
            return redirect('add');
        } else {

            // info("registration fail");
            return " Registration fail";

        }



     }
    }



    function addProduct(Request $request)
    {

        // info("product",[$request->all()]);

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


//delete product

    function deleteProduct($id){

  $Product=product::destroy($id);

  if($Product){
    return redirect()->back()->with('success', 'product deleted');
    // return redirect('dataList');
  }else{
    echo"not";
  }

    }
