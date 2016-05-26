<?php namespace App\Http\Controllers;
use App\Feedback;
use App\FeedbackClient;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Pages Controller
	|--------------------------------------------------------------------------
	|
	| This page renders the main pages of the site
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
	public function index()
	{
		$feedbacks = Feedback::with('client')->where('publish', '=', '1')->orderByRaw("RAND()")->get();
	
		return view('pages.home', compact('feedbacks'));
	}
	
	public function details()
	{
		return view('pages.details');
	}
	
	public function news()
	{
		return view('pages.news');
	}
	
	public function oldnews()
	{
		return view('pages.oldnews');
	}
	
	public function offers()
	{
		return view('pages.offers');
	}
	
	public function prices()
	{
		return view('pages.prices');
	}
	
	public function recruitment()
	{
		return view('pages.recruitment');
	}
	
	public function team()
	{
		return view('pages.team');
	}
	
	public function kebelo()
	{
		return view('pages.kebelo');
	}

}
