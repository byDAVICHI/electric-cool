<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispositivo;

class DispositivoController extends Controller
{
    public function index()
    {
        $dispositivos = Dispositivo::all();
        return view('empleado', compact('dispositivos'));
    }

    public function store(Request $request)
    {
        // Validación y manejo de archivos
        $pathFoto1 = $request->file('foto1')->store('public/fotos');
        $pathFoto2 = $request->file('foto2')->store('public/fotos');

        // Crear un nuevo registro de dispositivo
        Dispositivo::create([
            'identificador' => $request->identificador,
            'fecha_ingreso' => $request->fecha_ingreso,
            'tipo_servicio' => $request->tipo_servicio,
            'descripcion' => $request->descripcion,
            'foto1' => str_replace('public/', '', $pathFoto1),
            'foto2' => str_replace('public/', '', $pathFoto2),
        ]);

        return redirect()->route('empleado.index')->with('success', 'Dispositivo agregado exitosamente.');
    }

    public function destroy($id)
{
    $dispositivo = Dispositivo::findOrFail($id);
    $dispositivo->delete();

    return redirect()->route('empleado.index')->with('success', 'Dispositivo eliminado exitosamente.');
}
}
