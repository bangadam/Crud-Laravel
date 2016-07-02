<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;
use App\Http\Requests;
use Input;

class SearchController extends Controller
{
    public function getResult(Request $request){
      $input = $request->input('cari');
      $cruds = Crud::where('nama', 'LIKE', '%' .$input. '%')->get();
      return view('crud.search')->with('cruds', $cruds);
    }
}
