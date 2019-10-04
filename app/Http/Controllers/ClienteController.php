<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    //
    public function index(){
        $clientes = Cliente::orderby('nombres', 'ASC')->paginate();
        //dd($clientes);
        return view ('clientes.index', compact('clientes'));
    }

    public function show($id){
        $cliente = Cliente::find($id);
        //dd($cliente);
        return view ('clientes.show', compact('cliente'));
    }



    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(ClienteRequest $request){
        $cliente = new cliente;

        $cliente->user_id = Auth::user()->id;
        $cliente->ci = $request->ci;
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->ubicacion = $request->ubicacion;
        $cliente->mac = $request->mac;
        $cliente->estado = 'AC';

        if ($request->validated()){
            $cliente->save();
            return redirect()->route('clientes.show', $cliente->id)
                    ->with('info','El elemento ha sido guardado' . $cliente->id);
        } else {
            return view('clientes.create')->with('info','corrija lo siguientes errores');
        }
    }

    public function update(ClienteRequest $request, $id){
        $cliente = Cliente::find($id);

        $cliente->user_id = Auth::user()->id;
        $cliente->ci = $request->ci;
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->ubicacion = $request->ubicacion;
        $cliente->mac = $request->mac;

        $cliente->save();

        return redirect()->route('clientes.show', $cliente->id)
                        ->with('info','El elemento ha sido actualizado');
    }

    public function destroy($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('clientes.index', $cliente->id)
                ->with('info','El elemento '.$cliente->id.' ha sido eliminado');
    }
}
