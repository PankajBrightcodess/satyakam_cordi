   <section class="officialservices">
      <div class="container">
        <div class="row">
              <div class="col-md-3 mb-3"></div>
          <div class="col-md-6 mb-3 text-center">
            <center class="tittle"><h2></h2><h4>OTP Confirmation</h4></center>
            <form action="<?= base_url('website/vacencysignup_create')?>" method="POST" style="border:1px solid black;padding:10px; margin-top:20px; background:white;">
            <div class="row">
                 <div class="col-md-12 mb-2">
                  <input type="text" name="OTP" placeholder="Please Enter OTP :" class="form-control" required>
                  <input type="hidden" name="state_unit_name" value="<?php if(!empty($data['state_unit_name'])) echo $data['state_unit_name'];?>" class="form-control" required>
                  <input type="hidden" name="application_date" value="<?php if(!empty($data['application_date'])) echo $data['application_date'];?>" class="form-control" required>
                  <input type="hidden" name="division_unit_name" value="<?php if(!empty($data['division_unit_name'])) echo $data['division_unit_name'];?>" class="form-control" required>
                  <input type="hidden" name="applicant_name" value="<?php if(!empty($data['applicant_name'])) echo $data['applicant_name'];?>" class="form-control" required>
                  <input type="hidden" name="dob" value="<?php if(!empty($data['dob'])) echo $data['dob'];?>" class="form-control" required>
                  <input type="hidden" name="mobile_no" value="<?php if(!empty($data['mobile_no'])) echo $data['mobile_no'];?>" class="form-control" required>
                  <input type="hidden" name="email" value="<?php if(!empty($data['email'])) echo $data['email'];?>" class="form-control" required>
                  <input type="hidden" name="depart_id" value="<?php if(!empty($data['depart_id'])) echo $data['depart_id'];?>" class="form-control" required>
                  <input type="hidden" name="post" value="<?php if(!empty($data['post'])) echo $data['post'];?>" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                  <input type="submit" class="mt-4 btn btn-sm" style="background:#233799;color:white;">
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