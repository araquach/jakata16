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
        $this->client_id = $offer;
    }
    
    public function create(Offer $offer)
    {
        return view('offer', compact('offer'));
    }
    
    public function store(Offer $request)
    {
        $input = $request->all();
        
        Offer::create($input);
        
        return redirect()->back()->with('message', 'You will no longer text recieve offers from us - thank you');
    }
}
