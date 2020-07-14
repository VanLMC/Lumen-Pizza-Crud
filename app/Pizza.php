<?php

namespace App;

use Illuminate\Auth\Authenticatable;
//use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
//use Laravel\Lumen\Auth\Authorizable;

class Pizza extends Model //implements AuthenticatableContract, AuthorizableContract
{
    
    protected $table = 'pizzas';
    //use Authenticatable, Authorizable;
    public function __construct($tipo = null, $preco = null){

        $this->tipo = $tipo;
        $this->preco = $preco;

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo', 
        'preco',
    ];

    

}
