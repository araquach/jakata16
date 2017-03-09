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
		$jakStaffs = User::where('salon_id', 1)->get();
		
		$pkStaffs = User::where('salon_id', 2)->get();
					
		// dd($jakVotes->superstylists->count());
		
		return view('superstylist.admin.index', compact('jakStaffs', 'pkStaffs'));
		
		
	}

}
