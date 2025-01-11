<div id="HistoriaContenidoDiagnostico" class="panel panel-primary" style="display: none">
  <div class="panel-heading">Diagnóstico y Tratamiento</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalAgregarDiagnostico"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table id="TableHistoriaMovimientoDiagnostico" class="table table-bordered">
          <thead>
            <tr class="btn-primary btn-xs">
              <th style="text-align: center;">Fecha</th>
              <th  style="text-align: center;">Diagnóstico</th>
              <th  style="text-align: center;">Tratamiento</th>
              <th  style="text-align: center;">Opciones</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<div id="ModalAgregarDiagnostico" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <form id="FormHistoriaMovimientoAgregarDiagnostico" action="<?= base_url('historia/movimiento/agregarDiagnostico') ?>" method="post" autocomplete="off">
        <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Agregar Diagnostico</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">H.C: <?= $this->uri->segment(4) ?></label>
                  </div>
                </div>
           
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Fecha:</label>
                    <input type="text" name="fecha" class="form-control input-sm" value="<?= date('Y-m-d') ?>" readonly>
                  </div>
                </div>

                 <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Diagnóstico:</label>
                    <select name="diagnostico01" class="form-control select2" style="width: 100%">
                      <option value=""></option>
                      <?php foreach ($diagnosticos as $d): ?>
                      <option value="<?= $d->codi_enf ?>"><?= $d->codi_enf ?> | <?= $d->desc_enf ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Tratamiento:</label>
                    <select name="procedimiento01" class="form-control select2" style="width: 100%">
                      <option value=""></option>
                      <?php foreach ($procedimientos as $p): ?>
                      <option value="<?= $p->codi_trat ?>"><?= $p->codi_trat ?> | <?= $p->desc_trat ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
             
              </div>
        
           
           
            </div>
          
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
          <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Guardar</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="ModalEditarDiagnostico" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <form id="FormHistoriaMovimientoEditarDiagnostico" action="<?= base_url('historia/movimiento/editarDiagnostico') ?>" method="post" autocomplete="off">
        <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">
        <input type="hidden" name="id" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Editar Diagnóstico</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">H.C: <?= $this->uri->segment(4) ?></label>
                  </div>
                </div>
           
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Fecha</label>
                    <input type="text" name="fecha" class="form-control input-sm" value="<?= date('Y-m-d') ?>" readonly>
                  </div>
                </div>
      
         
                 <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Diagnostico 01</label>
                    <select name="diagnostico01" class="form-control select2" style="width: 100%">
                      <option value=""></option>
                      <?php foreach ($diagnosticos as $d): ?>
                      <option value="<?= $d->codi_enf ?>"><?= $d->codi_enf ?> | <?= $d->desc_enf ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Tratamiento 01</label>
                    <select name="procedimiento01" class="form-control select2" style="width: 100%">
                      <option value=""></option>
                      <?php foreach ($procedimientos as $p): ?>
                      <option value="<?= $p->codi_trat ?>"><?= $p->codi_trat ?> | <?= $p->desc_trat ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
             
      
        
         </div>
          
           
            
            </div>
       
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
          <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Guardar</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
