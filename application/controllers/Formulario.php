<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
	}

	public function index(){
		$this->load->view('/common/headers');
		$this->load->view('formulario');
	}

	public function addgroupfield(){
		$this->load->view('include_workgroup');
	}

	public function accorreo(){
		$searchTerm = $_GET['term'];

		$this->db->distinct();
		$this->db->select('correo')->from('empleado')->like('correo',$searchTerm);
		$query = $this->db->get();

		foreach ($query->result() as $row){
			$data[] = $row->correo;
		}

		echo json_encode($data);
	}


	public function acnombre(){
		$searchTerm = $_GET['term'];

		$this->db->distinct();
		$this->db->select('nombre')->from('empleado')->like('nombre',$searchTerm);
		$query = $this->db->get();

		foreach ($query->result() as $row){
			$data[] = $row->nombre;
		}

		echo json_encode($data);
	}


	public function accargo(){
		$searchTerm = $_GET['term'];

		$this->db->distinct();
		$this->db->select('cargo')->from('empleado')->like('cargo',$searchTerm);
		$query = $this->db->get();

		foreach ($query->result() as $row){
			$data[] = $row->cargo;
		}

		echo json_encode($data);
	}


	public function autocompletecorreo(){
		$searchTerm = $_GET['term'];
		
		$this->db->distinct();
		$this->db->select('correo')->from('empleado')->like('correo',$searchTerm);
		$query = $this->db->get();

		foreach ($query->result() as $row){
			$data[] = $row->correo;
		}

		echo json_encode($data);
	}

	public function autocompleteamaterno(){
		$searchTerm = $_GET['term'];

		$this->db->distinct();
		$this->db->select('apellidomaterno')->from('empleado')->like('apellidomaterno',$searchTerm);
		$query = $this->db->get();

		foreach ($query->result() as $row){
			$data[] = $row->apellidomaterno;
		}

		echo json_encode($data);
	}
	
	public function autocompleteapaterno(){
		$searchTerm = $_GET['term'];

		$this->db->distinct();
		$this->db->select('apellidopaterno')->from('empleado')->like('apellidopaterno',$searchTerm);
		$query = $this->db->get();

		foreach ($query->result() as $row){
			$data[] = $row->apellidopaterno;
		}

		echo json_encode($data);
	}

}