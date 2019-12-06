<section class="content-header">
  <h1><?= $this->Html->image("../img/notificaciones.png");?>&nbsp
    <?php echo __('Notifications'); ?>
    <small><?php echo __(''); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
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
          <table class="table table-bordered table-striped">
          
          <tr>
            <th class="text-aqua"><?php echo __('Affair'); ?></th>
            <th class="text-aqua">Descripcion</th>
          </tr>
          <tr >
            <td><?php echo __('payments'); ?></td>
          <td><?php echo __('the payment needs the license plate itself'); ?></td>
            </tr>
          <tr>
          <td><?php echo __('permission'); ?></td>
          <td><?php echo __('the document requires exit of walk itself'); ?></td>
          </tr>
        </table>
        </div>
        <canvas id="myChart"></canvas>
<script src="chart.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'doughnut',
    data:{
  datasets: [{
    data: [60,18,10, 8, 4],
    backgroundColor: ['#42a5f5', 'red', 'green','blue','violet'],
    label: 'Comparacion de navegadores'}],
    labels: ['Google Chrome','Safari','Edge','Firefox','Opera']},
    options: {responsive: true}
});
</script>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>

