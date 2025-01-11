<?php

class Backend_lib{
	private $CI;
	public function __construct(){
		$this->CI = & get_instance();

	}

	public function control(){
		if(!$this->CI->session->userdata("login")){
			redirect(base_url());
		}
		$url= $this->CI->uri->segment(1);
		if($this->CI->uri->segment(2)){
			$url = $this->CI->uri->segment(1)."/".$this->CI->uri->segment(2);
		}

		$infomenu = $this->CI->Backend_model->getID($url);

		$permisos = $this->CI->Backend_model->getPermisos($infomenu->id_menu,$this->CI->session->userdata("rol"));

		if(is_null($permisos)||$permisos->read == 0){
			redirect(base_url()."index.php/restrinccion");
		}else{
			return $permisos;
		}
	}
}