<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Auth extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("usuarios_model");
		$this->load->model("clinica_model");
		$this->load->model('modelgeneral');
		# code...
	}

	public function index()
	{
		if ($this->session->userdata("login")) {
			redirect(base_url()."dashboard");
		} else {
			$this->load->view('admin/login');
		}
		
	}

	public function login()
{
    $username = $this->input->post("username");
    $password = $this->input->post("paswoord");
    
    if (empty($username) || empty($password)) {
        $this->session->set_flashdata("error", "Usuario y/o contraseña no pueden estar vacíos");
        redirect(base_url());
        return;
    }

    $res = $this->usuarios_model->login($username, sha1($password));

    if (!$res) {
        $this->session->set_flashdata("error", "El usuario y/o contraseña son incorrectos");
        redirect(base_url());
        return;
    }

    $logo = $this->clinica_model->getclinica($res->codi_usu);  // Verificar que se pasa el parámetro correcto
    $plan = $this->clinica_model->getplanes($res->codi_usu);   // Verificar que se pasa el parámetro correcto
    $roles = $this->clinica_model->getUserRol($res->codi_usu);
    $medico = $this->modelgeneral->getTableWhereRow('medico', ['codi_usu' => $res->codi_usu]);

    if (!$logo || !$plan || !$roles) {
        $this->session->set_flashdata("error", "Error al recuperar los datos de la clínica o usuario");
        redirect(base_url());
        return;
    }

    $data =  array(
        'codi_usu' => $res->codi_usu,
        'apellido' => $res->apellido,
        'nombre' => $res->nombre,
        'rol' => $res->codi_rol,
        'nombrerol' => $roles->nombrerol,
        'tipo_documento' => $res->tipo_documento,
        'logi_usu' => $res->logi_usu,
        'foto' => $logo->photo,
        'direccion' => $logo->direc_clin,
        'clinica' => $logo->nomb_clin,
        'telefono' => $logo->telf_clin,
        'plan' => $plan->planes,
        'email' => $logo->email_clin,
        'medico' => $medico ? $medico->codi_med : null,
        'login' => TRUE
    );

    $this->session->set_userdata($data);
    redirect(base_url() . "dashboard");
}


	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}