<?php

class SmsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sms
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('sms.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sms/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sms
	 *
	 * @return Response
	 */
	public function store()
	{
		Twilio::message(Input::get('number'), Input::get('message'));
		return Redirect::action('SmsController@index')
				->with('message', 'Message succesfully sent.');
	}

	/**
	 * Display the specified resource.
	 * GET /sms/{id}
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
	 * GET /sms/{id}/edit
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
	 * PUT /sms/{id}
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
	 * DELETE /sms/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}