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
        if (!$contractor) {
            return redirect()->route('api.getLogin');
        } else {
            return view('contractor.pages.my_projects', compact('contractor'));
        }
    }

}
