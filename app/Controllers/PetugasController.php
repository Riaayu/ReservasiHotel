<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PetugasController extends BaseController
{
	public function index()
	{
		return view('login');
	}
	public function login(){
		$syarat = [
			'username' => $this->request->getPost('txtUsername'),
			'password' => md5($this->request->getPost('txtPassword'))
		];
		$Userpetugas =
		$this->petugas->where($syarat)->find();
		if (count($Userpetugas)==1) {
			$session_data=[
				'username' => $Userpetugas[0]['username'],
				'id_petugas' => $Userpetugas[0]['id_petugas'],
				'level' => $Userpetugas[0]['level'],
				'sudahkahLogin' => TRUE 
			];
			session()->set($session_data);
			return redirect()->to('/petugas/dashboard');
		}else{
			return redirect()->to('/petugas');
		}
	}
	public function logout(){
		return redirect()->to('/');
	}

	//function untuk Petugas
	public function tampilPetugas(){
		$data['ListPetugas'] = $this->petugas->findAll();
		return view('Petugas/tampil-petugas',$data);
	}	
	public function tambahPetugas(){
		return view('Petugas/tambah-petugas');
	}
	public function simpanPetugas(){
		helper(['form']);
		$datanya=[
			'nama_petugas'=>$this->request->getPost('txtInputNama'),
			'username'=>$this->request->getPost('txtInputUser'),
			'password'=>md5($this->request->getPost('txtInputPassword')),
			'level'=>$this->request->getPost('selectLevel')
			];
			$this->petugas->insert($datanya);
			return redirect()->to('/petugas/tampil');
	}
	public function editPetugas($idPetugas){
				$data['detailPetugas']=$this->petugas->where('id_petugas',$idPetugas)->findAll();
				return view('Petugas/edit-petugas',$data);
	}
	public function updatePetugas(){
		if($this->request->getPost('txtInputPassword')){
		$data=[
		'nama_petugas'=>$this->request->getPost('txtInputNama'),
		'password'=>md5($this->request->getPost('txtInputPassword')),
		'level'=>$this->request->getPost('selectLevel')
		];
		} else {
		$data=[
		'nama_petugas'=>$this->request->getPost('txtInputNama'),
		'level'=>$this->request->getPost('selectLevel')
		];
		}
		$this->petugas->update($this->request->getPost('txtInputUser'),$data);
		return redirect()->to('/petugas/tampil');
	}
	public function hapusPetugas($idPetugas){
			$this->petugas->where('id_petugas',$idPetugas)->delete();
			return redirect()->to('/petugas/tampil');
	}

}
