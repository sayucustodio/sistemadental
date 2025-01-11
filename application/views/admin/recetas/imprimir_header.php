<style>
	.header {
            background-color: #0A344D;
            height: 100px;
            color: white;
            text-align: center;
            padding: 20px;
            align-items: center;
            justify-content: center;
        }
	</style>
<div class="w100 header" style="margin-bottom:80px">
	<div class="w30">
		<img src="<?= base_url('assets/uploads/logo/'.$this->session->userdata('foto')) ?>" style="max-width: 100px">
	</div>
	<div class="w40 text-center">
		<h5>CLINICA <br><?= $clinicas->nomb_clin ?></h5>
		<p>
			Dirección: <?= $clinicas->direc_clin ?> 
			<br>
			Email: <?= $clinicas->email_clin ?>
			<br>
			Telefono: <?= $clinicas->telf_clin ?>
		</p>
	</div>
	<div class="w30">
		<br>
		<br>
		<br>
		<div class="w100" style="padding-left: 140px">
			Fecha: <br><?= date('d-m-Y')?> <br>
			<?php $_GET['estado'] ?>
		</div>
	</div>
</div>