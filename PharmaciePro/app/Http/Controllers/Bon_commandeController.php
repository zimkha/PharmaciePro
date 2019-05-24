<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bon_commande;
use App\Article;
use Validator;
use Illuminate\Support\Facades\Redirect;
use App\Fournisseur;
class Bon_commandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $all_commande =  Bon_commande::all();
         
          return view('commande.index', ['commande' => $all_commande]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $fournisseurs = Fournisseur::all();
          $articles = Article::all();
        return view('commande.create', [
            'fournisseurs' => $fournisseurs,
            'articles' => $articles
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validate_data($data)
    {
      $messages = [
            'article_id' => 'l\'article ou le medicament est required',
            'prix_ht' => 'le prix doit etre renseigne',
            'qte' => 'la quantite doit etre renseigne'
      ];
         $valide = Validator::make($data, [
            'article_id' => 'required',
            'prix_ht' => 'required',
            'quantite' => 'required|min:1'
         ], $messages);
           if($valide->fails){
              return Redirect::back()->withErrors($valide);
           }
    }
    public function store(Request $request)
    {
             $bc = new Bon_commande();
             $com_article = new Commandearticle();
          // avant de sauvegarder on verifie les données entres .
            $data = $request->article;
            // recuper les donnes du  tableau article 
            // Les parcourire 
            // puis les save
         
            $valide = $this->valide($request->article);

         $messages = [
          'fournisseur_id.required' => 'definir le fournisseur pour cette commande',
         ];
        $validation = Validator::make($request->all(), [
             'fournisseur_id' => 'required',
        ],
         $messages);
          if($validation->fails()){
              // On fais un retour en arriere et on affiche les erreurs
            return  Redirect::back()->withErrors($validation);
          }
             
               if($request->motif){
                  $bc =   Bon_commande::create([
                    'fournisseur_id' => $request->fournisseur_id,
                    'status' => true,
                    'motif' => $request->motif,
                    'code_commande' => mt_rand(100000, 999999)
                   
                  ]);
                    
                    foreach ($request->article as $key ) {
                            $com_article = new Commandearticle();
                            $com_article->bon_commande_id = $bc->id;
                            $com_article->article_id = $key->article_id,
                            $com_article->qte_commande= $key->qte_commande
                            $com_article->prix_ht = $key->prix_ht;
                            $com_article->prix_TTC = $key->prix_TTC;
                            $com_article->save();
                    }
                  return response()->json($bc);
               }else{
              
              $bc =   Bon_commande::create([
                        'fournisseur_id' => $request->fournisseur_id,
                        'status' => true,
                        'code_commande' => mt_rand(100000, 999999)
                   ]);
                     foreach ($request->article as $key ) {
                            $com_article = new Commandearticle();
                            $com_article->bon_commande_id = $bc->id;
                            $com_article->article_id = $key->article_id,
                            $com_article->qte_commande= $key->qte_commande
                            $com_article->prix_ht = $key->prix_ht;
                            $com_article->prix_TTC = $key->prix_TTC;
                            $com_article->save();
                    }
                  return response()->json($bc);
               }

    }

    public function newcommande(){
          
          return view('commande.new');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $commande = Bon_commande::findOrfail($id);
            $command_article = $commande->commande_article;
            //apres si la commande a des bon de livraison on le recuper
            return response()->json($commande);
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
