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
		// $feedbacks = Feedback::where('salon_id', '=', '1')->where('publish', '=', '1')->orderByRaw("RAND()")->get();
	
		return view('pages.home');
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
	
	public function trainee()
	{
		return view('pages.trainee');
	}
	
	public function jimmy()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Jimi Sharpe')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.jimmy', compact('feedbacks'));
	}
	
	public function maisie()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Maisie Thompson')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.maisie', compact('feedbacks'));
	}
	
	public function natalie()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Natalie Doxey')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.natalie', compact('feedbacks'));
	}
	
	public function vikki()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Vicky Rowland')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.vikki', compact('feedbacks'));
	}
	
	public function lauraC()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Laura Crumplin')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.lauraC', compact('feedbacks'));
	}
	
	public function lauraM()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Laura Minett')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.lauraM', compact('feedbacks'));
	}
	
	public function matt()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Matthew Lane')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.matt', compact('feedbacks'));
	}
	
	public function caleb()
	{
		$feedbacks = FeedbackClient::with('feedback')->where('stylist', '=', 'Caleb Barrie')
			->whereHas('feedback', function($query)
			{
				$query->where('publish', '=', '1');
			}
			)->orderByRaw("RAND()")->get();
		
		return view('pages.team.caleb', compact('feedbacks'));
	}
	
	public function kebelo()
	{
		return view('pages.kebelo');
	}
	
	public function test()
	{
		return view('pages.test');
	}

}
