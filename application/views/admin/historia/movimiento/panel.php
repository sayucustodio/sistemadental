<div class="content-wrapper">
  <section class="content-header">
    <h4><i class="fa fa-id-card-o" ></i> Historia Odontologica</h4>
  </section>
   <section class="content">
    <div class="row">
      <div class="col-md-12">
        
         <div class="box box-info">
          <div class="box-body">
            <div class="box box-default box-solid box-default ">
              <div class="box-body">
                <form id="HistoriaMovimientoBusqueda" action="" autocomplete="off">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="control-label">Desde:</label>
                        <div class="input-group date">
                        <input type="text" name="desde" class="form-control datepicker input-sm" value="<?= date('Y-m-d') ?>">
                         <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="control-label">Hasta:</label>
                        <div class="input-group date">
                        <input type="text" name="hasta" class="form-control datepicker input-sm" value="<?= date('Y-m-d') ?>">
                         <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">Nombres Apellidos:</label>
                        <input type="text" name="nombresApellidos" class="form-control input-sm">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button type="submit" style="margin-top:24px" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Buscar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <a target="_blank" id="#" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Imprimir Lista</a>
                  <a href="<?= base_url('historia/movimiento') ?>" class="btn btn-success btn-sm right"><i class="fa fa-refresh" aria-hidden="true"></i> Actualizar</a>
                </div>
              </div>
              <div class="col-md-12">

                <div class="table-responsive">

                  <table id="TableHistoriaMovimiento" class="table table-bordered table-condensed table-hover">

                    <thead>
                      <tr class="btn-primary btn-xs">
          
                        <th style="text-align: center;">Historia</th>
                        <th style="text-align: center;">Paciente</th>
                        <th style="text-align: center;">Edad</th>
                        <th style="text-align: center;">DNI</th>
                        <th style="text-align: center;">Fecha de Cita</th>
                        <th style="text-align: center;">Hora de Cita</th>
                        <th style="text-align: center;">Estado</th>
                        <th style="text-align: center;">Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


            
          </div>
         </div>
      </div>
    </div>
   </section>
</div>