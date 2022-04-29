 <?php
      echo '<pre>';
      print_r($datas);



 ?>
 <section class="misvis">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" style="background:#898ab547;border:1px solid red">
                <thead>
                  <tr>
                    <!-- <th scope="col"></th> -->
                    <td scope="col"><h4 style="text-align: center;">ADMIT CARD</h4><a href="<?= base_url('/')?>" class="btn btn-sm btn-secondary" style="float: right;">Logout</a></td>
                  </tr>
                </thead>
               
              </table>
            </div>
          </div>
          <div class="col-md-9">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" style="background:#898ab547;border:1px solid red">
                <thead>
                  <tr>
                    <th scope="col">Name :</th>
                    <td scope="col"><?php echo $datas[0]['candidate_name'];?></td>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Father Name :</th>
                    <td><?php echo $datas[0]['father_name'];?></td>
                  </tr>
                 
                  <tr>
                    <th scope="row">Exam Date :</th>
                    <td><?php echo $datas[0]['interviewdate'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">Admit Card :</th>
                    <td>
                      <?php
                      if($datas[0]['publish_admitcard']==1){
                        ?><a href="<?= base_url('admin/pdf_admitcard/?id='.$datas[0]['id']);?>" class="btn btn-sm btn-success">Download Admit Card</a><?php
                      }
                      else{
                        echo 'Coming Soon...';
                      }



                      ?>


                     
                  </tr>
                   
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>