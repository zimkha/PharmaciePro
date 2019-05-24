<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livraison;
use App\Commande;
class LivraisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Livraison::all()->jsonPaginate();
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
        // Recuper la commande et les marchandise commande;
          // Pour chaque commande on a besoin de savoir les machandise commandées;
        $commande = Commande::find($request->commande_id);
        $commande_marchandise = $commande->marchandisecommander;
        $nbCom = 0;
             foreach ($commande_marchandise as $value) {
                 $marchandise = $value->marchandise;
                 $nbCom ++;
             }
             // On recuper le nbr de Total de marchandise pour cette commande; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
