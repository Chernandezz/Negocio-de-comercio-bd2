<?php

namespace App\Http\Controllers;

use App\Models\Facturas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Facturas::orderBy('fecha', 'ASC')->get();
    }

    public function nueva(Request $request){
        DB::table('facturas')->insert([
                'fecha' => $request->factura['fecha'],
                'cedulaCliente' => $request->factura['cedulaCliente']
            ]);

            return response()->json([
                'mensaje' => "Factura creada correctamente"
            ], 200);
        
    }

    public function eliminar($id){
        
        if(DB::table('facturas')->where('idFactura', $id)->delete()){
            return response()->json([
            'mensaje' => "Factura eliminada correctamente."
            ], 200);
        }
        return response()->json([
            'mensaje' => "Factura no encontrada"
            ], 400);
    }
}
