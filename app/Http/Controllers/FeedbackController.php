<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\FeedbackClient;
use App\Http\Requests\FeedbackFormRequest;
use Mail;
use App\Http\Requests;
use Carbon\Carbon;

class FeedbackController extends Controller
{
	public function __construct(Feedback $feedback)
	{
		$this->middleware('auth', ['except' => ['create','store']]);
		
		$this->feedback = $feedback;
	}

	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FeedbackClient $client)
    {
        return view('feedback.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackFormRequest $request)
    {
        $input = $request->all();
        
		Feedback::create($input);
		
		$recipient = Feedback::with('client')->orderBy('id', 'DESC')->first();
		
		$recipient = $recipient->client->toArray();
		
		Mail::send(['text' => 'sms.feedback'], $recipient, function($message) use ($recipient)
   		{
       		$message->from('enquiries@jakatasalon.co.uk');
       		$message->subject('JAKATA');
       		$message->to($recipient['mobile'] . '@smsid.textapp.net');
   		});
	    
	    return redirect()->back()->with('message', 'Thank you for your feedback, it\'s really appreciated. Your voucher is on it\'s way. See you in the salon soon!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}