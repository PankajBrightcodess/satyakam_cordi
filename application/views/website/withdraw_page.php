<section class="officialservices">
      <div class="container">
        <div class="row">
           <form action="<?= base_url('website/withdraw_form_submit')?>" enctype="multipart/form-data" method="POST" style="border:1px solid black;padding-top:10px; margin-top:20px; background:white;">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-4">
            <center class="tittle"><h2>WITHDRAWAL FORM</h2><h4>(<?= date('Y').'-'.date('y',strtotime('+1 year'));?>)</h4></center>
           
              <div class="row">
                  <!-- <?= PRE; print_r($account_details);?> -->
                  <div class="col-md-12 text-center text-success mt-3 mb-5"><h4><b class="text-secondary">Current balance :</b> <?= $account_balance.'/-';?></h4></div>
                  <div class="col-md-2 mt-2">Deposit Date</div>
                  <div class="col-md-4 mt-2"><input type="date" name="withdraw_date" id="withdraw_date" class="form-control" value="<?= date('Y-m-d');?>" readonly required></div>
               
                  <div class="col-md-2 mt-2">Account No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="account_no" value="<?php echo $account_details['account_no'];?>" id="account_no" placeholder="Account No. :" readonly class="form-control" required></div>
                  <div class="col-md-2 mt-2">Account Holder Name</div>
                  <div class="col-md-4 mt-2"><input type="text" value="<?php echo $account_details['account_holder_name'];?>" name="account_holder_name" readonly id="account_holder_name" placeholder="Account Holder Name :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">Mobile No.</div>
                  <div class="col-md-4 mt-2"><input type="text" value="<?php echo $account_details['mobile_no'];?>"   name="mobile_no" id="mobile_no" placeholder="Mobile No. :" readonly class="form-control" required></div>
                  <div class="col-md-2 mt-2">E-mail</div>
                  <div class="col-md-4 mt-2"><input type="text" name="email" value="<?php echo $account_details['email'];?>"  id="email" placeholder="E-mail :" readonly class="form-control"></div>
                  <div class="col-md-2 mt-2">User Name</div>
                  <div class="col-md-4 mt-2"><input type="text" name="username" readonly  value="<?php echo $account_details['username'];?>"  id="username" placeholder="User Name :" class="form-control" required></div>
                   <div class="col-md-2 mt-2">User Id No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="user_id_no" value="<?php echo $account_details['member_id'];?>"   id="user_id_no" readonly placeholder="User Id No. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">State Unit/Code No.</div>
                  <div class="col-md-4 mt-2">
                    <select class="form-control states" id="state_unit_code" readonly name="state_unit_code" required>
                    <option>State :</option>
                    <?php
                      if(!empty($state)){
                        foreach ($state as $key => $value) {
                           ?><option <?php if($account_details['state_unit_name']==$value['id']){?> selected="selected"<?php }?> value="<?= $value['id'];?>"><?= $value['state'];?></option><?php
                        }
                      }
                    ?>
                  </select>
                  </div>
                  <div class="col-md-2 mt-2">Division Unit/Code No.</div>
                  <div class="col-md-4 mt-2">
                    <select class="form-control"  name="division_unit" readonly>
                      <option>Division :</option>
                    <?php
                         if(!empty($divisionlist)){
                            foreach ($divisionlist as $key => $value) {
                              ?><option <?php if($account_details['division_unit']==$value['id']){?> selected="selected"<?php }?> value="<?= $value['id'];?>"><?= $value['division'];?></option><?php
                             }
                          }
                       ?>
                  </select>
                  </div>

                  <div class="col-md-2 mt-2">District Branch/Code No.</div>
                  <div class="col-md-4 mt-2"><input type="text" value="<?php echo $account_details['dist_unit'];?>" name="district_branch"  id="district_branch" readonly placeholder="District Branch/Code No. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">Sponsor Id No.</div>
                  <div class="col-md-4 mt-2"><input type="text" value="<?php echo $account_details['sponsor_id'];?>" name="sponsor_id"  id="sponsor_id" readonly placeholder="Sponsor Id No. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">Group Name/No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="group_name"  id="group_name" placeholder="Group Name/No. :" class="form-control" readonly value="<?php echo $account_details['group_name'];?>" required></div>

                  <div class="col-md-2 mt-2">Collective/UPI/Banking No.</div>
                  <div class="col-md-4 mt-2"><input type="number" name="banking_upi_no"  id="banking_upi_no" placeholder="Collective/UPI/Banking No. :" readonly value="<?php echo $account_details['upi_banking'];?>"  class="form-control" required></div>

                  <div class="col-md-2 mt-2">Withdraw Form No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="withdraw_form_no"  id="withdraw_form_no" placeholder="Colective Saving Form No. :" class="form-control" required></div>

                 <!--  <div class="col-md-2 mt-2">Manual Receipt No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="manual_receipt_no"  id="manual_receipt_no" placeholder="Manual Receipt No. :" class="form-control" required></div> -->

                  <div class="col-md-2 mt-2">Withdraw Amount(Rs.) In Numbers.</div>
                  <div class="col-md-4 mt-2"><input type="number" name="withdraw_amount_in_number"  id="weekly_deposit_in_number" placeholder="Withdraw Amount(Rs.) In Numbers. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">Withdraw Amount(Rs.) In Words.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="withdraw_amount_in_word"  id="weekly_deposit_in_word" placeholder="Withdraw Amount(Rs.) In Words. :" class="form-control" required></div>

                
                        
                 <div class="col-md-3 mb-2"></div> 
                 <div class="col-md-3 mb-2"> </div>
                 <div class="col-md-3 mb-2"> </div>
                 <div class="col-md-12 mb-2 text-center">
                  <input type="submit" class="mt-4 btn btn-sm" style="background:#233799;color:white">
                 </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- '''''''''''''''''''''''''model area'''''''''''''''''''''''''''''''''''' -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirmation OTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
       <input type="text" name="otp" required placeholder="Enter OTP" class="form-control">
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <a href="<?= base_url('website/econtractform')?>" type="submit" class="btn btn-sm btn-success ">Save</a>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
      </form>
    </div>
  </div>
</div>