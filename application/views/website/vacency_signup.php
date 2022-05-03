   <section class="officialservices">
      <div class="container">
        <div class="row">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-3">
            <center class="tittle"><h2>REGISTERED NOW</h2><h4>Vacency Sign Up Form</h4></center>
            <form action="<?= base_url('website/vacencysignup_create')?>" method="POST" style="border:1px solid black;padding:10px; margin-top:20px; background:white;">
              <div class="row">
                 <div class="col-md-12 mb-2">
                  <label for="application_date">Application Date :</label>
                  <input type="date" name="application_date" placeholder="Application Date :" class="form-control" required>
                 
                </div>
                 <div class="col-md-6 mb-2">
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
                    <!-- <input type="text" name="state_unit_name" placeholder="State Unit Name :" class="form-control" required> -->
                </div>
                <div class="col-md-6 mb-2"> 
                  <label for="division_unit_name">Division Unit Name :</label>
                  <select class="form-control division" id="division" name="division_unit_name">
                    <option>Division :</option>
                   
                  </select>
                 <!--  <input type="text" name="" placeholder="Division Unit Name :" class="form-control" required> -->
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
                  <label for="depart_id">Department/Service Area :</label>
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
                  <label for="desicination">Designation :</label>
                  <select class="form-control" id="post" name="post">
                    <option>Post :</option>
                  </select>
                  
                </div>
                
                 <div class="col-md-12 mb-2"> 
                  <label for="user_name">User Name :</label>
                   <input type="text" name="user_name" placeholder="User Name :" class="form-control" required>
                </div>
                 <div class="col-md-6 mb-2"> 
                  <label for="password">Password :</label>
                   <input type="password" name="password" placeholder="Password :" class="form-control" required>
                </div>
                 <div class="col-md-6 mb-2"> 
                  <label for="conf_password">Confirm Password :</label>
                   <input type="password" name="conf_password" placeholder="Confirm Password :" class="form-control" required>
                </div>
               
                 <div class="col-md-12 mb-2">
                  <input type="submit" class="mt-4 btn btn-sm "   style="background:#233799;color:white">
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