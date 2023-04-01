<?php

namespace App\Http\Controllers\Auth;

use App\Models\Form\Horary;
use App\Models\Form\Country;
use Illuminate\Http\Request;
use App\Models\Form\Vertical;
use App\Models\Form\RoleStack;
use App\Models\Form\Experience;
use App\Models\form\FormRegister;
use Illuminate\Routing\Controller;
use App\Http\Requests\FormRegisterRequest;

class FormRegisterController extends Controller
{
    public function index()
    {
        $horary = Horary::select('id', 'name')->get();
        $country = Country::select('id', 'name')->get();
        $roleStack = RoleStack::select('id', 'name')->get();
        $vertical = Vertical::select('id', 'name')->get();
        $experience = Experience::select('id', 'name')->get();

        return [
            'horario' => $horary,
            'roleStack'  => $roleStack,
            'vertical'   =>  $vertical,
            'experience' =>   $experience
        ];
    }
    public function formRegister(FormRegisterRequest $request)
    {   
        FormRegister::create($request->validated());
        return response()->json(["msg" => "Solucitud recibida. Te estaremos enviado las instrucciones por email."],201);
    }
}
