<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Prospect;
use Illuminate\Http\Request;
use App\Http\Requests\ProspectFormRequest;
use Mail;
use Carbon\Carbon;

class ProspectController extends Controller
{
    public function __construct(Prospect $prospect)
	{
		$this->middleware('auth', ['except' => ['freeproducts', 'create', 'store', 'consultation', 'consultationCreate', 'coansultationStore']]);
		
		$this->prospect = $prospect;
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
        
        return redirect()->back()->with('message', 'Thanks for applying - you will recieve your products soon!');
    }
    
    
    
    /**
     * Show the form for creating a new consultation prospect.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function consultation()
    {
        return view('prospect.consultation');
    }
    
    /**
     * Show the form for creating a new prospect.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function consultationCreate()
    {
        return view('prospect.consultationCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function coansultationStore(ProspectFormRequest $request)
    {
        $input = $request->all();
        
        Prospect::create($input);
        
        return redirect()->back()->with('message', 'Thanks for applying - you will recieve your products soon!');
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
