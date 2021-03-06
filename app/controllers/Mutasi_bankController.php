<?php
class Mutasi_bank extends Controller{

	public function __construct(){
			$this->auth();
			$this->auth->cekAuth();
			$this->model('Mutasi_bankModel');
	}	


	public function index(){
			$this->list();
		}


	private function list(){
			// $this->auth->cekAuth();
			$css = array('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');
			$js = array(
				'assets/bower_components/datatables.net/js/jquery.dataTables.min.js', 
				'assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
				'app/views/mutasi_bank/js/initList.js',
			);

			$config = array(
				'title' => array(
					'main' => 'Data Mutasi Bank',
					'sub' => 'Ini adalah halaman Mutasi Bank, yang mengandung data Arus Keuangan Perusahaan',
				),
				'css' => $css,
				'js' => $js,
			);

			$data = $this->Mutasi_bankModel->getAll();
			
			$this->layout('mutasi_bank/list', $config, $data);
		}	


		public function form(){
			$id = isset($_GET['id']) ? $_GET['id'] : false;

			// cek jenis form
			if(!$id) $this->add();
			else $this->edit($id);
		}
}