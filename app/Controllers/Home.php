<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use TCPDF;

class Home extends BaseController
{
	public function index()
	{
		return view('hotel');
	}
	public function kamar(){
		$this->kamar->join('fasilitas_kamar', 'fasilitas_kamar.id_fasilitas_kamar=kamar.id_fasilitas_kamar' );
		$data['ListKamar'] = $this->kamar->findAll();

		return view('kamar',$data);
}
public function fasilitashotel(){
	$data['ListFasilitashotel'] = $this->fasilitashotel->findAll();
	return view('fasilitashotel',$data);
}
public function reservasii(){
	$data['ListReservasi'] = $this->reservasi->findAll();
	return view('reservasi',$data);
}
public function reservasi(){
	helper(['form']);
	$aturanForm=[
		'txtInputTipeKamar'=>'required',
		'nama'=>'required',
		'nohp'=>'required',
		'email'=>'required',
		'tamu'=>'required',
		'checkin'=>'required',
		'checkout'=>'required',
		'jml_kmr'=>'required'
	];
	
	if($this->validate($aturanForm)){
		$data=[
			'id_kamar'=>$this->request->getPost('txtInputTipeKamar'),
			'nama_pemesan'=>$this->request->getPost('nama'),
			'email'=>$this->request->getPost('email'),
			'nama_tamu'=>$this->request->getPost('tamu'),
			'no_tlp'=>$this->request->getPost('nohp'),
			'tgl_cek_in'=>$this->request->getPost('checkin'),
			'tgl_cek_out'=>$this->request->getPost('checkout'),
			'jumlah_kamar_dipesan'=>$this->request->getPost('jml_kmr'),

		];
		$this->reservasi->save($data);
		return redirect()->to(site_url('/inv/'.$this->reservasi->getInsertID()))->with('berhasil', 'Berasil pesan Kamar');
	}
	$data['ListKamar'] = $this->kamar->findAll();
	return view ('reservasi', $data);	
}
public function cari(){
	$keyword = $this->request->getVar('keyword');
	$datatamu = $this->reservasi->cari($keyword);
	$data = [
		'title'=> 'Berikut ini daftar Tamu yang sudah terdaftar dalam database.',
		'tamu' => $datatamu
		] ;
	return view ('cari', $data);
}
public function invoice($idreservasi){
	$this->reservasi->select('reservasi.id_reservasi, reservasi.nama_pemesan, reservasi.email, 
							reservasi.tgl_cek_in, reservasi.tgl_cek_out, fasilitas_kamar.tipe_kamar, 
							kamar.tarif, reservasi.jumlah_kamar_dipesan,
							(datediff(reservasi.tgl_cek_out, reservasi.tgl_cek_in))as jml_hari, 
							(datediff(reservasi.tgl_cek_out, reservasi.tgl_cek_in)*reservasi.jumlah_kamar_dipesan* kamar.tarif)as total_bayar');
							$this->reservasi->join('kamar', 'kamar.id_kamar=reservasi.id_kamar');
							$this->reservasi->join('fasilitas_kamar','fasilitas_kamar.id_fasilitas_kamar=kamar.id_fasilitas_kamar');
							$data['transaksi'] = $this->reservasi->find($idreservasi);
	$html = view('invoice',$data);
	$pdf = new TCPDF('L', PDF_UNIT, 'A5', true, 'UTF-8', false);

	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Hotel Hebat');
	$pdf->SetTitle('Invoice');
	$pdf->SetSubject('Invoice');

	$pdf->setPrintHeader(false);
	$pdf->setPrintFooter(false);

	$pdf->addPage();

	// output the HTML content
	$pdf->writeHTML($html, true, false, true, false, '');
	//line ini penting
	$this->response->setContentType('application/pdf');
	//Close and output PDF document
	$pdf->Output('invoice.pdf', 'I');
	
}    



}
