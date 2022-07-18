   <section class="officialservices">
      <div class="container">
        <div class="row">
            <!--  <form action="<?= base_url('website/groupsingup_create');?>" method="POST" style="border:1px solid black;padding-top:10px; margin-top:20px; background:white;"> -->
           <form action="<?= base_url('website/groupmembership_otp');?>" method="POST" style="border:1px solid black;padding-top:10px; margin-top:20px; background:white;">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-5">
            <center class="tittle"><h2>NEW GROUP CREATE</h2><h4>SIGN UP(FORM)</h4></center>
           
              <div class="row">
                 <div class="col-md-6 mt-4">
                  <label for="application_date">Inception Date :</label>
                  <input type="date" name="inception_date" placeholder="Inception Date :" class="form-control" required>
                 
                </div>
                 <div class="col-md-6 mt-4">
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
                  <label for="division_unit_name">Division :</label>
                  <select class="form-control division" id="division" name="division_unit_name">
                    <option>Division :</option>
                  </select>
                </div>
                <div class="col-md-6 mb-2">
                  <label for="dist_unit_name">District :</label>
                  <input type="text" name="dist" placeholder="Dist Name :" class="form-control" required>
                  <input type="hidden" name="sponsor_id" value="0" placeholder="Sponsor Id No. :" readonly class="form-control" required>
                </div>
              <div class="col-md-6 mb-2">
                  <label for="applicant_name">Block :</label>
                  <input type="text" name="block" placeholder="Block Name :" class="form-control" required>  
                </div>
               
                <div class="col-md-6 mb-2"> 
                  <label for="dob">Gram Panchayat :</label>
                  <input type="text" name="gram_panchayat" placeholder="Gram Panchayat"  class="form-control" required>
                </div>
                <div class="col-md-6 mb-2"> 
                   <label for="mobile_no">Ward No. :</label>
                   <input type="text" name="ward_no" placeholder="Ward No :" class="form-control" required>
                </div>
                 <div class="col-md-6 mb-2"> 
                    <label for="mobile_no">Sponsor Id No. :</label>
                   <input type="text" name="created_by" value="<?php echo $_SESSION['user_id'];?>"  placeholder="Sponsor Id No. :" readonly class="form-control" required>
                </div>
                 <div class="col-md-6 mb-2">
                        
                </div>
                <div class="col-md-12 mb-2"> 
                  <label for="email">Group Name :</label>
                  <input type="text" name="group_name" placeholder="Enter Group Name"  class="form-control" required>
                </div>
                <div class="col-md-6 mb-2">
                  <label for="email">Mobile No :</label>
                        <input type="text" name="mobile_no" value=""  placeholder="Mobile No. :"  class="form-control" required>
                </div>
                <div class="col-md-6 mb-2"> 
                  <label for="email">Email :</label>
                  <input type="email" name="email" placeholder="Enter Email"  class="form-control" required>
                </div>
                 <div class="col-md-6 mb-2"> 
                  <label for="email">Captcha :</label>
                  <input type="text" name="captcha" placeholder="Enter Captcha"  class="form-control" required>
                </div>
                <div class="col-md-6 mb-2">

                  <label style="border: 1px solid red; font-weight : 900; font-size: 20px; letter-spacing: 2px; font-style: italic;  background: gray; color: white; width: 100px; margin: 20px; padding:10px" id="referesh_c"><?php echo $captcha;?></label>
                  <input type="hidden" name="captcha_confirm" id="captcha_confirm" value="<?php echo $captcha;?>">
                  <input type="button" class="btn btn-sm btn-secondary" id="referesh_captch" value="Refresh">
                  
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