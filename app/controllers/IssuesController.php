<?php

class IssuesController extends \BaseController {

	public function update($id)
	{
		$issue = Issue::findOrFail($id);

		$issue->issue = Input::get('issue');
		$issue->generation_id = Input::get('generation_id');
		$issue->save();
	}

	public function destroy($id)
	{
		Issue::destroy($id);
	}

}
