<section class="misvis">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" style="background:#898ab547;border:1px solid red">
                <thead>
                  <tr>
                    <!-- <th scope="col"></th> -->
                    <td scope="col"><h4 style="text-align: center;">RESULT</h4><a href="<?= base_url('/')?>" class="btn btn-sm btn-secondary" style="float: right;">Logout</a></td>
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
                    <td scope="col"><?php if(!empty($datas[0]['candidate_name'])){ echo $datas[0]['candidate_name'];}else{ echo 'No Record Found';}?></td>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Father Name :</th>
                    <td><?php if(!empty($datas[0]['father_name'])){ echo $datas[0]['father_name'];}else{echo 'No Record Found';}?></td>
                  </tr>
                 
                  <tr>
                    <th scope="row">Exam Date :</th>
                    <td><?php if(!empty($datas[0]['interviewdate'])){ echo date('d-m-Y',strtotime($datas[0]['interviewdate']));} else{echo 'No record Found';}?></td>
                  </tr>
                  <tr>
                    <th scope="row">Result :</th>
                    <td>
                      <?php
                      if(!empty($datas[0]['interviewdate'])){
                          if($datas[0]['result_publish']==1){
                          ?><a href="<?= base_url('admin/pdf_result/?id='.$datas[0]['id']);?>" class="btn btn-sm btn-success">Download Result</a><?php
                          }
                          else{
                            echo 'Coming Soon...';
                          }

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