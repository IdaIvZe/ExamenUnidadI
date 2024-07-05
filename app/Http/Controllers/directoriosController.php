<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\directorio;

class directoriosController extends Controller
{
    //

    public function mostrarDirectorio(){
        $directorios = directorio::all();
        return view('directorio', compact('directorios'));
    }

    public function mostrarAgregarNuevo(){
        $nvoDirectorio = directorio::all();
        return view('crearentrada', compact('nvoDirectorio'));
    }

    public function crearNuevoDirectorio(Request $request){
        $nvoDirectorio = new directorio();

    }

    public function mostrarBuscarEntrada(){
        $buscarEntradas = directorio::all();
        return view('buscar', compact('buscarEntradas'));
    }

    public function verContactos(){
        $verContactos = directorio::all();
        return view('vercontactos', compact('verContactos'));
    }

    public function mostrarEliminar(){
        $registroEliminar = directorio::all();
        return view('eliminar', compact('registroEliminar'));
    }

    public function eliminacionCancelar(){
        $registrosEliminar = directorio::all();
        return redirect()->route('directorio.principal');
    }

    public function cancelarBusqueda(){
        return redirect()->route('directorio.principal');
    }

    public function guardarNuevoDirectorio(Request $request){
        $nvaEntrada = new directorio();
        $nvaEntrada->codigoEntrada = $request->codigo;
        $nvaEntrada->nombre = $request->nombre;
        $nvaEntrada->apellido = $request->apellido;
        $nvaEntrada->telefono = $request->telefono;
        $nvaEntrada->correo = $request->correo;
        $nvaEntrada->save();

        return redirect()->route('directorio.principal');
    }

    public function nuevoDirectorioRegresar(){
        return redirect()->route('directorio.principal');
    }
}
