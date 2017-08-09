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
        <form method="post" action="<?php echo base_url()?>index.php/agenda/store" enctype="multipart/form-data" role="form">
          <fieldset>
           <div class="col-md-6">
               <div class="form-group">
                 <input type="text" class="form-control" name="nombre" placeholder="Nombre" >
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="movil" placeholder="Movil">
               </div>
           </div>
           <div class="col-md-6">
               <div class="form-group">
                  <input type="text" class="form-control" name="apellido" placeholder="Apellido" >
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="E-mail">
               </div> 
           </div>
           <div class="col-lg-12">
               <div class="form-group">
                  <input type="text" class="form-control" name="social1" placeholder="Ej: www.facebook.com/perfil">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="social2" placeholder="Ej: www.twitter.com/perfil">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="social3" placeholder="Ej: www.instagran.com/perfil">
               </div>
           </div>
            
       <button type="submit" name="addLibro" class="btn btn-success btn-block">Guardar contacto</button>
       <a href="vista_index.php" class="btn btn-default btn-block">Cancelar</a>
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
