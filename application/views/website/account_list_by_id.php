<!--  <?= PRE; print_r($acc_list);?>  -->
<section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="row">
              <!-- <div class="col-md-12 mb-2">
                <div class="table-responsive">
                 <table class="table table-hover" style="text-align: center;">
                    <thead>
                      <tr>
                        <th scope="col" rowspan="4"><h5 class="tittle">ACCOUNT HOLDER LIST</h5><aside><a href="<?php echo base_url('website/print_acc_list');?>" class="btn- btn-sm btn-success">Print</a></aside></th>
                      </tr> 
                    </thead>
                  </table> 
                </div>
             </div> -->
              <div class="col-md-12 mb-2">
              <h5 class="tittle">ACCOUNT HOLDER LIST</h5>
              <aside><a href="<?php echo base_url('website/print_acc_list');?>" class="btn- btn-sm btn-success mb-2 mt-2">Print</a></aside>
                  <table class="table-responsive table">
                    <thead>
                      <tr>
                        <!-- <th>SL No.</th> -->
                        <th>Sl No.</th>
                        <th>User Id No.</th>
                        <th>Pass Code</th>
                        <th>User Name</th>
                        <th>Account Holder's Name</th>
                        <th>Account No.</th>
                        <th>Opening Date</th> 
                        <th>Plan Name</th>  
                        <th>Term Year</th>  
                        <th>Mobile No.</th>  
                        <th>Web Link</th>  
                      </tr>
                    </thead>
                    <tbody class="expenses">
                      <?php
                      $i=0;
                        if(!empty($acc_list)){$i++;
                          foreach ($acc_list as $key => $value) {
                           ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $value['member_id'];?></td>
                            <td></td>
                            <td><?= $value['username'];?></td>
                            <td><?= $value['account_holder_name'];?></td>
                            <td><?= $value['account_no'];?></td>
                            <td><?= date('d-m-Y',strtotime($value['added_on']));?></td>
                            <td><?= $value['saving_plan_name'];?></td>
                            <td><?= $value['team_year'];?></td>
                            <td><?= $value['mobile_no'];?></td>
                            <td><a href="<?php echo base_url('website/member_account_details/?acc_no='.$value['account_no']);?>" class="btn btn-sm btn-secondary">View Details</a></td>
                          </tr>
                           <?php
                          }
                        }
                       ;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>