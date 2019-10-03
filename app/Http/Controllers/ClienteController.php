<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index(){
        $clientes = Cliente::orderby('nombre', 'ASC')->paginate();
        //dd($ciudads);
        return view ('clientes.index', compact('clientes'));
    }

    public function show($id){
        $ciudad = Cliente::find($id);
        //dd($ciudad);
        return view ('clientes.show', compact('ciudad'));
    }



    public function edit($id){
        $ciudad = Cliente::find($id);
        return view('clientes.edit', compact('ciudad'));
    }

    public function create(){
        $provincias = Provincia::orderby('nombre', 'ASC');
        return view('clientes.create', compact('provincias'));
    }

    public function store(CiudadRequest $request){
        $ciudad = new Ciudad;

        $ciudad->provincia_id = $request->provincia_id;
        $ciudad->nombre = $request->nombre;
        $ciudad->sigla1 = $request->sigla1;
        $ciudad->sigla2 = $request->sigla2;
        $ciudad->estado = 'AC';

        if ($request->validated()){
            $ciudad->save();
            return redirect()->route('clientes.show', $ciudad->id)
                    ->with('info','El elemento ha sido guardado' . $ciudad->id);
        } else {
            return view('clientes.create')->with('info','corrija lo siguientes errores');
        }



    }

    public function update(CiudadRequest $request, $id){
        $ciudad = Cliente::find($id);

        $ciudad->provincia_id = $request->provincia_id;
        $ciudad->nombre = $request->nombre;
        $ciudad->sigla1 = $request->sigla1;
        $ciudad->sigla2 = $request->sigla2;

        $ciudad->save();

        return redirect()->route('clientes.show', $ciudad->id)
                        ->with('info','El elemento ha sido actualizado');
    }

    public function destroy($id){
        $ciudad = Cliente::find($id);
        $ciudad->delete();
        return redirect()->route('clientes.index', $ciudad->id)
                ->with('info','El elemento '.$ciudad->id.' ha sido eliminado');
    }
}
