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
    
    public function create($client)
    {
        $client = Offer::where('salon_id', '>', 0)->where('client_id', $client)->firstOrFail();
        
        return view('offer.create', compact('client'));
    }
    
    public function update(OfferFormRequest $request, Offer $offer)
    {
        $offer->update($request->all());
        
        return redirect()->back()->with('message', 'You will no longer text receive offers from us - thank you');
    }
}
