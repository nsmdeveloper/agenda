<!--Seccion de Header -->
<?php $this->load->view('header'); ?>
<!--Fin Seccion de Header-->

<!--Seccion de Header -->
<?php $this->load->view('navigation_bar');?>
<!--Fin Seccion de Header-->


    <!-- Intro Section -->
    <section id="intro" class="intro-section">
      <!-- Contendor -->
      <div class="container">
         <?php if($this->session->flashdata('success')){ ?>

      <div class="alert alert-success">
      <a class="close" data-dismiss="alert" href="#">&times;</a>
      <h4 class="alert-heading">Exitoso!</h4>
      <?php echo $this->session->flashdata('success') ?>
      </div>

      <?php }else if($this->session->flashdata('error')){ ?>

      <div class="alert alert-error">
      <a class="close" data-dismiss="alert" href="#">&times;</a>
      <h4 class="alert-heading">Error!</h4>
      <?php echo $this->session->flashdata('error') ?>
      </div>

    <?php } ?>
       
    <div class="row profile">
   <!--Seccion de Bio -->
   <?php $this->load->view('bio');?>

   <!--Fin Seccion de Bio -->
    <div class="col-md-9">
        <div class="profile-content">
         <div class="row">
           <div class="col-md-3">
            <!--Seccion de Menu-->
            <?php $this->load->view('menu');?>
             <!--Fin Seccion de Menu-->
           </div>
           <div class="col-md-9">
           <hr>
        <!-- Listado contactos -->
 <div class="panel panel-success">
      <div class="panel-body">
        <form method="post" action="<?php echo base_url()?>index.php/agenda/update" enctype="multipart/form-data" role="form">
          <fieldset>
            <?php foreach($contacto as $c):?>
           <div class="col-md-6">
               <div class="form-group">
                 <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?=$c->nombre; ?>" />
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="movil" placeholder="Movil" value="<?=$c->movil; ?>" />
               </div>
           </div>
           <div class="col-md-6">
               <div class="form-group">
                  <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?=$c->apellido; ?>" />
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="E-mail" value="<?=$c->email; ?>" />
               </div> 
           </div>
           <div class="col-lg-12">
               <div class="form-group">
                  <input type="text" class="form-control" name="social1" placeholder="Ej: www.facebook.com/perfil" value="<?=$c->social1; ?>" />
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="social2" placeholder="Ej: www.twitter.com/perfil" value="<?=$c->social2; ?>" />
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="social3" placeholder="Ej: www.instagran.com/perfil" value="<?=$c->social3; ?>" />
                  <input type="hidden" class="form-control" name="id_contacto"  value="<?=$c->id; ?>" />

               </div>
           </div>
            
       <button type="submit" name="addLibro" class="btn btn-success btn-block">Guardar contacto</button>
       <a href="<?php echo base_url()?>index.php/agenda/" class="btn btn-default btn-block">Cancelar</a>
      <?php endforeach;?>
      </fieldset>
      </form>     
      </div>
  </div> 
        <!-- Fin listado contactos -->
           </div>
         </div> 
        </div>
    </div>
  </div>
</div>
      <!-- Contendor -->
         <!--Seccion de Footer-->
<?php $this->load->view('footer');?>
  <!--Fin Seccion de Footer-->
