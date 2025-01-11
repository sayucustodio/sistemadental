<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Dompdf\Dompdf;
use Dompdf\Options;
/**
 * 
 */
class Movimiento extends CI_Controller {
	private $permisos;
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("login")){
			redirect(base_url());
		}
		$this->permisos = $this->backend_lib->control();
		$this->load->model('historia_model');
		$this->load->model('citas_model');
		$this->load->model('clinica_model');
	}
	public function consultaDni(){
		$token = 'apis-token-10002.bzkJ23cyTy-cCBy4ARN8pM8TxvKFhjo4';
$dni = $_REQUEST['dni'];

// Iniciar llamada a API
$curl = curl_init();

// Buscar dni
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.apis.net.pe/v2/reniec/dni?numero=' . $dni,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 2,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Referer: https://apis.net.pe/consulta-dni-api',
    'Authorization: Bearer ' . $token
  ),
));

$response = curl_exec($curl);

echo $response;
	}
	public function consultaRuc(){

		$token = 'apis-token-10002.bzkJ23cyTy-cCBy4ARN8pM8TxvKFhjo4';
$ruc = isset($_POST['ruc']) ? $_POST['ruc'] : '';

if (empty($ruc)) {
    echo json_encode(['error' => 'RUC no proporcionado']);
    exit;
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.apis.net.pe/v2/sunat/ruc?numero=' . $ruc,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Referer: http://apis.net.pe/api-ruc',
    'Authorization: Bearer ' . $token
  ),
));

$response = curl_exec($curl);

if ($response == false) {
    echo json_encode(['error' => curl_error($curl)]);
} else {
    echo $response;
}

curl_close($curl);
	
		
		
	}
	public function index()
	{
		$data['permisos'] =$this->permisos;
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/historia/movimiento/panel',$data);
		$this->load->view('layouts/footer');
	}

	public function jsonHistoriaClinica()
	{
		$data['start'] = $this->input->get_post('start', true);
		$data['length'] = $this->input->get_post('length', true);
		$data['sEcho']  = $this->input->get_post('_', true);

		$columns = array('codi_pac','NombresApellidos');
		$orderCampo = $this->input->get_post('order', true);
		$orderCampo = $orderCampo[0]['column'];
		$orderCampo = $columns[$orderCampo];
		$orderDireccion = $this->input->get_post('order', true);
		$orderDireccion = $orderDireccion[0]['dir'];
		$data['orderCampo'] = $orderCampo;
		$data['orderDireccion'] = $orderDireccion;
		
		$desde = $this->input->get_post('desde');
		$hasta = $this->input->get_post('hasta');
		$nombresApellidos = $this->input->get_post('nombresApellidos');

		$data['desde'] = $desde;
		$data['hasta'] = $hasta;
		if ($nombresApellidos!='') {
			$data['nombresApellidos'] = $nombresApellidos;
		}
		
		$datos = $this->historia_model->getHistoria($data);
		header('content-type: application/json; charset=utf-8');
		echo json_encode($datos);
	}

	function historia($id)
	{
		
		$data['paciente'] = $this->modelgeneral->getTableWhereRow('paciente',['codi_pac'=>$id]);
		$data['departamentos'] = $this->modelgeneral->getTable('departamento');
		$data['provincias'] = $this->modelgeneral->getTableWhere('provincia',['departamento_id'=>$data['paciente']->departamento_id]);
		$data['distritos'] = $this->modelgeneral->getTableWhere('distrito',['provincia_id'=>$data['paciente']->provincia_id]);
		$data['alergias'] = $this->modelgeneral->getTable('alergia');
		$data['enfermedad'] = $this->modelgeneral->getTableWhereRow('paciente_enfermedadactual',['codi_pac'=>$id]);
		$data['consulta'] = $this->modelgeneral->getTableWhereRow('paciente_consulta',['codi_pac'=>$id]);
		$data['exploracion'] = $this->modelgeneral->getTableWhereRow('paciente_exploracion',['codi_pac'=>$id]);
		$data['paises'] = $this->modelgeneral->getTable('paises');
		$data['diagnosticos'] = $this->modelgeneral->getTableWhere('enfermedad',['esta_enf'=>'S']);
		$data['procedimientos'] = $this->modelgeneral->getTable('enfermedad_tratamiento');
		$data['diagnostico_paciente'] =$this->modelgeneral->getTableWhere('paciente_diagnostico',['codi_pac'=>$id,'pacdiag_estado'=>'1']);
	// Realizar el INNER JOIN para diagnostico_2
    /*$data['diagnostico_paciente'] = $this->modelgeneral->getTableWhereRowWithJoin(
        'paciente_diagnostico', // Tabla principal
        'enfermedad',           // Tabla a la cual se hace JOIN
        'paciente_diagnostico.codi_enf01 = enfermedad.codi_enf', // Condición de la unión
        ['paciente_diagnostico.codi_pac' => $id] // Condición WHERE
    );*/
		$data['especialidad'] = $this->modelgeneral->getTable('especialidad');
			$data['sedes'] = $this->modelgeneral->getTable('sede');
		$data['tipo_citado'] = $this->modelgeneral->getTable('tipo_citado');
		$data['medicos']=$this->modelgeneral->getTableWhere('medico',['cod_especialidad'=>$data['especialidad']->cod_especialidad]);
														
	    
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/historia/movimiento/historia',$data);
		$this->load->view('layouts/footer');
		
	}

	public function guardarPacienteEnfermedad()
	{
		$data['tiempo_enfact'] = $this->input->post('tiempoEnfermedad');
		$data['motivo_enfact'] = $this->input->post('motivoConsulta');
		$data['signo_enfact'] = $this->input->post('signosSintomas');
		$data['antecper_enfact'] = $this->input->post('antecedentesPersonales');
		$data['antecfam_enfact'] = $this->input->post('antecedentesFamiliares');
		if (isset($_POST['tomandoMedicamento'])) {
			$data['medicam_enfact'] = $this->input->post('tomandoMedicamento');
		}
		$data['nommedicam_enfact'] = $this->input->post('nombreMedicamento');
		$data['motivomedi_enfact'] = $this->input->post('motivoUso');
		$data['dosis_enfact'] = $this->input->post('dosis');
		$where['codi_pac'] = $this->input->post('paciente');
		$edit = $this->modelgeneral->editRegist('paciente_enfermedadactual',$where,$data);
		$resp = [];
		if ($edit) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}

	public function guardarDatosPaciente()
	{
		$data['nomb_pac'] = $this->input->post('nombres');
		$data['apel_pac'] = $this->input->post('apellidos');
		$data['fena_pac'] = $this->input->post('fechaNacimiento');
		$data['edad_pac'] = $this->input->post('edad');
		$data['dni_pac'] = $this->input->post('dni');
		$data['dire_pac'] = $this->input->post('direccion');
		$data['sexo_pac'] = $this->input->post('genero');
		$data['telf_pac'] = $this->input->post('telefono');
		$data['ocupacion'] = $this->input->post('ocupacion');
		$data['estudios_pac'] = $this->input->post('estudios');
		$data['civi_pac'] = $this->input->post('estadoCivil');
		$data['emai_pac'] = $this->input->post('email');
		$data['pais_id'] = $this->input->post('pais');
		$data['departamento_id'] = $this->input->post('departamento');
		$data['provincia_id'] = $this->input->post('provincia');
		$data['distrito_id'] = $this->input->post('distrito');

		$where['codi_pac'] = $this->input->post('paciente');
		$edit = $this->modelgeneral->editRegist('paciente',$where,$data);
		$resp = [];
		if ($edit) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}

	public function guardarPacienteConsulta()
	{
		if (isset($_POST['algunaVezMedicamento'])) {
			$data['ortod_paccon'] = $this->input->post('algunaVezMedicamento');
		}
		$data['ortodtexto_paccon'] = $this->input->post('algunaVezMedicamentoTexto');

		if (isset($_POST['tomandoMedicamentoConsulta'])) {
			$data['medic_paccon'] = $this->input->post('tomandoMedicamentoConsulta');
		}
		$data['medictexto_paccon'] = $this->input->post('tomandoMedicamentoTexto');

		if (isset($_POST['alergicoAnestesico'])) {
			$data['alergico_paccon'] = $this->input->post('alergicoAnestesico');
		}
		$data['alergicotexto_paccon'] = $this->input->post('alergicoAnestesicoTexto');

		if (isset($_POST['hospitalizadoCirugia'])) {
			$data['hosp_paccon'] = $this->input->post('hospitalizadoCirugia');
		}
		$data['hosptexto_paccon'] = $this->input->post('hospitalizadoCirugiaTexto');

		if (isset($_POST['transtornoNerviosoEmocional'])) {
			$data['trans_paccon'] = $this->input->post('transtornoNerviosoEmocional');
		}
		$data['transtexto_paccon'] = $this->input->post('transtornoNerviosoEmocionalTexto');

		// if (isset($_POST['padeceEnfermedad'])) {
		// 	$data['padece_paccon'] = $this->input->post('padeceEnfermedad');
		// }
		if (isset($_POST['padeceEnfermedad'])) {
			$data['padece_paccon'] = implode(',', $this->input->post('padeceEnfermedad'));
		} else {
			$data['padece_paccon'] = null;
		}

		if (isset($_POST['cepillaDientes'])) {
			$data['cepilla_paccon'] = $this->input->post('cepillaDientes');
		}
		$data['cepillatexto_paccon'] = $this->input->post('cepillaDientesTexto');

		if (isset($_POST['presionArterial'])) {
			$data['presion_paccon'] = $this->input->post('presionArterial');
		}
		$data['presiontexto_paccon'] = $this->input->post('presionArterialTexto');

		$where['codi_pac'] = $this->input->post('paciente');
		$edit = $this->modelgeneral->editRegist('paciente_consulta',$where,$data);
		$resp = [];
		if ($edit) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}

	public function guardarPacienteExploracion()
	{
		$data['pa_exp'] = $this->input->post('PA');
		$data['pulso_exp'] = $this->input->post('pulso');
		$data['temperat_exp'] = $this->input->post('temperatura');
		$data['fc_exp'] = $this->input->post('FC');
		$data['frec_exp'] = $this->input->post('frecRep');
		$data['peso_exp'] = $this->input->post('peso');
		$data['talla_exp'] = $this->input->post('talla');
		$data['masa_exp'] = $this->input->post('masa');
		$data['clinico_exp'] = $this->input->post('examenClinicoGeneral');
		$data['complement_exp'] = $this->input->post('examenComplementario');
		$data['odontoesto_exp'] = $this->input->post('odontoestomatologico');
		$data['ectoscopia_exp'] = $this->input->post('ectoscopia');
		$data['craneo_exp'] = $this->input->post('craneo');
		$data['cara_exp'] = $this->input->post('cara');
		$where['codi_pac'] = $this->input->post('paciente');
		$edit = $this->modelgeneral->editRegist('paciente_exploracion',$where,$data);
		$resp = [];
		if ($edit) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}

	public function jsonAlergias()
	{
		$data['start'] = $this->input->get_post('start', true);
		$data['length'] = $this->input->get_post('length', true);
		$data['sEcho']  = $this->input->get_post('_', true);

		$columns = array('pacale_id','nombre_ale');
		$orderCampo = $this->input->get_post('order', true);
		$orderCampo = $orderCampo[0]['column'];
		$orderCampo = $columns[$orderCampo];
		$orderDireccion = $this->input->get_post('order', true);
		$orderDireccion = $orderDireccion[0]['dir'];
		$data['orderCampo'] = $orderCampo;
		$data['orderDireccion'] = $orderDireccion;
		$data['paciente'] = $this->input->get_post('paciente');		
		$datos = $this->historia_model->getAlergias($data);
		header('content-type: application/json; charset=utf-8');
		echo json_encode($datos);
	}


	public function jsonCitasHistoria()
	{
		$data['start'] = $this->input->get_post('start', true);
		$data['length'] = $this->input->get_post('length', true);
		$data['sEcho']  = $this->input->get_post('_', true);

		$columns = array('codi_cit','fech_cit','nombre_especialidad','medico','nomb_citado');
		$orderCampo = $this->input->get_post('order', true);
		$orderCampo = $orderCampo[0]['column'];
		$orderCampo = $columns[$orderCampo];
		$orderDireccion = $this->input->get_post('order', true);
		$orderDireccion = $orderDireccion[0]['dir'];
		$data['orderCampo'] = $orderCampo;
		$data['orderDireccion'] = $orderDireccion;
		$data['paciente'] = $this->input->get_post('paciente');		
		$datos = $this->historia_model->getListadoCitas($data);
		header('content-type: application/json; charset=utf-8');
		echo json_encode($datos);

	}


	
	public function jsonEvolucion()
	{
		$data['start'] = $this->input->get_post('start', true);
		$data['length'] = $this->input->get_post('length', true);
		$data['sEcho']  = $this->input->get_post('_', true);

		$columns = array('fecha_evolucion','pacevol_descripcion','medico','nombre_especialidad');
		$orderCampo = $this->input->get_post('order', true);
		$orderCampo = $orderCampo[0]['column'];
		$orderCampo = $columns[$orderCampo];
		$orderDireccion = $this->input->get_post('order', true);
		$orderDireccion = $orderDireccion[0]['dir'];
		$data['orderCampo'] = $orderCampo;
		$data['orderDireccion'] = $orderDireccion;
		$data['paciente'] = $this->input->get_post('paciente');		
		$datos = $this->historia_model->getEvolucion($data);
		header('content-type: application/json; charset=utf-8');
		echo json_encode($datos);
	}

	function agregarEvolucion()
	{
		$this->form_validation->set_rules('paciente','','required');
		$this->form_validation->set_rules('especialidad','','required');
		$this->form_validation->set_rules('medico','','required');
		$this->form_validation->set_rules('evolucion','','required');
		$this->form_validation->set_rules('fecha','','required');
		if($this->form_validation->run() == TRUE){
			$data['codi_pac'] = $this->input->post('paciente');
			$data['cod_especialidad'] = $this->input->post('especialidad');
			$data['codi_med']= $this->input->post('medico');
			$data['pacevol_descripcion']= $this->input->post('evolucion');
			$data['fecha_evolucion']=$this->input->post('fecha');
			$insert = $this->modelgeneral->insertRegist('paciente_evolucion',$data);
			$resp =[];
			if(!is_null($insert)){
				$resp['success'] = true;
			}else{
				$resp['success'] = false;
			}
      echo json_encode($resp);
		}

	}

	function getEvolucion()
	{
		$id = $this->input->get('id');
		$evolucion = $this->modelgeneral->getTableWhereRow('paciente_evolucion',['pacevol_id'=>$id]);
		$evolucion->especialidades = $this->db->from('especialidad')
						->select('cod_especialidad as id, nombre_especialidad as text')
						->get()->result();
		$evolucion->medicos = $this->db->from('medico')
								->select('codi_med as id,CONCAT(COALESCE(nomb_med,"")," ",COALESCE(apel_med,"")) AS text')
								->where('cod_especialidad',$evolucion->cod_especialidad)
								->get()->result();
		header('content-type: application/json; charset=utf-8');
		echo json_encode($evolucion);
	}

	function getMedicos()
	{
		$especialidad = $this->input->get_post('especialidad');
		$resp = $this->db->from('medico')
		->select('codi_med as id,CONCAT(COALESCE(nomb_med,"")," ",COALESCE(apel_med,"")) AS text')
		->where('cod_especialidad',$especialidad)
		->get()->result();
		echo json_encode($resp);
	}

	function editarEvolucion()
	{
		$this->form_validation->set_rules('id','','required');
		$this->form_validation->set_rules('paciente','','required');
		$this->form_validation->set_rules('especialidad','','required');
		$this->form_validation->set_rules('medico','','required');
		$this->form_validation->set_rules('evolucion','','required');
		$this->form_validation->set_rules('fecha','','required');
		if($this->form_validation->run() == TRUE){

			$data['codi_pac'] = $this->input->post('paciente');
			$data['cod_especialidad'] = $this->input->post('especialidad');
			$data['codi_med']= $this->input->post('medico');
			$data['pacevol_descripcion']= $this->input->post('evolucion');
			$data['fecha_evolucion']=$this->input->post('fecha');
			$where['pacevol_id'] = $this->input->post('id');
			$edit = $this->modelgeneral->editRegist('paciente_evolucion',$where,$data);
			$resp =[];
			if(!is_null($edit)){
				$resp['success'] = true;
			}else{
				$resp['success'] = false;
			}
            echo json_encode($resp);
		}
	}

		function anularEvolucion()
	{
		$where['pacevol_id'] = $this->input->get('id');
		$data['pacevol_estado'] = 2;//anulado
		$edit = $this->modelgeneral->editRegist('paciente_evolucion',$where,$data);
		$resp = [];
		if ($edit) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}

		echo json_encode($resp);
	}

	function agregarAlergia()
	{
		$this->form_validation->set_rules('paciente', '', 'required');
		$this->form_validation->set_rules('alergia', '', 'required');
		if ($this->form_validation->run() == TRUE){
			$data['codi_pac'] = $this->input->post('paciente');
			$data['cod_ale'] = $this->input->post('alergia');
			$data['pacale_observacion'] = $this->input->post('observacion');
			$insert  = $this->modelgeneral->insertRegist('paciente_alergia',$data);

			$resp = [];
			if (!is_null($insert)){
				$resp['success'] = true;
			}else{
				$resp['success'] = false;
			}
			echo json_encode($resp);
		}
	}

	function getAlergia()
	{
		$id = $this->input->get('id');
		$alergia = $this->modelgeneral->getTableWhereRow('paciente_alergia',['pacale_id'=>$id]);
		echo json_encode($alergia);
	}

	function editarAlergia()
	{
		$this->form_validation->set_rules('id', '', 'required');
		$this->form_validation->set_rules('paciente', '', 'required');
		$this->form_validation->set_rules('alergia', '', 'required');
		if ($this->form_validation->run() == TRUE){
			$data['cod_ale'] = $this->input->post('alergia');
			$data['pacale_observacion'] = $this->input->post('observacion');
			$where['pacale_id'] = $this->input->post('id');
			$edit  = $this->modelgeneral->editRegist('paciente_alergia',$where,$data);

			$resp = [];
			if ($edit){
				$resp['success'] = true;
			}else{
				$resp['success'] = false;
			}
			echo json_encode($resp);
		}
	}

	function anularAlergia()
	{
		$where['pacale_id'] = $this->input->get('id');
		$data['pacale_estado'] = 2;//anulado
		$edit = $this->modelgeneral->editRegist('paciente_alergia',$where,$data);
		$resp = [];
		if ($edit) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}

		echo json_encode($resp);
	}







	function jsonDiagnostico()
	{
		$data['start'] = $this->input->get_post('start', true);
		$data['length'] = $this->input->get_post('length', true);
		$data['sEcho']  = $this->input->get_post('_', true);

		$columns = array('pacdiag_estado','codi_enf01','diagnostico01','codi_trat01','procedimiento01');
		$orderCampo = $this->input->get_post('order', true);
		$orderCampo = $orderCampo[0]['column'];
		$orderCampo = $columns[$orderCampo];
		$orderDireccion = $this->input->get_post('order', true);
		$orderDireccion = $orderDireccion[0]['dir'];
		$data['orderCampo'] = $orderCampo;
		$data['orderDireccion'] = $orderDireccion;
		$data['paciente'] = $this->input->get_post('paciente');		
		$datos = $this->historia_model->getDiagnostico($data);
		header('content-type: application/json; charset=utf-8');
		echo json_encode($datos);
	}


	public function agregarDiagnostico()
	{
		$data['codi_pac'] = $this->input->post('paciente');
		$data['pacdiag_fecha'] = date('Y-m-d');
		if ($this->input->post('diagnostico01')!='' && $this->input->post('procedimiento01')!='') {
			$data['codi_enf01'] = $this->input->post('diagnostico01');
			$data['codi_trat01'] = $this->input->post('procedimiento01');
		}else{
			$data['codi_enf01'] = null;
			$data['codi_trat01'] = null;
		}


		$insert  = $this->modelgeneral->insertRegist('paciente_diagnostico',$data);
		$resp = [];
		if (!is_null($insert)) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}


	function getDiagnosticos()
	{
		$id = $this->input->get('id');
		$diagnostico = $this->modelgeneral->getTableWhereRow('paciente_diagnostico',['pacdiag_id'=>$id]);
		echo json_encode($diagnostico);
	}

	function editarDiagnostico()
	{
	
		if ($this->input->post('diagnostico01')!='' && $this->input->post('procedimiento01')!='') {
			$data['codi_enf01'] = $this->input->post('diagnostico01');
			$data['codi_trat01'] = $this->input->post('procedimiento01');
		}else{
			$data['codi_enf01'] = null;
			$data['codi_trat01'] = null;
		}


		$where['pacdiag_id'] = $this->input->post('id');
		$edit = $this->modelgeneral->editRegist('paciente_diagnostico',$where,$data);
		$resp = [];
		if ($edit) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}


	function anularDiagnostico()
	{
		$data['pacdiag_estado'] = 2; //ANULAR
		$where['pacdiag_id'] = $this->input->get('id');
		$edit = $this->modelgeneral->editRegist('paciente_diagnostico',$where,$data);
		$resp = [];
		if ($edit) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}

	function jsonPlacas()
	{
		$data['start'] = $this->input->get_post('start', true);
		$data['length'] = $this->input->get_post('length', true);
		$data['sEcho']  = $this->input->get_post('_', true);

		$columns = array('pla_fecha','pla_nombre');
		$orderCampo = $this->input->get_post('order', true);
		$orderCampo = $orderCampo[0]['column'];
		$orderCampo = $columns[$orderCampo];
		$orderDireccion = $this->input->get_post('order', true);
		$orderDireccion = $orderDireccion[0]['dir'];
		$data['orderCampo'] = $orderCampo;
		$data['orderDireccion'] = $orderDireccion;
		$data['paciente'] = $this->input->get_post('paciente');		
		$datos = $this->historia_model->getPlacas($data);
		header('content-type: application/json; charset=utf-8');
		echo json_encode($datos);
	}

	function subir()
	{
		var_dump("estos son los archivos");
		var_dump($_FILES);
		$config['upload_path'] = 'assets/uploads/placas/';
		$config['allowed_types'] = 'png|jpg|jpeg';
		$config['max_size'] = '40000';
		$config['max_width'] = '40000';
		$config['max_height'] = '40000';
		$this->upload->initialize($config);
		$resp = [];
		if ($this->upload->do_upload('placaArchivo')){
			$upload = $this->upload->data();
			
			$resp['success'] = 1;
			$resp['name'] = $upload['file_name'];

			$this->load->library('Image_moo');
			$this->image_moo
				->load('assets/uploads/placas/'.$resp['name'])
				->resize_crop(100,100)
				->save('assets/uploads/placas/thumbs/'.$resp['name']);
		}else{
			echo("estoy aqui");
			$resp['success'] = false;
			$resp['error'] = $this->upload->display_errors();
		}
		echo json_encode($resp);
	}


	function agregarPlaca()
	{
		
		$data['codi_pac'] = $this->input->post('paciente');
		$data['pla_nombre'] = $this->input->post('nombre');
		$data['pla_notas'] = $this->input->post('notas');
		$data['pla_archivo'] = $this->input->post('archivo');
		$insert  = $this->modelgeneral->insertRegist('paciente_placa',$data);
		$resp = [];
		if (!is_null($insert)){
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}

	function anularPlaca()
	{
		$data['pla_estado'] = 2; //ANULAR
		$where['pla_id'] = $this->input->get('id');
		$edit = $this->modelgeneral->editRegist('paciente_placa',$where,$data);
		$resp = [];
		if ($edit) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}

	function getPlaca()
	{
		$id = $this->input->get('id');
		$placa = $this->modelgeneral->getTableWhereRow('paciente_placa',['pla_id'=>$id]);
		echo json_encode($placa);
	}

	function editarPlaca()
	{
		$data['pla_nombre'] = $this->input->post('nombre');
		$data['pla_notas'] = $this->input->post('notas');
		if ($_POST['archivo']!='') {
			$data['pla_archivo'] = $this->input->post('archivo');
			$data['pla_fecha'] = date('Y-m-d H:i:s');
		}
		$where['pla_id'] = $this->input->post('id');
		$edit = $this->modelgeneral->editRegist('paciente_placa',$where,$data);
		$resp = [];
		if ($edit){
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}

	function imprimirHistoria($id)
	{
		
		require_once(APPPATH . '../vendor/autoload.php');

		$options = new Options();
		$options->set('defaultFont', 'Arial'); 
		 $options->set('isRemoteEnabled', true);
		//  $options->set('debugPng', true);
// $options->set('debugKeepTemp', true);
// $options->set('debugCss', true);
		$dompdf = new Dompdf($options);
		
		$data['clinicas'] = $this->clinica_model->getClinica($data);
		$data['historia'] = $this->historia_model->getHistoriaImprimir($id);
		$data['paciente'] = $this->modelgeneral->getTableWhereRow('paciente',['codi_pac'=>$id]);
	

		// $htmlHeader = $this->load->view('admin/historia/imprimir/header',$data,true);
		$html = $this->load->view('admin/historia/imprimir/contenido',$data,TRUE);
		//$htmlHeader = $this->load->view('admin/historia/imprimir/header',NULL,true);
		$htmlFooter = $this->load->view('admin/historia/imprimir/footer',NULL,true);
		$css =  file_get_contents('assets/styles_pdf.css');
		$completeHtml = '
		<html>
		<head>
			<style>' . $css . '</style>
		</head>
		<body>
			' . $html . '
			' . $htmlFooter . '
		</body>
		</html>';
	
		// Cargar el contenido HTML en Dompdf
		$dompdf->loadHtml($completeHtml);
		$dompdf->setPaper('A4'); // Cambiar a 'landscape' si es necesario
	
		// Renderizar el PDF
		$dompdf->render();

		$dompdf->stream('historia.pdf', array('Attachment' => false)); // false para mostrar en el navegador


	}
	function anularReceta()
	{
		$where['pacrec_id'] = $this->input->get('id');
		$data['pacrec_estado'] = 2;//anulado
		$edit = $this->modelgeneral->editRegist('paciente_receta',$where,$data);
		$resp = [];
		if ($edit) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}

		echo json_encode($resp);
	}
	function imprimirReceta($id)
	{
		require_once(APPPATH . '../vendor/autoload.php');

		$options = new Options();
		$options->set('defaultFont', 'Arial'); // Puedes cambiar la fuente predeterminada
		$dompdf = new Dompdf($options);
		$data['clinicas'] = $this->clinica_model->getClinica($data);
		$data['receta'] = $this->historia_model->getRecetaImprimir($id)[0]?? null ;
	$htmlHeader = $this->load->view('admin/recetas/imprimir_header', $data, TRUE);
		$html = $this->load->view('admin/recetas/imprimir', $data, TRUE);
		
		$css = file_get_contents('assets/styles_pdf.css');
		$html2 = '<style>' . $css . '</style>' . $htmlHeader . $html ;
		$dompdf->loadHtml($html2);

		$dompdf->setPaper('A4', 'portrait'); // Cambia a 'landscape' si prefieres horizontal

		$dompdf->render();

		$dompdf->stream('receta.pdf', array('Attachment' => false)); // false para mostrar en el navegador


	}
	public function getMedicosHistoria()
	{
		$especialidad = $this->input->post('especialidad');

		$medicos = $this->db->from('medico')
		->where('cod_especialidad',$especialidad)
		->get()->result();

		echo json_encode($medicos);
	}

	function getCitaHistoria()
	{
		$cita = $this->citas_model->getCita($this->input->get('id'));
		echo json_encode($cita);
	}

	function editarCitaHistoria()
	{
		$this->form_validation->set_rules('id', '', 'required');
		$this->form_validation->set_rules('hora', '', 'required');
		$this->form_validation->set_rules('fecha', '', 'required');
		$this->form_validation->set_rules('medicoEditar', '', 'required');
		$this->form_validation->set_rules('especialidadEditar', '', 'required');
		$this->form_validation->set_rules('motivo', '', 'required');
		$this->form_validation->set_rules('observacion', '', '');
		if ($this->form_validation->run() == TRUE){
			$data['codi_med'] = $this->input->post('medicoEditar');
			$data['cod_especialidad'] = $this->input->post('especialidadEditar');
			$data['motivo_consult'] = $this->input->post('motivo');
			$data['cod_sede'] = $this->input->post('sede');
			$data['cod_citado'] = $this->input->post('codigo');
			$data['fech_cit'] = $this->input->post('fecha').' '.$this->input->post('hora').':00';
			$data['obsv_cit'] = $this->input->post('observacion');
			$where['codi_cit'] = $this->input->post('id');
			$edit = $this->modelgeneral->editRegist('cita_medica',$where,$data);
			$resp = [];
			if (!is_null($edit)) {
				
				$resp['success'] = true;
			} else {
				$resp['success'] = false;
			}
			echo json_encode($resp);
		}
	}


	function jsonHistratamiento()
    	{
			$data['start'] = $this->input->get_post('start', true);
			$data['length'] = $this->input->get_post('length', true);
			$data['sEcho']  = $this->input->get_post('_', true);

			$columns = array('codi_tra','codi_pac','asunto_tra','fecha_tra','total_tra');
			$orderCampo = $this->input->get_post('order', true);
			$orderCampo = $orderCampo[0]['column'];
			$orderCampo = $columns[$orderCampo];
			$orderDireccion = $this->input->get_post('order', true);
			$orderDireccion = $orderDireccion[0]['dir'];
			$data['orderCampo'] = $orderCampo;
			$data['orderDireccion'] = $orderDireccion;
			$data['paciente'] = $this->input->get_post('paciente');	
			$datos = $this->historia_model->getTrataHistoria($data);
			header('content-type: application/json; charset=utf-8');
			echo json_encode($datos);
		}

	function getOdontograma($json=null)
	{
		$paciente = $this->input->get('paciente');
		$tipo = $this->input->get('tipoOdontograma');
		$odontograma = $this->db->from('paciente_odontograma')
		->select('pacodo_id as id,id_hal,pacodo_categoria as categoria,pacodo_estado as estado,pacodo_sigla as sigla,pacodo_id,inicio.orden_die as inicio, fin.orden_die as fin,pacodo_marcas as marcas, paciente_odontograma.numero_die as diente')
		->join('dientes as inicio','paciente_odontograma.numero_die = inicio.numero_die')
		->join('dientes as fin','paciente_odontograma.pacodo_dientefinal = fin.numero_die','left')
		->where('pacodo_tipo',$tipo)
		->where('codi_pac',$paciente)
		->get()->result();
		if (is_null($json)) {
			echo json_encode($odontograma);
		}else{
			return $odontograma;
		}
	}

	function getHallazgo($id)
	{
		return $this->db->from('paciente_odontograma')
		->select('pacodo_id as id,id_hal,pacodo_categoria as categoria,pacodo_estado as estado,pacodo_sigla as sigla,pacodo_id,inicio.orden_die as inicio, fin.orden_die as fin,pacodo_marcas as marcas, paciente_odontograma.numero_die as diente')
		->join('dientes as inicio','paciente_odontograma.numero_die = inicio.numero_die')
		->join('dientes as fin','paciente_odontograma.pacodo_dientefinal = fin.numero_die','left')
		->where('pacodo_id',$id)
		->get()->row();
	}

	function getHallazgosDientePaciente()
	{
		$tipoOdontograma = $this->input->get('tipoOdontograma');
		$paciente = $this->input->get('paciente');
		$diente = $this->input->get('diente');
		$query = $this->db->from('paciente_odontograma')
		->select('pacodo_id as id,nombre_hal,pacodo_categoria as categoria,paciente_odontograma.id_hal,pacodo_estado as estado,pacodo_sigla as sigla,pacodo_id,inicio.orden_die as inicio, fin.orden_die as fin, paciente_odontograma.numero_die as dienteInicio, paciente_odontograma.pacodo_dientefinal as dienteFinal, pacodo_espec as especificaciones,,pacodo_marcas as marcas, paciente_odontograma.numero_die as diente')
		->join('dientes as inicio','paciente_odontograma.numero_die = inicio.numero_die')
		->join('dientes as fin','paciente_odontograma.pacodo_dientefinal = fin.numero_die','left')
		->join('hallazgos','paciente_odontograma.id_hal = hallazgos.id_hal')
		->where('codi_pac',$paciente)
		->where('pacodo_tipo',$tipoOdontograma)
		->where('paciente_odontograma.numero_die',$diente)
		->get()->result();
		echo json_encode($query);
	}

	function agregarHallazgo()
	{
		$data['codi_pac'] = $this->input->post('paciente');
		$data['pacodo_tipo'] = $this->input->post('tipoOdontograma');
		$data['id_hal'] = $this->input->post('hallazgo');
		if ($this->input->post('estado')!='') {
			$data['pacodo_estado'] = $this->input->post('estado');
		}
		$data['numero_die'] = $this->input->post('diente');
		if ($this->input->post('dienteFinal')!='') {
			$data['pacodo_dientefinal'] = $this->input->post('dienteFinal');
		}
		if ($this->input->post('sigla')!='') {
			$data['pacodo_sigla'] = $this->input->post('sigla');
		}
		if ($this->input->post('categoria')!='') {
			$data['pacodo_categoria'] = $this->input->post('categoria');
		}
		if ($this->input->post('marcas')=='1') {
			$marcas = [];
			if (isset($_POST['Vestibular'])) {
				$marcas['Vestibular']['Valor'] = true;
				if (isset($_POST['VestibularEstado'])) {
					$marcas['Vestibular']['Estado'] = $this->input->post('VestibularEstado');
				}
			}
			if (isset($_POST['Palatino'])) {
				$marcas['Palatino']['Valor'] = true;
				if (isset($_POST['PalatinoEstado'])) {
					$marcas['Palatino']['Estado'] = $this->input->post('PalatinoEstado');
				}
			}
			if (isset($_POST['Lingual'])) {
				$marcas['Lingual']['Valor'] = true;
				if (isset($_POST['LingualEstado'])) {
					$marcas['Lingual']['Estado'] = $this->input->post('LingualEstado');
				}
			}
			if (isset($_POST['Distal'])) {
				$marcas['Distal']['Valor'] = true;
				if (isset($_POST['DistalEstado'])) {
					$marcas['Distal']['Estado'] = $this->input->post('DistalEstado');
				}
			}
			if (isset($_POST['Mesial'])) {
				$marcas['Mesial']['Valor'] = true;
				if (isset($_POST['MesialEstado'])) {
					$marcas['Mesial']['Estado'] = $this->input->post('MesialEstado');
				}
			}
			if (isset($_POST['Oclusal'])) {
				$marcas['Oclusal']['Valor'] = true;
				if (isset($_POST['OclusalEstado'])) {
					$marcas['Oclusal']['Estado'] = $this->input->post('OclusalEstado');
				}
			}

			$data['pacodo_marcas'] = json_encode($marcas);

		}
		$data['pacodo_espec'] = $this->input->post('especificaciones');
		$data['codi_usu'] = 1;
		$data['pacodo_datetime'] = date('Y-m-d H:i:s');
		$insert = $this->modelgeneral->insertRegist('paciente_odontograma',$data);
		$resp =[];
		if(!is_null($insert)){
			$resp['success'] = true;
			$resp['data'] = $this->getHallazgo($insert);
		}else{
			$resp['success'] = false;
		}
    echo json_encode($resp);
	}

	function eliminarHallazgo()
	{
		$id = $this->input->get('id');
		$delete = $this->db->where('pacodo_id',$id)
		->delete('paciente_odontograma');
		$resp =[];
		if ($delete) {
			$resp['success'] = true;
		}else{
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}

	function guardarImagenOdontograma()
	{
		// baseFromJavascript will be the javascript base64 string retrieved of some way (async or post submited)
		$baseFromJavascript = $this->input->post('imgData'); // $_POST['base64']; //your data in base64 'data:image/png....';
		// We need to remove the "data:image/png;base64,"
		$base_to_php = explode(',', $baseFromJavascript);
		// the 2nd item in the base_to_php array contains the content of the image
		$data = base64_decode($base_to_php[1]);
		// here you can detect if type is png or jpg if you want
		if ($this->input->post('tipo')=='Inicial') {
			$tipo = 'ini';
		}else{
			$tipo = 'evo';
		}
		// $filepath = "assets/img/odontogramas/odontograma-".$this->input->post('paciente')."-".$tipo.".png"; // or image.jpg
		$filepath = "assets/img/odontogramas/odontograma-".$this->input->post('paciente')."-".$tipo.".jpeg";
		// Save the image in a defined path
		file_put_contents($filepath,$data);

		$resp['success'] = true;
		echo json_encode($resp);
	}

	function guardarDetalleOdontograma()
	{
		$data['detalleodontograma_pac'] = $this->input->post('detalle');
		$where['codi_pac'] = $this->input->post('paciente');
		$edit = $this->modelgeneral->editRegist('paciente',$where,$data);
		$resp = [];
		if (!is_null($edit)) {
			$resp['success'] = true;
		} else {
			$resp['success'] = false;
		}
		echo json_encode($resp);
	}

	function cambiarTipoOdontograma()
	{
		$resp = [];
		$resp['html'] = $this->load->view('admin/historia/movimiento/odontograma/cursores',$data,TRUE);
		$resp['odontograma'] = $this->getOdontograma('Json');
		echo json_encode($resp);

	}

	// recetas
	function guardarReceta()
	{
		$this->form_validation->set_rules('medico', '', 'required');
		$this->form_validation->set_rules('paciente', '', 'required');
		$this->form_validation->set_rules('fecha', '', 'required');
		$this->form_validation->set_rules('hora', '', 'required');
		$this->form_validation->set_rules('asunto', '', 'required');
	
		// if ($this->form_validation->run() == TRUE) {
			$data = [
				'codi_pac' => $this->input->post('paciente'),
				'codi_med' => $this->input->post('medico'),
				'pacrec_fecha' => $this->input->post('fecha'),
				'pacrec_hora' => $this->input->post('hora'),
				'pacrec_asunto' => $this->input->post('asunto')
			];
	 		$insert = $this->modelgeneral->insertRegist('paciente_receta', $data);
			$medicamentos = json_decode($this->input->post('medicamentos'), true);
			 $error = false;
			if (!is_null($insert)){
			foreach ($medicamentos as $medicamento) {
				$datadetalle['pacrec_id']=$insert;
				$datadetalle['pacrec_medicamento'] = $medicamento['nombre'];
				$datadetalle['pacrec_indicaciones'] = $medicamento['indicaciones'];
				$datadetalle['pacrec_forma'] = $medicamento['forma'];
				$datadetalle['pacrec_cantidad'] = $medicamento['cantidad'];
				$datadetalle['pacrec_via'] = $medicamento['via'];
				$datadetalle['pacrec_duracion'] = $medicamento['duracion'];
				$insert2 =$this->modelgeneral->insertRegist('receta_detalle',$datadetalle);
				// $insert2 = $this->modelgeneral->insertRegist('paciente_receta', $data);
				 if (!$insert2) {
				 	$error = true;
				 	break;
				 }
			}
			// $response['success'] = true;
			 $response = $error ? ['success' => false] : ['success' => true];
			echo json_encode($response);
		}else{
			$response['success'] = false;
		} 
		//  } else {
		// 	echo json_encode(['success' => false, 'message' => 'Datos del formulario no válidos.']);
		// }
	}
	
	function jsonReceta()
	{
		$data['start'] = $this->input->get_post('start', true);
		$data['length'] = $this->input->get_post('length', true);
		$data['sEcho']  = $this->input->get_post('_', true);

		// $columns = array('pacrec_id','pacrec_fecha','pacrec_hora','pacrec_asunto');
		$columns = array('','pacrec_fecha','codi_med','pacrec_asunto');
		$orderCampo = $this->input->get_post('order', true);
		$orderCampo = $orderCampo[0]['column'];
		$orderCampo = $columns[$orderCampo];
		$orderDireccion = $this->input->get_post('order', true);
		$orderDireccion = $orderDireccion[0]['dir'];
		$data['orderCampo'] = $orderCampo;
		$data['orderDireccion'] = $orderDireccion;
		$data['paciente'] = $this->input->get_post('paciente');		
		$datos = $this->historia_model->getReceta($data);
		header('content-type: application/json; charset=utf-8');
		echo json_encode($datos);
	}
	function agregarReceta()
	{
		$this->form_validation->set_rules('paciente','','required');
		$this->form_validation->set_rules('medico','','required');
		$this->form_validation->set_rules('fecha','','required');
		$this->form_validation->set_rules('hora','','required');
		$this->form_validation->set_rules('asunto','','required');
		$this->form_validation->set_rules('receta','','required');
		$this->form_validation->set_rules('indicaciones','','required');
		if($this->form_validation->run() == TRUE){
			$data['codi_pac'] = $this->input->post('paciente');
			$data['codi_med']= $this->input->post('medico');
			$data['pacrec_fecha'] = $this->input->post('fecha');
			$data['pacrec_hora']= $this->input->post('hora');
			$data['pacrec_asunto']=$this->input->post('asunto');
			$data['pacrec_receta']=$this->input->post('receta');
			$data['pacrec_indicaciones']=$this->input->post('indicaciones');
			$insert = $this->modelgeneral->insertRegist('paciente_receta',$data);
			$resp =[];
			if(!is_null($insert)){
				$resp['success'] = true;
			}else{
				$resp['success'] = false;
			}
      echo json_encode($resp);
		}

	}
}

/* End of file movimiento.php */
/* Location: ./application/controllers/historia/movimiento.php */