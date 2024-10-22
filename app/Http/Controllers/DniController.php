<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DniController extends Controller
{
    public function showForm()
    {
        return view('dni.consulta-dni');
    }

    public function getDniInfo(Request $request)
    {
        $request->validate([
            'dni' => 'required|digits:8',
        ]);

        $dni = $request->dni;
        $response = Http::get(env('API_BASE_URL') . $dni, [
            'api_token' => env('API_TOKEN')
        ]);

        $data = $response->json();

        return view('dni.consulta-dni', ['data' => $data]);
    }
}
