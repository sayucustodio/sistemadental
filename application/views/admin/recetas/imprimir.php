
<br>
<div class="w100 " style=" margin-bottom:50px;" >
	<div class="w50">
		<div class="w100">
			
			<b>Especialidad:</b> <?= $receta->nombre_especialidad ?> <br>
		</div>
		<div class="w100">
			<b>Doctor:</b> <?= $receta->medico ?> <br>
		</div>
		<div class="w100">
			<b>Paciente:</b> <?= $receta->NombresApellidos ?> <br>
		</div>
		<div class="w100">
			<b>Asunto:</b> <?= $receta->pacrec_asunto ?> <br>
		</div>
	</div>
	<div class="w50">
		<div class="w100">
			<b>Fecha creación:</b> <?= $receta->pacrec_fecha ?> <br>
		</div>
	</div>
</div>
<br>
<table class="table table-bordered">
	<thead>
		<tr>
        <th>N°</th>
			<th>Denominación</th>
			<th>Días</th>
			<th>UM/FF</th>
			<th>Cantidad.</th>
			<th>Via Admin</th>
			
			
            <th>Indicaciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($receta->detalle as $t): ?>
		<tr>
			<td><?= $t->codi_detareceta ?></td>
			<td><?= $t->pacrec_medicamento ?></td>
			<td><?= $t->pacrec_duracion ?></td>
			<td><?= $t->pacrec_forma ?></td>
			<td><?= $t->pacrec_cantidad ?></td>
			<td><?= $t->pacrec_via ?></td>
            <td><?= $t->pacrec_indicaciones ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
	<tfoot>
		
	</tfoot>
</table>