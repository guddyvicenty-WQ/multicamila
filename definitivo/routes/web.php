<?php

use Illuminate\Support\Facades\Route;
use App\Models\Plan;
use App\Models\Solicitud;


Route::get('/inicio', function () {
    return redirect('/solicitudes');
});

Route::get('/contacto', function () {
    return redirect('/solicitudes');
});

Route::get('/productos', function () {
    return redirect('/solicitudes');
});

Route::get('/', function () {
    return redirect('/solicitudes');
});


Route::get('/solicitudes', function () {
    $solicitudes = Solicitud::with('plan')->get();
    $planes = Plan::all();
    return view('solicitudes.index', compact('solicitudes', 'planes'));
});

Route::get('/solicitudes/nueva', function () {
    $plans = Plan::all();
    return view('solicitudes.create', compact('plans'));
});

Route::post('/solicitudes/nueva', function () {
    $validar = request()->validate([
        'plan_id'   => 'required|exists:plans,id',
        'domicilio' => 'required|string|max:255',
        'nombre'    => 'required|string|max:255',
    ], [
        'plan_id.required'    => 'El plan es obligatorio.',
        'plan_id.exists'      => 'El plan seleccionado no es válido.',
        'domicilio.required'  => 'El domicilio es obligatorio.',
        'domicilio.string'    => 'El domicilio debe ser una cadena de texto.',
        'domicilio.max'       => 'El domicilio no puede tener más de 255 caracteres.',
        'nombre.required'     => 'El nombre es obligatorio.',
        'nombre.string'       => 'El nombre debe ser una cadena de texto.',
        'nombre.max'          => 'El nombre no puede tener más de 255 caracteres.',
    ]);

    Solicitud::create([
        'plan_id'   => request()->input('plan_id'),
        'domicilio' => request()->input('domicilio'),
        'nombre'    => request()->input('nombre'),
    ]);

    return redirect('/solicitudes');
});
Route::middleware('auth')->group(function () {
    Route::get('/planes', function () {
        $planes = Plan::all();
        $solicitudes = Solicitud::all();
        return view('planes.index', compact('planes', 'solicitudes'));
    });

    Route::get('/planes/nuevo', function () {
        return view('planes.create');
    });

    Route::post('/planes/nuevo', function () {
        $validar = request()->validate([
            'velocidad' => 'required|string|max:50',
            'precio'    => 'required|integer|min:1',
        ], [
            'velocidad.required' => 'La velocidad del plan es obligatoria.',
            'velocidad.string'   => 'La velocidad debe ser un texto válido.',
            'velocidad.max'      => 'La velocidad no puede tener más de 50 caracteres.',
            'precio.required'    => 'El precio del plan es obligatorio.',
            'precio.integer'     => 'El precio debe ser un número entero.',
            'precio.min'         => 'El precio debe ser mayor a 0.',
        ]);

        Plan::create([
            'velocidad' => request()->input('velocidad'),
            'precio'    => request()->input('precio'),
        ]);

        return redirect('/planes')->with('success', '¡Plan registrado exitosamente!');
    });
});

require __DIR__.'/auth.php';
