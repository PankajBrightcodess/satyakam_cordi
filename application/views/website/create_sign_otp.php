   <section class="officialservices">
      <div class="container">
        <div class="row">
              <div class="col-md-3 mb-3"></div>
          <div class="col-md-6 mb-3 text-center">
            <center class="tittle"><h2></h2><h4>OTP Confirmation</h4></center>
            <form action="<?= base_url('website/create_signup')?>" method="POST" style="border:1px solid black;padding:10px; margin-top:20px; background:white;">
              <div class="row">
                 <div class="col-md-12 mb-2">
                  <!-- <label for="application_date">OTP :</label> -->
                  <input type="text" name="OTP" placeholder="Please Enter OTP :" class="form-control" required>
                  <input type="hidden" name="state" value="<?php if(!empty($data['state'])) echo $data['state'];?>" class="form-control" required>
                  <input type="hidden" name="depart_id" value="<?php if(!empty($data['depart_id'])) echo $data['depart_id'];?>" class="form-control" required>
                  <input type="hidden" name="post_id" value="<?php if(!empty($data['post_id'])) echo $data['post_id'];?>" class="form-control" required>
                  <input type="hidden" name="batch_no" value="<?php if(!empty($data['batch_no'])) echo $data['batch_no'];?>" class="form-control" required>
                  <input type="hidden" name="join_in_branch" value="<?php if(!empty($data['join_in_branch'])) echo $data['join_in_branch'];?>" class="form-control" required>
                  <input type="hidden" name="branch_code" value="<?php if(!empty($data['branch_code'])) echo $data['branch_code'];?>" class="form-control" required>
                  <input type="hidden" name="officer_name" value="<?php if(!empty($data['officer_name'])) echo $data['officer_name'];?>" class="form-control" required>
                  <input type="hidden" name="mobile_no" value="<?php if(!empty($data['mobile_no'])) echo $data['mobile_no'];?>" class="form-control" required>
                  <input type="hidden" name="email_id" value="<?php if(!empty($data['email_id'])) echo $data['email_id'];?>" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                  <input type="submit" class="mt-4 btn btn-sm" style="background:#233799;color:white">
                </div>
              </div>
            </form>
          </div>
           <div class="col-md-3 mb-3"></div>
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
      <form >
      <div class="modal-body">
       <input type="number" name="otp" maxlength="4" minlength="4" required placeholder="Enter OTP" class="form-control">
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