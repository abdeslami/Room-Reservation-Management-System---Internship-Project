<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function  index()  {
        $query=User::all();
        return view("admin.utilisateur",compact("query"));
        
    }
    public function adduser(){
        return view("admin.adduser");
    }
    public function storeuser(Request $request)  {
        User::create([
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'cin' =>$request->cin,
            'phone' =>$request->phone,
            'role'=>$request->role,
            'email' =>$request->email,
            'password' => Hash::make($request->passwod),
            "email_verified_at"=>time()
        ]);
        return redirect()->route('utilisateur')->with("seccuss", "Utilisateur   été Ajouter  avec succès !");

    }
    public function updateuser($id)  {
        $user=User::find($id);
        $id=$id;
        return view("admin.updateuser",compact("user","id"));
        
    }
    public function storeuserupdate($id,Request $request){
        $user=User::find($id);
$user->nom=$request->nom;
$user->prenom=$request->prenom;
$user->phone=$request->phone;
$user->role=$request->role;
$user->cin=$request->cin;
$user->password=Hash::make($request->passwod);
$user->save();
return redirect()->route('utilisateur')->with("seccuss", "Utilisateur   été Modifier  avec succès !");


    }
    public function deleteuser($id)  {
        User::destroy($id);
return redirect()->route('utilisateur')->with("seccuss", "Utilisateur   été Supprimer  avec succès !");
        
    }
}
