<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandearticle extends Model
{
    protected $fillable = [
    	'bon_commande_id'
        'article_id',
    	'qte_commande',
    	'prix_ht',
    	'prix_TTC',
    	
    ];
}
