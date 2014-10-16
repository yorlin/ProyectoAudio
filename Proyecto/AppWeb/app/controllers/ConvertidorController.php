<?php

class ConvertidorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		return $this->layout->nest('content', 'main');
		
	}

//metodo para subir archivo
	public function subirArchivo()
	{
		$archivoCancion = Input::file('cancion');
		$format = Input::get('format');
		$filename = $file->getClientOriginalName();
		 // carpeta donde se va a guardar el archivo
		$upload_success = Input::file('cancion')->move(public_path('archivos'), $filename);
		$from = storage_path('cancion').$filename;
		$newFile = new Registro;
		$newFile->tofile = $format;
		$newFile->save();
		$id = $newFile->id;
		//mensaje de cola para rabbitmq
		$msg =  sprintf('{"id":%s,"file:"%s","parts":"%s","time_per_chunk":"%s"}',$id,$file,$parts,$time_per_chunk);
		Helpers::Convert($msg);
		
		return 1;
	}
     
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$registro = new Registro;

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
