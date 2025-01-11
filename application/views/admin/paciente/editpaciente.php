<style>
  /* Eliminar las flechas en navegadores WebKit (Chrome, Safari, Opera) */
  input[type="number"]::-webkit-outer-spin-button,
  input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* Eliminar las flechas en Firefox */
  input[type="number"] {
    -moz-appearance: textfield;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Paciente
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Paciente</a></li>
        <li class="active">Actualizar</li>
      </ol>

  
    
    </section>

     
    <!-- Main content -->
    <section class="content">
       <form id='FormRegistrarPaciente' action="<?= base_url('mantenimiento/paciente/paciente_update')?>" method="POST" autocomplete="OFF" enctype="multipart/form-data">
 
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <?php if (!is_null($pacientes->foto_paciente)): ?>
              <img src="<?= base_url('assets/uploads/pacientes/'.$pacientes->foto_paciente) ?>" alt="<?= $pacientes->nomb_paciente.' '.$pacientes->apel_pac ?>" class="img img-responsive" style="max-width: 100px">
              <?php else: ?>
              <img class="profile-user-img img-responsive img-circle" src="<?= base_url() ?>assets/img/usuario_inicio.png" alt="User profile picture" class="img img-responsive" style="max-width: 100px">
              <?php endif ?>
              <p class="text-muted text-center">Paciente</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
            
                <div class="form-group">
                  <div class="input-group">
                    <input name="foto_paciente" type="file">
                    <span class="text-danger">Solo subir imagen si va a modificar.</span><br>
                  </div>
                  
                </div>
                  <!-- <b>Following</b> <a class="pull-right">543</a> -->
                </li>


                <li class="list-group-item">
                    <b>Fecha registro:</b> 
                <div class="form-group">
                  <div class="input-group date">
                    <input type='text' name="fecha_registro" class="form-control datepicker" value="<?= date('Y-m-d') ?>" readonly="readonly" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                  
                </div>
                  <!-- <b>Following</b> <a class="pull-right">543</a> -->
                </li>
               
              </ul>

              <a href="<?=base_url('mantenimiento/paciente')?>" class="btn btn-primary btn-block" ><i class="fa fa-hand-o-left"></i> Regresar</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

   
          <!-- /.box -->
        </div>

           <!-- /.col -->
        <div class="col-md-9">
          
           <div class="box box-primary collapsed-box">
             <div class="box-header with-border">
                 <div class="nav-tabs-custom">
                    
           <!-- /.tab-pane -->


            <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                   
                      <label class="col-form-label">Historia:</label>
                      <input type="text" name="codigo" class="form-control input-sm" value="<?php echo $pacientes->codi_pac;?>" readonly="readonly" >
                    </div>
                  </div>
           
            </div>
             <div class="row">
             <div class="col-md-2">
                    <div class="form-group">
                      <label class="col-form-label">Documento: *</label>
                      <input type="text" name="dni" class="form-control input-sm" placeholder="Documento" maxlength="8" minlength="8" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" value="<?php echo !empty(form_error('dni')) ? set_value('dni'):$pacientes->dni_pac?>">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-form-label">Nombres: *</label>
                      <input type="text" name="nombre" class="form-control input-sm" placeholder="Nombres" value="<?php echo !empty(form_error('nombre')) ? set_value('nombre'):$pacientes->nomb_pac?>" onkeypress="return soloLetras(event)">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-form-label">Apellidos: *</label>
                      <input type="text" name="apellidos" class="form-control input-sm" placeholder="Apellidos" value="<?php echo !empty(form_error('apellidos')) ? set_value('apellidos'):$pacientes->apel_pac?>" onkeypress="return soloLetras(event)" onkeypress="return soloLetras(event)" >
                    </div>
                  </div>
            </div>
            <div class="row">
             
                  
             <div class="col-md-2">
               <div class="form-group">
                 <label class="col-form-label">RUC: </label>
                 <input type="text" name="ruc" id="ruc" class="form-control input-sm" placeholder="RUC" maxlength="11" minlength="11" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;"value="<?php echo !empty(form_error('ruc')) ? set_value('ruc'):$pacientes->ruc_pac?>">
               </div>
             </div>
       
             <div class="col-md-5">
               <div class="form-group">
                 <label class="col-form-label">Razón Social: </label>
                 <input type="text" name="razon-social" id="razon-social" class="form-control input-sm" value="<?php echo !empty(form_error('razon-social')) ? set_value('razon-social'):$pacientes->razonsocial_ruc?>"placeholder="Razon Social" onkeypress="return soloLetras(event)" readonly>
               </div>
             </div>
             <div class="col-md-5">
               <div class="form-group">
                 <label class="col-form-label">Dirección: </label>
                 <input type="text" name="direccion-ruc" id="direccion-ruc" class="form-control input-sm" value="<?php echo !empty(form_error('direccion-ruc')) ? set_value('direccion-ruc'):$pacientes->dire_ruc?>" placeholder="Direccion" onkeypress="return soloLetras(event)"readonly>
               </div>
             </div>
       </div>


                    <div class="row">
                  
                  <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label class="col-form-label">Grado Instruccion: *</label>
                         <select class="form-control input-sm" name="estudios" >
                                  <option value="S" <?php echo set_value('estudios',$pacientes->estudios_pac)==S ? "selected" : "" ?>>Secundaria Completa</option>
                                  <option value="U" <?php echo set_value('estudios',$pacientes->estudios_pac)==U ? "selected" : "" ?>>Universitaria Completa</option>
                                  <option value="P" <?php echo set_value('estudios',$pacientes->estudios_pac)==P ? "selected" : "" ?>>Primaria Completa</option>
                                  <option value="N" <?php echo set_value('estudios',$pacientes->estudios_pac)==N ? "selected" : "" ?>>No Especifica</option>
   
                                </select>
                    <select class="form-control input-sm"  name="ocupacion" >
                                   <option value="">--Seleccionar--</option>
                                  <option value="S">Secundaria Completa</option>
                                  <option value="U">Universitaria Superior</option>
                                  <option value="P">Primaria Completa</option>
                                  <option value="N">No Especifica</option>
                                </select> 
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-form-label">Hospital de nacimiento: *</label>
                      <input type="text" name="lugarnacimiento" class="form-control input-sm" placeholder="Lugar nacimiento" value="<?php echo !empty(form_error('lugarnacimiento')) ? set_value('lugarnacimiento'):$pacientes->lugar_nacimiento?>">
                    </div>
                  </div> -->
            </div>
            <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                     <label class="col-form-label">Departamento: *</label>
                    <select  name="departamento" class="form-control input-sm">
                      <option value="">--Seleccionar--</option>
                    <?php foreach ($departamentos as $d): ?>
                     <?php if($d->departamento_id == $pacientes->departamento_id):?>
                         <option value="<?= $d->departamento_id ?>" selected><?php echo $d->departamento_nombre;?></option>
                          <?php else:?>
                      <option value="<?= $d->departamento_id ?>"><?= $d->departamento_nombre ?></option>
                      <?php endif;?>
                    <?php endforeach ?>
                    </select>
                    </div>
                  </div>

                      <div class="col-md-4">
                    <div class="form-group">
                 
                    <label class="col-form-label">Provincia:</label>
                      <select name="provincia" class="form-control input-sm">
                          <option value="">--Seleccionar--</option>
                         <?php foreach ($provincias as $p): ?>
              <option value="<?= $p->provincia_id ?>" <?= ($pacientes->provincia_id==$p->provincia_id)?'selected':'' ?>><?= $p->provincia_nombre ?></option>
              <?php endforeach ?>
                      </select>
                    </div>
                  </div>

                     <div class="col-md-4">
                    <div class="form-group">
                    
                        <label class="col-form-label">Distrito:</label>
                      <select name="distrito" class="form-control input-sm">
                          <option value="">--Seleccionar--</option>
                          <?php foreach ($distritos as $d): ?>
              <option value="<?= $d->distrito_id ?>" <?= ($d->distrito_id==$pacientes->distrito_id)?'selected':'' ?>><?= $d->distrito_nombre ?></option>
              <?php endforeach ?>
                      </select>
                    </div>
                  </div>


            </div>

             <div class="row">


                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="col-form-label">Direccion: *</label>
                      <input type="text" name="direccion"  class="form-control input-sm" placeholder="Direccion" value="<?php echo !empty(form_error('direccion')) ? set_value('direccion'):$pacientes->dire_pac?>">
                    </div>
                  </div>
</div>
           

              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                     <label class="control-label">Telefono: *</label>
                       <input type="text" name="telefono"  class="form-control input-sm" placeholder="Telefono" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" value="<?php echo !empty(form_error('telefono')) ? set_value('telefono'):$pacientes->telf_pac?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="control-label">Fecha nacimiento: *</label>
                      <div class="input-group date">
                      
                      <input type="text"  name="fechanacimiento" class="form-control input-sm datepicker" value="<?php echo !empty(form_error('fechanacimiento')) ? set_value('fechanacimiento'):$pacientes->fena_pac?>">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                     </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="col-form-label">Edad: *</label>
                      <input type="number" name="edad" class="form-control input-sm" maxlength="3" minlength="1"  
                      value="<?php echo !empty(form_error('edad')) ? set_value('edad'):$pacientes->edad_pac?>" onkeypress="return soloLetras(event)" onkeypress="return soloLetras(event)"onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
                    </div>
                  </div>
                  <div class="col-md-3">
  <div class="form-group">
    <label class="col-form-label">Estado civil:</label>
    <select class="form-control input-sm" required="" name="estadocivil">
      <option value="C" <?php echo set_value('estadocivil', $pacientes->civi_pac) == 'C' ? "selected" : ""; ?>>Casado(a)</option>
      <option value="S" <?php echo set_value('estadocivil', $pacientes->civi_pac) == 'S' ? "selected" : ""; ?>>Soltero(a)</option>
      <option value="V" <?php echo set_value('estadocivil', $pacientes->civi_pac) == 'V' ? "selected" : ""; ?>>Viudo(a)</option>
      <option value="D" <?php echo set_value('estadocivil', $pacientes->civi_pac) == 'D' ? "selected" : ""; ?>>Divorciado(a)</option>
    </select>
  </div>
</div>

            </div>

                    <div class="row">

                      <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label class="col-form-label">Afilidado:</label>
                       <input type="text" name="afiliado"  class="form-control input-sm" placeholder="Afiliado" value="<?php echo !empty(form_error('afiliado')) ? set_value('afiliado'):$pacientes->afil_pac?>">
                    </div>
                  </div> -->
                  <div class="col-md-3">
  <div class="form-group">
    <label class="col-form-label">Sexo:</label>
    <div class="radio">
      <label>
        <input type="radio" name="sexo" value="M" <?php echo set_value('sexo', $pacientes->sexo_pac) == 'M' ? "checked" : ""; ?> >Masculino
      </label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
        <input type="radio" name="sexo" value="F" <?php echo set_value('sexo', $pacientes->sexo_pac) == 'F' ? "checked" : ""; ?> >Femenino
      </label>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
    <label class="control-label">Estado *</label>
    <select class="form-control input-sm" name="estado">
      <option value="S" <?php echo set_value('estado', $pacientes->esta_pac) == 'S' ? "selected" : ""; ?>>Activo</option>
      <option value="N" <?php echo set_value('estado', $pacientes->esta_pac) == 'N' ? "selected" : ""; ?>>Inactivo</option>
    </select>
  </div>
</div>
<div class="col-md-6">
                    <div class="form-group">
                      <label class="col-form-label">Correo: *</label>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input name="email" placeholder="email" class="form-control input-sm"  type="email" value="<?php echo !empty(form_error('email')) ? set_value('email'):$pacientes->emai_pac?>">
                      </div>
                    </div>
                  </div>

                 
            </div>
             
             <!-- <div class="row">
                   <div class="col-md-4">
                    <div class="form-group">
                      <label class="col-form-label">Alergia:</label>
                        <input type="text" name="alergia"  class="form-control input-sm" placeholder="Alergia" value="<?php echo !empty(form_error('alergia')) ? set_value('alergia'):$pacientes->aler_pac?>">
                    </div>
                  </div> 
                  <div class="col-md-8">
                    <div class="form-group">
                      <label class="col-form-label">Correo: *</label>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input name="email" placeholder="email" class="form-control input-sm"  type="email" value="<?php echo !empty(form_error('email')) ? set_value('email'):$pacientes->emai_pac?>">
                      </div>
                    </div>
                  </div>
              </div> -->

              <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label class="col-form-label">Observación:</label>
      <textarea class="form-control input-sm" name="observacion" >
        <?php echo !empty(form_error('observacion')) ? set_value('observacion') : $pacientes->observacion; ?>
      </textarea>
    </div>
  </div>
</div>


               <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>
                                  
                                     </div>  
            </div>
            

          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
          </div>
         
         </div>
      </div>
      <!-- /.row -->

        </form>
    </section>
    <!-- /.content -->

     
  </div>
  <script>
     $(document).ready(function() {
    // Escuchar el evento keypress en el campo de DNI
    $("#ruc").keypress(function(event) {
      // Verificar si la tecla presionada es "Enter" (código 13)
      if (event.which == 13) {
        event.preventDefault(); // Evitar el comportamiento por defecto de la tecla Enter

        var ruc = $(this).val(); // Obtener el valor del DNI ingresado

        // Verificar si el DNI tiene la longitud correcta (8 caracteres)
        if (ruc.length == 11) {

          $.ajax({
            url: path+'historia/movimiento/consultaRuc',
            type: 'post',
            data: 'ruc=' + ruc,
            dataType: 'json',
            success: function(p) {
              console.log(p);
              if (p.numeroDocumento && p.numeroDocumento.trim() === ruc.trim()) { // Verificar que el campo existe
                    $('#razon-social').val(p.razonSocial);
                    //$('#estado').val(p.estado);
                    $('#direccion-ruc').val(p.direccion);
                } else {
                    alert(p.error || 'Datos no encontrados');
                }
                
            }
        });
          

        } else {
          alert('El ruc debe tener 11 caracteres.');
        }
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    // Escuchar el evento keypress en el campo de DNI
    $("#dni").keypress(function(event) {
      // Verificar si la tecla presionada es "Enter" (código 13)
      if (event.which == 13) {
        event.preventDefault(); // Evitar el comportamiento por defecto de la tecla Enter

        var dni = $(this).val(); // Obtener el valor del DNI ingresado

        // Verificar si el DNI tiene la longitud correcta (8 caracteres)
        if (dni.length == 8) {

          $.ajax({
            url: path+'historia/movimiento/consultaDni',
            type: 'post',
            data: 'dni=' + dni,
            dataType: 'json',
            success: function(r) {
                if (r.numeroDocumento == dni) {
                  $('#apellidos').val(`${r.apellidoPaterno} ${r.apellidoMaterno}`);
                    $('#nombre').val(r.nombres);
                    console.log(r)
                } else {
                    alert(r.error);
                }
            }
        });
          

        } else {
          alert('El DNI debe tener 8 caracteres.');
        }
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
  // Inicializar el datepicker (si estás usando un plugin de datepicker)
  $('.datepicker').datepicker({
    format: 'dd-mm-yyyy', // Ajusta el formato de fecha según tus necesidades
    autoclose: true
  }).on('changeDate', function(e) {
    calcularEdad();
  });

  // Función para calcular la edad
  function calcularEdad() {
    var fechaNacimiento = $('#fechanacimiento').val();
    
    // Verificar que la fecha no esté vacía
    if (fechaNacimiento) {
      // Convertir la fecha de nacimiento a un objeto Date
      var fechaNac = new Date(fechaNacimiento.split('-').reverse().join('-'));
      var hoy = new Date();
      
      var edad = hoy.getFullYear() - fechaNac.getFullYear();
      var mes = hoy.getMonth() - fechaNac.getMonth();
      
      // Ajustar la edad si el cumpleaños no ha ocurrido este año
      if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNac.getDate())) {
        edad--;
      }
      
      // Colocar la edad en el campo de edad
      $('#edad').val(edad);
    }
  }
});

  </script>
<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>