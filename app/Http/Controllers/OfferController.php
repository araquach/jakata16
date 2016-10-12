<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Offer;
use App\Http\Requests\OfferFormRequest;
use Mail;
use Carbon\Carbon;

class OfferController extends Controller
{
    public function __construct(Offer $offer)
    {
        $this->middleware('guest');
        
        $this->offer = $offer;
    }
    
    public function show($client)
    {
        $offer = $this->offer->where('salon_id', 1)->where('client_id', $client)->firstOrFail();
        
        return view('offer.show', compact('offer'));
    }
    
    public function update(OfferFormRequest $request, $client)
    {
        $offer = $this->offer->where('salon_id', 1)->where('client_id', $client)->firstOrFail();
        
        $offer->opt_out = $request->get('opt_out');
        
        $offer->save();
		
		return redirect()->back()->with('message', 'You will no longer receive text offers - thank you');
		
		// return dd($offer);
    }    
        
}
