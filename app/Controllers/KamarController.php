<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KamarController extends BaseController
{
	public function index()
	{
		return view('login');
	}
	public function tampilKamar(){
		if(!session()->get('sudahkahLogin')){
		return redirect()->to('/petugas');
		exit;
		}
		// cek apakah yang login bukan admin ?
		if(session()->get('level')!='admin'){
		return redirect()->to('/petugas/dashboard');
		exit;
		}
		$data['ListKamar'] = $this->kamar->findAll();
		return view('Kamar/tampil-kamar',$data);
	}
	public function tambahKamar(){
		return view('Kamar/tambah-kamar');
	}
	public function simpanKamar(){
			helper(['form']);
		$upload = $this->request->getFile('txtFoto');
		$upload->move(WRITEPATH . '../public/gambar/');
		$datanya=[
			'no_kamar'=>$this->request->getPost('txtNoKamar'),
			'tipe_kamar'=>$this->request->getPost('txtInputTipeKamar'),
			'deskripsi'=>($this->request->getPost('txtInputDeskripsi')),
			'tarif'=>$this->request->getPost('txtTarif'),
			'jumlah_kamar'=>$this->request->getPost('txtJumlah_kamar'),
			'foto'=>$upload->getName()
			];
			$this->kamar->insert($datanya);
			return redirect()->to('/kamar/tampil');
	}
	public function editKamar($idkamar){
		$data['detailKamar']=$this->kamar->where('id_kamar',$idkamar)->findAll();
		return view('Kamar/edit-kamar',$data);
	}
	public function hapusKamar($idKamar){
			$Datakamar = New Kamar;
		$Datakamar->where('id_kamar',$idKamar)->delete();
		return redirect()->to('/kamar/tampil');
	}
	public function updateFoto(){
		helper(['form']);
		$upload = $this->request->getfile('txtFoto');
		$upload->move(WRITEPATH. '../public/gambar');
		$data=['foto' =>$upload->getName()];
		$this->kamar->update($this->request->getPost('txtNoKamar'),$data);
		return redirect()->to('/kamar/tampil')->with('berhasil', 'Data Berhasil di Update');
	}
	public function updateKamar(){
		helper(['form']);
		$data=[
		'tipe_kamar'=>$this->request->getPost('txtInputTipeKamar'),
		'deskripsi'=>$this->request->getPost('txtInputDeskripsi'),
		'tarif'=>$this->request->getPost('txtTarif'),
		'jumlah_kamar'=>$this->request->getPost('txtJumlah_kamar')
		];
		$this->kamar->update($this->request->getPost('txtNoKamar'),$data);
		return redirect()->to('/kamar/tampil');
	}
	public function editFoto($idkamar){
		$data['detailKamar']=$this->kamar->where('id_kamar',$idkamar)->findAll();
		return view('Kamar/update-foto',$data);
	}

}
