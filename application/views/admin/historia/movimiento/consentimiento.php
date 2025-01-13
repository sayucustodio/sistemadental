<div id="HistoriaConsentimientoInformado" class="panel panel-primary" style="display: none">
    <div class="panel-heading">Consentimientos informados</div>
    <div class="panel-body">
        <ul class="nav nav-tabs" role="tablist" style="margin-bottom: 15px">
            <li class="active" role="presentation"><a href="#registrar" aria-controls="registrar" role="tab"
                    data-toggle="tab">Generar</a></li>
            <li role="presentation"><a href="#lista" aria-controls="lista" role="tab" data-toggle="tab">Lista de
                    consentimientos</a></li>

            <!-- <li role="presentation"><a href="#alergias" aria-controls="alergias" role="tab" data-toggle="tab">Alergias</a></li> -->
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="registrar">

                <form id="FormHistoriaMovimientoPacienteConsentimiento"
                    action="<?= base_url('historia/movimiento/generarConsentimiento/'. $paciente->codi_pac .'') ?>" method="post">
                    <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">
                    <div class="row">


                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">Tipo de Consentimiento Informado: </label>
                                <select name="consentimientos" class="form-control input-sm">
                                    <?php foreach ($consentimientos as $d): ?>
                                    <option value="<?= $d->codi_cons ?>"
                                        <?= ($paciente->codi_cons==$d->codi_cons)?'selected':'' ?>>
                                        <?= $d->tipo_cons ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"></label>
                                <button type="submit" class="btn btn-info">Generar</button>
                            </div>
                        </div>
                    </div>



                </form>
            </div>
            <!-- <div role="tabpanel" class="tab-pane" id="lista">

                <div class="row">
                    <div class="col-md-12">
                        <table id="TableRecetasPanel" class="table table-bordered table-condensed table-hover">
                            <thead>
                                <tr class="btn-primary btn-xs">
                                    <th></th>
                                    <th style="text-align: center;">ID</th>
                                    <th style="text-align: center;">Fecha</th>
                                    <th style="text-align: center;">Médico</th>
                                    <th style="text-align: center;">Diagnóstico</th>
                                    <th style="text-align: center;">Opciones</th>
                                   
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->


        </div>
    </div>

</div>


<div id="ModalAgregarReceta" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <!-- <form id="FormHistoriaMovimientoAgregarReceta" action="<?= base_url('historia/movimiento/agregarReceta') ?>"
                method="post" autocomplete="off">
                <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>"> -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Agregar Receta</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="control-label">Nombre de medicamento:</label>
                                    <input type="text" name="receta" class="form-control input-sm">
                                    <!-- <textarea name="receta" class="form-control input-sm" rows="1"></textarea> -->
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Forma farmaceútica:</label>
                                    <!-- <textarea name="receta" class="form-control input-sm" rows="5"></textarea> -->
                                    <select class="form-control input-sm" name="forma-farmaceutica">
                                        <option value="">--Seleccionar--</option>
                                        <option value="GEL">GEL</option>
                                        <option value="CREMA">CREMA</option>
                                        <option value="TABLETA">TABLETA</option>
                                        <option value="CÁPSULA">CÁPSULA</option>
                                        <option value="SOLUCIÓN ORAL">SOLUCIÓN ORAL</option>
                                        <option value="SUSPENSIÓN ORAL">SUSPENSIÓN ORAL</option>
                                        <option value="INYECTABLE">INYECTABLE</option>
                                        <option value="BUCAL">ENJUAJE BUCAL</option>
                                        <option value="N">No Especifica</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Cantidad:</label>
                                    <input type="text" name="cantidad" class="form-control input-sm">
                                    <!-- <textarea name="receta" class="form-control input-sm" rows="1"></textarea> -->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">Dosis:</label>
                                    <textarea name="indicaciones" class="form-control input-sm" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Vías de tratamiento:</label>
                                            <!-- <textarea name="receta" class="form-control input-sm" rows="5"></textarea> -->
                                            <select class="form-control input-sm" name="via">
                                                <option value="">--Seleccionar--</option>
                                                <option value="ORAL">ORAL</option>
                                                <option value="SUBLINGUAL">SUBLINGUAL</option>
                                                <option value="TÓPICA">TÓPICA</option>
                                                <option value="INFILTRATIVA">INFILTRATIVA</option>
                                                <option value="INTRAMUSCULAR">INTRAMUSCULAR</option>
                                                <option value="SUBCUTÁNEA">SUBCUTÁNEA</option>
                                                <option value="INTRAÓSEA">INTRAÓSEA</option>
                                                <option value="N">No Especifica</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Duración:</label>
                                            <input type="text" name="duracion" class="form-control input-sm">
                                            <!-- <textarea name="receta" class="form-control input-sm" rows="1"></textarea> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close"></i>
                    Cancelar</button>
                <button data-id="<?= $p->id_procedimiento ?>" class="addMedicamento btn btn-info"><i
                        class="fa fa-plus"></i>Agregar</button>
                <!-- <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Guardar</button> -->
            </div>
            <!-- </form> -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="ModalEditarReceta" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <form id="FormHistoriaMovimientoEditarReceta" action="<?= base_url('historia/movimiento/editarReceta') ?>"
                method="post" autocomplete="off">
                <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">
                <input type="hidden" name="id">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Receta</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">H.C: <?= $this->uri->segment(4) ?></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Edad <?= $paciente->edad_pac ?> años</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Fecha</label>
                                        <input type="text" name="fecha" class="form-control input-sm"
                                            value="<?= date('Y-m-d') ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Hora</label>
                                        <input type="text" name="hora" class="form-control input-sm"
                                            value="<?= date('H:i:s') ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Asunto</label>
                                        <input type="text" name="asunto" class="form-control input-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Receta</label>
                                        <textarea name="receta" class="form-control input-sm" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Medico</label>
                                        <input type="text" name="medico" disabled class="form-control input-sm"
                                            value="<?= $this->session->userdata('nombre').' '.$this->session->userdata('apellido') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Diagnostico 01</label>
                                        <select name="diagnostico01" class="form-control select2" style="width: 100%">
                                            <option value=""></option>
                                            <?php foreach ($diagnosticos as $d): ?>
                                            <option value="<?= $d->codi_enf ?>"><?= $d->desc_enf ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Diagnostico 02</label>
                                        <select name="diagnostico02" class="form-control select2" style="width: 100%">
                                            <option value=""></option>
                                            <?php foreach ($diagnosticos as $d): ?>
                                            <option value="<?= $d->codi_enf ?>"><?= $d->desc_enf ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Diagnostico 03</label>
                                        <select name="diagnostico03" class="form-control select2" style="width: 100%">
                                            <option value=""></option>
                                            <?php foreach ($diagnosticos as $d): ?>
                                            <option value="<?= $d->codi_enf ?>"><?= $d->desc_enf ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Indicaciones</label>
                                        <textarea name="indicaciones" class="form-control input-sm" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i
                            class="fa fa-close"></i> Cancelar</button>
                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Guardar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->