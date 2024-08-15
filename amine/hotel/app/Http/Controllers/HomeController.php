<?php

namespace App\Http\Controllers;
use App\Models\Chambre;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $chambres = Chambre::query()->where("etat_c","libre");
        
        // Vérifiez s'il y a des filtres appliqués
        $hasFilters = $request->filled('adults') || $request->filled('children');
        
        // Si des filtres sont appliqués, appliquez-les
        if ($hasFilters) {
            if ($request->filled('adults') ) {
                $chambres->where('capacity_c', 'like', '%' . $request->input('adults') . '%');
                // Logique de filtrage pour le nombre d'adultes
            }
        
            if ($request->filled('children')) {
                $chambres->where('capacity_c', 'like', '%' . $request->input('children') . '%');
            }
            if ($request->filled('children') && $request->filled('adults')  ) {
                $chambres->where('capacity_c', 'like', '%' . $request->input('adults') .$request->input('children'). '%');
            }
        
        
            // Vous pouvez ajouter d'autres critères de filtrage ici...
        }
        
        // Exécutez la requête et récupérez les résultats
        $chambres = $chambres->get();
        // return $chambres;
        
        return view('home', compact('chambres'));
    }
   
    
    
}
