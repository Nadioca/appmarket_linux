<?php

namespace Market\Modelos\Marca;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $table = 'marcas';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['id','nombre'];

    public function producto(){
      return $this -> belongsto(Market\Modelos\Producto\Producto::class);
    }
}
