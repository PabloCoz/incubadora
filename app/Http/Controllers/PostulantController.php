<?php

namespace App\Http\Controllers;

use App\Models\Postulant;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;

class PostulantController extends Controller
{
   public function store(Request $request)
   {
      try {
         $request->validate(
            [
               'fullname' => 'required',
               'email' => 'required|email|unique:postulants',
               'phone' => 'required',
               'country' => 'required',
               'city' => 'required',
               'district' => 'required',
               'description' => 'required',
            ],
            [
               'fullname.required' => 'El campo nombre completo es requerido',
               'email.required' => 'El campo email es requerido',
               'email.email' => 'El campo email debe ser un email valido',
               'email.unique' => 'El campo email ya esta registrado',
               'phone.required' => 'El campo telefono es requerido',
               'country.required' => 'El campo pais es requerido',
               'city.required' => 'El campo ciudad es requerido',
               'district.required' => 'El campo distrito es requerido',
               'description.required' => 'El campo descripcion es requerido',
            ]
         );

         $postulant = Postulant::create($request->all());

         $postulant->code = strtoupper(substr(uniqid(), 7, 6));
         $postulant->save();

         return redirect()->route('home')->with('success', 'Su codigo de validacion despues del pago es: ' . $postulant->code);
      } catch (\Exception $e) {
         return redirect()->route('home')->with('error', $e->getMessage());
      }
   }

   public function validatedView(): View
   {
      return view('validated');
   }

   public function rememberCode(): View
   {
      return view('remember-code');
   }

   public function codeRequest(Request $request)
   {
      try {
         $request->validate(
            [
               'email' => 'required|email',
            ],
            [
               'email.required' => 'El campo email es requerido',
               'email.email' => 'El campo email debe ser un email valido',
            ]
         );

         $postulant = Postulant::where('email', $request->email)->where('validated', false)->first();

         if (!$postulant) {
            throw new \Exception('No se encontro ningun postulante con ese email');
         }

         return redirect()->route('remember-code')->with('success', 'Su codigo se envio a su correo electronico');
      } catch (\Exception $e) {
         return redirect()->route('remember-code')->with('error', $e->getMessage());
      }
   }
}
