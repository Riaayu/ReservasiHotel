<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FasilitashotelController extends BaseController
{
	public function index()
	{
		return view('login');
	}
	public function tampilFasilitashotel(){
		if(!session()->get('sudahkahLogin')){
		return redirect()->to('/petugas');
		exit;
		}
		// cek apakah yang login bukan admin ?
		if(session()->get('level')!='admin'){
		return redirect()->to('/petugas/dashboard');
		exit;
		}
		$data['ListFasilitashotel'] = $this->fasilitashotel->findAll();
		return view('Fasilitashotel/tampil-fh',$data);
	}
	public function tambahFasilitashotel(){
		return view('Fasilitashotel/tambah-fh');
	}
	public function simpanFasilitashotel(){
			helper(['form']);
		$upload = $this->request->getFile('txtFoto');
		$upload->move(WRITEPATH . '../public/gambar/');
		$datanya=[
			'nama_fasilitas'=>$this->request->getPost('txtNamaFasilitas'),
			'deskripsi'=>($this->request->getPost('txtInputDeskripsi')),
			'foto'=>$upload->getName()
			];
			$this->fasilitashotel->insert($datanya);
			return redirect()->to('/fh/tampil');
	}
	public function hapusFasilitashotel($id_fasilitashotel){
		$this->fasilitashotel->where('id_fasilitas_hotel',$id_fasilitashotel)->delete();
		return redirect()->to('/fh/tampil');
	}
	public function editFasilitashotel($id_fasilitashotel){
		$data['detailFasilitashotel']=$this->fasilitashotel->where('id_fasilitas_hotel',$id_fasilitashotel)
		->findAll();
		return view('Fasilitashotel/edit-fh',$data);
	}
	public function updateFasilitashotel(){
		helper(['form']);
		$data=[
		'nama_fasilitas'=>$this->request->getPost('txtNamaFasilitas'),
		'deskripsi'=>$this->request->getPost('txtInputDeskripsi')
		];
		$this->fasilitashotel->update($this->request->getPost('txtNamaFasilitas'),$data);
		return redirect()->to('/fh/tampil');
	}
	public function editFoto($id_fasilitashotel){
		$data['detailFasilitashotel']=$this->fasilitashotel->where('id_fasilitas_hotel',$id_fasilitashotel)->findAll();
		return view('Fasilitashotel/update-foto',$data);
	}
	public function updateFoto(){
		helper(['form']);
		$upload = $this->request->getfile('txtFoto');
		$upload->move(WRITEPATH. '../public/gambar');
		$data=['foto' =>$upload->getName()];
		$this->fasilitashotel->update($this->request->getPost('txtNamaFasilitas'),$data);
		return redirect()->to('/fh/tampil')->with('berhasil', 'Data Berhasil di Update');
	}
	
}
