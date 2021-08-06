<?php

namespace App\Controllers;

use App\Models\penyakitModel;
use App\Models\gejalaModel;
use App\Models\historyModel;
use App\Models\profileModel;


class Admin extends BaseController
{
    protected $penyakitModel;
    protected $gejalaModel;
    protected $historyModel;
    protected $profileModel;

    public function __construct()
    {
        $this->penyakitModel = new penyakitModel();
        $this->gejalaModel = new gejalaModel();
        $this->historyModel = new historyModel();
        $this->profileModel = new profileModel();
        helper('date');
    }

    public function index($kode = FALSE)
    {

        if (!$kode) {
            $kode = 'G01';
            $data = $this->gejalaModel->getKode($kode);
            $history = '';
        } elseif ($kode == 'P01' || $kode == 'P02' || $kode == 'P03' || $kode == 'P04' || $kode == 'P05' || $kode == 'P06' || $kode == 'P07' || $kode == 'P08' || $kode == 'P09' || $kode == 'P10' || $kode == 'P11') {
            return redirect()->to('admin/hasil/' . $kode);
        } else {
            $data = $this->gejalaModel->getKode($kode);
            $history = '';
        }

        $data = [
            'title' => 'SPPK | Mulai Diagnosa',
            'data' => $data,
            'history' => $history
        ];
        return view('admin/index', $data);
    }

    public function savejwb()
    {
        list($value1, $value2) = explode('|', $this->request->getVar('jawaban'));

        $this->historyModel->save([
            'email' => $this->request->getVar('email'),
            'pertanyaan' => $this->request->getVar('pertanyaan'),
            'jawaban' => $value1,
            'next' => $value2,
        ]);
        return redirect()->to('admin/' . $value2);
    }

    public function hasil($kode)
    {
        $email = user()->email;

        // join table history dengan gejala
        $db      = \Config\Database::connect();
        $builder = $db->table('history');
        $builder->where('email', $email);
        $builder->select('*');
        $builder->join('gejala', 'gejala.kodeGejala = history.pertanyaan');
        $query = $builder->get();

        $data = [
            'title' => 'Hasil Diagnosa',
            'data' => $this->penyakitModel->getKode($kode),
            'history' => $query->getResultArray()
        ];

        return view('admin/hasildiagnosa', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile',
        ];

        return view('admin/profile', $data);
    }

    public function editProfile($id)
    {
        $data = [
            'title' => 'Edit Profile',
            'data' => $this->profileModel->getData($id)
        ];
        return view('admin/editprofile', $data);
    }

    public function updateProfile($id)
    {
        $this->profileModel->save([
            'id' => $id,
            'fullname' => $this->request->getVar('fullname'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/admin/profile');
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
        return redirect()->to('admin/dataGejala');
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

        return redirect()->to('/admin/dataGejala');
    }

    public function deleteGejala($id)
    {
        $this->gejalaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/dataGejala');
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
            'namaPenyakit' => $this->request->getVar('namaPenyakit'),
            'solusi' => $this->request->getVar('solusi')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('admin/dataPenyakit');
    }

    public function dataPenyakit()
    {
        $data = [
            'title' => 'datapenyakit',
            'data' => $this->penyakitModel->getPenyakit()
        ];
        return view('admin/dataPenyakit', $data);
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
            'solusi' => $this->request->getVar('solusi'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/admin/dataPenyakit');
    }

    public function deletePenyakit($id)
    {
        $this->penyakitModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/dataPenyakit');
    }

    public function rulePakar()
    {
        $data = [
            'title' => 'Rule Pakar',
            'data' => $this->gejalaModel->getGejala(),
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

    public function riwayat()
    {
        // join table history dengan gejala
        $db      = \Config\Database::connect();
        $builder = $db->table('history');
        $builder->select('*');
        $builder->selectMax('idPilihan');
        $builder->join('users', 'users.email = history.email');
        // $builder->join('penyakit', 'penyakit.kodePenyakit = history.next');
        $query = $builder->get();

        $data = [
            'title' => 'Riwayat Diagnosa',
            'data' => $query->getResultArray()
        ];

        return view('admin/riwayat', $data);
    }
}
