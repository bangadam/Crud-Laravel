<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCrudRequest extends Request
{

  public function authorize()
  {
    return true;
  }

  public function rules(){
    return [
      'nama'   => 'required',
      'email'  => 'required|email'
    ];
  }

  public function pesan(){
    return [
      'nama.required'   => 'Kolom Nama Belum Di isi',
      'email.required'  => 'Kolom Email Belum Di isi',
      'email.email'     => 'Email Tidak Sesuai'
    ];
  }
}
