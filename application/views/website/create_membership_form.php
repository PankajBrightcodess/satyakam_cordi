  <section class="officialservices">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h1 class="tittle">Membership Form</h1></center>
                    <form action="<?= base_url('website/addrecord_membership');?>"  method="POST" enctype="multipart/form-data" style="border:1px solid black;padding: 10px;margin-top: 20px;background: white;">
                        <div class="row">
                          <div class="col-md-8">
                            <label>Application No.</label>
                            <input type="text" name="app_no" placeholder="Application No :" class="form-control mb-3" required>
                          <!--   <input type="hidden" name="sponsor_id" readonly  value="<?= $allsignuprecords['sponsor_id'];?>" placeholder="Application Date :" class="form-control mb-3" required> -->
                            <label>Application Date</label>
                            <input type="date" name="app_date" readonly  value="<?= $allsignuprecords['application_date'];?>" placeholder="Application Date :" class="form-control mb-3" required>
                            <label>State Unit Name</label>
                             <select class="form-control states" id="states" name="state_unit_name">
                              <option>State :</option>
                              <?php
                                if(!empty($state)){
                                  foreach ($state as $key => $value) {
                                    ?><option <?php if($allsignuprecords['state_unit_name']==$value['id']){?> selected="selected"<?php }?> value="<?= $value['id'];?>"><?= $value['state'];?></option><?php
                                  }
                                }
                              ?>
                            </select>

                            <!-- <input type="text" name="state_unit_name" readonly  value="<?= $allsignuprecords['state'];?>" placeholder="State Unit Name :" class="form-control mb-3" required> -->
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
                            <label>Division Unit Name</label>
                            <select class="form-control"  name="division_unit_name">
                              <option>State :</option>
                              <?php
                                if(!empty($divisionlist)){
                                  foreach ($divisionlist as $key => $value) {
                                    ?><option <?php if($allsignuprecords['division_unit_name']==$value['id']){?> selected="selected"<?php }?> value="<?= $value['id'];?>"><?= $value['division'];?></option><?php
                                  }
                                }
                              ?>
                            </select>
                            <!-- <input type="text" name="division_unit_name" readonly  value="<?= $allsignuprecords['division'];?>" placeholder="Division Unit Name :" class="form-control mb-3" required> -->
                            <label>Member Name</label>
                            <input type="text" name="applicant_name" readonly value="<?= $allsignuprecords['applicant_name'];?>" placeholder="Member Name :" class="form-control mb-3" required>
                            <label>Father Name</label>
                            <input type="text" name="father_name" readonly value="<?= $allsignuprecords['father_name'];?>" placeholder="Father Name :" class="form-control mb-3" required>
                            <label>Date Of Birth</label>
                            <input type="date" name="dob" readonly  value="<?= $allsignuprecords['dob'];?>" class="form-control mb-3" required>
                            <label>Mobile No.</label>
                            <input type="text" name="mobile_no" readonly  value="<?= $allsignuprecords['mobile_no'];?>" placeholder="Mobile No :" class="form-control mb-3" required>
                            <label>Email Id.</label>
                            <input type="email" name="email" readonly placeholder="Email Id :" class="form-control mb-3" value="<?= $allsignuprecords['email'];?>" required>
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
                            <label>Election card No.</label>
                            <input type="text" name="election_card_no" placeholder="Election card No. :" class="form-control" required>
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
                            <label>Sex (FOR WOMEN ONLY)</label>
                            <select class="form-control" name="sex">
                              <option value="">---SELECT---</option>
                              <option value="rural">Female</option>
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
                            <h6 class="tittle">Whether There Is Membership Of Any Institution In The Past Or Presently ?</h6>
                          </div>
                           <div class="col-md-12 mb-3">
                           <select class="form-control" name="confirm_membership">
                              <option value="">---SELECT---</option>
                             <option value="yes">Yes</option>
                             <option value="no">No</option>
                           </select>
                          </div>
                         <div class="col-md-12 mb-3">
                          <h6 class="tittle">I Certify That Aspire To Join The Following Saving Plan And Term Plan</h6>
                        </div>
                           <div class="col-md-4 mb-3  border-right border-success">
                           <label>Super(A) Benefit Rs. 15 Per Week</label>
                           <input type="radio" class="ml-5" value="super_a" name="super">
                          </div>
                           <div class="col-md-4 mb-3 border-right border-success">
                           <label >Super(B) Benefit Rs. 25 Per Week</label>
                           <input type="radio" class="ml-5" value="super_b" name="super">
                          </div>
                          <div class="col-md-4 mb-3  border-success">
                            <label>Super(C) Benefit Rs. 35 Per Week</label>
                            <input type="radio" class="ml-5" value="super_c" name="super">
                          </div>
                          <div class="col-md-4 mb-3 border-right border-success">
                            <label>Super(D) Benefit Rs. 50 Per Week</label>
                            <input type="radio" class="ml-5" value="super_d" name="super">
                          </div>
                          <div class="col-md-4 mb-3 border-right border-success">
                            <label>Super(E) Benefit Rs. 100 Per Week</label>
                            <input type="radio" class="ml-5" value="super_e" name="super">
                          </div>
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">Team Year</h6>
                          </div>
                           <div class="col-md-2 mb-3  border-right border-success">
                           <label>1 Year</label>
                           <input type="radio" class="ml-5" name="year">
                          </div>
                           <div class="col-md-2 mb-3 border-right border-success">
                           <label >3 Years</label>
                           <input type="radio" class="ml-5" name="year">
                          </div>
                          <div class="col-md-2 mb-3 border-right  border-success">
                            <label>5 Years</label>
                            <input type="radio" class="ml-5" value="5 years" name="year">
                          </div>
                          <div class="col-md-2 mb-3 border-right border-success">
                            <label>8 Years</label>
                            <input type="radio" class="ml-5" value="8 years" name="year">
                          </div>
                          <div class="col-md-2 mb-3 border-right border-success">
                            <label>11 Years</label>
                            <input type="radio" class="ml-5" value="11 years" name="year">
                          </div>
                          <div class="col-md-2 mb-3  border-success">
                            <label>Other</label>
                            <input type="radio" class="ml-5" value="Other"  name="year">
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
                            <input type="text" class="form-control other_details" id="other_details" readonly name="other_details" >
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

                           <div class="col-md-12 text-center text-info">
                            <h4>INSTRUCTION</h4>
                          </div>
                          <div class="col-md-12">
                            <div class="row justify-content-center">
                              <div class="col-md-11 mb-3">
                                   <div class="form-check">
                                      <input class="form-check-input mb-3" name="confirm_1" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 15px;">
                                      THAT I UNDERTAKE THAT THE PARTICULARS ENTERED BY ME ARE CORRECT. IF ANY ERROR AND MISMATCH IS FOUND THE APPLICATION WILL BE CANCELED, THAN I WILL BE RESPONSIBLE FOR THE SAME.
                                    </label>
                                  </div>
                              </div>
                              <div class="col-md-12 mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" name="confirm_2" type="checkbox" value="1" id="defaultCheck1">
                                  <label class="form-check-label"  for="defaultCheck1" style="font-size: 15px;">
                                    AFTER UNDERSTANING ALL THE RULES AND INSTRUCTIONS RELATED TO THE GROUP IN LETTER AND SPIRIT. I HAVE FILED MY MEMBERSHIP THE LOAN SCHEME IS INCLUDED IN THE FUNDAMENTAL  RIGHT OF THE INSTITUTION FOR WHICH I CAN DIRECTLY AND INDIRECTLY CLAIM WILL NOT.
                                  </label>
                                </div>
                              </div>
                             
                           
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">Detail Uploads</h6>
                          </div>

                          <div class="col-md-12 mb-3">
                            <div class="table-responsive">
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td> <label>Member Signature</label><input class="form-control" type="file" name="member_sign" id="formFile"></td>
                                    <td><label>Right Hand Thumb</label><input class="form-control" type="file" name="member_right_hand_thumb" id="formFile"></td>
                                  </tr>
                                  <tr> 
                                  <th scope="row" colspan="2" class="text-center"><label >My Profile Upload</label>  </th> 

                                  </tr>
                                  <tr>
                                    <td> <label>Aadhar Front Side</label><input class="form-control" type="file" name="aadhar_front" id="formFile"></td>
                                    <td><label>Aadhar Back Side</label><input class="form-control" type="file" name="aadhar_back" id="formFile"></td>
                                  </tr>
                                  <tr>
                                    <td> <label>Election Id Card</label><input class="form-control" type="file" name="election_id_card" id="formFile"></td>
                                    <td><label>PAN Card</label><input class="form-control" type="file" name="pan_card" id="formFile"></td>
                                  </tr>
                                  <tr>
                                    <td> <label>Passbook (Bank A/C)</label><input class="form-control" type="file" name="passbook_bank" id="formFile"></td>
                                    <td><label>Qualification Certificate</label><input class="form-control" type="file" name="qualification_certificate" id="formFile"></td>
                                  </tr>
                                  <tr>
                                    <td> <label>Witness Name</label><input class="form-control" type="text" name="witness_name"></td>
                                    <td><label>Relation</label><input class="form-control" type="text" name="witness_name"></td>
                                  </tr>
                                   <tr>
                                    <td> <label>Mobile No.</label><input class="form-control" type="text" name="witness_mobile_no"></td>
                                    <td><label>Membership No.</label><input class="form-control" type="text" name="membership_no"></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" class="text-center"><button type="button" class="btn btn-sm btn-success">VERIFICATION</button> </td>
                                   
                                  </tr>


                                  <tr>
                                    <th scope="row" colspan="2" class="text-center">Name Of The Verifing Officer</th>
                                  </tr>
                                  <tr>
                                     <td> <label>Designation</label><input class="form-control" type="text" name="designation"></td>
                                    <td><label>Service Number</label><input class="form-control" type="text" name="service_no"></td>
                                  </tr>
                                 <tr>
                                     <td> <label>Batch No.</label><input class="form-control" type="text" name="batch_no"></td>
                                    <td><label>Mobile No.</label><input class="form-control" type="number" name="officer_mobile_no"></td>
                                  </tr>
                                </tbody>
                              </table>
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