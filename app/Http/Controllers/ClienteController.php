<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cliente::orderBy('nombreCliente', 'ASC')->get();
    }

    public function nuevo(Request $request){
        try {
            $nuevoCliente = new Cliente;
            $nuevoCliente->cedulaCliente = $request->cliente['cedula'];
            $nuevoCliente->nombreCliente = $request->cliente['nombre'];
            $nuevoCliente->direccionCliente = $request->cliente['direccion'];
            $nuevoCliente->save();

        } catch (QueryException $e){
            return response()->json([
            'mensaje' => "La cedula ingresada ya esta registrada"
            ], 400);
        }
        return $nuevoCliente;
    }
}
