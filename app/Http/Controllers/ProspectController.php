<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Prospect;
use App\ProspectNote;
use Illuminate\Http\Request;
use App\Http\Requests\ProspectFormRequest;
use Mail;
use Carbon\Carbon;

class ProspectController extends Controller
{
    public function __construct(Prospect $prospect)
	{
		$this->middleware('auth', ['except' => ['freeproducts', 'create', 'store', 'taster', 'tasterCreate', 'tasterStore']]);
		
		$this->prospect = $prospect;
	}
    
    
    /**
     * Display the prospect admin page.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function admin()
    {
        return view('prospect.admin.index');
    }
    
    /**
     * Display a list of taster applicants.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function tasterIndex()
    {
        $prospects = Prospect::where('prospect_type', '2')->orderBy('created_at', 'desc')->get();
        
        return view('prospect.admin.taster.index', compact('prospects'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    
    public function tasterShow(Prospect $prospect)
    {
        return view('prospect.admin.taster.show', compact('prospect'));
    }
    
    /**
     * Display a list of free product applicants.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function freeproductsIndex()
    {
        $prospects = Prospect::where('prospect_type', '1')->orderBy('created_at', 'desc')->get();
        
        return view('prospect.admin.freeproducts.index', compact('prospects'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    
    public function freeproductsShow(Prospect $prospect)
    {
        return view('prospect.admin.freeproducts.show', compact('prospect'));
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $prospects = $this->prospect->get();
		
		return view('prospect.index', compact('prospects'));
    }
    
    /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, Prospect $prospect)
	{
		$prospect->update($request->all());
		
		return redirect()->back()->with('message', 'Contact status updated');
	}

    
    /**
     * Show the form for creating a new prospect.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function freeproducts()
    {
        return view('prospect.freeproducts');
    }
    
    /**
     * Show the form for creating a new prospect.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('prospect.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProspectFormRequest $request)
    {
        $input = $request->all();
        
        Prospect::create($input);
        
        return redirect()->to(app('url')->previous(). '#success')->with('message', 'Thanks for applying - you will receive your products soon!');
    }
    
    
    
    /**
     * Show the form for creating a new consultation prospect.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function taster()
    {
        return view('prospect.taster');
    }
    
    /**
     * Show the form for creating a new prospect.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function tasterCreate()
    {
        return view('prospect.tasterCreate');
    }
    
    /**
	 * 
	 * Display the note form
	 * 
	 * @return Response
	 */
    public function createNote(Prospect $prospect, ProspectNote $note)
    {
        return view('prospect.admin.note_create', compact('prospect', 'note'));
    }
    
    /**
	 * Store a newly created note.
	 *
	 * @return Response
	 */
    public function storeNote(Request $request, Prospect $prospect, ProspectNote $note)
    {
        $input = $request->all();
        
        ProspectNote::create($input);
        
        return redirect()->back()->with('message', 'Note added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tasterStore(ProspectFormRequest $request)
    {
        $input = $request->all();
        
        Prospect::create($input);
        
        $recipient = Prospect::orderBy('id', 'desc')->firstOrFail()->toArray();
        
        Mail::send('emails.prospect.taster.followup1', $recipient, function($message) use ($recipient)
   		{
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
			$message->to('adam@jakatasalon.co.uk');
       		$message->subject('Test');
   		});
   		
   		Mail::send('emails.prospect.taster.to_reception', $recipient, function($message) use ($recipient)
   		{
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
			$message->to('adam@jakatasalon.co.uk');
       		$message->subject('Test');
   		});
        
        return redirect()->to(app('url')->previous(). '#success')->with('message', 'Thanks for applying - you will receive your products soon!');
    }

    
    /**
     * Show the email templates
     */
    
    public function emailFemale()
    {
        $prospect = Prospect::where('gender', 'F')->firstOrFail();
        
        return view('emails.prospect.new.female.followup1', compact('prospect'));
    }
    
    public function emailFemale2()
    {
        $prospect = Prospect::where('gender', 'F')->firstOrFail();
        
        return view('emails.prospect.new.female.followup2', compact('prospect'));
    }
    
    public function emailFemale3()
    {
        $prospect = Prospect::where('gender', 'F')->firstOrFail();
        
        return view('emails.prospect.new.female.followup3', compact('prospect'));
    }
    
    public function emailMale()
    {
        $prospect = Prospect::where('gender', 'M')->firstOrFail();
        
        return view('emails.prospect.new.male.followup1', compact('prospect'));
    }
    
    public function emailMale2()
    {
        $prospect = Prospect::where('gender', 'M')->firstOrFail();
        
        return view('emails.prospect.new.male.followup2', compact('prospect'));
    }
    
    public function emailMale3()
    {
        $prospect = Prospect::where('gender', 'M')->firstOrFail();
        
        return view('emails.prospect.new.male.followup3', compact('prospect'));
    }
    
}
