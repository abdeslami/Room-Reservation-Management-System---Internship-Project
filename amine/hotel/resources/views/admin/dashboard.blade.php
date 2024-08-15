@extends("admin.layout")

@section("content")
<div class="mb-3">
    <h3 class="fw-bold fs-4 mb-3">Admin Dashboard</h3>
    <div class="row">
        <div class="col-12 col-md-4 ">
            <div class="card border-2,border-yellow text-center" >
                <div class="card-body py-4">
                    <h5 class="mb-2 fw-bold">
                        Client de d'hôtel
                    </h5>
                    <p class="mb-2 fw-bold">
                       {{$count}}
                    </p>
                    <div class="mb-0">
                        <span class="badge text-success me-2">
                            +9.0%
                        </span>
                        <span class=" fw-bold">
                            Online
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 ">
            <div class="card  border-2 border-gradians text-center">
                <div class="card-body py-4">
                    <h5 class="mb-2 fw-bold">
                        Réservation de d'hôtel
                    </h5>
                    <p class="mb-2 fw-bold">
                        {{$reservation}}
                    </p>
                    <div class="mb-0">
                        <span class="badge text-success me-2">
                            +2.0%
                        </span>
                        <span class="fw-bold">
                            Online
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 ">
            <div class="card border-2 border-seccuss text-center">
                <div class="card-body py-4">
                    <h5 class="mb-2 fw-bold">
                       Chambre de d'hôtel
                    </h5>
                    <p class="mb-2 fw-bold">
                       {{$chambre}}
                    </p>
                    <div class="mb-0">
                        <span class="badge text-success me-2">
                            +89.0%
                        </span>
                        <span class="fw-bold">
                            Active
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center mt-4 text-center ">
            <div class="card border-2 border-primary">
                <div class="card-body py-4">
                    <h5 class="mb-2 fw-bold">
                    Total de Réservation
                    </h5>
                    <p class="mb-2 fw-bold">
                       {{$total[0]->prix_c }} DH 
                    </p>
                    <div class="mb-0">
                        <span class="badge text-success me-2">
                            +29.0%
                        </span>
                        <span class="fw-bold">
                            Active
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="fw-bold fs-4 my-3">
        Réservation d'hôtel
    </h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr class="highlight">
                        <th scope="col">#</th>
                        <th scope="col">Nom & Prenom</th>
                        <th scope="col">CIN</th>

                        <th scope="col">Phone</th>
                        <th scope="col">Chambre</th>
                        <th scope="col">Prix</th>

                        <th scope="col">Date de début réservation</th>
                        <th scope="col">Date de fin réservation</th>
                        <th scope="col">Etat de Réservation</th>


                    </tr>
                </thead>
                <tbody>
                   
                    @foreach ($query as $item) 
                    <tr>
                        <td> {{$item->id}} </td>
                        <td> {{$item->nom}} {{$item->prenom}} </td>
                        <td> {{$item->cin}} </td>
                        <td> {{$item->phone}} </td>

                        <td> {{$item->type_c}} </td>
                        <td> {{$item->prix_c}} </td>

                        <td> {{$item->date_debut_re}} </td>
                        <td> {{$item->date_fin_re}} </td>
                        <td> {{$item->etat_re}} </td>
</tr>

                    @endforeach
                   
                
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection