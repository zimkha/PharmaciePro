<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Vehicule;
use Illuminate\Support\Facades\DB;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $vehicules =  Vehicule::all();
          return $vehicules;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('vehicule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
          
        if($request->hasFile('image')){
            $file = $request->file('image');
               $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                  $file->move('/image/voitures', $filename);
                    $vehicule->image = $filename;
                    $vehicule  = Vehicule::create($request->all());
        }
        // generer un matricule
         //  $vehicule->vh_matricule = $this->matricule();
          //  $vehicule  = Vehicule::create($request->all());
              $vehicule = new Vehicule;
              $vehicule->vh_poids= $request->vh_poids;
              $vehicule->vh_hauteure = $request->vh_hauteure;
              $vehicule->vh_largeur = $request->vh_largeur;
              $vehicule->vh_longueur = $request->vh_longueur;
              $vehicule->vh_ptac = $request->vh_ptac;
              $vehicule->vh_ptra = $request->vh_ptra;
              $vehicule->typevehicule_id = $request->typevehicule_id;
              $vehicule->vh_essieu = $request->vh_essieu;
              $vehicule->vh_statut = $request->vh_statut;
              $vehicule->vh_disponibilite = $request->vh_disponibilite;
              $vehicule->vh_matricule = $this->matricule();
              $vehicule->save();
            return response()->json($vehicule, 200);
    }
   
    private function matricule()
    {
         $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
          $clen   = strlen( $chars )-1;
          $matricule  = '';

          for ($i = 0; $i < 7; $i++) {
                  $matricule .= $chars[mt_rand(0,$clen)];
          }
          return ($matricule);
      }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $vehicule = Vehicule::findOrfail($id);
                $type = $vehicule->typevehicule;
            return $vehicule;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $vehicule = Vehicule::findOrfail($id);
            if($vehicule != null){
                $vehicule->update($request->all());
                return response()->json($vehicule, 201);
            }
            else {
                return "erreur";
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Vehicule::destroy($id);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function vehiculeDisponible()
    {      $current_date = gmDate("Y-m-d");
       $query = DB::select("SELECT * FROM vehicules v WHERE v.id not IN( select a.vehicule_id from affectations a where a.date_fin_af <= '$current_date' )");
         if($query)
             return response()->json(array('vehicule' => $query));
        
             else {
                 return response()->json('il ya pa de vehicule disponible');
             }
    }
}
