<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpParser\Node\Expr\Cast\Array_;

class ReservasiController extends BaseController
{
	public function index()
	{
		return view('login');
	}
	public function tampilReservasi(){
		if(!session()->get('sudahkahLogin')){
		return redirect()->to('/petugas');
		exit;
		}
		// cek apakah yang login bukan admin ?
		if(session()->get('level')!='resepsionis'){
		return redirect()->to('/petugas/dashboard');
		exit;
		}
		$data['ListReservasi'] = $this->reservasi->findAll();
		return view('Reservasi/tampil-reservasi',$data);
	}

	
	public function in($idreservasi){
        $datanya = ['status' => 'cek-in'];
        $this->reservasi->update($idreservasi, $datanya);
        return redirect()->to(site_url('/reservasi/tampil'))->with('berhasil','Data berhasil diupdate');
    }

    public function out($idreservasi){
        $datanya = ['status' => 'cek-out'];
        $this->reservasi->update($idreservasi, $datanya);
        return redirect()->to(site_url('/reservasi/tampil'))->with('berhasil','Data berhasil diupdate');
    }
	public function selesai($idreservasi){
        $datanya = ['status' => 'selesai'];
        $this->reservasi->update($idreservasi, $datanya);
        return redirect()->to(site_url('/reservasi/tampil'))->with('berhasil','Data berhasil diupdate');
    }

}
