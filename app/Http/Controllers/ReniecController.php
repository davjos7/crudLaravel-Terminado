<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReniecService;

class ReniecController extends Controller
{
    protected $reniecService;

    public function __construct(ReniecService $reniecService)
    {
        $this->reniecService = $reniecService;
    }

    public function getDniInfo(Request $request)
    {
        $request->validate([
            'dni' => 'required|digits:8',
        ]);

        $dni = $request->input('dni');
        $data = $this->reniecService->getDniInfo($dni);

        if (isset($data['message']) && $data['message'] === 'DNI no válido') {
            return response()->json(['error' => 'DNI no válido'], 400);
        }

        return response()->json($data);
    }
}
