<?php

namespace App\Http\Controllers\ContractorAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Auth;
use App\Models\Contractor;
use Illuminate\Support\Facades\Hash;

class ContractorAuthController extends Controller
{
    use GeneralTrait;
    public function register()
    {
        return view('contractor.auth.register');
    }
    protected function store(Request $request)
    {
        try {
            // Validation
            $rules = [
                "name" => "required|string|max:100",
                "email" => "required|string|email|unique:contractors",
                "company" => "required|string",
                "address" => "required|string",
                "country" => "required|string",
                "phone" => "required",
                "password" => "required"
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->route('contractor.register')->with(['error' => 'هناك خطأ يرجي المحاوله في وقت اخر']);            
            }
        } catch (\Exception $e) {
            return $this->returnError($e->getCode(), $e->getMessage());
        }
        try{
            Contractor::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'address' => $request['address'],
                'company' => $request['company'],
                'phone' => $request['phone'],
                'country' => $request['country'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->route('api.index')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $e) {
            return redirect()->route('customer.register')->with('هناك خطأ يرجي المحاوله في وقت اخر');
        }
    }

    public function logout($id)
    {
        $contractor = Contractor::select()->find($id);
        $token = $contractor->remember_token;
        if ($token) {
            try {
                JWTAuth::setToken($contractor->remember_token)->invalidate();
                Contractor::where('id',$contractor->id)->update([
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
