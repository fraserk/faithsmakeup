<?php

class staticController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function about()
	{
		return View::make('static.about');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function faq() 
	{
		return View::make('static.faq');
	}

	public function contact() 
	{
		return View::make('static.contact');
	}

	public function sendcontact()
		{
			$data = array( 

				'name'=>Input::get('name'),
				'detail'=>Input::get('detail'),
				'email' => Input::get('email'),
				'subject' => Input::get('subject')
				);
			$rules =  array(
				'name'=>'required',
				'detail'=> 'required',
				'email' =>'required|email',
				'subject' => 'required'

				);

			$v = Validator::make($data, $rules);
			if($v->fails())
			{
				return  Redirect::route('contact')->withErrors($v)->withinput();

			}
			Mail::send('static.message',$data,function($message)
			{
				$message->from(Input::get('email'));
				$message->to('faith@faitsmakeup.com','faith')->subject('Faithsmakeup.com - Message');



			});
		return  Redirect::route('contact')->with('message','Thank You, I have receieve your message.');

		}


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
