<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ocurrencias extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array("Areas_model","Problema_Model","Tipodocumento_model","User_model", "Ocurrencias_model","Recibidos_model"));
		# code...
	}

	
	public function index()
	{
		date_default_timezone_set("America/Lima"); 

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		
		$this->load->view('movimientos/concurrencias/iniciar');
		$this->load->view('layouts/footer');
	}

	public function add()
{
	date_default_timezone_set("America/Lima"); 
		$data =  array(
			'user' => $this->User_model->getUser(),
			'area' => $this->Areas_model->getAreas(),
			'problema' => $this->Problema_Model->GetProblema(),
			'tipodocumento' => $this->Tipodocumento_model->getTipodocumento(),
			$archivos = $this->Ocurrencias_model->getArchivos(),
   		 $data['archivos']=$archivos,		
		 );


		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		
		$this->load->view('movimientos/concurrencias/registrar',$data);
		$this->load->view('layouts/footer');

}
	public function addOcurrencias()
	{
		// $createDate = date("Y-m-d H:i:s");
		$id_usuario = $this->input->post('id_usuario');
		$id_area = $this->input->post('id_area');
		$id_tipo_problema = $this->input->post('id_tipo_problema');
		$id_tipo_documento = $this->input->post('id_tipo_documento');
		$asunto = $this->input->post('asunto');
		$fecha_registro = date("Y-m-d H:i:s");
		$fecha_problema = $this->input->post('fecha_problema');
		$fecha_finalizado =$this->input->post('fecha_finalizado');
		$mensaje = $this->input->post('mensaje');
		$nombre_documento = $this->input->post('nombre_documento');
		/*$file_name = $_FILES['documento']['name'];
   		$file_size = $_FILES['documento']['size'];
    	$file_tmp = $_FILES['documento']['tmp_name'];
    	$file_type = $_FILES['documento']['type'];
    	$fp = fopen($file_tmp, 'r+b');
    	$binario = fread($fp, filesize($file_tmp));
    	fclose($fp);*/

    	$datos = array(
    		'id_usuario' => $id_usuario,
    		'id_area' => $id_area,
    		'id_tipo_problema' => $id_tipo_problema,
    		'id_tipo_documento' => $id_tipo_documento,
    		'fecha_registro' => $fecha_registro,
    		'fecha_problema' => $fecha_problema,
    		'fecha_finalizado' => $fecha_finalizado,
    		'mensaje' => $mensaje,
    	//	'nombre_documento' =>$nombre_documento,
    		'documento' => $binario,
    		'estado' => 2
    	);
    	if($this->Ocurrencias_model->insertar("ocurrencia",$datos)){
    		redirect(base_url().'mantenimiento/Ocurrencias');
    	}
    	else{
    		$this->session->set_flashdata("error","No se puede guardar la información");
    		redirect(base_url()."mantenimiento/Ocurrencias");
    	}
    	

    	
	}

	


}