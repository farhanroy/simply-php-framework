<?php
class About extends Controller{
	public function index($nama = "farhan", $umur=15){
		$data['judul'] = 'About';
		$data['nama'] = $nama;
		$data['umur'] = $umur;
		$this->view('templates/header',$data);
		$this->view('about/index',$data);
		$this->view('templates/footer');
	}
	public function page(){
	    $data['judul'] = 'page';
	    $data['text'] = 'Aku padamu';
		$this->view('templates/header',$data);
		$this->view('about/page',$data);
		$this->view('templates/footer');
	}
}