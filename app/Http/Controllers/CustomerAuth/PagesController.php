<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Models\Customer;
use App\Models\Project;
use App\Models\Property;

class PagesController extends Controller
{
    public function homepage($id)
    {
        $customer = Customer::select()->find($id);
        if (!$customer) {
            return redirect()->route('api.getLogin');
        } else {
            return view('customer.pages.homepage', compact('customer'));
        }

    }    
    public function app()
    {
        return view('customer.layout.app');
    }

    public function construction_style($id)
    {
        $customer = Customer::select()->find($id);
        if (!$customer) {
            return redirect()->route('api.getLogin');
        } else {
            return view('customer.pages.construction_style', compact('customer'));
        }
    }

    public function my_projects($id)
    {
        $customer = Customer::select()->find($id);
        if (!$customer) {
            return redirect()->route('api.getLogin');
        } else {
            return view('customer.pages.my_projects', compact('customer'));
        }
    }
}
