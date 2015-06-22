<?php

class QuizesController extends \BaseController {

	/**
	 * Display a listing of quizes
	 *
	 * @return Response
	 */
	public function index()
	{
		$quizes = Quize::all();

		return View::make('quizes.index', compact('quizes'));
	}

	/**
	 * Show the form for creating a new quize
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quizes.create');
	}

	/**
	 * Store a newly created quize in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Quize::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Quize::create($data);

		return Redirect::route('quizes.index');
	}

	/**
	 * Display the specified quize.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$quize = Quize::findOrFail($id);

		return View::make('quizes.show', compact('quize'));
	}

	/**
	 * Show the form for editing the specified quize.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$quize = Quize::find($id);

		return View::make('quizes.edit', compact('quize'));
	}

	/**
	 * Update the specified quize in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$quize = Quize::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Quize::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$quize->update($data);

		return Redirect::route('quizes.index');
	}

	/**
	 * Remove the specified quize from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Quize::destroy($id);

		return Redirect::route('quizes.index');
	}

}
