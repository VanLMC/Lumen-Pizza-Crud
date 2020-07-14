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

    public function update(Request $request, $id){
        $pizza = Pizza::find($id);
        $pizza->tipo = $request->tipo;
        $pizza->preco = $request->preco;
        $pizza->save();
        return response()->json($pizza);
    }

    public function delete($id){
        $pizza = Pizza::find($id);
        $pizza->delete();
        $pizzas = Pizza::all();
        return response()->json($pizzas);
    }
}
