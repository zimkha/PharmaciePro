<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typeconge;
class TypecongeController extends Controller
{
    public function index()
    {
        return view('typeconge.index');
    }

    /**
     *  @param \Illuminate\Http\Request
     *  @return \Illuminate\Http\Response 
     */
    public function store(Request $request)
    {
      return typeconge::create($request->all());
    }
}
