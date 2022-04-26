   <section class="officialservices">
      <div class="container">
        <div class="row">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-3">
            <center class="tittle"><h3>Sign Up Form</h3></center>
            <form action="<?= base_url('website/create_signup')?>" method="POST" style="border:1px solid black;padding:10px; margin-top:20px; background:white;">
              <div class="row">
                 <div class="col-md-12 mb-2">
                    <select class="form-control" name="state"  id="state" required>
                            <option value="">State :</option>
                            <?php
                                if(!empty($state)){
                                    foreach ($state as $key => $value) {
                                       ?>
                                       <option value="<?= $value['id'];?>"><?= $value['state'];?></option>
                                       <?php
                                    }
                                }
                            ?> 
                    </select> 
                </div>
                 <div class="col-md-6 mb-2">
                  <select class="form-control" name="depart_id" id="dpartment" required>
                          <option value="">Department :</option>
                          <?php
                              if(!empty($depart)){
                                  foreach ($depart as $key => $value) {
                                     ?>
                                     <option value="<?= $value['id'];?>"><?= $value['department'];?></option>
                                     <?php
                                  }
                              }
                          ?> 
                  </select> 
                </div>
                <div class="col-md-6 mb-2"> 
                  <select class="form-control post" id="post" required name="post_id">
                    <option value=" ">Post :</option>
                  </select>
                </div>
                <div class="col-md-6 mb-2">
                     <input type="text" name="batch_no" id="batch_no" required placeholder="Batch Number :" class="form-control" required>
                </div>
                <div class="col-md-6 mb-2">
                  <input type="text" name="join_in_branch" id="join_in_branch" placeholder="Join In Branch :" class="form-control" required>
                </div>
               
                
                <div class="col-md-12 mb-2">
                  <input type="text" name="branch_code" id="branch_code" placeholder="Branch Code :" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                    <input type="text" name="officer_name" id="officer_name" placeholder="Name Of The Officer :" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                    <input type="text" name="mobile_no" id="mobile_no" placeholder="Mobile Number :" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                    <input type="email" name="email_id" id="email_id" placeholder="Email Id :" class="form-control" required>
                </div>
                 <div class="col-md-12 mb-2">
                  <input type="button" class="mt-4 btn btn-sm  signup" id="signup" name="" value="Sign Up" style="background:#233799;color:white">
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

