<section class="officialservices">
      <div class="container">
        <div class="row">
           <form action="<?= base_url('website/e_deposit_form_submit')?>" enctype="multipart/form-data" method="POST" style="border:1px solid black;padding-top:10px; margin-top:20px; background:white;">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-5">
            <center class="tittle"><h2>E-DEPOSIT(FORM)</h2><h4><?= date('Y').'-'.date('y',strtotime('+1 year'));?></h4></center>
           
              <div class="row">
                  
                  <div class="col-md-2 mt-2">Deposit Date</div>
                  <div class="col-md-4 mt-2"><input type="date" name="deposit_date" id="deposit_date" class="form-control" value="<?= date('Y-m-d');?>" required></div>
                  <div class="col-md-2 mt-2">Meeting No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="meeting_no" id="meeting_no" placeholder="Meeting No. :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">Account No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="account_no" id="account_no" placeholder="Account No. :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">Account Holder Name</div>
                  <div class="col-md-4 mt-2"><input type="text" name="account_holder_name" id="account_holder_name" placeholder="Account Holder Name :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">Mobile No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="mobile_no" id="mobile_no" placeholder="Mobile No. :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">E-mail</div>
                  <div class="col-md-4 mt-2"><input type="text" name="email"  id="email" placeholder="E-mail :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">User Name</div>
                  <div class="col-md-4 mt-2"><input type="text" name="username"  id="username" placeholder="User Name :" class="form-control" required></div>
                   <div class="col-md-2 mt-2">User Id No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="user_id_no"  id="user_id_no" placeholder="User Id No. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">State Unit/Code No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="state_unit_code"  id="state_unit_code" placeholder="State Unit/Code No. :" class="form-control" required></div>
                  
                  <div class="col-md-2 mt-2">Division Unit/Code No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="division_unit"  id="division_unit" placeholder="Division Unit/Code No. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">District Branch/Code No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="district_branch"  id="district_branch" placeholder="District Branch/Code No. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">Sponsor Id No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="sponsor_id"  id="sponsor_id" placeholder="Sponsor Id No. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">Group Name/No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="group_name"  id="group_name" placeholder="Group Name/No. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">Colective Saving Form No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="collective_saving_form_no"  id="collective_saving_form_no" placeholder="Colective Saving Form No. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">Manual Receipt No.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="manual_receipt_no"  id="manual_receipt_no" placeholder="Manual Receipt No. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">Weekly Deposit(Rs.) In Words.</div>
                  <div class="col-md-4 mt-2"><input type="text" name="weekly_deposit_in_word"  id="weekly_deposit_in_word" placeholder="Weekly Deposit(Rs.) In Words. :" class="form-control" required></div>

                  <div class="col-md-2 mt-2">Weekly Deposit(Rs.) In Numbers.</div>
                  <div class="col-md-4 mt-2"><input type="number" name="weekly_deposit_in_number"  id="weekly_deposit_in_number" placeholder="Weekly Deposit(Rs.) In Words. :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">Collective/UPI/Banking No.</div>
                  <div class="col-md-4 mt-2"><input type="number" name="banking_upi_no"  id="banking_upi_no" placeholder="Collective/UPI/Banking No. :" class="form-control" required></div>
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