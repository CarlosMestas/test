<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 class="box-title"><?= $this->Html->image("../img/tareas.png",);?>&nbsp<?php echo __('Students'); ?></h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
           <h2 class="box-title"><?php echo __('Notes of Pedro'); ?></h2>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                

               
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('#') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Course') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Notes') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('State') ?></th>
                  
              </tr>
            </thead>
            <tbody>
              
                <tr>
                  
                  <td>1</td>
                  <td><?php echo __('math'); ?></td>
                  <td>15</td>
                  <td><?php echo __('approved'); ?></td>
                  
                   <td WIDTH="20" style="background-color:#2EFE2E;"></td>

                </tr>

                <tr>
                  
                  <td>2</td>
                  <td><?php echo __('communication'); ?></td>
                  <td>10</td>
                  <td><?php echo __('disapproved'); ?></td>
                  <td WIDTH="20" style="background-color:red;"></td>

                </tr>

                <tr>
                  
                  <td>3</td>
                  <td><?php echo __('religious education'); ?></td>
                  <td>14</td>
                  <td><?php echo __('approved'); ?></td>
                  <td WIDTH="20" style="background-color:#2EFE2E;"></td>

                </tr>

                <tr>
                  
                  <td>4</td>
                  <td><?php echo __('mathematical reasoning'); ?></td>
                  <td>09</td>
                  <td><?php echo __('disapproved'); ?></td>
                  <td WIDTH="20" style="background-color:red;"></td>

                </tr>
                
                <tr>
                  
                  <td>5</td>
                  <td><?php echo __('logic reasoning'); ?></td>
                  <td>08</td>
                  <td><?php echo __('disapproved'); ?></td>
                  <<td WIDTH="20" style="background-color:red;"></td>

                </tr>
                
                
                

              
            </tbody>
          </table>
        </div>

        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  
  <button style="border-radius: 6px;"><?php echo __('to print'); ?></button>
</section>