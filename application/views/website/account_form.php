   <section class="officialservices">
      <div class="container">
        <div class="row">
           <form action="<?= base_url('website/create_account')?>" enctype="multipart/form-data" method="POST" style="border:1px solid black;padding-top:10px; margin-top:20px; background:white;">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-5">
            <center class="tittle"><h2>Weekly Saving Account</h2><h4>Account Create</h4></center>
           
              <div class="row">
                <div class="col-md-6 mt-2">
                  <label for="application_date">Member Id No. :</label>
                  <input type="text" name="member_id" placeholder="Member Id No. :" class="form-control" required>
                </div>
                 <div class="col-md-6 mt-2">
                  <label for="application_date">Member Name :</label>
                  <input type="text" name="name" placeholder="Member Name :" class="form-control" required>
                </div>

                <div class="col-md-6 mt-2">
                  <label for="application_date">Father/Husband Name :</label>
                  <input type="text" name="father_husband" placeholder="Father/Husband Name :" class="form-control" required>
                </div>
                <div class="col-md-6 mt-2">
                  <label for="application_date">Date Of Birth. :</label>
                  <input type="date" name="dob" placeholder="Date Of Birth. :" class="form-control" required>
                </div>
                <div class="col-md-6 mt-2">
                  <label for="application_date">Correspondence Address :</label>
                  <textarea class="form-group form-control" name="c_address" rows="5"></textarea>
                </div>
                 <div class="col-md-6 mt-2">
                  <label for="application_date">Permanent Address :</label>
                  <textarea class="form-group form-control" name="p_address" rows="5"></textarea>
                </div>
                
                 <div class="col-md-6 mt-2">
                  <label for="application_date">Join Group :</label>
                  <input type="text" name="group_name" placeholder="Join Group :" class="form-control" required>
                </div>
                <div class="col-md-6 mt-2">
                  <label for="application_date">Group No. :</label>
                  <input type="text" name="group_no" placeholder="Join Group :" class="form-control" required>
                </div>
                 <div class="col-md-6 mt-2">
                  <label for="state_unit_name">State :</label>
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
                  <label for="email">Mobile No :</label>
                        <input type="text" name="mobile_no" value=""  placeholder="Mobile No. :"  class="form-control" required>
                </div>
                <div class="col-md-6 mb-2"> 
                  <label for="aadhar">Aadhar :</label>
                  <input type="text" name="aadhar" placeholder="Enter Aadhar"  class="form-control" required>
                </div>
                 <div class="col-md-6 mb-2"> 
                  <label for="email">Email :</label>
                  <input type="email" name="email" placeholder="Enter Email"  class="form-control" required>
                </div>
                 <div class="col-md-6 mb-2"> 
                  <label for="email">Photo :</label>
                  <input type="file" name="Photo" placeholder="Enter Captcha"  class="form-control" required>
                </div>
                <div class="col-md-6 mb-2"> 
                  <label for="email">Captcha :</label>
                  <input type="text" name="captcha" placeholder="Enter Captcha"  class="form-control" required>
                </div>
                 <div class="col-md-6 mb-2"> 
                 
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