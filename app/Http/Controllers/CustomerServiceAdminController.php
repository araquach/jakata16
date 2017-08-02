<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\CustomerService;
use App\Http\Requests\SuperstylistFormRequest;
use Carbon\Carbon;
use Auth;
use DB;

class CustomerServiceAdminController extends Controller {
	
	public function __construct(CustomerService $customerService)
	{
		$this->middleware('admin');
		
		$this->CustomerService = $customerService;
	}
	
	/** 
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
	{
		$jakStaffs = DB::table('users')->select('name', 'users.salon_id', DB::raw('count(customerservices.id) as votes'))
					->where('users.salon_id', '=', '1')
					->leftJoin('customerservices', function($join) {
						$join->on('users.id', '=', 'customerservices.voter_id')
						->where('customerservices.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
		
		$pkStaffs = DB::table('users')->select('name', 'users.salon_id', DB::raw('count(customerservices.id) as votes'))
					->where('users.salon_id', '=', '2')
					->leftJoin('customerservices', function($join) {
						$join->on('users.id', '=', 'customerservices.voter_id')
						->where('customerservices.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
		
		return view('customerservice.admin.index', compact('jakStaffs', 'pkStaffs'));
		
	}
	
	public function test()
	{
		$weekStart = Carbon::now()->startOfWeek();
		
		$recipients = DB::table('users')->select('users.email', 'users.salon_id', DB::raw('count(customerservices.id) as votes'))
					->leftJoin('customerservices', function($join) {
						$join->on('users.id', '=', 'customerservices.voter_id')
						->where('customerservices.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
   		
   		
   		
   		dd($recipients);
		
		return view('customerservice.admin.test', compact('noVotes', 'withVotes', 'jakStaffCount', 'pkStaffCount', 'weekStart'));
	}

}
