<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CustomerRequests\RegisterRequest;
use App\Models\Customer;
use App\Models\Project;
use App\Models\Property;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use GeneralTrait;

    public function register()
    {
        return view('customer.auth.register');
    }

    public function index()
    {
        return view('layout.login');
    }


    protected function store(Request $request)
    {
        try {
            // Validation
            $rules = [
                "name" => "required|string|max:100",
                "email" => "required|string|email|unique:customers",
                "password" => "required",
                "address" => "required|string",
                "country" => "required|string",
                "phone" => "required"
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->route('customer.register')->with(['error' => 'هناك خطأ يرجي المحاوله في وقت اخر']);            
            }
        } catch (\Exception $e) {
            return $this->returnError($e->getCode(), $e->getMessage());
        }
        try{
            Customer::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'country' => $request['country'],
                'address' => $request['address'],
                'phone' => $request['phone'],

            ]);
            return redirect()->route('api.index')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Exception $e) {

            return redirect()->route('customer.register')->with('هناك خطأ يرجي المحاوله في وقت اخر');
        }
    }

    public function logout($id)
    {
        $customer = Customer::select()->find($id);
        $token = $customer->remember_token;
        if ($token) {
            try {
                JWTAuth::setToken($customer->remember_token)->invalidate();
                Customer::where('id',$customer->id)->update([
                    'remember_token' => null
                ]);                
                return redirect()->route('api.index')->with(['success' => 'تم الحفظ بنجاح']);

            } catch (TokenInvalidException $e) {
                return $this->returnError('', 'some thing went wrongs');
            }
            return $this->returnSuccessMsg('', 'Logout Successfully');
        } else {
            return $this->returnError('', 'some thing went wrong');
        }
    }

}