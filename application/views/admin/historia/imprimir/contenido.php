<style>
.title-1 {
    border: 1px solid #070707;
    padding: 3px;
    text-align: center;
    font-weight: bold;
    font-size: 12;
    background-color: #B5ADAD;
}

.subtitle-2 {
    border: 1px solid #333;
    padding: 3px;
    font-size: 12;
}

.div-info {
    border: 1px solid #333;
    padding: 10px;
    justify-content: space-between;
    align-items: center;
    color: #333;
    overflow: hidden;
    height: 20px;
}

.left {
    float: left;
}

.right {
    float: right;
}

table {
    width: 100%;
    border-collapse: collapse;
    /* Elimina espacios entre bordes */
    margin-bottom: 10px;
    /* Separación entre la tabla y otros elementos */
}

th,
td {
    border: 1px solid #070707;
    padding: 5px;
    text-align: center;
    height: 20px;
    /* Centrado del contenido */
}

th {
    background-color: #f4f4f4;
    /* Fondo para encabezados */
    font-weight: bold;
}

.question {
    text-align: left;
    /* Alinear preguntas a la izquierda */
}

.section-title1 {
    text-align: center;
    font-weight: bold;
    padding: 10px;
    background-color: #B5ADAD;
    border: 1px solid #070707;
}

.section-title {
    text-align: left;
    font-weight: bold;
    padding: 10px;
    background-color: white;
    border: 1px solid #070707;
}
</style>
<div style="font-size: 11px">
<!-- <img style="width: 100%" alt="odonto"
src="http://localhost/demo/assets/img/odontogramas/odontograma-17-ini.jpeg"> 
 <img style="width: 80%" alt="imagen1"
src="http://localhost/demo/assets/img/odontogramas/pixelcut-export.jpeg">
<img style="width: 80%" alt="odonto" src="https://www.kia.com/content/dam/kwcms/gt/en/images/discover-kia/voice-search/parts-80-1.jpg"> -->

    <div class="w100" style="margin-bottom:50px">
        <div class="w20">
            <img style="max-width: 90px" src="<?= base_url('assets/uploads/logo/'.$this->session->userdata('foto')) ?>">
        </div>
        <div class="w60 text-center">
            <h3 style=" font-weight: bold; padding-top: 30px;">HISTORIA CLINICA</h3>
        </div>
        <!-- <h3 style="text-align: center; font-weight:bold; ">
		HISTORIA ODONTOLOGICA
		</h3> -->
    </div>
    <br>
    <br>

    <div class="w100">
        <div style="padding: 0px">
            <div class="div-info">
                <span class="left">H.C: <?= $historia->codi_pac ?></span>
                <span class="right">Fecha impresión: <?= date('d/m/Y   h:i:s') ?></span>
            </div>

        </div>

        <div style="padding: 0px; padding-top: 2px">

            <div class="title-1" height="20">
                <label>
                    ANAMNESIS
                </label>
            </div>

        </div>

        <div class="subtitle-2">
            I. AFILIACIÓN

        </div>

        <div>

            <div style="border:1px solid #070707; padding:3px; font-size: 10;" height="80">
                <b>Apellidos y Nombres:</b> <?= $historia->paciente ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Edad:</b>
                <?= $historia->edad ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;<b>Sexo:</b> <?= $historia->sexo ?><br>
                <b>D.N.I:</b>
                <?= $historia->dni ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Telefono:</b>
                <?=$historia->telefono ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>Email:</b> <?=$historia->email ?><br>
                <b>Pais:</b> <?=$historia->pais ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Departamento:
                </b>
                <?=$historia->departamento ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Provincia:
                </b> <?=$historia->provincia ?> <br>
                <b>Distrito: </b>
                <?=$historia->distrito ?>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Fech.nacimiento:
                </b> <?=$historia->fechanacimiento ?><br>
                <b>Dirección:</b>
                <?=$historia->direccion ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>Estado
                    civil:</b> <?=$historia->civil ?><br>
                <b>Representante: </b> <?=$historia->representante ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>Parentesco: </b> <?=$historia->parentesco ?>



            </div>

        </div>

        <!--CONSULTA DE SALUD  -->
        <div>


            <div class="subtitle-2">
                II. CONSULTA DE SALUD

            </div>
            <div class="preguntas">
                <table>
                    <!-- Encabezado -->
                    <thead>
                        <tr>
                            <th style="width: 5%;">Nro.</th>
                            <th style="width: 55%;">¿Pregunta?</th>
                            <th style="width: 10%;">Respuesta</th>
                            <th style="width: 30%;">Comentario</th>
                        </tr>
                    </thead>
                    <!-- Cuerpo -->
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="question">¿Ha tenido alguna vez tratamiento de ortodoncia?</td>
                            <td><?= $historia->consulortodoncia ?></td>
                            <td><?= $historia->respuesta1 ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="question">¿Está tomando algún medicamento actualmente?</td>
                            <td><?= $historia->consutmedicamento ?></td>
                            <td><?= $historia->respuesta2 ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="question">¿Es alérgico a algun medicamento o anestésico?</td>
                            <td> <?=$historia->consulalergico?></td>
                            <td><?= $historia->respuesta3 ?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="question">¿Has estado hospitalizado o tenido una cirugia?</td>
                            <td> <?=$historia->consulhospi?></td>
                            <td><?= $historia->respuesta4 ?></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="question">¿Ha tenido algun transtorno nervioso o emocional?</td>
                            <td> <?=$historia->consultranstorno?></td>
                            <td><?= $historia->respuesta5 ?></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="question">¿Padece o a padecido alguna enfermedad?</td>
                            <td colspan="2"> <?=$historia->padece?></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="question">¿Cepilla los dientes diariamente??</td>
                            <td> <?=$historia->consulcepilla?></td>
                            <td> <?=$historia->respuesta6?></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="question">¿Está en periodo de gestación?</td>
                            <td> <?=$historia->consulpresion?></td>
                            <td> <?=$historia->respuesta7?></td>
                        </tr>
                    </tbody>
                </table>
            </div>



        </div>

        <!--FIN CONSULTA DE SALUD  -->
        <!--------------------------->

        <!--EXAMEN CLINICO  -->

        <table>
            <!-- Título Principal -->
            <tr>
                <td colspan="6" class="section-title1">EXPLORACIÓN FÍSICA</td>
            </tr>
            <!-- Funciones Vitales -->
            <tr>
                <td colspan="6" class="section-title">1. FUNCIONES VITALES</td>
            </tr>
            <thead>
                <tr>
                    <th colspan="2">Presión Arterial</th>
                    <th colspan="2">Pulso</th>
                    <th colspan="2">Temperatura</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $historia->exploracion ?></td>
                    <td>mn Hg</td>
                    <td><?= $historia->pulso ?></td>
                    <td>/min</td>
                    <td><?= $historia->temperatura ?></td>
                    <td>°C</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th colspan="3">Frecuencia Cardiaca</th>
                    <th colspan="3">Frecuencia Respiratoria</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"><?= $historia->fcardiaca ?></td>
                    <td>x min</td>
                    <td colspan="2"><?= $historia->frespiratoria ?></td>
                    <td>/min</td>
                </tr>
            </tbody>
            <!-- Peso y Talla -->
            <tr>
                <td colspan="6" class="section-title">2. PESO Y TALLA</td>
            </tr>
            <thead>
                <tr>
                    <th colspan="2">Peso</th>
                    <th colspan="2">Talla</th>
                    <th colspan="2">IMC</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $historia->peso ?></td>
                    <td>Kg</td>
                    <td><?= $historia->talla ?></td>
                    <td>m</td>
                    <td><?= $historia->imc ?></td>
                    <td>Kg/m²</td>
                </tr>
            </tbody>
            <!-- Cráneo y Cara -->
            <tr>
                <td colspan="6" class="section-title">3. CRÁNEO Y CARA</td>
            </tr>
            <thead>
                <tr>
                    <th colspan="3">Cráneo</th>
                    <th colspan="3">Cara</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3"><?= $historia->craneo ?></td>
                    <td colspan="3"><?= $historia->cara ?></td>
                </tr>
            </tbody>
            <tr>
                <td colspan="6" class="section-title">4.EXAMEN CLINICO GENERAL
                </td>
            </tr>
            <tr>
                <td colspan="6"> <?= $historia->exmclinico ?>
                </td>
            </tr>
            <tr>
                <td colspan="6" class="section-title">5.EXAMEN COMPLEMENTARIO
                </td>
            </tr>
            <tr>
                <td colspan="6"> <?= $historia->exmcomplet ?>
                </td>
            </tr>
            <tr>
                <td colspan="6" class="section-title">6.ECTOSCOPIA
                </td>
            </tr>
            <tr>
                <td colspan="6"> <?= $historia->ectoscopia ?>
                </td>
            </tr>
            <tr>
                <td colspan="6" class="section-title1">ODONTOGRAMA INICIAL
                </td>
            </tr>
            <tr>
                <td colspan="6">
                <img style="width: 80%" alt="odonto"
                src="<?= base_url('assets/img/odontogramas/odontograma-'.$paciente->codi_pac.'-ini.jpeg') ?>"> 
                    <!-- <img style="width: 100%" alt="odonto"
                        src="http://localhost/demo/assets/img/odontogramas/odontograma-<?= $paciente->codi_pac ?>-ini.png">  -->
                    <!-- src="/assets/img/odontogramas/odontograma-17-ini.png">  -->

                </td>
            </tr>

            <!-- <tr>
                <td colspan="6" class="section-title">ESTADO DE LAS PIEZAS DENTALES (ODONTOGRANA INICIAL)
                </td>
            </tr> -->

            <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Pieza</th>
                    <th>Pieza Final</th>
                    <th>Estado</th>
                    <th colspan="2">Observación</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($historia->odinicial as $o): ?>
                <tr>
                    <td>
                        <?= htmlspecialchars($o->pacodo_sigla . ' ' . $o->nombre_hal) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($o->numero_die) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($o->pacodo_dientefinal) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($o->pacodo_estado) ?>
                    </td>
                    <td colspan="2">
                        <?= htmlspecialchars($o->pacodo_espec) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

            <tr>
                <td colspan="6" class="section-title1">DIAGNÓSTICO
                </td>
            </tr>

            <thead>
                <tr>

                    <th colspan="3">DIAGNOSTICO</th>
                    <th colspan="3">TRATAMIENTO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($historia->pacdiagnostico as $dg): ?>
                <tr>
                    <td><?= $dg->codi_enf01 ?></td>
                    <td colspan="2"><?= $dg->desc_enf ?></td>
                    <td><?= $dg->codi_trat01 ?></td>
                    <td colspan="2"><?= $dg->desc_trat?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
            <tr>
                <td colspan="6" class="section-title1">RECETARIO
                </td>
            </tr>
            <thead>
                <tr>
                    <th>FECHA</th>
                    <th>DIAGNOSTICO</th>
                    <th>DOCTOR</th>
                    <th>MEDICAMENTO</th>
                    <th>DETALLE</th>
                    <th>INDICACIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $current_asunto = null;
                foreach ($historia->receta as $r): ?>
                <tr>
                    <?php if ($current_asunto !== $r->pacrec_id): ?>
                    <td rowspan="<?= count(array_filter($historia->receta, function($item) use ($r) {
                             return $item->pacrec_id=== $r->pacrec_id;})) ?>"><?= $r->pacrec_fecha ?></td>

                    <td rowspan="<?= count(array_filter($historia->receta, function($item) use ($r) {
    return $item->pacrec_id=== $r->pacrec_id;})) ?>">
                        <?= $r->pacrec_asunto ?>
                    </td>


                    <td rowspan="<?= count(array_filter($historia->receta, function($item) use ($r) {
    return $item->pacrec_id=== $r->pacrec_id;})) ?>"><?= $r->apel_med.' '. $r->nomb_med ?>
                    </td>
                    <?php $current_asunto = $r->pacrec_id; ?>
                    <?php endif; ?>
                    <td><?= $r->pacrec_medicamento?></td>
                    <td><?= $r->pacrec_forma?></td>
                    <td><?= $r->pacrec_indicaciones?></td>

                </tr>
                <?php endforeach ?>
            </tbody>
            <tr>
                <td colspan="6" class="section-title1">EVOLUCIÓN
                </td>
            </tr>
            <thead>
                <tr>
                    <th>FECHA</th>
                    <th colspan="2">DESCRIPCIÓN DE EVOLUCIÓN</th>
                    <th>ESPECIALIDAD</th>
                    <th colspan="2">DOCTOR</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($historia->evolucion as $ev): ?>
                <tr>
                    <td><?= $ev->fecha_evolucion ?>
                    </td>
                    <td colspan="2"><?= $ev->pacevol_descripcion ?></td>
                    <td><?= $ev->nombre_especialidad ?></td>
                    <td colspan="2"><?= $ev->apel_med.' '. $ev->nomb_med?></td>

                </tr>
                <?php endforeach ?>
            </tbody>


        </table>
    </div>
</div>