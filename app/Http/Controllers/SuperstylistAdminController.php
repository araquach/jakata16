<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Superstylist;
use App\Http\Requests\SuperstylistFormRequest;
use Carbon\Carbon;
use Auth;
use DB;

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
		$jakStaffs = DB::table('users')->select('name', 'users.salon_id', DB::raw('count(superstylists.id) as votes'))
					->where('users.salon_id', '=', '1')
					->leftJoin('superstylists', function($join) {
						$join->on('users.id', '=', 'superstylists.voter_id')
						->where('superstylists.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
		
		$pkStaffs = DB::table('users')->select('name', 'users.salon_id', DB::raw('count(superstylists.id) as votes'))
					->where('users.salon_id', '=', '2')
					->leftJoin('superstylists', function($join) {
						$join->on('users.id', '=', 'superstylists.voter_id')
						->where('superstylists.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
		
		return view('superstylist.admin.index', compact('jakStaffs', 'pkStaffs'));
		
	}
	
	public function test()
	{
		$weekStart = Carbon::now()->startOfWeek();
		
		$noVotes = User::with('votes')
				->whereDoesntHave('votes', function($query)
				{
					$query->where('created_at', '>', Carbon::now()->startOfWeek());
				})->get();
		
		
		$withVotes = DB::table('users')->select('name', 'users.salon_id', DB::raw('count(superstylists.id) as vote_count'))
					->join('superstylists', function($join) {
						$join->on('users.id', '=', 'superstylists.voter_id')
						->where('superstylists.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
		
	
       		
   		$jakStaff = User::where('salon_id', 1);
   		
   		$jakStaffCount = $jakStaff->count() -1;
   		
   		$pkStaff = User::where('salon_id', 2);
   		
   		$pkStaffCount = $pkStaff->count() -1;
   		
   		
   		
   		// dd($withVotes, $noVotes, $jakStaffCount, $pkStaffCount, $weekStart);
		
		return view('superstylist.admin.test', compact('noVotes', 'withVotes', 'jakStaffCount', 'pkStaffCount', 'weekStart'));
	}

}
