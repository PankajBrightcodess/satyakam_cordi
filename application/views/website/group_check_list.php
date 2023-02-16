<section class="officialservices">
      <div class="container">
        <div class="row">
           <form action="<?= base_url('website/e_deposit_form_submit')?>" enctype="multipart/form-data" method="POST" style="border:1px solid black;padding-top:10px; margin-top:20px; background:white;">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-5">
            <center class="tittle"><h2>Group Loan Status</h2><h4></h4></center>
              <div class="row " >
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading" >Request Date</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= date('d-m-Y',strtotime($details['req_date']));?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Member Id</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['member_id'];?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Member Name</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['member_name'];?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Group Id</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['group_id'];?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Group Name</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['group_name'];?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Loan Amount</div>
                  <div class="col-md-4 col-6  mt-2"><span class="e_deposit"><?= $details['loan_amount'].'.00/-';?></span></div>
                  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Loan Amount(In Word)</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['loan_amount_in_word'];?></span></div>
                   <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">Total Month</div>
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['total_month'];?></span></div>

                 <!--  <div class="col-md-2 col-6 text-info mt-2 e_deposit_heading">State Unit/Code No.</div>
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
                  <div class="col-md-4 col-6 mt-2"><span class="e_deposit"><?= $details['banking_upi_no'];?></span></div> -->
                 <div class="col-md-3  mb-2"></div> 
                 <div class="col-md-3 mb-2"> </div>
                 <div class="col-md-3 mb-2"> </div>
                 <div class="col-md-12 mb-2 text-center">
                  <!-- <a href="<?= base_url('website/print_e_receipt/?id='.$details['id'])?>" class="mt-4 btn btn-sm btn-success">Print</a> -->
                 </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- '''''''''''''''''''''''''model area'''''''''''''''''''''''''''''''''''' -->
    