<?php

class SearchController extends \BaseController {

	public function search()
	{
		$keyword = Input::get('keyword');
		return View::make('public.search')->with('keyword', $keyword);
	}
}