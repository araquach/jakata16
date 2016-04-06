<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Stylist;
use App\Http\Requests\StylistFormRequest;
use Illuminate\Http\Request;

class StylistController extends Controller {
	
	public function __construct(Stylist $stylist)
	{
		$this->stylist = $stylist;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$stylists = $this->stylist->get();
		
		return view('recruit.stylist.index', compact('stylists'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('recruit.stylist.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StylistFormRequest $request)
	{
		$input = $request->all();
		
		Stylist::create($input);

    	return redirect()->back()->with('message', 'Thanks for your application!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$stylist = $this->stylist->find($id);
		
		return view('recruit.stylist.show', compact('stylist'));
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
