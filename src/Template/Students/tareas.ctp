<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 class="box-title">  <?= $this->Html->image("../img/tareas.png",);?>&nbsp<?php echo __('Chores'); ?></h1>


</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          
          

          </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
         <table id="example1" class="table table-bordered table-striped">
           <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('Course') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Activity') ?></th>
                  
              </tr>
            </thead>
            <tbody>
              
                <tr>
                  <td><?php echo __('math'); ?></td>
                  <td><?php echo __('solve the exercises on pages 1'); ?></td>
                 
                </tr>

                   <tr>
                  <td><?php echo __('communication'); ?></td>
                  <td><?php echo __('investigate the verb'); ?></td>
                 
                </tr>

                   <tr>
                  <td><?php echo __('science technology and environment'); ?></td>
                  <td><?php echo __('Problems from 1 to the 5 envelope MRU'); ?></td>
                 
                </tr>

                   <tr>
                  <td><?php echo __('social sciences'); ?></td>
                  <td><?php echo __('answer the questions in the book'); ?></td>
                 
                </tr>

                   <tr>
                  <td><?php echo __('physical education'); ?></td>
                  <td><?php echo __('make a soccer report'); ?></td>
                 
                </tr>


            

              
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