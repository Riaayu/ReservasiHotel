<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FasilitaskamarController extends BaseController
{
	public function index()
	{
		return view('login');
	}
	public function tampilFasilitaskamar(){
		if(!session()->get('sudahkahLogin')){
			return redirect()->to('/petugas');
			exit;
			}
			// cek apakah yang login bukan admin ?
			if(session()->get('level')!='admin'){
			return redirect()->to('/petugas/dashboard');
			exit;
			}
			$data['ListFasilitaskamar'] = $this->fasilitaskamar->findAll();
			return view('Fasilitaskamar/tampil-fk',$data);
	
	}
	public function tambahFasilitaskamar(){
		return view('Fasilitaskamar/tambah-fk');
	}
	public function simpanFasilitaskamar(){
		helper(['form']);
		$datanya=[
			'tipe_kamar'=>$this->request->getPost('txtTipeKamar'),
			'nama_fasilitas'=>$this->request->getPost('txtNamaFasilitas'),
			];
			$this->fasilitaskamar->insert($datanya);
			return redirect()->to('/fk/tampil');
	}
	public function hapusFasilitaskamar($id_fasilitaskamar){
		$this->fasilitaskamar->where('id_fasilitas_kamar',$id_fasilitaskamar)->delete();
		return redirect()->to('/fk/tampil');
	}
	public function editFasilitaskamar($id_fasilitaskamar){
		$data['detailFasilitaskamar']=$this->fasilitaskamar->where('id_fasilitas_kamar',$id_fasilitaskamar)->findAll();
		return view('Fasilitaskamar/edit-fk',$data);
	}
	public function updateFasilitaskamar(){
		helper(['form']);
		$data=[
		'tipe_kamar'=>$this->request->getPost('txtTipeKamar'),
		'nama_fasilitas'=>$this->request->getPost('txtInputNamaFasilitas')
		];
		$this->fasilitaskamar->update($this->request->getPost('txtInputidFasilitas'),$data);
		return redirect()->to('/fk/tampil');
	}

}
