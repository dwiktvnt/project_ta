<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function index()
	{
		return view('pages/index');
	}

	public function datadiri()
	{
		return view('pages/datadiri');
	}
}
