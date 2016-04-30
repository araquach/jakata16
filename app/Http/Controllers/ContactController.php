<?php namespace App\Http\Controllers;
	  use App\Http\Requests\ContactFormRequest;
	  use Mail;

class ContactController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Contact Controller
	|--------------------------------------------------------------------------
	|
	| 
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	public function create()
	{
		return view('contact.contact');
	}
	
	public function sendEmail(ContactFormRequest $request)
	{
		$input = $request->all();
		
		Mail::send('emails.contact', $input, function($message)
   		{
       		$message->from('adam@jakatasalon.co.uk', 'Jakata');

       		$message->to('adam@jakatasalon.co.uk');
   		});
		
		return Redirect()->back()->with('message', 'Thanks for contacting us!');
     
	}
}
