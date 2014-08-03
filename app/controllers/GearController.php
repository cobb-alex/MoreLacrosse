<?php

class GearController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$postings = DB::table('gearviews')->orderBy('post_id', 'desc')->paginate(10);
		
		$all = DB::table('gearviews')->count();
		$gloves = DB::table('gearviews')->where('category', '2')->count();
		$elbows = DB::table('gearviews')->where('category', '3')->count();
		$shoulders = DB::table('gearviews')->where('category', '4')->count();
		$shafts = DB::table('gearviews')->where('category', '5')->count();
		$heads = DB::table('gearviews')->where('category', '6')->count();
		$helmets = DB::table('gearviews')->where('category', '7')->count();
		$misc = DB::table('gearviews')->where('category', '1')->count();

		return View::make('gear.index', ['postings' => $postings])->with('gloves', $gloves)->with('elbows', $elbows)->with('shoulders', $shoulders)->with('shafts', $shafts)->with('heads', $heads)->with('helmets', $helmets)->with('misc', $misc)->with('all', $all);
	}

	public function gloves()
	{
		$postings = DB::table('gearviews')->where('category', '2')->orderBy('post_id', 'desc')->paginate(10);
		
		$all = DB::table('gearviews')->count();
		$gloves = DB::table('gearviews')->where('category', '2')->count();
		$elbows = DB::table('gearviews')->where('category', '3')->count();
		$shoulders = DB::table('gearviews')->where('category', '4')->count();
		$shafts = DB::table('gearviews')->where('category', '5')->count();
		$heads = DB::table('gearviews')->where('category', '6')->count();
		$helmets = DB::table('gearviews')->where('category', '7')->count();
		$misc = DB::table('gearviews')->where('category', '1')->count();

		return View::make('gear.index', ['postings' => $postings])->with('gloves', $gloves)->with('elbows', $elbows)->with('shoulders', $shoulders)->with('shafts', $shafts)->with('heads', $heads)->with('helmets', $helmets)->with('misc', $misc)->with('all', $all);
	}

	public function elbows()
	{
		$postings = DB::table('gearviews')->where('category', '3')->orderBy('post_id', 'desc')->paginate(10);
		
		$all = DB::table('gearviews')->count();
		$gloves = DB::table('gearviews')->where('category', '2')->count();
		$elbows = DB::table('gearviews')->where('category', '3')->count();
		$shoulders = DB::table('gearviews')->where('category', '4')->count();
		$shafts = DB::table('gearviews')->where('category', '5')->count();
		$heads = DB::table('gearviews')->where('category', '6')->count();
		$helmets = DB::table('gearviews')->where('category', '7')->count();
		$misc = DB::table('gearviews')->where('category', '1')->count();

		return View::make('gear.index', ['postings' => $postings])->with('gloves', $gloves)->with('elbows', $elbows)->with('shoulders', $shoulders)->with('shafts', $shafts)->with('heads', $heads)->with('helmets', $helmets)->with('misc', $misc)->with('all', $all);
	}

	public function shoulders()
	{
		$postings = DB::table('gearviews')->where('category', '4')->orderBy('post_id', 'desc')->paginate(10);

		$all = DB::table('gearviews')->count();
		$gloves = DB::table('gearviews')->where('category', '2')->count();
		$elbows = DB::table('gearviews')->where('category', '3')->count();
		$shoulders = DB::table('gearviews')->where('category', '4')->count();
		$shafts = DB::table('gearviews')->where('category', '5')->count();
		$heads = DB::table('gearviews')->where('category', '6')->count();
		$helmets = DB::table('gearviews')->where('category', '7')->count();
		$misc = DB::table('gearviews')->where('category', '1')->count();

		return View::make('gear.index', ['postings' => $postings])->with('gloves', $gloves)->with('elbows', $elbows)->with('shoulders', $shoulders)->with('shafts', $shafts)->with('heads', $heads)->with('helmets', $helmets)->with('misc', $misc)->with('all', $all);
	}

	public function shafts()
	{
		$postings = DB::table('gearviews')->where('category', '5')->orderBy('post_id', 'desc')->paginate(10);

		$all = DB::table('gearviews')->count();
		$gloves = DB::table('gearviews')->where('category', '2')->count();
		$elbows = DB::table('gearviews')->where('category', '3')->count();
		$shoulders = DB::table('gearviews')->where('category', '4')->count();
		$shafts = DB::table('gearviews')->where('category', '5')->count();
		$heads = DB::table('gearviews')->where('category', '6')->count();
		$helmets = DB::table('gearviews')->where('category', '7')->count();
		$misc = DB::table('gearviews')->where('category', '1')->count();

		return View::make('gear.index', ['postings' => $postings])->with('gloves', $gloves)->with('elbows', $elbows)->with('shoulders', $shoulders)->with('shafts', $shafts)->with('heads', $heads)->with('helmets', $helmets)->with('misc', $misc)->with('all', $all);
	}

	public function heads()
	{
		$postings = DB::table('gearviews')->where('category', '6')->orderBy('post_id', 'desc')->paginate(10);

		$all = DB::table('gearviews')->count();
		$gloves = DB::table('gearviews')->where('category', '2')->count();
		$elbows = DB::table('gearviews')->where('category', '3')->count();
		$shoulders = DB::table('gearviews')->where('category', '4')->count();
		$shafts = DB::table('gearviews')->where('category', '5')->count();
		$heads = DB::table('gearviews')->where('category', '6')->count();
		$helmets = DB::table('gearviews')->where('category', '7')->count();
		$misc = DB::table('gearviews')->where('category', '1')->count();

		return View::make('gear.index', ['postings' => $postings])->with('gloves', $gloves)->with('elbows', $elbows)->with('shoulders', $shoulders)->with('shafts', $shafts)->with('heads', $heads)->with('helmets', $helmets)->with('misc', $misc)->with('all', $all);
	}

	public function helmets()
	{
		$postings = DB::table('gearviews')->where('category', '7')->orderBy('post_id', 'desc')->paginate(10);

		$all = DB::table('gearviews')->count();
		$gloves = DB::table('gearviews')->where('category', '2')->count();
		$elbows = DB::table('gearviews')->where('category', '3')->count();
		$shoulders = DB::table('gearviews')->where('category', '4')->count();
		$shafts = DB::table('gearviews')->where('category', '5')->count();
		$heads = DB::table('gearviews')->where('category', '6')->count();
		$helmets = DB::table('gearviews')->where('category', '7')->count();
		$misc = DB::table('gearviews')->where('category', '1')->count();

		return View::make('gear.index', ['postings' => $postings])->with('gloves', $gloves)->with('elbows', $elbows)->with('shoulders', $shoulders)->with('shafts', $shafts)->with('heads', $heads)->with('helmets', $helmets)->with('misc', $misc)->with('all', $all);
	}

	public function other()
	{
		$postings = DB::table('gearviews')->where('category', '1')->orderBy('post_id', 'desc')->paginate(10);

		$all = DB::table('gearviews')->count();
		$gloves = DB::table('gearviews')->where('category', '2')->count();
		$elbows = DB::table('gearviews')->where('category', '3')->count();
		$shoulders = DB::table('gearviews')->where('category', '4')->count();
		$shafts = DB::table('gearviews')->where('category', '5')->count();
		$heads = DB::table('gearviews')->where('category', '6')->count();
		$helmets = DB::table('gearviews')->where('category', '7')->count();
		$misc = DB::table('gearviews')->where('category', '1')->count();

		return View::make('gear.index', ['postings' => $postings])->with('gloves', $gloves)->with('elbows', $elbows)->with('shoulders', $shoulders)->with('shafts', $shafts)->with('heads', $heads)->with('helmets', $helmets)->with('misc', $misc)->with('all', $all);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$password = "ml2.0";
		return View::make('gear.create')->with('password', $password);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$posting = new GearPosting;
		$posting->gear_title = Input::get('gear_title');
		$posting->gear_content = Input::get('gear_content');
		$posting->category = Input::get('category');
		$posting->save();

		return Redirect::route('gear.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($gear_title)
	{
		$posting = DB::table('gearviews')->where('gear_title', $gear_title)->first();

		return View::make('gear.show', ['posting' => $posting]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
