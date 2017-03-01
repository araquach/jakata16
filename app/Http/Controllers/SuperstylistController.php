<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Superstylist;
use App\Http\Requests\SuperstylistFormRequest;
use Carbon\Carbon;
use Auth;

class SuperstylistController extends Controller {
	
	public function __construct(Superstylist $superstylist)
	{
		$this->middleware('auth');
		
		$this->superstylist = $superstylist;
	}
	
	/** 
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
	{
		$user = Auth::user();
		
		$superstylists = $this->superstylist->where('user_id', $user)->get();
		
		return view('superstylist.index', compact('superstylists'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(User $user)
	{
		return view('superstylist.create', compact('user'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SuperstylistFormRequest $request)
	{
		$input = $request->all();
		
		Superstylist::create($input);

    	return redirect()->back()->with('message', 'Thanks for voting for your Super Stylist of the month!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Superstylist $superstylist)
	{
		return view('superstylist.show', compact('superstylist'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Superstylist $superstylist)
	{
		return view('superstylist.edit', compact('superstylist'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(SuperstylistAdminFormRequest $request, Superstylist $stylist)
	{
		$superstylist->update($request->all());
		
		return redirect()->back()->with('message', 'The info has been updated');
	}

}
