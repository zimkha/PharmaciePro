<?php

namespace App\Http\Controllers;

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
          
        return view('vehicule.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
             $request->vh_status = 1;
             $request->vh_disponibilite = 1;
             
              $vehicule  =  Vehicule::create($request->all());

            return response()->json($vehicule, 201);
    }

    private function makeMatricule()
    {
        $token = "";
         $codeAlphabet = "ABFGVWXYZ";
          $codeAlphabet.= "06789";
           $max = strlen($codeAlphabet);

           for ($i=0; $i < $max; $i++) {
        $token .= $codeAlphabet[random_int(0, $max-1)];
         }
         return $token;
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          return view('vehicule.show');
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
