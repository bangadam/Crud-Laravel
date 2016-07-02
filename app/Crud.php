<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'cruds';

    protected $fillable = ['nama', 'email', 'alamat'];
}
