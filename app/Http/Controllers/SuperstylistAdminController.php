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
		$pkStaffCount = User::where('salon_id', 1)->count() -1;
		
		$jakStaffCount = User::where('salon_id', 2)->count() -1;
		
		$jakVotes = User::with('superstylists')->where('salon_id', 1)
				->whereHas('superstylists', function($query)
					{
						$query->where('created_at', '>', Carbon::now()->startOfWeek());
					})->get();
		
		$pkVotes = User::with('superstylists')->where('salon_id', 2)
				->whereHas('superstylists', function($query)
					{
						$query->where('created_at', '>', Carbon::now()->startOfWeek());
					})->get();
		// dd($votes);
		
		return view('superstylist.admin.index', compact('pkStaffCount', 'pkVotes', 'jakStaffCount', 'jakVotes'));
		
		
	}

}
