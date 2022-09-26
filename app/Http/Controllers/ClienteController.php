<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            DB::table('clientes')->insert([
                'cedulaCliente' => $request->cliente['cedula'],
                'nombreCliente' => $request->cliente['nombre'],
                'direccionCliente' => $request->cliente['direccion'],
            ]);

            return response()->json([
                'mensaje' => "Cliente agregado correctamente"
            ], 200);

        } catch (QueryException $e){
            return response()->json([
            'mensaje' => "La cedula ingresada ya esta registrada"
            ], 400);
        }
        
    }

    public function actualizar(Request $request, $cedula){
        $resultado = DB::table('clientes')
                ->where('cedulaCliente', $cedula)
                ->update(['direccionCliente' => $request->cliente['direccion']]);
        if($resultado){
            return response()->json([
                'mensaje' => "Cliente Actualizado correctamente"
            ], 200);
        }
        return response()->json([
        'mensaje' => "Cliente no encontrado"
        ], 400);
    }

    public function eliminar($cedula){
        
        if(DB::table('clientes')->where('cedulaCliente', $cedula)->delete()){
            return response()->json([
            'mensaje' => "Cliente eliminado correctamente."
            ], 200);
        }
        return response()->json([
            'mensaje' => "Cliente no encontrado"
            ], 400);
    }
}
