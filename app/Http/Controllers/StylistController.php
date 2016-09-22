<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stylist;
use App\StylistNote;
use App\Http\Requests\StylistFormRequest;
use App\Http\Requests\StylistAdminFormRequest;
use App\Http\Requests\StylistNoteFormRequest;
use Mail;
use Carbon\Carbon;

class StylistController extends Controller {
	
	public function __construct(Stylist $stylist, StylistNote $note)
	{
		$this->middleware('auth', ['except' => ['create','store']]);
		
		$this->stylist = $stylist;
		
		$this->note = $note;
	}
	
	/** 
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
	{
		$stylists = $this->stylist->orderBy('quality')->get();
		
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
		
		$applicant = $this->stylist->get()->last();
		
		Mail::send('emails.recruitment.stylist', compact('applicant'), function($message)
   		{
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
			$message->to('adam@jakatasalon.co.uk');
       		$message->to('jimmy@jakatasalon.co.uk');
       		$message->subject('New Stylist Applicant');
   		});

    	return redirect()->back()->with('message', 'Thanks for your application! If a position is available we will contact you soon');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Stylist $stylist)
	{
		return view('recruit.stylist.show', compact('stylist'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Stylist $stylist)
	{
		return view('recruit.stylist.edit', compact('stylist'));
	}
	
	
	/**
	 * 
	 * Display the note form
	 * 
	 * @return Response
	 */
	public function createNote(Stylist $stylist, StylistNote $note) 
	{
		return view('recruit.stylist.notecreate', compact('stylist', 'note'));
	}
	
	/**
	 * Store a newly created note.
	 *
	 * @return Response
	 */
	public function storeNote(StylistNoteFormRequest $request, Stylist $stylist, StylistNote $note)
	{
		
		$input = $request->all();
		
		StylistNote::create($input);
		
		return redirect()->back()->with('message', 'Note added');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(StylistAdminFormRequest $request, Stylist $stylist)
	{
		$stylist->update($request->all());
		
		return redirect()->back()->with('message', 'The info has been updated');
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
