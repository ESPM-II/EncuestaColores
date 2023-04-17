<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultadosController extends Controller
{

    public function obtenerTodasLasRespuestas()
    {
        $respuestas = DB::table('resultados')->get();
        return response()->json($respuestas);
    }

    public function obtenerCantidadRespuestasTotales()
{
    $total = DB::table('resultados')->count();
    return response()->json(['total' => $total]);
}

public function obtenerCantidadRespuestasPorDia()
{
    $resultados = DB::table('resultados')
        ->select(DB::raw('DATE(created_at) as fecha'), DB::raw('COUNT(*) as total'))
        ->groupBy('fecha')
        ->get();
    return response()->json($resultados);
}
    
public function obtenerFrecuenciaEdades()
{
    $resultados = DB::table('resultados')
        ->select('edad', DB::raw('COUNT(*) as total'))
        ->groupBy('edad')
        ->get();
    return response()->json($resultados);
}

public function obtenerFrecuenciaColores()
{
    $resultados = DB::table('resultados')
        ->select('color_favorito', DB::raw('COUNT(*) as total'))
        ->groupBy('color_favorito')
        ->get();
    return response()->json($resultados);
}

public function obtenerFrecuenciaColorPorEdad()
{
    $resultados = DB::table('resultados')
        ->select('edad', 'color_favorito', DB::raw('COUNT(*) as total'))
        ->groupBy('edad', 'color_favorito')
        ->get();
    return response()->json($resultados);
}

public function agregarResultado(Request $request)
{
    $resultados = DB::table('resultados')->insert([
        'edad' => $request->edad,
        'color_favorito' => $request->color_favorito,
        'created_at' => now()
    ]);
    return response()->json(['message' => 'Resultado agregado con éxito']);
}
}
