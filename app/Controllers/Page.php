<?php

namespace App\Controllers;

use App\Models\riwayatModel;
use App\Models\penyakitModel;
use App\Models\gejalaModel;
use App\Models\solusiModel;


class Page extends BaseController
{
	protected $penyakitModel;
	protected $gejalaModel;

	public function __construct()
	{
		$this->penyakitModel = new penyakitModel();
		$this->gejalaModel = new gejalaModel();
	}

	public function index()
	{
		$data = [
			'title' => 'SPPK | Home',
			'data' => $this->gejalaModel->getGejalaLimit(),
			'dataPenyakit' => $this->penyakitModel->getPenyakit()
		];
		return view('pages/index', $data);
	}
}
