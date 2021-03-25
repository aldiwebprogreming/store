<?php 

	/**
	 * 
	 */
	class Ebunga extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('Main_model');
		}

		function index()

		{
			$this->load->view('home');
		}


		function data_kel(){
			$searchTerm = $this->input->post('searchTerm');
			
			$response = $this->Main_model->getUsers($searchTerm);	
			echo json_encode($response);
	
		}

	
		function get_kec(){

		 	$id = $this->input->get('id');

		 	$data = $this->db->get_where('tbl_kecamatan', array('id_kec' => $id))->result_array();
		 	echo json_encode($data);

		 	foreach ($data as $val) {}

		 	if ($val['nama'] == 'Bakongan') {
		 		
		 	}

		}

		function get_kab(){

		 	$id = $this->input->get('id');

		 	$kab = $this->db->get_where('tbl_kabupaten', array('id_kab' => $id))->result_array();
		 	echo json_encode($kab);
		}

		function get_prov(){

		 	$id = $this->input->get('id');

		 	$prov = $this->db->get_where('tbl_provinsi', array('id_prov' => $id))->result_array();
		 	echo json_encode($prov);
		}


		function product(){

			$id = $this->input->get('id');
			$data['get_product'] = $this->db->get_where('tbl_store', array('id' => $id ))->result_array();

			$this->load->view('det_product', $data);
		}
	}

 ?>