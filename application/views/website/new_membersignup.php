   <section class="officialservices">
      <div class="container">
        <div class="row">
           <form action="<?= base_url('website/membership_otp')?>" method="POST" style="border:1px solid black;padding-top:10px; margin-top:20px; background:white;">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-5">
            <center class="tittle"><h2>NEW MEMBERSHIP REGISTER</h2><h4>SIGN UP(FORM)</h4></center>
           
              <div class="row">
                 <div class="col-md-6 mt-4">
                  <label for="application_date">Application Date :</label>
                  <input type="date" name="application_date" placeholder="Application Date :" class="form-control" required>
                 
                </div>
                 <div class="col-md-6 mt-4">
                  <label for="state_unit_name">State Unit Name :</label>
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
                <div class="col-md-6 mb-2"> 
                  <label for="division_unit_name">Division Unit Name :</label>
                  <select class="form-control division" id="division" name="division_unit_name">
                    <option>Division :</option>
                  </select>
                </div>
                <div class="col-md-6 mb-2">
                  <label for="dist_unit_name">Dist Unit Name :</label>
                  <input type="text" name="dist" placeholder="Dist Name :" class="form-control" required>
                </div>
                <div class="col-md-6 mb-2">
                        <input type="hidden" name="sponsor_id" value="0" placeholder="Sponsor Id No. :" readonly class="form-control" required>
                </div>
                <div class="col-md-6 mb-2">
                        <input type="hidden" name="created_by" value="<?php echo $_SESSION['user_id'];?>"  placeholder="Sponsor Id No. :" readonly class="form-control" required>
                </div>
                <div class="col-md-6 mb-2"> 
                  <label for="applicant_name">Applicant Name :</label>
                  <input type="text" name="applicant_name" placeholder="Applicant Name :" class="form-control" required>
                </div>
                <div class="col-md-6 mb-2"> 
                  <label for="dob">DOB :</label>
                  <input type="date" name="dob"  class="form-control" required>
                </div>
                 <div class="col-md-6 mb-2"> 
                  <label for="mobile_no">Mobile No. :</label>
                  <input type="number" name="mobile_no" maxlength="10" minlength="10" placeholder="Mobile Number :" class="form-control" required>
                </div>
                <div class="col-md-6 mb-2"> 
                  <label for="email">Email :</label>
                  <input type="email" name="email" placeholder="Email Id"  class="form-control" required>
                </div>
                 <div class="col-md-6 mb-2"> 
                  <label for="email">Captcha :</label>
                  <input type="text" name="captcha" placeholder="Enter Captcha"  class="form-control" required>
                </div>
                <div class="col-md-6 mb-2">

                  <label style="border: 1px solid red; font-weight : 900; font-size: 20px; letter-spacing: 2px; font-style: italic;  background: gray; color: white; width: 100px; margin: 20px; padding:10px"><?php echo $captcha;?></label>
                  <input type="hidden" name="captcha_confirm" value="<?php echo $captcha;?>">
                  
                </div>
                <div class="col-md-12 mb-2">
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