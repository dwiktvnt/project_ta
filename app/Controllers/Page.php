<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'SPPK | Home'
		];
		return view('pages/index', $data);
	}

	public function datadiri()
	{
		$data = [
			'title' => 'SPPK | Data diri'
		];
		return view('pages/datadiri', $data);
	}
}
