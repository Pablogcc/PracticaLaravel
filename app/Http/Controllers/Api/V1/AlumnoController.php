<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlumnoRequest;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumno = Alumno::all();
        return response()->json($alumno);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlumnoRequest $request)
    {
        $alumno = new Alumno;
        $validated = $request->validated(); // Solo los campos validados

        $alumno->nombre = $validated['nombre'];
        $alumno->telefono = $validated['telefono'] ?? null;
        $alumno->edad = $validated['edad'] ?? null;
        $alumno->password = bcrypt($validated['password']); // Encriptar la contraseña
        $alumno->email = $validated['email'];
        $alumno->sexo = $validated['sexo'];
        $alumno->save();

        return response()->json([
            "message" => "Se ha agregado el alumno.",
            "data" => $alumno
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);

        if (!empty($alumno)) {
            return response()->json($alumno);
        } else {
            return response()->json([
                "message" => "Este alumno no está."
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlumnoRequest $request, $id)
    {
        // Buscar el alumno por ID
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return response()->json([
                "message" => "Alumno no encontrado."
            ], 404);
        }

        // Validar y obtener los datos del request
        $validated = $request->validated(); // Solo los campos validados

        // Actualizar los campos del alumno con los datos validados
        $alumno->nombre = $validated['nombre'];
        $alumno->telefono = $validated['telefono'] ?? $alumno->telefono;
        $alumno->edad = $validated['edad'] ?? $alumno->edad;
        $alumno->password = bcrypt($validated['password']); // Encriptar la contraseña
        $alumno->email = $validated['email'];
        $alumno->sexo = $validated['sexo'];
        $alumno->save();

        // Retornar la respuesta
        return response()->json([
            "message" => "Se ha actualizado el alumno.",
            "data" => $alumno
        ], 201);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();

        return response()->json([
            "message" => "Se ha eliminado el alumno."
        ]);
    }
}
