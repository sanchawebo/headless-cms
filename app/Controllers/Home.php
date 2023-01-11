<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$i = 0;
		if ($i == 1) {
			d('Test');
		}
		return view('welcome_message');
	}
}
