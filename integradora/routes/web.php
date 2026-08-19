<?php

use Illuminate\Support\Facades\Route;
use App\Models\Herramienta;

Route::get('/', function () {
    return view('welcome');
});

route::get('/herramientas', function () {
    $herramientas = Herramienta::all();
    return view('herramientas.index', compact('herramientas'));
});

route::get('/herramientas/nuevo', function () {
    return view('herramientas.create');
});

route::post('/herramientas/nuevo', function () {
    $validator = validator(request()->all(), [
        'nombre' => 'required',
        'precio' => 'required|integer'
    ],[
        'nombre.required' => 'El nombre es obligatorio',
        'precio.required' => 'El precio es obligatorio',
        'precio.integer' => 'El precio debe ser un número entero'
    ]);
    if ($validator->fails()) {
        return redirect('/herramientas/nuevo')
            ->withErrors($validator)
            ->withInput();
    }
    herramienta::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio')
    ]);
    return redirect('/herramientas');
});