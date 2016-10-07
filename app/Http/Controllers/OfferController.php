<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Offer;
use Mail;
use Carbon\Carbon;

class OfferController extends Controller
{
    public function __construct(Offer $offer)
    {
        $this->middleware('guest');
    }
    
    public function create($client)
    {
        $client = Offer::where('client_id', $client)->firstOrFail();
        
        return view('offer.create', compact('client'));
        
        // return dd($client);
    }
    
    public function update(Offer $offer)
    {
        $offer->update($request->all());
        
        return redirect()->back()->with('message', 'You will no longer text recieve offers from us - thank you');
    }
}
