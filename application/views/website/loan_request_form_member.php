<section class="officialservices">
      <div class="container">
        <div class="row">
           <form class="fform" action="<?= base_url('website/loan_request_member')?>" enctype="multipart/form-data" method="POST">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-5">
            <h3 class="tittle">LOAN REQUEST FORM(MEMBER)</h3><h4><?= date('Y').'-'.date('y',strtotime('+1 year'));?></h4>
           
              <div class="row">
                  <!-- <?= PRE; print_r($account_details);?> -->
                  <div class="col-md-2 mt-2">Request Date</div>
                  <div class="col-md-4 mt-2"><input type="date" name="req_date" id="req_date" class="form-control" value="<?= date('Y-m-d');?>" required></div>
                  <div class="col-md-2 mt-2">Member Id</div>
                  <div class="col-md-4 mt-2"><input type="text" name="member_id"  id="member_id" placeholder="Member Id :" class="form-control"  required></div>
                  <div class="col-md-2 mt-2">Member Name</div>
                  <div class="col-md-4 mt-2"><input type="text" name="member_name" value="" id="member_name" placeholder="Member Name :"  class="form-control" required></div>
                <!--   <div class="col-md-2 mt-2">Group Id</div>
                  <div class="col-md-4 mt-2"><input type="text" value="" name="group_id"  id="group_id" placeholder="Group Id :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">Group Name</div>
                  <div class="col-md-4 mt-2"><input type="text" value=""   name="group_name" id="group_name" placeholder="Group Name :"  class="form-control" required></div> -->
                  <div class="col-md-2 mt-2">Loan Amount</div>
                  <div class="col-md-4 mt-2"><input type="text" name="loan_amount" value=""  id="loan_amount" placeholder="Loan Amount :"  class="form-control"></div>
                  <div class="col-md-2 mt-2">Loan Amount(In Word)</div>
                  <div class="col-md-4 mt-2"><input type="text" name="loan_amount_in_word"   value=""  id="loan_amount_in_word" placeholder="Loan Amount(In Word) :" class="form-control" required></div>
                   <div class="col-md-2 mt-2">Total Month(EMI)</div>
                  <div class="col-md-4 mt-2"><select class="form-control" name="total_month">
                      <option>---SELECT---</option>
                      <option value="3">3</option>
                      <option value="5">5</option>
                      <option value="7">7</option>
                      <option value="9">9</option>
                      <option value="11">11</option>
                      <option value="13">13</option>
                  </select></div>
                  <div class="col-md-2 mt-2">State Unit/Code No.</div>
                  <div class="col-md-4 mt-2">
                  <select class="form-control states" id="states" name="state_unit_name">
                    <option>State :</option>
                    <?php
                      if(!empty($state)){
                        foreach ($state as $key => $value) {
                          ?><option value="<?= $value['id'];?>"><?= $value['state'];?></option><?php
                        }
                      }
                    ?>
                  </select>
                </div>
                <div class="col-md-2 mt-2">Division Unit/Code No.</div>
                <div class="col-md-4 mt-2"> 
                  <select class="form-control division" id="division" name="division_unit_name">
                    <option>Division :</option>
                  </select>
                </div>
                 

                  <div class="col-md-2 mt-2">District Branch/Code No.</div>
                  <div class="col-md-4 mt-2"><input type="text" value="" name="district_branch"  id="district_branch"  placeholder="District Branch/Code No. :" class="form-control" required></div>

                 <!--  <div class="col-md-2 mt-2">Sponsor Id No.</div>
                  <div class="col-md-4 mt-2"><input type="text" value="" name="sponsor_id"  id="sponsor_id"  placeholder="Sponsor Id No. :" class="form-control" required></div> -->

                
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