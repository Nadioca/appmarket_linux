<?php

namespace Market\Modelos\Producto;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['id','nombre','precio','marca_id'];

    public function marca(){
      return $this -> hasmany(Market\Modelos\Marca\Marca::class);
    }
}
