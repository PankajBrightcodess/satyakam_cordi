<section class="officialservices">
      <div class="container">
        <div class="row">
           <form action="<?= base_url('website/create_account')?>" enctype="multipart/form-data" method="POST" style="border:1px solid black;padding-top:10px; margin-top:20px; background:white;">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-5">
            <center class="tittle"><h2>4-WS(WEEKLY SAVING)</h2><h4>ACCOUNT OPEN-FORM <?= date('Y').'-'.date('y',strtotime('+1 year'));?></h4></center>
           
              <div class="row">
                  <div class="col-md-9 mt-3">
                    <div class="row">
                      <div class="col-md-2 mt-3">Date</div>
                      <div class="col-md-4"><input type="date" value="<?= date("Y-m-d");?>" class="form-control" name="date" required></div>
                      <div class="col-md-2">User Id :</div>
                      <div class="col-md-4">  <input type="text" name="member_id" id="member_id" placeholder="User Id :" class="form-control" required></div>
                      <!-- //////////////////// -->
                      <div class="col-md-2 mt-3">User Name :</div>
                      <div class="col-md-4"><input type="text" placeholder="User Name :"  class="form-control" name="username" required></div>
                      <div class="col-md-2">State Unit :</div>
                      <div class="col-md-4"> 
                        <select class="form-control states" id="states" name="state_unit_name">
                          <option>State Unit:</option>
                          <?php
                            if(!empty($state)){
                              foreach ($state as $key => $value) {
                                ?><option value="<?= $value['id'];?>"><?= $value['state'];?></option><?php
                              }
                            }
                          ?>
                  </select></div>
                  <!-- //////////////////////////////// -->
                      <div class="col-md-2 mt-3">Division Unit :</div>
                          <div class="col-md-4"><select class="form-control division" id="division" name="division_unit_name">
                            <option>Division :</option>
                         </select>
                      </div>
                      <div class="col-md-2">District Unit :</div>
                      <div class="col-md-4">  <input type="text" name="dist_unit" id="dist_unit" placeholder="District Unit :" class="form-control" required></div>
                      <!-- //////////////////////////////// -->
                      <div class="col-md-2 mt-3">Sponsor Id No.</div>
                      <div class="col-md-4"><input type="text" placeholder="Sponsor Id No. :"  class="form-control" name="sponsor_id" value="<?= $_SESSION['member_id'];?>" readonly required></div>
                      <div class="col-md-2">Mobile No. :</div>
                      <div class="col-md-4">  <input type="text" name="mobile_no" id="mobile_no" placeholder="Mobile No. :" class="form-control" required></div>
                       <!-- //////////////////////////////// -->
                      <div class="col-md-2 mt-1">E-mail :</div>
                      <div class="col-md-4"><input type="text" placeholder="E-mail :"  class="form-control" name="email" required></div>
                      <div class="col-md-2">Account Holder's Name :</div>
                      <div class="col-md-4">  <input type="text" name="account_holder_name" id="account_holder_name" placeholder="Account Holder's Name :" class="form-control" required></div>
                      <!-- //////////////////////////////// -->
                    </div>
                  </div>
                  <div class="col-md-3 mt-2">
                    <div class="form-group">  
                      <div style="width:151px; height:181px;" id='imgInp'>
                        <img src="#" alt="" id="previewHolder"  height="180" width="150" >
                      </div>
                      <label>Upload Picture</label>
                      <input type="file" name="image" id="filePhoto" onchange="readURL(this,'#blah');">
                      <label class="text-danger">Maximum Size (200kb)</label>
                    </div>
                  </div>
                  <div class="col-md-2 mt-2">F/H Name</div>
                  <div class="col-md-10"><input type="text" name="father_husband_name" id="father_husband_name" placeholder="Father/Husband Name :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">DOB</div>
                  <div class="col-md-10 mt-2"><input type="date" name="dob" id="dob" placeholder="Date Of Birth :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">Occupation</div>
                  <div class="col-md-10 mt-2"><input type="text" name="occupation" id="occupation" placeholder="Occupation :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">Sex</div>
                  <div class="col-md-10 mt-2"><select class="form-control" name="gender">
                    <option value=""> Sex :</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select></div>
                  <div class="col-md-2 mt-2">Aadhar No</div>
                  <div class="col-md-10 mt-2"><input type="number" name="aadhar_no" minlength="12" maxlength="14"  id="aadhar_no" placeholder="Aadhar No. :" class="form-control" required></div>
                  <div class="col-md-2 mt-2">PAN No</div>
                  <div class="col-md-10 mt-2"><input type="text" name="pan_no"  id="pan_no" placeholder="PAN No. :" class="form-control" required></div>
                  

                  <div class="col-md-12 mb-3">
                      <h6 class="tittle">Provisional Address (As per aadhar card)</h6>
                  </div>
                  <div class="col-md-2 mt-2">Village</div>
                  <div class="col-md-10 mt-2"><input type="text" name="village"  id="village" placeholder="Village :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Panchayat</div>
                  <div class="col-md-10 mt-2"><input type="text" name="panchayat"  id="panchayat" placeholder="Panchayat :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Ward No.</div>
                  <div class="col-md-10 mt-2"><input type="text" name="ward_no"  id="ward_no" placeholder="Panchayat :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Police Station</div>
                  <div class="col-md-10 mt-2"><input type="text" name="police_station"  id="police_station" placeholder="Police Station :" class="form-control"></div>

                  <div class="col-md-2 mt-2">Block</div>
                  <div class="col-md-10 mt-2"><input type="text" name="block"  id="block" placeholder="Block :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Subdivision</div>
                  <div class="col-md-10 mt-2"><input type="text" name="subdivision"  id="subdivision" placeholder="Subdivision :" class="form-control"></div>
                  <div class="col-md-2 mt-2">District</div>
                  <div class="col-md-10 mt-2"><input type="text" name="district"  id="district" placeholder="District :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Pin Code</div>
                  <div class="col-md-10 mt-2"><input type="number" name="pin_code"  id="pin_code" placeholder="Pin Code :" class="form-control"></div>

                  <div class="col-md-2 mt-2">Form</div>
                  <div class="col-md-10 mt-2"><span class="mr-1">Rural</span><input type="radio" name="form" value="Rural"  placeholder="Pin Code :" class="mr-5"><span class="mr-1">Urban</span><input type="radio" name="form" value="Urban" class="mr-5"  placeholder="Pin Code :"><span class="mr-1">Other</span><input type="radio" name="form" value="Other"  placeholder="Pin Code :" class="mr-5"></div>

                  <div class="col-md-2 mt-2">Nationality</div>
                  <div class="col-md-10 mt-2"><input type="text" name="nationality"  id="nationality" placeholder="Nationality :" class="form-control"></div>

                  <div class="col-md-2 mt-2">Category</div>
                  <div class="col-md-10 mt-2"><input type="text" name="category"  id="category" placeholder="Category :" class="form-control"></div>

                  <div class="col-md-2 mt-2">Identification Marks</div>
                  <div class="col-md-10 mt-2"><input type="text" name="ident_marks"  id="ident_marks" placeholder="Identification Marks :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Marital Status</div>
                  <div class="col-md-10 mt-2"><input type="text" name="marital_status"  id="marital_status" placeholder="Marital Status :" class="form-control"></div>

                   <div class="col-md-12 mb-3">
                      <h6 class="tittle">I certify that I aspire to join the following saving plan and team plan.</h6>
                  </div>

                  <div class="col-md-2 mt-2">Saving Plan Name</div>
                  <div class="col-md-10 mt-2"><input type="text" name="saving_plan_name"  id="saving_plan_name" placeholder="Saving Plan Name :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Team Year</div>
                  <div class="col-md-10 mt-2"><input type="text" name="team_year"  id="team_year" placeholder="Team Year :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Maintenance Fee</div>
                  <div class="col-md-10 mt-2"><input type="text" name="maintenance_fee"  id="maintenance_fee" placeholder="Maintenance Fee :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Nominee Name</div>
                  <div class="col-md-10 mt-2"><input type="text" name="nominee_name"  id="nominee_name" placeholder="Nominee Name :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Relation</div>
                  <div class="col-md-10 mt-2"><input type="text" name="relation"  id="relation" placeholder="Nominee Relation :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Age</div>
                  <div class="col-md-10 mt-2"><input type="text" name="age"  id="age" placeholder="Age :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Aadhar No.</div>
                  <div class="col-md-10 mt-2"><input type="text" name="nominee_aadhar"  id="nominee_aadhar" placeholder="Nominee Aadhar No. :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Group Name</div>
                  <div class="col-md-10 mt-2"><input type="text" name="group_name"  id="group_name" placeholder="Group Name :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Group Number</div>
                  <div class="col-md-10 mt-2"><input type="text" name="group_no"  id="group_no" placeholder="Group Number :" class="form-control"></div>
                  <div class="col-md-2 mt-2">Meeting No.</div>
                  <div class="col-md-10 mt-2"><input type="text" name="meeting_no"  id="meeting_no" placeholder="Meeting No. :" class="form-control"></div>
                   <div class="col-md-2 mt-2">Collective Saving Form No.</div>
                  <div class="col-md-10 mt-2"><input type="text" name="collective_saving_form_no"  id="collective_saving_form_no" placeholder="Collective Saving Form No. :" class="form-control"></div>
                   <div class="col-md-2 mt-2">UPI/Banking No. :</div>
                  <div class="col-md-10 mt-2"><input type="text" name="upi_banking"  id="upi_banking" placeholder="UPI/Banking No. :" class="form-control"></div>














                <!-- <div class="col-md-3 col-12  mt-2">
                  <label for="application_date">Member Id No. :</label>
                
                </div>
                 <div class="col-md-3 col-12 mt-2">
                  <label for="application_date">Member Name :</label>
                  <input type="text" name="name" placeholder="Member Name :" id="mem_name" class="form-control" required>
                </div>

                <div class="col-md-3 col-12 mt-2">
                  <label for="application_date">Father/Husband Name :</label>
                  <input type="text" name="father_husband" id="fath_name" placeholder="Father/Husband Name :" class="form-control" required>
                </div>
                <div class="col-md-3 col-12 mt-2">
                  <label for="application_date">Date Of Birth. :</label>
                  <input type="date" name="dob" id="dob_date"  placeholder="Date Of Birth. :" class="form-control" required>
                </div>
                <div class="col-md-6 col-12 mt-2">
                  <label for="application_date">Correspondence Address :</label>
                  <textarea class="form-group form-control" name="c_address" rows="5"></textarea>
                </div>
                 <div class="col-md-6 col-12 mt-2">
                  <label for="application_date">Permanent Address :</label>
                  <textarea class="form-group form-control" name="p_address" rows="5"></textarea>
                </div>
                
                 <div class="col-md-3 col-12 mt-2">
                  <label for="application_date">Join Group :</label>
                  <input type="text" name="group_name" placeholder="Join Group :" class="form-control" required>
                </div>
                <div class="col-md-3 mt-2">
                  <label for="application_date">Group No. :</label>
                  <input type="text" name="group_no" placeholder="Join Group :" class="form-control" required>
                </div>
                 <div class="col-md-3 mt-2">
                  <label for="state_unit_name">State :</label>
                  
                </div>
                 
                <div class="col-md-3 mb-2">
                  <label for="email">Mobile No :</label>
                        <input type="text" name="mobile_no" value=""  placeholder="Mobile No. :"  class="form-control" required>
                </div>
                <div class="col-md-3 mb-2"> 
                  <label for="aadhar">Aadhar :</label>
                  <input type="text" name="aadhar" placeholder="Enter Aadhar"  class="form-control" required>
                </div>
                 <div class="col-md-3 mb-2"> 
                  <label for="email">Email :</label>
                  <input type="email" name="email" placeholder="Enter Email"  class="form-control" required>
                </div>
                 <div class="col-md-3 mb-2"> 
                  <label for="email">Photo :</label>
                  <input type="file" name="Photo" placeholder="Enter Captcha"  class="form-control" required>
                </div>
                <div class="col-md-3 mb-2"> 
                  <label for="email">Captcha :</label>
                  <input type="text" name="captcha" placeholder="Enter Captcha"  class="form-control" required>
                </div> -->
                 <div class="col-md-3 mb-2"> 
                 
                </div>
                <div class="col-md-3 mb-2"> 
                 
                </div><div class="col-md-3 mb-2"> 
                 
                </div>
               
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