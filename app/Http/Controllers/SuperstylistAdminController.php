<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Superstylist;
use App\Http\Requests\SuperstylistFormRequest;
use Carbon\Carbon;
use Auth;

class SuperstylistAdminController extends Controller {
	
	public function __construct(Superstylist $superstylist)
	{
		$this->middleware('admin');
		
		$this->superstylist = $superstylist;
	}
	
	/** 
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
	{
		
		$jakStaffs = User::with('votes')->where('salon_id', 1)->get();
		
		$pkStaffs = User::with('votes')->where('salon_id', 2)->get();
					
		return view('superstylist.admin.index', compact('jakStaffs', 'pkStaffs'));
		
	}
	
	public function test()
	{
		$recipients = User::with('votes')
       		        ->whereDoesntHave('votes', function($query)
					{
						$query->where('created_at', '>', Carbon::now()->startOfWeek());
					})->get();
       		
   		$jakStaffCount = User::where('salon_id', 1);
   		
   		$pkStaffCount = User::where('salon_id', 2);
		
		return view('superstylist.admin.test', compact('recipients', 'jakStaffCount', 'pkStaffCount'));
	}

}
