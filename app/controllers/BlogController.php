<?php

class BlogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$postings = DB::table('blog')->orderBy('post_id', 'desc')->paginate(10);

		return View::make('blog.index', ['postings' => $postings]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('blog.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$posting = new BlogPosting;
		$posting->blog_title = Input::get('blog_title');
		$posting->blog_content = Input::get('blog_content');
		$posting->save();

		return Redirect::route('blog.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($blog_title)
	{
		$posting = DB::table('blog')->where('blog_title', $blog_title)->first();

		return View::make('blog.show', ['posting' => $posting]);
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
