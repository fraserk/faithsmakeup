<?php

class sitesettingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function faq()
	{
		$data = Sitesetting::find('1');
		return View::make('settings.faq',compact('data'));
	}

	public function dofaq()
	{
		$data = Input::get('faq');
		$data = Sitesetting::first()->update(['faq'=>$data]);
		return Redirect::route('list.faq')->with('message','FAQ updated..');
	}

	public function aboutme()
	{
		$data = Sitesetting::find('1');
		return View::make('settings.aboutme',compact('data'));
	}

	public function doaboutme()
	{
		$id = Input::get('id');
		$data = Input::get('about_me');
		$data = Sitesetting::find($id)->update(['about_me'=>$data]);
		return Redirect::route('list.aboutme')->with('message','About me updated..');
	}

	public function service()
	{
		$data = Sitesetting::find('1');
		return View::make('settings.service',compact('data'));
	}

	public function doservice()
	{
		$id = Input::get('id');
		$data = Input::get('service');
		$data = Sitesetting::find($id)->update(['service'=>$data]);
		return Redirect::route('list.service')->with('message','service updated..');
	}





}
