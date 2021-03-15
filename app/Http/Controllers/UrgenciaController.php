<?php

namespace App\Http\Controllers;

use App\Models\Urgencia;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUrgencia;
use App\Models\Paciente;
use App\Models\Medico;
use App\Models\Categoria;
use App\Models\Tratamiento;

class UrgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
		$urgencia=Urgencia::all();
		
		//$paciente = Urgencia::with('paciente')->first();
		//return view("paciente.detalle", compact("paciente"));
		
		
		//$paciente = Paciente::with('paciente')->get();
		return view("urgencia.index",compact("urgencia"));
		
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("urgencia.create", ['error' => false , 'pacientes' => Paciente::all(),'medicos' => Medico::all(),'categorias' => Categoria::all(), 'tratamientos' => Tratamiento::all() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUrgencia $request)
    {
        $datos=$request->all();
		
		Urgencia::create($datos);
		return redirect('/urgencia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $urgencia = Urgencia::find($id);
		return view("urgencia.show", compact ("urgencia"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $urgencia = Urgencia::find($id);
		return view ("urgencia.edit", compact ("urgencia"));
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=$request->all;
		$urgencia = Urgencia::find($id);
		$urgencia->update($datos);
		
		return redirect ("urgencia");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $urgencia = Urgencia::find($id);
		$urgencia->delete();
		
		return redirect('urgencia');
    }
}
