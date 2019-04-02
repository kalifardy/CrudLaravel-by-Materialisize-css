<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{

	//Model Database
    protected $table = 'crudmaterialize';
    protected $primariKey = 'id';
    protected $fillable = ['judul','isi'];
    public $timestamps=false;


}
