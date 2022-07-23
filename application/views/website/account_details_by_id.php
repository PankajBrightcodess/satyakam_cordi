<section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="table-responsive">
                 <table class="table table-hover" style="text-align: center;">
                    <thead>
                      <tr>
                        <th scope="col" rowspan="4"><h5 class="tittle">TRANSCATION LIST </h5><aside><a href="<?php echo base_url('website/print_details/?acc_no='.$acc_no);?>" class="btn- btn-sm btn-success">Print</a></aside></th>
                      </tr> 
                    </thead>
                  </table> 
                </div>
             </div>
              <div class="col-md-12 mb-2 text-center table-responsive ">
                  <table class="table ">
                    <thead>
                      <tr>
                        <th>Sl No.</th>
                        <th>Account No</th>
                        <th>Transcation Type</th>
                        <th>Transcation Amount</th>
                        <th>Amount(In Word)</th>
                        <th>Date</th> 
                      </tr>
                    </thead>
                    <tbody >
                      <?php
                      $i=0;
                        if(!empty($acc_details_by_id)){
                          foreach ($acc_details_by_id as $key => $value) {$i++;
                           ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $value['account_no'];?></td>
                            <?php
                              if($value['trans_type']=="Credit"){
                                ?><td class="text-success"><?= $value['trans_type'];?></td><?php
                              }else{
                                ?><td class="text-danger"><?= $value['trans_type'];?></td><?php
                              }
                            ?>
                            <td><?= $value['trans_amount'];?></td>
                            <td><?= $value['trans_amount_in_word'];?></td>
                            <td><?= date('d-m-Y',strtotime($value['added_on']));?></td>
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