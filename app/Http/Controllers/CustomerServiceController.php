<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\CustomerService;
use App\Http\Requests\CustomerServiceFormRequest;
use Carbon\Carbon;
use Auth;

class CustomerServiceController extends Controller {
	
	public function __construct(CustomerService $customerService)
	{
		$this->middleware('auth');
		
		$this->customerService = $customerService;
	}
	
	/** 
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
	{
		$user = Auth::user();
		
		$users = User::with('customerservices')->where('id', '!=', Auth::user()->id)
					->where('salon_id', Auth::user()->salon_id)
					->whereDoesntHave('customerservices', function($query)
					{
						$query->where('voter_id', Auth::user()->id)
							->where('created_at', '>', Carbon::now()->startOfWeek());
					})->get();
		
		
		return view('customerservice.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(User $user)
	{
		return view('customerservice.create', compact('user'));
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

    	return redirect('/customerservice');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Superstylist $superstylist)
	{
		return view('customerservice.show', compact('customerService'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(CustomerService $customerService)
	{
		return view('customerservice.edit', compact('customerservice'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CustomerServiceAdminFormRequest $request, CustomerService $customerService)
	{
		$customerService->update($request->all());
		
		return redirect()->back()->with('message', 'The info has been updated');
	}

}
