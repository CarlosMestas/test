<section class="content-header">
  <h1><?= $this->Html->image("../img/asistencia.png",);?>&nbsp
    <?php echo __('Students'); ?>
    
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-10">
      <div class="box">
        <div class="center-block">
                
          <!-- /.box-header -->
        <div class="center-block">
          <table class="table table-bordered table-striped">
          <h2><?php echo __('December'); ?></h2>
          <tr>
            <th><?php echo __('Monday'); ?></th>
            <th><?php echo __('Tuesday'); ?></th>
            <th><?php echo __('Wednesday'); ?></th>
            <th><?php echo __('Thursday'); ?></th>
            <th><?php echo __('Friday'); ?></th>

          </tr>
          <tr >
            <td class="bg-green">1</td>
            <td class="bg-aqua">2</td>
            <td class="bg-red">3</td>
            <td class="bg-ligthblue">4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
          </tr>
          <tr>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
         
          </tr>
          <tr>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
          </tr>
          <tr>
            <td>29</td>
            <td>30</td>
            <td>31</td>
          </tr>
        </table>
        </div>
        <fieldset>

            <p class="text-green"><?php echo __('strut'); ?></p>
            <p class="text-aqua"><?php echo __('late'); ?></p>
            <p class="text-red"><?php echo __('lack'); ?></p>
          </fieldset>  
        
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
