<div class="w100" style="margin-bottom:80px">
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
			Reporte: <?= date('Y/m/d',strtotime($_GET['desde'])) ?> - <?= date('Y/m/d',strtotime($_GET['hasta'])) ?> <br>
			<?php $_GET['estado'] ?>
		</div>
	</div>
</div>