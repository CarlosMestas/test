<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Students

    
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h1>Notes of Pedro</h1>

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
                  <th scope="col"><?= $this->Paginator->sort('Estado') ?></th>
                  
              </tr>
            </thead>
            <tbody>
              <?php foreach ($students as $student): ?>
                <tr>
                  
                  <td>1</td>
                  <td>math</td>
                  <td>15</td>
                  <td>approved</td>
                  
                   <td WIDTH="20" style="background-color:#2EFE2E;"></td>

                </tr>

                <tr>
                  
                  <td>2</td>
                  <td>communication</td>
                  <td>10</td>
                  <td>disapproved</td>
                  <td WIDTH="20" style="background-color:red;"></td>

                </tr>

                <tr>
                  
                  <td>3</td>
                  <td>religious education</td>
                  <td>14</td>
                  <td>approved</td>
                  <td WIDTH="20" style="background-color:#2EFE2E;"></td>

                </tr>

                <tr>
                  
                  <td>4</td>
                  <td>mathematical reasoning</td>
                  <td>09</td>
                  <td>disapproved</td>
                  <td WIDTH="20" style="background-color:red;"></td>

                </tr>
                
                <tr>
                  
                  <td>5</td>
                  <td>logic reasoning</td>
                  <td>08</td>
                  <td>disapproved</td>
                  <<td WIDTH="20" style="background-color:red;"></td>

                </tr>
                
                
                

              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  
  <button style="border-radius: 6px;">Imprimir</button>
</section>