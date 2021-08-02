<?php

namespace App\Controllers;

use App\Models\penyakitModel;
use App\Models\gejalaModel;
use App\Models\solusiModel;


class Admin extends BaseController
{
    protected $penyakitModel;
    protected $gejalaModel;
    protected $solusiModel;

    public function __construct()
    {
        $this->penyakitModel = new penyakitModel();
        $this->gejalaModel = new gejalaModel();
        $this->solusiModel = new solusiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'SPPK | Mulai Diagnosa'
        ];
        return view('admin/index', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'register'
        ];
        return view('auth/register', $data);
    }

    /* Menu Gejala */

    public function createGejala()
    {
        $data = [
            'title' => 'createGejala'
        ];
        return view('admin/createGejala', $data);
    }

    public function saveGejala()
    {

        $this->gejalaModel->save([
            'kodeGejala' => $this->request->getVar('kodeGejala'),
            'namaGejala' => $this->request->getVar('namaGejala')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil DItambahkan');
        return redirect()->to('admin/datagejala');
    }

    public function datagejala()
    {
        $data = [
            'title' => 'datagejala',
            'data' => $this->gejalaModel->getGejala()
        ];
        return view('admin/datagejala', $data);
    }

    public function editGejala($id)
    {
        $data = [
            'title' => 'editGejala',
            'data' => $this->gejalaModel->getGejala($id)
        ];
        return view('admin/editGejala', $data);
    }

    public function updateGejala($id)
    {
        $this->gejalaModel->replace([
            'idgejala' => $id,
            'kodeGejala' => $this->request->getVar('kodeGejala'),
            'namaGejala' => $this->request->getVar('namaGejala'),
            'ifyes' => $this->request->getVar('kodeYes'),
            'ifno' => $this->request->getVar('kodeNo'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/admin/datagejala');
    }

    public function deleteGejala($id)
    {
        $this->gejalaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/datagejala');
    }

    /* Menu Penyakit */

    public function createPenyakit()
    {
        $data = [
            'title' => 'createPenyakit'
        ];
        return view('admin/createPenyakit', $data);
    }

    public function savePenyakit()
    {

        $this->penyakitModel->save([
            'kodePenyakit' => $this->request->getVar('kodePenyakit'),
            'namaPenyakit' => $this->request->getVar('namaPenyakit')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('admin/datapenyakit');
    }

    public function datapenyakit()
    {
        $data = [
            'title' => 'datapenyakit',
            'data' => $this->penyakitModel->getPenyakit()
        ];
        return view('admin/datapenyakit', $data);
    }

    public function editPenyakit($id)
    {
        $data = [
            'title' => 'editPenyakit',
            'data' => $this->penyakitModel->getPenyakit($id)
        ];
        return view('admin/editPenyakit', $data);
    }

    public function updatePenyakit($id)
    {
        $this->penyakitModel->replace([
            'idPenyakit' => $id,
            'kodePenyakit' => $this->request->getVar('kodePenyakit'),
            'namaPenyakit' => $this->request->getVar('namaPenyakit'),
            'ifyes' => $this->request->getVar('kodeYes'),
            'ifno' => $this->request->getVar('kodeNo'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/admin/datapenyakit');
    }

    public function deletePenyakit($id)
    {
        $this->penyakitModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/datapenyakit');
    }

    /* Menu Solusi */


    public function createSolusi()
    {
        $data = [
            'title' => 'createSolusi'
        ];
        return view('admin/createSolusi', $data);
    }

    public function saveSolusi()
    {

        $this->solusiModel->save([
            'kodeSolusi' => $this->request->getVar('kodeSolusi'),
            'namaSolusi' => $this->request->getVar('namaSolusi')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil DItambahkan');
        return redirect()->to('admin/datasolusi');
    }

    public function datasolusi()
    {
        $data = [
            'title' => 'datasolusi',
            'data' => $this->solusiModel->getSolusi()
        ];
        return view('admin/datasolusi', $data);
    }

    public function editSolusi($id)
    {
        $data = [
            'title' => 'editSolusi',
            'data' => $this->solusiModel->getSolusi($id)
        ];
        return view('admin/editSolusi', $data);
    }

    public function updateSolusi($id)
    {
        $this->solusiModel->replace([
            'idsolusi' => $id,
            'kodeSolusi' => $this->request->getVar('kodeSolusi'),
            'namaSolusi' => $this->request->getVar('namaSolusi')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/admin/datasolusi');
    }

    public function deleteSolusi($id)
    {
        $this->solusiModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/datasolusi');
    }

    public function rulePakar()
    {
        $data = [
            'title' => 'Rule Pakar',
            'dataGejala' => $this->gejalaModel->getGejala(),
            'dataPenyakit' => $this->penyakitModel->getPenyakit()
        ];
        return view('admin/rulePakar', $data);
    }

    public function editRuleGejala($id)
    {
        $data = [
            'title' => 'Edit Rule',
            'data' => $this->gejalaModel->getGejala($id)
        ];
        return view('admin/editRuleGejala', $data);
    }

    public function updateRuleGejala($id)
    {
        $this->gejalaModel->replace([
            'idgejala' => $id,
            'kodeGejala' => $this->request->getVar('kodeGejala'),
            'namaGejala' => $this->request->getVar('namaGejala'),
            'ifyes' => $this->request->getVar('kodeYes'),
            'ifno' => $this->request->getVar('kodeNo'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/admin/rulePakar');
    }
}
