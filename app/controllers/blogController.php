<?php

class blogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//get all blogs

		$data = Blog::orderBy('id','desc')->paginate(10);
		return View::make('blogs.index',compact('data'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
         $publish = Input::has('publish') ? true : false;

		$blog = Blog::create([
				'title' => Input::get('title'),
				'body' => Input::get('body'),
				'publish' => $publish
			]);

		return Redirect::route('backendblogs')->with('message','Blog saved');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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

		$blog = Blog::find($id);
		$data = Blog::orderBy('id','desc')->paginate(10);

		return View::make('blogs.edit',compact('data','blog'));
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
        $publish = Input::has('publish') ? true : false;
        //dd($publish);
		$blog = Blog::find($id)->update([
            
			'title' => Input::get('title'),
			'body' => Input::get('body'),
			'publish' => $publish

			]);

				return Redirect::route('backendblogs')->with('message','Blog saved');

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
