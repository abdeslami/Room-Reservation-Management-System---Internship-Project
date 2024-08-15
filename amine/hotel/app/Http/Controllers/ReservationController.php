<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Auth;

class ReservationController extends Controller
{
    
    public function index($id){
        $id=$id;

        return view('reservation',compact('id'));
    }
    public function demande($id, Request $request)
    {
        // Création d'une nouvelle réservation
        $reservation = Reservation::create([
            "nom_re" => $request->nom_re,
            "date_debut_re" => $request->date_debut_re,
            "date_fin_re" => $request->date_fin_re,
            "id_user" => Auth::user()->id,
            "id_chambre" => $id,
            "etat_re"=>"active"
        ]);
        $chambre =Chambre::find($id);
        $chambre->etat_c="active";
        $chambre->save();
        return redirect()->route('home')->with("seccuss", "Votre réservation a été effectuée avec succès !");

    }
    

}
