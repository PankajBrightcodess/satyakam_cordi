  <section class="officialservices">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h1 class="tittle">Club Membership Form <?= date('Y').'-'.date('y',strtotime('+1 year'));?></h1></center>
                    <form action="<?php echo base_url('website/add_club_membership');?>"  method="POST" enctype="multipart/form-data" style="border:1px solid black;padding: 10px;margin-top: 20px;background: white;">
                        <div class="row">
                          <div class="col-md-8">
                            <label>Apply Date</label>
                            <input type="date" name="apply_date" value="<?= date('Y-m-d');?>" class="form-control mb-3" required>
                             <div class="row">
                               <div class="col-md-6 col-6">
                                 <label>State Unit Name</label>
                                   <select class="form-control states" id="states" name="state_unit_name">
                                    <option>State :</option>
                                     <?php
                                      if(!empty($state)){
                                        foreach ($state as $key => $value) {
                                          ?><option  value="<?= $value['id'];?>"><?= $value['state'];?></option><?php
                                        }
                                      }
                                    ?> 
                                  </select>
                                </div>
                               <div class="col-md-6 col-6 mb-2">
                                 <label>Division Unit Name</label>
                                  <select class="form-control division"  name="division_unit_name">
                                    <option>Division :</option>
                                  <?php
                                      if(!empty($divisionlist)){
                                        foreach ($divisionlist as $key => $value) {
                                          ?><option <?php if($allsignuprecords['division_unit_name']==$value['id']){?> selected="selected"<?php }?> value="<?= $value['id'];?>"><?= $value['division'];?></option><?php
                                        }
                                      }
                                    ?> 
                                  </select>
                               </div>
                               <div class="col-md-6 col-6">
                                 <label>District Unit Name</label>
                                  <input type="text" name="dist_no"   value="" placeholder="District Name :" class="form-control" required>
                               </div>
                               <div class="col-md-6 col-6 mb-2">
                                  <label>Sponsor Id Number</label>
                                  <input type="text" name="sponsor_id"   value="" placeholder="Sponsor Id Number :" class="form-control" required>
                               </div>

                               <div class="col-md-6 col-6">
                                 <label>User Name</label>
                                  <input type="text" name="user_name"   value="" placeholder="User Name :" class="form-control" required>
                               </div>
                               <div class="col-md-6 col-6 mb-2">
                                  <label>User Id Number</label>
                                  <input type="text" name="user_id"   value="" placeholder="User Id Number :" class="form-control" required>
                               </div>
                             </div>
                          </div>
                          <div class="col-md-4">
                            <div class="row">
                              <div class="col-md-12 mb-3">
                                <div class="form-group">  
                                  <div style="width:151px; height:181px;"  id='imgInp'>
                                    <img src="#" alt="" id="previewHolder"  height="180" width="150" >
                                  </div>
                                  <label>Upload Picture</label>
                                  <input type="file" name="image" id="filePhoto" value=""  onchange="readURL(this,'#blah');">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label>Authorized Member Name</label>
                           
                            <input type="text" name="member_name"   value="" placeholder="Authorized Member Name :" class="form-control mb-3" required> 
                            <label>Father/Husband Name</label>
                            <input type="text" name="father_husband"  value="" placeholder="Father/Husband Name :" class="form-control mb-3" required>
                            <label>Date Of Birth</label>
                            <input type="date" name="dob"   value="" class="form-control mb-3" required>
                            <label>Mobile No.</label>
                            <input type="text" name="mobile_no"   value="" placeholder="Mobile No :" class="form-control mb-3" required>
                            <label>Email Id.</label>
                            <input type="email" name="email"  placeholder="Email Id :" class="form-control mb-3" value="" required>
                          </div>
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">Provisional Address (As Per Aadhar Card)</h6>
                          </div>
                          <div class="col-md-4 mb-3">
                             <label>Village</label>
                            <input type="text" name="village" placeholder="Village :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                              <label>Panchayat</label>
                            <input type="text" name="panchayat" placeholder="Panchayat  :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                              <label>Ward No.</label>
                            <input type="text" name="ward_no" placeholder="Ward No.  :" class="form-control" required>
                          </div>

                          <div class="col-md-4 mb-3">
                             <label>Police Station</label>
                            <input type="text" name="police_station" placeholder="Police Station :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                             <label>Block</label>
                            <input type="text" name="block" placeholder="Block Name :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label>Dist.</label>
                            <input type="text" name="dist" placeholder="District Name :" class="form-control" required>
                          </div>

                          <div class="col-md-4 mb-3">
                            <label>State</label>
                            <input type="text" name="state" placeholder="State Name :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label>Pin Code</label>
                            <input type="number" name="pin_code" maxlength="6" minlength="6" placeholder="Pin Code No. :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label>Aadhar No.</label>
                            <input type="number" name="aadhar" placeholder="Aadhar No. :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label>PAN Number</label>
                            <input type="text" name="pan_number" placeholder="PAN Number :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label>From</label>
                            <select class="form-control" name="from">
                              <option value="">---SELECT---</option>
                              <option value="rural">Rural</option>
                              <option value="urban">Urban</option>
                              <option value="other">Other</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label>Sex</label>
                            <select class="form-control" name="sex">
                              <option value="">---SELECT---</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label>Nationality</label>
                            <input type="text" name="nationality" placeholder="Nationality :" class="form-control" required>
                          </div>
                           <div class="col-md-3 mb-3">
                            <label>Category</label>
                            <select class="form-control" name="category">
                              <option value="">---SELECT---</option>
                              <option value="gen">GEN</option>
                              <option value="obc">OBC</option>
                              <option value="sc">SC</option>
                              <option value="st">ST</option>
                            </select>
                           <!--  <input type="text" name="category" placeholder="Category :" class="form-control" required> -->
                          </div>
                           <div class="col-md-3 mb-3">
                            <label>Identification Marks</label>
                            <input type="text" name="identification_marks" placeholder="Identification Marks :" class="form-control" required>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label>Marital Status</label>
                           <select class="form-control" name="marital_status">
                             <option value="">---SELECT---</option>
                             <option value="Married">Married</option>
                             <option value="Unmarried">Unmarried</option>
                           </select>
                          </div>

                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">Education Qualification</h6>
                          </div>
                           <div class="col-md-3 mb-3  border-right border-success">
                           <label>Illiterate</label>
                           <input type="radio" class="ml-5" value="Illiterate" name="education">
                          </div>
                           <div class="col-md-3 mb-3 border-right border-success">
                           <label >Literate</label>
                           <input type="radio" class="ml-5" value="Literate" name="education">
                          </div>
                          <div class="col-md-3 mb-3 border-right  border-success">
                            <label>Eighth Pass</label>
                            <input type="radio" class="ml-5" value="Eighth Pass" name="education">
                          </div>
                          <div class="col-md-3 mb-3 border-right border-success">
                            <label>Matriculation Pass</label>
                            <input type="radio" class="ml-5" value="Matriculation Pass" name="education">
                          </div>

                          <div class="col-md-3 mb-3 border-right border-success">
                            <label>Inter Pass</label>
                            <input type="radio" class="ml-5" value="Inter Pass" name="education">
                          </div>
                          <div class="col-md-3 mb-3  border-success">
                            <label>Other</label>
                            <input type="radio" id="othercheck" value="Other" class="ml-5" name="education">
                            <input type="text" class="form-control other_details" id="other_details"  name="other_details" >
                          </div>

                           <div class="col-md-12 mb-3 ">
                            <h6 class="tittle">Account Details</h6>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" placeholder="Bank Name" name="bank_name" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="ifsc_code" placeholder="IFSC Code" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="ac_number" placeholder="Account Number" class="form-control" required>
                          </div>
                         

                           <div class="col-md-12 mb-3 ">
                            <h6 class="tittle">Nominee Details</h6>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" placeholder="Nominee Name" name="nominee_name" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="nominee_relation" placeholder="Relation" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="nominee_age" placeholder="Age" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-5">
                            <input type="text" name="nominee_aadhar" placeholder="Aadhar" class="form-control" required>
                          </div>

                           <div class="col-md-12 mb-3 ">
                            <h6 class="tittle">License Fee</h6>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="number" placeholder="License Fee" name="amount" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="amount_in_word" placeholder="License Fee( In Word)" class="form-control" required>
                          </div>
                           

                          <div class="col-md-12 text-center text-info">
                             <h4>INSTRUCTION</h4>
                          </div>
                          <div class="col-md-12">
                            <div class="row justify-content-center">
                              <div class="col-md-11 mb-3">
                                   <div class="form-check">
                                      <input class="form-check-input mb-3" name="confirm_1" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 15px;">
                                      THE PARTICULARS OF ME OR THE PERSONS OUTHORIZED BY ME ARE CORRECT.
                                    </label>
                                  </div>
                              </div>
                              <div class="col-md-11 mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" name="confirm_2" type="checkbox" value="1" id="defaultCheck1">
                                  <label class="form-check-label"  for="defaultCheck2" style="font-size: 15px;">
                                    MY OUTHORIZED MEMBER IS REGISTERED AS MY NOMINEE.
                                  </label>
                                </div>
                              </div>

                              <div class="col-md-11 mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" name="confirm_3" type="checkbox" value="1" id="defaultCheck1">
                                  <label class="form-check-label"  for="defaultCheck3" style="font-size: 15px;">
                                    I HAVE BEEN MADE AWARE THAT THE FORM OF CLUB LICENSE CANNOT BE REFUNDED UNDER ANY CRICUMSTANCES WITH WHICH I AGREE.
                                  </label>
                                </div>
                              </div>

                              <div class="col-md-11 mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" name="confirm_4" type="checkbox" value="1" id="defaultCheck1">
                                  <label class="form-check-label"  for="defaultCheck4" style="font-size: 15px;">I HAVE ALSO BEEN APPRISED THAT MY TOOL KIT WILL BE RECEIVED AT LEAST 30 DAYS NOT MORE THAN 45 FROM THE DATE OF SUBMISSION OF APPLICATION WHICH I AGREE.
                                  </label>
                                </div>
                              </div>
                             
                           
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                              <button type="submit" class="mt-4 btn btn-lg" style="background:#233799;color:white">SUBMIT</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>