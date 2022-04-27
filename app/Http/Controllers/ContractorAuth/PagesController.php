<?php

namespace App\Http\Controllers\ContractorAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Models\Contractor;
use App\Models\Project;
use App\Models\Property;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;
use App\Http\Requests\Contractors\ContractorRequest;



class PagesController extends Controller
{
    public function homepage($id)
    {
        $contractor = Contractor::select()->find($id);
        if (!$contractor) {
            return redirect()->route('api.getLogin');
        } else {
            return view('contractor.pages.homepage', compact('contractor'));
        }

    }  

    public function my_projects($id)
    {
        $contractor = Contractor::select()->find($id);
        $props = Property::all()->where('contractor_id', '=', $id);
        if (!$contractor && !$props) {
            return redirect()->route('api.getLogin');
        } else {
            return view('contractor.pages.my_projects')->with(compact('contractor'))->with(compact('props'));
        }
    }
    public function explor($id)
    {
        $contractor = Contractor::select()->find($id);
        $props = Property::all();
        if (!$contractor && !$props) {
            return redirect()->route('api.getLogin');
        } else {
            return view('contractor.pages.explor')->with(compact('contractor'))->with(compact('props'));
        }
    }
    public function details($id)
    {
        $contractor = Contractor::select()->find($id);
        $props = Property::all();
        if (!$contractor && !$props) {
            return redirect()->route('api.getLogin');
        } else {
            return view('contractor.pages.details')->with(compact('contractor'))->with(compact('props'));
        }
    }
    public function profile($id)
    {
        $contractor = Contractor::select()->find($id);
        if (!$contractor) {
            return redirect()->route('api.getLogin');
        } else {
            return view('contractor.pages.profile', compact('contractor'));
        }
    }

    public function edit($id)
    {
        $contractor = Contractor::select()->find($id);
        if (!$contractor) {
            return redirect()->route('contractor.profile')->with(['error' => 'هذه اللغة غير موجوده']);
        } else {
            return view('contractor.pages.edit', compact('contractor'));
        }
    }
    public function update($id, Request $request)
    {
        $contractor = Contractor::find($id);
        try {
            // Validation
            $rules = [
                "name" => "required|string|max:30",
                "company" => "required|string",
                "address" => "required|string",
                "country" => "required|string",
                "phone" => "required",
                "password" => "required"
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->route('contractor.edit',$id)->with(['error' => 'هناك خطأ يرجي المحاوله في وقت اخر']);            
            }
        } catch (\Exception $e) {
            return redirect()->route('contractor.edit',$id)->with(['error' => 'هناك خطأ يرجي المحاوله في وقت اخر']);            
        }
        try{

            if (!$contractor) {
                return redirect()->route('contractor.edit', $id)->with(['error' => 'هذه اللغة غير موجوده']);
            }

            $contractor->name = $request['name'];
            $contractor->save();

            return redirect()->route('contractor.profile',$id)->with(['success' => 'Updated Successfully']);

        } catch (\Exception $e) {
            return redirect()->route('contractor.edit',$id)->with('هناك خطأ يرجي المحاوله في وقت اخر');
        }

    }
}
