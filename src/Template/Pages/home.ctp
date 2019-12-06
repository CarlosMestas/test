<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo __('Main Page');?>
    <small><?php echo __('Typical Actions');?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?php echo __('Dashboard');?></li>
  </ol>
</section>

<!-- Main content -->


<!-- /.content -->
<section class="content">
  <h3>
    <?php echo __(' ');?>
  </h3>
   <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo __('Tareas');?></h3>

          <p><?php echo __('Course list');?></p>
        </div>
        <div class="icon">
          <i class="ion ion-cash"></i>

        </div>
        <a href="students/tareas" class="small-box-footer"><?php echo __('More info');?> <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo __('Notas');?></h3>

          <p><?php echo __('Course list');?></p>
        </div>
        <div class="icon">
          <i class="ion ion-cash"></i>

        </div>
        <a href="students/notas" class="small-box-footer"><?php echo __('More info');?> <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-purple">
        <div class="inner">
          <h3><?php echo __('Reportes');?></h3>
          <center>
        <div class="glyphicon glyphicon-comment"style="font-size:50px;>
          <i class="ion ion-cash"></i>
        </div>
        </center>
        </div>
        
        <a href="students/reporte" class="small-box-footer"><?php echo __('Ir a');?> <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo __('Asistencia'); ?></h3>
          <center>
           <div class="glyphicon glyphicon-calendar"style="font-size:50px;>
          <i class="ion ion-cash"></i>
           </div>
          </center>
        </center>
        </div>
       
        <a href="students/asist" class="small-box-footer"><?php echo __('Ir a');?> <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">

  </div>
  <!-- /.row (main row) -->

</section>
 <!-- Morris chart -->
  <?php echo $this->Html->css('AdminLTE./bower_components/morris.js/morris', ['block' => 'css']); ?>
  <!-- jvectormap -->
  <?php echo $this->Html->css('AdminLTE./bower_components/jvectormap/jquery-jvectormap', ['block' => 'css']); ?>
  <!-- Date Picker -->
  <?php echo $this->Html->css('AdminLTE./bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min', ['block' => 'css']); ?>
  <!-- Daterange picker -->
  <?php echo $this->Html->css('AdminLTE./bower_components/bootstrap-daterangepicker/daterangepicker', ['block' => 'css']); ?>
  <!-- bootstrap wysihtml5 - text editor -->
  <?php echo $this->Html->css('AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min', ['block' => 'css']); ?>

<!-- jQuery UI 1.11.4 -->
<?php echo $this->Html->script('AdminLTE./bower_components/jquery-ui/jquery-ui.min', ['block' => 'script']); ?>
<!-- Morris.js charts -->
<?php echo $this->Html->script('AdminLTE./bower_components/raphael/raphael.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/morris.js/morris.min', ['block' => 'script']); ?>
<!-- Sparkline -->
<?php echo $this->Html->script('AdminLTE./bower_components/jquery-sparkline/dist/jquery.sparkline.min', ['block' => 'script']); ?>
<!-- jvectormap -->
<?php echo $this->Html->script('AdminLTE./plugins/jvectormap/jquery-jvectormap-1.2.2.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./plugins/jvectormap/jquery-jvectormap-world-mill-en', ['block' => 'script']); ?>
<!-- jQuery Knob Chart -->
<?php echo $this->Html->script('AdminLTE./bower_components/jquery-knob/dist/jquery.knob.min', ['block' => 'script']); ?>
<!-- daterangepicker -->
<?php echo $this->Html->script('AdminLTE./bower_components/moment/min/moment.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap-daterangepicker/daterangepicker', ['block' => 'script']); ?>
<!-- datepicker -->
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min', ['block' => 'script']); ?>
<!-- Bootstrap WYSIHTML5 -->
<?php echo $this->Html->script('AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min', ['block' => 'script']); ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo $this->Html->script('AdminLTE.pages/dashboard', ['block' => 'script']); ?>
<!-- AdminLTE for demo purposes -->
<?php echo $this->Html->script('AdminLTE.demo', ['block' => 'script']); ?>

<?php $this->start('scriptBottom'); ?>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
<?php  $this->end(); ?>