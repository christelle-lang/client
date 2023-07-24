<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterClientRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;

class client_controller extends Controller
{
    public function register(Request $request)
    {
         $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'string|email|max:255|unique:clients',
            'phone1' => 'required|string',
            'phone2' => 'sometimes',
            'password' => 'required',
         ]);
        if($validator->fails())
        {
            return back()->with('error','Veillez saissir tous les champs');
        }
        $client = Client::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone1' => $request->input('phone1'),
            'phone2' => $request->input('phone2'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('accueil_page')->withSuccess('success', 'Votre compte a été créé avec succès! Veuillez vous connecter.');

}
         public function client_connecte(){
            return view('web.accueil_client');
         }

         public function connexion(Request $request){
          
            $validator = Validator::make($request->all(),[
                'email' => 'string|email|max:255',
                'password' => 'required',
             ]);
             if($validator->fails())
             {
                 return back()->with('error','Veillez saissir tous les champs');
             }
             $credentials = request()->except('_token');

             if (auth()->attempt($credentials)) {
                $user = auth()->user();
                $name = $user->name;
           
                $camions=DB::table('camions')->get();
                return redirect()->route('form_demande')->with(['name' => $name, 'camions' => $camions]);
            } else {
                 return back()->withErrors([
                     'email' => 'Les identifiants sont incorrects.',
                 ]);
             }


             
            }

            public function deconnexion()
{
             Auth::logout();
             return redirect()->route('accueil_page');
}

}