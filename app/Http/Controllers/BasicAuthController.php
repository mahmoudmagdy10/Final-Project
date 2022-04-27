<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contractor;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class BasicAuthController extends Controller
{
    use GeneralTrait;
    public function register()
    {
        return view('auth.register');
    }

    public function index()
    {
        return view('layout.login');
    }
    public function homepage()
    {
        return view('layout.homepage');
    }
    public function construction_style()
    {
        return view('layout.construction_style');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $contractor = Contractor::where('email', '=', $email)->first();
        $customer = Customer::where('email', '=', $email)->first();

        if ($contractor && Hash::check($password, $contractor->password)) {
            //Login
            $credentails = $request->only(['email', 'password']);
            $token = Auth::guard('contractor-api')->attempt($credentails);  /* Token الخاص ب ال user */
            $contractor = Auth('contractor-api')->user();                 /* return user data */
            $contractor->contractor_token = $token;                     /* Add Key to the returned data = user's token */
            if (!$token){
                return $this->returnError('E0055', 'البيانات غير موجوده');
                return redirect()->route('api.index')->with(['error' => 'هناك خطأ بالبيانات']);
            }else{
                $request->request->add(['remember_token'=> $token]);
                Contractor::where('id',$contractor->id)->update([
                    'remember_token' => $request->remember_token
                ]);
                
                return view('contractor.pages.homepage',compact('contractor'));
            }
        } 
        else if($customer && Hash::check($password, $customer->password)) {
            //Login
            $credentails = $request->only(['email', 'password']);
            $token = Auth::guard('customer-api')->attempt($credentails);  /* Token الخاص ب ال user */
            $customer = Auth('customer-api')->user();                 /* return user data */
            $customer->customer_token = $token;                     /* Add Key to the returned data = user's token */
            if (!$token){
                return $this->returnError('E0055', 'البيانات غير موجوده');
                return redirect()->route('api.index')->with(['error' => 'هناك خطأ بالبيانات']);
            }else{
                $request->request->add(['remember_token'=> $token]);
                Customer::where('id',$customer->id)->update([
                    'remember_token' => $request->remember_token
                ]);
                return view('customer.pages.homepage',compact('customer'));
            }
        } else{
            return redirect()->route('api.index');
        }
    }

}