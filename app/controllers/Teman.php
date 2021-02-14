<?php 
class Teman extends Controller{
	public function index(){
		$data['judul'] = 'Teman';
		$data['nama_teman'] = $this->model('Teman_model')->getTeman();
		$this->view('templates/header', $data);
		$this->view('teman/index',$data);
		$this->view('templates/footer');
	}
}