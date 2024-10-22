<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConsultaDniController extends Controller
{
    public function showForm()
    {
        return view('dni.consulta-dni');
    }

    public function consultarDni(Request $request)
    {
        $dniNumber = $request->input('dniNumber');
        $apiUrl = 'https://api.apis.net.pe/v2/reniec/dni?numero=';
        $apiToken = 'apis-token-8827.lTXgRtOKNeJwMnU5XVwDrK3o4RLeqWul';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiToken
        ])->get($apiUrl . $dniNumber);

        if ($response->failed()) {
            return back()->withErrors(['message' => 'Error al consultar la API']);
        }

        $data = $response->json();
        return view('dni.consulta-dni', ['data' => $data]);
    }
}
