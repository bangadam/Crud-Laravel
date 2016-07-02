<?php

namespace App\Http\Controllers;

use DB;
use App\Crud;
use Request;
use App\Http\Requests;
use App\Http\Requests\CreateCrudRequest;

class CrudController extends Controller
{
    public function index(){
      // Ambil Semua data
      $crud = DB::table('cruds')->paginate(3);
      $crud = Crud::latest('created_at')->get();
      return view('crud.index', compact('crud'));
    }

    public function create(){
      return view('crud.create');
    }

    public function store(CreateCrudRequest $request){
      Crud::create($request->all());
      return redirect('crud')->with('pesan', 'Data Berhasil Di Tambahkan !');
    }

    public function show($id){
      $crud = Crud::find($id);

      return view('crud.show', compact('crud'));
    }

    public function edit($id){
      $crud = Crud::find($id);

      return view('crud.edit', compact('crud'));
    }

    public function update($id){
      $crudUpdate = Request::all();
      $crud = Crud::find($id);
      $crud->update($crudUpdate);
      return redirect('crud')->with('pesan', 'Data Berhasil Dirubah !');
    }

    public function destroy($id){
      Crud::find($id)->delete();
      return redirect('crud')->with('pesan', 'Data Berhasil Dihapus !');
    }
}
