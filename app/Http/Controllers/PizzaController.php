<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function index(){
        $pizzas = Pizza::all();
        return response()->json( $pizzas );
    }

    public function store(Request $request){
        $pizza = new Pizza($request->tipo, $request->preco);
        $pizza->save();
        return response()->json($pizza);
    }
}
