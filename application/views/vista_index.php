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
        <ul class="event-list">
          <?php foreach($contactos as $contacto):?>
          <li>
            <img alt="Independence Day" src="<?php echo base_url(); ?>third_party/template/assets/img/contacto.jpeg"/>
            <div class="info">
              <h2 class="title"><?= $contacto->nombre .' '. $contacto->apellido ?></h2>
              <p class="desc"><?= $contacto->movil ?></p>
              <p class="desc"><?= $contacto->email ?></p>
              <ul>
                <li style="width:22%;"><a href="" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></a></li>
                <li style="width:22%;"><a href="" data-toggle="tooltip" title="Eliminar"><i class=" fa fa-window-close-o"></i></a></li>
                <li style="width:22%;">1 <span class="fa fa-phone"></span></li>
                <li style="width:22%;">103 <span class="fa fa-envelope"></span></li>
                <li style="width:8%;">&nbsp;</li>
              </ul>
              <br>
            </div>
            <div class="social">
              <ul>
                <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
              </ul>
            </div>
          </li>
          <?php endforeach?>
          
        </ul>
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
