<?php namespace App\Http\Controllers;
	  use App\Http\Requests\ContactFormRequest;

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

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('contact.contact');
	}
	
	public function store(ContactFormRequest $request)
	{
		\Mail::send('contact.contact',
		        array(
		            'name' => $request->get('first_name'),
		            'email' => $request->get('email'),
		            'email_confirm' => $request->get('email_confirm'),
		            'user_message' => $request->get('body')
		        ), function($message)
		    {
		        $message->from('adam@jakata.com');
		        $message->to('adam@jakata.com', 'Admin')->subject('TODOParrot Feedback');
		    });
		
		  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
	}
	
	
}
