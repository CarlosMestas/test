<!-- Content Header (Page header) -->
<section class="content-header">
  
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          
          <h3 class="box-title"><?php echo __('Actions'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="col-lg-5 col-xs-7">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo __('Attendance'); ?></h3>

                <p><?php echo __('Take class attendance'); ?></p>
              </div>
              <div class="icon">
                <i class="ion ion-archive"></i>
              </div>
              <a href="articles" class="small-box-footer"><?php echo __('Do it');?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-5 col-xs-7">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo __('Grades'); ?></h3>

                <p><?php echo __('Grades Control'); ?></p>
              </div>
              <div class="icon">
                <i class="ion ion-aperture"></i>
              </div>
              <a href="articles" class="small-box-footer"><?php echo __('Do it');?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>    
    </div>
  </div>

</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('Students'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Numero de orden') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php $numOrder=1; ?>
              <?php foreach ($students as $student): ?>
                <tr>
                  <td><?= $this->Number->format($user->id) ?></td>
                  <td><?= h($user->name) ?></td>
                  <td><?= h($user->last_name) ?></td>
                  <td><?= $numOrder ?></td>
                </tr>
                $numOrder++;
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<?php echo $this->Html->css('AdminLTE./bower_components/datatables.net-bs/css/dataTables.bootstrap.min', ['block' => 'css']); ?>

<!-- DataTables -->
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net/js/jquery.dataTables.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net-bs/js/dataTables.bootstrap.min', ['block' => 'script']); ?>


<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    })
  })
</script>
<?php $this->end(); ?>