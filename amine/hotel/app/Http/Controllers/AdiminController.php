<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdiminController extends Controller
{
 public function index()  {
    $count=User::all()->count();
    $client=User::where("role","client")->count();
    $reservation=Reservation::all()->count();
    $chambre=Chambre::all()->count();
    $query=DB::select("select * from users inner join reservation on users.id=reservation.id_user inner join chambres on chambres.id=reservation.id_chambre   ");
    $total=DB::select("select sum(prix_c) as prix_c from users inner join reservation on users.id=reservation.id_user inner join chambres on chambres.id=reservation.id_chambre   ");
    // return $total;

// return $query;
    return view("admin.dashboard",compact("count","client","reservation","chambre","query","total"));
    
 }
 public function  chambre()  {
    $query=DB::select("select * from  chambres   ");

    return view("admin.chambre",compact("query"));
    
 }
 public function  addchambre()  {

    return view("admin.ajouterChambre");
    
 }
 public function storechambre(Request $request) {
    // Validate request data
    $request->validate([
        'titre_c' => 'required|string',
        'capacity_c' => 'required',
        'type_c' => 'required',
        'review_c' => 'nullable',
        'image_c' => 'required|image|max:2048', // max size in kilobytes
    ]);

    if ($request->hasFile('image_c')) {
        $scanCinOriginalName = $request->file('image_c')->getClientOriginalName();
        $scanPhotoEncryptedName = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('image_c')->getClientOriginalExtension();
       
        // Move the image to the 'public' directory
        $request->file('image_c')->move(public_path('chambre'), $scanPhotoEncryptedName);
        
        $image_c = 'chambre/' . $scanPhotoEncryptedName;
    }

    // Create a new Chambre record in the database
    $chambre = Chambre::create([
        "titre_c" => $request->titre_c,
        "capacity_c" => $request->capacity_c,
        "type_c" => $request->type_c,
        "review_c" => $request->review_c,
        "prix_c" => $request->prix_c." DH",

    
        "image_c" => $image_c ,  // Use the stored image path if available
        "etat_c" => "libre"
    ]);

    // Redirect the user with a success message
    return redirect()->route('chambre')->with("success", "Chambre a  été effectuée avec succès !");
}
public function updatechambre($id)  {
    $chambre =Chambre::find($id);
    return view("admin.updatechambre",compact("chambre","id"));
    
}
public function updatechambre1($id,Request $request){
    if ($request->hasFile('image_c')) {
        $scanCinOriginalName = $request->file('image_c')->getClientOriginalName();
        $scanPhotoEncryptedName = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('image_c')->getClientOriginalExtension();
       
        // Move the image to the 'public' directory
        $request->file('image_c')->move(public_path('chambre'), $scanPhotoEncryptedName);
        
        $image_c = 'chambre/' . $scanPhotoEncryptedName;
    }

$chambre=Chambre::find($id);
$chambre->titre_c=$request->titre_c;
$chambre->capacity_c=$request->capacity_c;
$chambre->review_c=$request->review_c;
$chambre->prix_c=$request->prix_c;
$chambre->type_c=$request->type_c;
$chambre->image_c=$image_c;
$chambre->etat_c=$request->etat_c;
$chambre->save();

return redirect()->route('chambre')->with("success", "Chambre Modifier  a été effectuée avec succès !");


}
public function deletechambre($id)  {
    Reservation::destroy($id);
    Chambre::destroy($id);

    // $reservation=Reservation::where("id_chambre",$id)->get();
    //  $reservation->delete();
    //  $chambre=Chambre::find($id);
    //  $chambre->delete();
    return redirect()->route('chambre')->with("success", "Delete de chambre  effectuée avec succès !");

    
}
public function changeretat($id)  {
    $chambre=Chambre::find($id);
    if($chambre->etat_c=="libre"){
        // dd($id);
        $chambre->etat_c="active";
        
    }else{
        $chambre->etat_c="libre";

    }
    $chambre->save();
    return redirect()->route('chambre')->with("success", "status est changer avec  de chambre  effectuée avec succès !");


}

 

}
