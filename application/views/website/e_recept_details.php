<section class="officialservices">
      <div class="container">
        <div class="row">
           <form action="<?= base_url('website/e_deposit_form_submit')?>" enctype="multipart/form-data" method="POST" style="border:1px solid black;padding-top:10px; margin-top:20px; background:white;">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-5">
            <center class="tittle"><h2>E-DEPOSIT RECEIPT</h2><h4><?= date('Y').'-'.date('y',strtotime('+1 year'));?></h4></center>
              <div class="row " >
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading" >Deposit Date</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= date('d-m-Y',strtotime($details['deposit_date']));?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Meeting No.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['meeting_no'];?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Account No.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['account_no'];?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Account Holder Name</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['account_holder_name'];?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Mobile No.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['mobile_no'];?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">E-mail</div>
                  <div class="col-md-4 col-6  mt-2"><span class="e_deposit"><?= $details['email'];?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">User Name</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['username'];?></span></div>
                   <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">User Id No.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['user_id_no'];?></span></div>

                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">State Unit/Code No.</div>
                  <div class="col-md-4 col-6 mt-2">
                   <span class="e_deposit"><?= $details['state'];?></span>
                  </div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Division Unit/Code No.</div>
                  <div class="col-md-4 col-6 mt-2">
                     <span class="e_deposit"><?= $details['division'];?></span>
                  </div>

                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">District Branch/Code No.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['district_branch'];?></span></div>

                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Sponsor Id No.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['sponsor_id'];?></span></div>

                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Group Name/No.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['group_name'];?></span></div>

                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Collective Saving Form No.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['collective_saving_form_no'];?></span></div>

                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Manual Receipt No.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['manual_receipt_no'];?></span></div>

                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Weekly Deposit(Rs.) In Words.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['trans_amount_in_word'];?></span></div>

                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Weekly Deposit(Rs.) In Numbers.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['trans_amount'];?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Collective/UPI/Banking No.</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['banking_upi_no'];?></span></div>
                 <div class="col-md-3  mb-2"></div> 
                 <div class="col-md-3 mb-2"> </div>
                 <div class="col-md-3 mb-2"> </div>
                 <div class="col-md-12 mb-2 text-center">
                  <a href="<?= base_url('website/print_e_receipt/?receipt='.$details['recept_no'])?>" class="mt-4 btn btn-sm btn-success">Print</a>
                 </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- '''''''''''''''''''''''''model area'''''''''''''''''''''''''''''''''''' -->
    