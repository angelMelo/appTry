<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Http\Requests\SaveProductRequest;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {

        return view('auth.dashboard');
    
    }

    public function create(){

        return view('productos.create', ['producto' => new Producto]);
    }

    public function store(SaveProductRequest $request){
        
        Producto::create($request->validated());
        
        return to_route('dashboard')->with('status', 'Producto creado!');

    }

    public function edit(Producto $producto){

        return view('productos.edit', ['producto' => $producto]);

    }

    public function update(SaveProductRequest $request, Producto $producto){
        
        $producto->update($request->validated());
        
        return to_route('dashboard', $producto)->with('status', 'Producto actualizado!');
        
    }
}
