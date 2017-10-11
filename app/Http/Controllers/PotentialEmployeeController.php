<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PotentialEmployee;
use App\PotentialEmployeeFormRequest;


class PotentialEmployeeController extends Controller
{
    public function create()
    {
        return view('potential_employee.create');
    }
    
    public function store(PotentialEmployeeFormRequest $request)
    {
        $input = $request->all();
        
        PotentialEmployee::create($input);
        
        $applicant = $this->stylist->get()->last();
		
		Mail::send('emails.recruitment.stylist', compact('applicant'), function($message)
   		{
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
			$message->to('adam@jakatasalon.co.uk');
       		$message->to('jimmy@jakatasalon.co.uk');
       		$message->subject('New Potential Employee');
   		});
    
        return redirect()->back()->with('message', 'Thanks! We\'ll be in touch soon');
    }
}
