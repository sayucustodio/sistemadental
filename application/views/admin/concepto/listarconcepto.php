
<div id="content" class="content-wrapper-2">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-th-list" aria-hidden="true"></i> Tipo Concepto
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Modulo</a></li>
        <li><a href="#">catalogo</a></li>
        <li class="active">concepto</li>
      </ol>
    </section>
    <?php if ($this->session->flashdata('success')): ?>
        <script type="text/javascript">
           $(function(){
         Swal.fire(
  'Guardo Exitosamente!',
  'Tipo de Concepto!',
  'success'
)
      });
</script>
    <?php endif ?> 
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
                 
                   <ol class="breadcrumb">
                      <li><a href="<?= base_url('mantenimiento/concepto') ?>"><i class="fa fa-refresh"></i> Actualizar</a></li>
                      <li><a href="<?= base_url('mantenimiento/concepto/nuevo') ?>"><i class="fa fa-user-plus"></i> Nuevo</a></li>
                     
                  </ol>
              <!-- tools box -->
      
              <!-- /. tools -->
          
            <!-- /.box-header -->
            <div class="box-body pad">
              <form id="ConceptoFormBusqueda" autocomplete="off">
                        <div class="row">
            
              
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">Busqueda por nombre :</label>
                    <input type="text" name="tipo_concepto" class="form-control input-sm">
                  </div>
                </div>
          
                <div class="col-md-2">
                  <button type="submit" style="margin-top:24px" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Buscar</button>
           
                </div>
              </div>    
              </form>
            </div>
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
        
                   <div class="col-md-12">
                <div class="table-responsive">
                  <table id="TableMantenimientoConcepto" class="table table-bordered table-striped table-sm">
                    <thead>
                      <tr class="info">
                        <th style="background-color: #3c8dbc; color: white; text-align: center;">Codigo</th>
                        <th style="background-color: #3c8dbc; color: white; text-align: center;">Descripción</th>
                        <th style="background-color: #3c8dbc; color: white; text-align: center;">Estado</th>
                        <th style="background-color: #3c8dbc; color: white; text-align: center;">Acciones</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
               
                  </table>
                </div>
              </div>
            </div>

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->

  </div>

</div>



