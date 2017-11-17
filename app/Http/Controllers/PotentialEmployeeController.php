<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PotentialEmployee;
use App\Http\Requests\PotentialEmployeeFormRequest;
use Mail;


class PotentialEmployeeController extends Controller
{
    public function __construct(PotentialEmployee $potential)
	{
        $this->middleware('auth', ['except' => 'create']);
		
		$this->potential = $potential;
	}
    
    
    public function index()
    {
        $potentials = PotentialEmployee::where('salon', 1)->orderBy('id', 'desc')->get();
        
        return view('potential_employee.index', compact('potentials'));
    }
    
    
    
    public function create()
    {
        return view('potential_employee.create');
    }
    
    
    
    public function edit(PotentialEmployee $potential)
    {
        return view('potential_employee.edit', compact('potential'));
    }
    
    
    
    public function update(Request $request, PotentialEmployee $potential)
	{
		$potential->update($request->all());
		
		return redirect()->back()->with('message', 'Contact status updated');
	}
    
    
    public function store(PotentialEmployeeFormRequest $request)
    {
        $input = $request->all();
        
        PotentialEmployee::create($input);
        
        $applicant = PotentialEmployee::where('salon', 1)->get()->last();
		
		Mail::send('emails.potential_employee', compact('applicant'), function($message)
   		{
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
			$message->to('adam@jakatasalon.co.uk');
       		// $message->to('jimmy@jakatasalon.co.uk');
       		$message->subject('New Potential Employee');
   		});
    
        return redirect()->back()->with('message', 'Thanks! We\'ll be in touch soon');
    }
}
