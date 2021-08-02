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
	protected $solusiModel;
	protected $riwayatModel;

	public function __construct()
	{
		$this->penyakitModel = new penyakitModel();
		$this->gejalaModel = new gejalaModel();
		$this->solusiModel = new solusiModel();
		$this->riwayatModel = new riwayatModel();
	}

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

	public function saveData()
	{
		$this->riwayatModel->save([
			'nama' => $this->request->getVar('nama'),
			'tanggal_lahir' => $this->request->getVar('tanggalLahir'),
			'email' => $this->request->getVar('email'),
			'jenis_kelamin' => $this->request->getVar('jk'),
			'alamat' => $this->request->getVar('alamat'),
		]);
		// session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
		return redirect()->to('page/konsultasi');
	}

	public function konsultasi($kode = FALSE)
	{
		if (!$kode) {
			$kode = 'G01';
		}

		$data = [
			'title' => 'SPPK | Konsultasi',
			'data' => $this->gejalaModel->getKode($kode)
		];
		return view('pages/konsultasi', $data);
	}

	public function saveJawaban()
	{
		$this->riwayatModel->save([
			'email' => $this->request->getVar('email'),
			'pertanyaan' => $this->request->getVar('pertanyaan'),
			'jawaban' => $this->request->getVar('jawaban'),
		]);
		// session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
		return redirect()->to('page/konsultasi');
	}

	public function hasilDiagnosa()
	{
		$data = [
			'title' => 'SPPK | Hasil Diagnosa'
		];
		return view('pages/hasilDiagnosa', $data);
	}
}
