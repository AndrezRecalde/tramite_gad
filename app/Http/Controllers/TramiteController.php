<?php

namespace App\Http\Controllers;

use App\Models\Despacho;
use App\Models\Ingreso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TramiteController extends Controller
{

    /* public function getTramite($id)
    {
        $ingreso = Ingreso::find($id);

        $despacho = Despacho::find($id);

        return response()->json(['status' => 'ok', 'ingreso' => $ingreso, 'despacho' => $despacho]);
    } */

    /* public function getTramite(Request $request)
    {
        $ingreso = Ingreso::find($request->cnsctvo_rta);

        $despacho = Despacho::find($request->cnsctvo_rta);

        return response()->json(['status' => 'ok', 'ingreso' => $ingreso, 'despacho' => $despacho]);
    } */


    /* public function getTramite($cnsctvo_rta)
    {
        $ruta = Ingreso::with(['despachos'])
        ->where('cnsctvo_rta', $cnsctvo_rta)
        ->get();

        return $ruta;
    } */

    public function getTramite(Request $request)
    {

        // Api Con SP
        return ;
    }



}
