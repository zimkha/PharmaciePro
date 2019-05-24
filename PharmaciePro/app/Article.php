<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'libelle',
    	'code_article',
    	'min_seuil',
    	'dosage',
    	'forme_id',
    	'famillearticle_id'

    ];
}
