<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Chores

  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title"><?php echo __('Your homework here'); ?></h2>

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
                  <td>math</td>
                  <td>solve the exercises on pages 1 </td>
                 
                </tr>

                   <tr>
                  <td>communication</td>
                  <td>investigate the verb </td>
                 
                </tr>

                   <tr>
                  <td>Citizenship training</td>
                  <td>investigate the values</td>
                 
                </tr>

                   <tr>
                  <td>social Sciences</td>
                  <td>answer the questions in the book </td>
                 
                </tr>

                   <tr>
                  <td>physical education</td>
                  <td>make a soccer report </td>
                 
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