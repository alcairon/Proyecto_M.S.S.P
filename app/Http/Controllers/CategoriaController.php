<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTipoUrgencia;

class CategoriaController extends Controller
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
         $categoria=Categoria::all();
		
		return view("categoria.index",compact("categoria"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoUrgencia $request)
    {
         $datos=$request->all();
		
		Categoria::create($datos);
		return redirect('/categoria')->with("anadir_categoria",'ยกSe a guardado con exito!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTipoUrgencia $request, $id)
    {
        $datos=$request->all();
		Categoria::find($id)->update($datos);
		
		return redirect ("categoria")->with("editar_categoria",'Se a editado una categoria correctamente!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
		$categoria->delete();
		
		return redirect('categoria')->with("eliminar",'ok');
    }
}
