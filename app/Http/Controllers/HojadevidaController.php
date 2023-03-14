<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use App\Models\Hojadevida;
use App\Models\Experiencia;
use App\Models\Conocimiento;

class HojadevidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hojadevidas = Hojadevida::all( );
        $experiencias = Experiencia::all( );  
        $conocimientos = Conocimiento::all();
        

        return view ('hojadevida.cv', compact('hojadevidas','experiencias','conocimientos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hojadevida.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hojadevida = new Hojadevida();
    
        if ($request->hasFile('Foto'))
        {
            $file = $request->file('featured');
            $destinationPath = "img/fotos/";
            $filename = time(). '-';
            $uploadSuccess = $request->file('Foto')->move($destinationPath, $filename);
            $hojadevida->Foto = $destinationPath . $filename;
        }

    $hojadevida = new Hojadevida();

    
    $hojadevida->primer_nombre = $request->primer_nombre;
    $hojadevida->segundo_nombre = $request->segundo_nombre;
    $hojadevida->primer_apellido = $request->primer_apellido;
    $hojadevida->segundo_apellido = $request->segundo_apellido;
    $hojadevida->fecha_de_nacimiento = $request->fecha_de_nacimiento;
    $hojadevida->tipo_de_documento = $request->tipo_de_documento;
    $hojadevida->numero_de_documento = $request->numero_de_documento;
    $hojadevida->genero = $request->genero;
   
    $hojadevida->departamento = $request->departamento;
    $hojadevida->ciudad = $request->ciudad;
    $hojadevida->poblacion = $request->poblacion;
    $hojadevida->direccion = $request->direccion;
 
    $hojadevida->telefono_movil = $request->telefono_movil;
    $hojadevida->telefono_fijo = $request->telefono_fijo;
    
    

   $hojadevida->save();

   return redirect('cv', $hojadevida);
   
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hojadevida $hojadevida)
    {
        return view('hojadevida.HdV', compact('hojadevida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hojadevida $hojadevida)
    {
        return view('hojadevida.edit', compact('hojadevida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hojadevida $hojadevida)
    {
        if ($request->hasFile('foto'))
            {
                $file = $request->file('featured');
                $destinationPath = "img/fotos/";
                $filename = time(). '-';
                $filename = $request->file('foto')->move($destinationPath, $filename);
                $hojadevida->foto = $destinationPath . $filename;
            }

        $hojadevida->Foto = $request->Foto;
        $hojadevida->primer_nombre = $request->primer_nombre;
        $hojadevida->segundo_nombre = $request->segundo_nombre;
        $hojadevida->primer_apellido = $request->primer_apellido;
        $hojadevida->segundo_apellido = $request->segundo_apellido;
        $hojadevida->fecha_de_nacimiento = $request->fecha_de_nacimiento;
        $hojadevida->tipo_de_documento = $request->tipo_de_documento;
        $hojadevida->numero_de_documento = $request->numero_de_documento;
        $hojadevida->genero = $request->genero;
       
        $hojadevida->departamento = $request->departamento;
        $hojadevida->ciudad = $request->ciudad;
        $hojadevida->poblacion = $request->poblacion;
        $hojadevida->direccion = $request->direccion;
     
        $hojadevida->telefono_movil = $request->telefono_movil;
        $hojadevida->telefono_fijo = $request->telefono_fijo;

        $hojadevida->save();
        return redirect()->route('hojadevida.index',$hojadevida);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
