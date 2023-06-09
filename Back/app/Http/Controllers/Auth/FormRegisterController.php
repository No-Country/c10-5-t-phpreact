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
use App\Events\WelcomeInstructionsEvent;
use App\Http\Requests\FormRegisterRequest;
use App\Jobs\WelcomeInstructionsJob;

class FormRegisterController extends Controller
{      
    public function formsOnly(int $id)
    {
        $forms = FormRegister::findOrFail($id);

        return [
            'formulario' => $forms
        ];
    }
    
    public function dateForms()
    {   
        $horary = Horary::select('id', 'name')->get();
        $country = Country::select('id', 'name')->get();
        $roleStack = RoleStack::select('id', 'name')->get();
        $vertical = Vertical::select('id', 'name')->get();
        $experience = Experience::select('id', 'name')->get();

        return [
            'horario' => $horary,
            'country' => $country,
            'roleStack'  => $roleStack,
            'vertical'   =>  $vertical,
            'experience' =>   $experience
        ];
    }

    public function formRegister(FormRegisterRequest $request)
    {
        $userRegistered = FormRegister::create($request->validated());

        WelcomeInstructionsJob::dispatch($userRegistered);

        return response()->json([
            "msg" => "Solucitud recibida. Te estaremos enviado las instrucciones por email."
        ], 201);
    }

    public function formsAll()
    {
        $forms = FormRegister::all();

        return [
            'formularios' => $forms
        ];
    }

   
}
