<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Agenda extends CI_Controller {
	private $permisos;
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("login")){
			redirect(base_url());
		}
		$this->load->model('modelgeneral');
		$this->load->model('citas_model');
		$this->load->helper('general');
		$this->permisos = $this->backend_lib->control();
	}

	public function index()
	{
		$data['especialidad'] = $this->db->from('especialidad')
														->order_by('nombre_especialidad','asc')
														->get()->result();
		$data['estados'] = $this->modelgeneral->getTable('tipo_citado');
		$data['permisos'] =$this->permisos;
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/citas/agenda',$data);
		$this->load->view('layouts/footer');
	}

	public function calendario()
	{
		//Capturar las fechas que envian desde el front
		$desde = date("Y-m-d", $this->input->get('from') / 1000);
		$hasta = strtotime('-1 day',$this->input->get('to') / 1000);
		$hasta = date("Y-m-d", $hasta);
		$anio = explode('-',$desde)[0];
		$mes = explode('-',$desde)[1];

		$medico = $this->input->get('medico');
		$especialidad = $this->input->get('especialidad');
		$estado = $this->input->get('estado');


		$data = [];
		$data['success'] = 1;

		$citas = $this->citas_model->getCitas($desde,$hasta,$medico,$especialidad,$estado);

		$semana = $this->citasDeSemana($citas);

		foreach ($citas as $c) {

			$inicio = strtotime($c->fech_cit);
			$fin = strtotime('+15 minute',strtotime(date($c->fech_cit)));
			$result[] = [
				'id' => $c->codi_cit,
				"start" => strtotime(date($c->fech_cit)) * 1000, // Milliseconds
				"end" => strtotime('+15 minute',strtotime(date($c->fech_cit))) * 1000, //Milliseconds
				'class' => 'event-'.classAgendaCita($c->cod_citado),
				'title' => $c->nomb_pac.' '.$c->apel_pac,
				'url' => base_url('citas/agenda/getCita/'.$c->codi_cit),
				'inicio' => date('H:i',$inicio),
				'fin' => date('H:i',$fin),
				'correo' => $c->correo,
				'telefono' => $c->telf_pac,
				'medico' => $c->nomb_med.' '.$c->apel_med,
				'estado' => $c->estado			
			];

			$semana[date('H:i',$inicio)][date('N',$inicio)] = $c->nomb_pac.' '.$c->apel_pac;
		}
		$data['success'] = 1;
		$data['semana'] = $semana;
		$data['result'] = $result;
		$data['medico'] = $medico;
		$data['espe'] = $especialidad;
		echo json_encode($data);
	}

	private function citasDeSemana($citas)
	{
		$horas = [];
		foreach ($citas as $c) {
			$hora = date('H:i',strtotime($c->fech_cit));
			if (!in_array($hora,$horas)) {
				$horas[] = $hora;
			}
		}

		$semana = [];
		foreach ($horas as $key => $value) {
			$array = [
				'Hora' => $value,
				1 => '',2 => '',3 => '',4 => '',
				5 => '',6 => '',7 => ''
			];
			$semana[$value] = $array;
		}

		return $semana;
	}

	function getCita($id)
	{
		$data['cita'] = $this->citas_model->getCita($id);
		$this->load->view('admin/citas/modal_calendario',$data);
	}
function enviarRecordatorio(){
	
			
	$paciente = $this->input->post('paciente');
	$correo=$this->input->post('correo');
		$doctor = $this->input->post('doctor');
		$horaInicio = $this->input->post('horaInicio');
		$fecha = $this->input->post('fecha');

		require_once(APPPATH . '../vendor/autoload.php');
	$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';     // Servidor SMTP de Gmail
    $mail->SMTPAuth   = true;
    $mail->Username   = 'oxanablas39@gmail.com'; // Tu dirección de Gmail
    $mail->Password   = 'ccea jjvt eclg wypr';       // Tu contraseña de Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('oxanablas39@gmail.com', 'Clinica');
    $mail->addAddress($correo); // Destinatario

    $mail->isHTML(true);
    $mail->Subject = 'Recordatorio de tu cita médica el ' . $fecha;
    $mail->Body    =  '
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Recordatorio de Cita</title>
		<style>
			body {
				font-family: Arial, sans-serif;
				line-height: 1.6;
				color: #333;
				background-color: #f9f9f9;
				margin: 0;
				padding: 20px;
			}
			.container {
				max-width: 600px;
				margin: 20px auto;
				background: #fff;
				border: 1px solid #ddd;
				border-radius: 8px;
				padding: 20px;
				box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			}
			.header {
				text-align: center;
				margin-bottom: 20px;
			}
			.header img {
				max-width: 150px;
			}
			.header h1 {
				margin: 0;
				font-size: 22px;
				color: #4CAF50;
			}
			.content {
				margin-bottom: 20px;
			}
			.content p {
				margin: 10px 0;
			}
			.footer {
				text-align: center;
				margin-top: 20px;
				font-size: 12px;
				color: #777;
			}
			.footer a {
				color: #4CAF50;
				text-decoration: none;
			}
			.cta-button {
				display: inline-block;
				padding: 10px 20px;
				margin-top: 10px;
				background-color: #4CAF50;
				color: #fff;
				text-decoration: none;
				border-radius: 5px;
				font-weight: bold;
			}
			.cta-button:hover {
				background-color: #45a049;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="header">
				<img src="https://via.placeholder.com/150" alt="Logo de la Clínica">
				<h1>Clínica [Nombre de la Clínica]</h1>
			</div>
			<div class="content">
				<p>Hola <strong>' . htmlspecialchars($paciente) . '</strong>,</p>
				<p>Le recordamos que tiene una cita médica programada con los siguientes detalles:</p>
				<ul>
					<li><strong>Médico:</strong> ' . htmlspecialchars($doctor) . '</li>
					<li><strong>Fecha:</strong> ' . htmlspecialchars($fecha) . '</li>
					<li><strong>Hora:</strong> ' . htmlspecialchars($horaInicio) . '</li>
				</ul>
				<p>Por favor, asegúrese de llegar con al menos 10 minutos de antelación.</p>
				<p>Si tiene alguna pregunta o necesita reprogramar su cita, no dude en contactarnos.</p>
				<a href="tel:+51987654321" class="cta-button">Contactar a la Clínica</a>
			</div>
			<div class="footer">
				<p>Atentamente,<br>El equipo de <strong>[Nombre de la Clínica]</strong></p>
				<p><small>Dirección: Av. Ejemplo 123, Ciudad</small></p>
				<p><small>Teléfono: +51 987 654 321 | Email: contacto@clinica.com</small></p>
				<p><a href="https://clinica.com">Visita nuestro sitio web</a></p>
			</div>
		</div>
	</body>
	</html>';
	
    // $mail->AltBody = 'Este es el cuerpo en texto plano para clientes sin soporte HTML';

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'El mensaje ha sido enviado']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'No se pudo enviar el mensaje. Error de Mailer: ' . $mail->ErrorInfo]);
}  
}
public function update($id,$data){
	$this->db->where('codi_med',$id);
	return $this->db->update('medico',$data);
}
public function actualizarEstado(){
	log_message('debug', 'Datos recibidos: estado = ' . $this->input->post('estado') . ', citaId = ' . $this->input->post('citaId'));
	if (empty($this->input->post('estado')) || empty($this->input->post('citaId'))) {
		echo json_encode(['success' => false, 'message' => 'Datos faltantes']);
		return;
	}
	$data['cod_citado'] = $this->input->post('estado');
	$where['codi_cit'] = $this->input->post('citaId');			
			$edit = $this->modelgeneral->editRegist('cita_medica',$where,$data);
			$resp =[];
			if(!is_null($edit)){
				$resp['success'] = true;
			}else{
				$resp['success'] = false;
			}
            echo json_encode($resp);
}

}

/* End of file Agenda.php */
/* Location: ./application/controllers/citas/Agenda.php */