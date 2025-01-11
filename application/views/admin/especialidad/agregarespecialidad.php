
<div id="content" class="content-wrapper-2">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-th-list" aria-hidden="true"></i> Agregar
    
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Modulo</a></li>
      <li><a href="#">catalogo</a></li>
      <li class="active">especialidad</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
               
                 <ol class="breadcrumb">

                

                    <li><a href="<?= base_url('mantenimiento/especialidad') ?>"><i class="fa fa-hand-o-left"></i> Volver</a></li>
                   

                   
                </ol>
            <!-- tools box -->
    
            <!-- /. tools -->
        
          <!-- /.box-header -->

        <div class="box-body pad">
      
            <form id="FormRegistrarEspecialidad" action="<?php echo base_url();?>mantenimiento/especialidad/guardar" method="POST" autocomplete="off">


          <div class="row">
     
                <div class="col-md-4">
                  <div class="form-group <?php echo !empty(form_error('nombre'))? 'has-error':'';?>">
                    <label class="control-label">Especialidad*</label>
                    <input type="text" name="nombre" class="form-control input-sm" placeholder="Especialidad">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">Descripcion*</label>
                    <input type="text" name="descripcion" class="form-control input-sm" placeholder="Descripcion">
                  </div>
                </div>

                        <div class="col-md-2">
                  <div class="form-group">
                   <label class="control-label">Estado *</label>
                     <select class="form-control input-sm"  name="estado" >
                                <option value="S">Activado</option>
                                <option value="N">Inactivo</option>
 
                              </select>
                  </div>


                                   
                </div>
<div class="col-md-12">
                                      <button type="submit" class="pull-right btn btn-md btn-info "><i class="fa fa-floppy-o"></i> Guardar</button>
                                  
                                   </div>  

                
          </div>


                 

        </form>
        </div>
        </div>
        <!-- /.box -->

        </div>
 

    
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->

</div>

</div>

