<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Apprentice;
use App\Http\Requests\ApprenticeFormRequest;
use Illuminate\Http\Request;

class ApprenticeController extends Controller {

	public function __construct(Apprentice $apprentice)
	{
		$this->apprentice = $apprentice;
	}

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$apprentices =$this->apprentice->get();
		
		return view('recruit.apprentice.index', compact('apprentices'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('recruit.apprentice.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ApprenticeFormRequest $request)
	{
		$input = $request->all();
		
		Apprentice::create($input);

    	return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$apprentice = $this->apprentice->find($id);
		
		return view('recruit.apprentice.show', compact('apprentice'));
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
