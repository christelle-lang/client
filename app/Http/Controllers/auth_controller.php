<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Proprietaire;
use Illuminate\Support\Facades\Hash;





class auth_controller extends Controller
{
    public function login(Request $request)
    {

    $credentials = $request->validate([
        'phone1' => ['required'],
        'password' => ['required', 'string'],
    ]);

    $proprietaire = Proprietaire::where('phone1', $credentials['phone1'])->first();

    if ($proprietaire && password_verify($credentials['password'], $proprietaire->password)){
        return response()->json(['message' => 'Connexion réussie','proprietaire_id' => $proprietaire->id], 200);
       

    } else {
        return response()->json(['message' => 'Connexion échouée'], 401);

    }
}

    


public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'phone1' => 'required',
        'password' => 'required',
    ]);

    $proprietaire = new Proprietaire();
    $proprietaire->password = Hash::make($request->password);
    $proprietaire->name= $request->name;
    $proprietaire->phone1= $request->phone1;
    $proprietaire->phone2= $request->phone2;

    // Tentative d'enregistrement du propriétaire
    try {
        $proprietaire->save();
        $proprietaireId = $proprietaire->id;

        return response()->json(['message' => 'Proprietaire enregistré avec succès', 'proprietaire_id' => $proprietaireId], 201);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Échec de l\'enregistrement du proprietaire', 'error' => $e->getMessage()], 401);
    }
}

public function logout($proprioId)
{
    return redirect()->route('login');
}
}
