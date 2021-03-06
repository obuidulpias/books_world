<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class CustomerLoginController extends Controller
{
    //

    public function login(Request $request){

       // return bcrypt($request->get('password'));

        $customer = Customer::where('emailAddress',$request->get('emailAddress'))->first();

        $verify = password_verify($request->get('password'),$customer->password);

        if ($verify){

            Session::put('customerId', $customer->id);

            if (Session::has('page_redirect')){
                return redirect()->to('checkout/shipping');

            }else{

                return redirect()->to('/');
            }
        }else{

           return redirect()->back();
        }



    }

    public function customer_logout(Request $request){


        Session::forget('customerId');

        return redirect()->to('/');


    }
}
