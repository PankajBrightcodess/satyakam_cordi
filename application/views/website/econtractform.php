    <section class="officialservices">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h1 class="tittle">E-Contract Form</h1></center>
                    <!-- <h4 class="text-success mb-3">Student's Details</h4> -->
                    <form action="<?= base_url('website/create_officer_details');?>"  method="POST" enctype="multipart/form-data" style="border:1px solid black;padding: 10px;margin-top: 20px;background: white;">
                        <div class="row">
                          <div class="col-md-8">
                            <label>Application Date</label>
                            <input type="text" name="app_date" readonly value="<?= date('Y-m-d');?>" placeholder="Application Date :" class="form-control" required>
                            <label>Application No.</label>
                            <input type="text" name="reg_no" placeholder="Registration No. :" readonly value="STKMRGE-<?php echo $details['id'];?>" class="form-control" required>
                            <label>State Unit Name</label>
                            <input type="hidden" name="state_id"  value="<?= $details['state'];?>"  readonly value="" placeholder="State Unit Name :"  class="form-control" required>
                             <input type="text" name="state" readonly  value="<?= $details['state_name'];?>" placeholder="State Unit Name :"  class="form-control" required>

                             <label>Department</label>
                            <input type="hidden" name="department_id"  readonly value="<?= $details['depart_id'];?>" placeholder="Mobile  No :" class="form-control" required>
                            <input type="text" name="department" readonly value="<?= $details['department'];?>" placeholder="Department :" class="form-control" required>

                             <label>Post</label>
                            <input type="hidden" name="post_id" value="<?= $details['post_id'];?>" readonly value="" placeholder="Post :" class="form-control" required>
                            <input type="text" name="post" readonly value="<?= $details['post'];?>" placeholder="Post :" class="form-control" required>
                             <input type="hidden" name="signup_id" readonly value="<?= $details['id'];?>" placeholder="Post :" class="form-control" required>
                             <label>Batch No</label>
                             <input type="text" name="batch_no" readonly value="<?= $details['batch_no'];?>" placeholder="Batch :" class="form-control" required>
                             <label>Join In Branch</label>
                            <input type="text" name="Join_in_branch" readonly value="<?= $details['Join_in_branch'];?>" class="form-control" required>

                            <label>Branch Code</label>
                            <input type="text" name="branch_code" placeholder="Branch Code :" class="form-control" value="<?= $details['branch_code'];?>" readonly required>
                          
                            <label>Mobile No</label>
                            <input type="phone" name="mobile_no" placeholder="Mobile No :" class="form-control" value="<?= $details['mobile_no'];?>" readonly required>
                            <label>Email Id</label>
                            <input type="email" name="email_id" placeholder="Email Id :" class="form-control mb-3" readonly value="<?= $details['email_id'];?>" required>
                            <label>Service DID</label>
                            <input type="text" name="service_did" placeholder="Service Did :" class="form-control mb-3"  value="" required>
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
                                  <label class="text-danger">Maximum Size (200kb)</label>

                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload Signature</label>
                                    <input class="form-control" name="signature" type="file" id="formFile">
                                      <label class="text-danger">Maximum Size (50kb)</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">Name of the Officer, Address & Personal Details as per Aadhar</h6>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="officer_first_name" placeholder="Officer's First Name :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="officer_middle_name" placeholder="Officer's Middle Name  :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="officer_last_name" placeholder="Officer's Last Name  :" class="form-control">
                          </div>

                          <div class="col-md-4 mb-3">
                            <input type="text" name="father_first" placeholder="S/O / D/O First Name :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="father_middle" placeholder="S/O / D/O Middle Name :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="father_last"  placeholder="S/O / D/O Last Name :" class="form-control">
                          </div>
                          <div class="col-md-12 mb-3">
                            <textarea name="query" placeholder="Address :" name="address" class="form-control py-4 mb-3" required style="min-height:65px;"></textarea>
                          </div>
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">Parents Occupation & Annual Income & Other Information</h6>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" placeholder="Mother Occupation" name="mother_occupation" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="m_annual_encome" placeholder="Annual Income" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="father_occupation" placeholder="Father Occupation" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="f_annual_income" placeholder="Annual Income" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <select name="gender" class="form-control" required >
                              <option value="">Sex :</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Other">Other</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-3">
                            <select name="nationality" class="form-control" required >
                              <option value="">Nationality :</option>
                              <option value="Indian">Indian</option>
                              <option value="Migrants">Migrants</option>
                              <option value="Other">Other</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-3">
                            <select name="marriage_status" class="form-control" required >
                              <option value="">Marriage Status :</option>
                              <option value="Married">Married</option>
                              <option value="Single">Single</option>
                              <option value="Other">Other</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="date" name="dob" placeholder="DOB" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="aadhar_no" placeholder="AADHAAR No" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="pan_no" placeholder="PAN NO" class="form-control" required>
                          </div>
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">Information Related To Security Fund, Processing & Training Fee</h6>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="table-responsive">
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <th scope="row">Security Fund</th>
                                    <td><input type="text" name="security_rs_amount" placeholder="RS (AMOUNT)" class="form-control" required></td>
                                    <td><input type="text" name="security_transaction_id" placeholder="Transaction ID" class="form-control" required></td>
                                    <td><input type="date" name="date" placeholder="Date" class="form-control" required></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Processing Fund</th>
                                    <td><input type="text" name="processing_rs_amount" placeholder="RS (AMOUNT)" class="form-control" required></td>
                                    <td><input type="text" name="processing_rs_transaction" placeholder="Transaction ID" class="form-control" required></td>
                                    <td><input type="date" name="processing_rs_date" placeholder="Date" class="form-control" required></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Training Fee</th>
                                    <td><input type="text" name="training_rs" placeholder="RS (AMOUNT)" class="form-control" required></td>
                                    <td><input type="text" name="training_transaction" placeholder="Transaction ID" class="form-control" required></td>
                                    <td><input type="date" name="training_date" placeholder="Date" class="form-control" required></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Total Deposit In Words</th>
                                    <td colspan="3"><input type="text" name="total_deposit" placeholder="Total Deposit In Words" class="form-control" required></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Bank Name</th>
                                    <td colspan="3"><input type="text" name="total_deposit" placeholder="Bank Name" class="form-control" required></td>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <h6 class="tittle">Personal Account Details</h6>
                          </div>
                          <div class="col-md-12">
                            <input type="text" name="bank_name" placeholder="Bank Name" class="form-control mb-3" required>
                            <input type="text" name="branch_name" placeholder="Branch Name" class="form-control mb-3" required>
                            <input type="text" name="type_of_account" placeholder="Type Of Account" class="form-control mb-3" required>
                            <input type="text" name="ifsc_code" placeholder="IFSC Code" class="form-control mb-3" required>
                          </div>
                          <div class="col-md-12">
                            <div class="row justify-content-center">
                              <div class="col-md-11 mb-2">
                                   <div class="form-check">
                                      <input class="form-check-input mb-3" name="confirm_1" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 15px;">
                                      THE DETAILS FURNISHED BY ME ARE CORRECT. APPLICATION CAN BE CANCELED IF WORTH INFORNATION OR DOCUMENTS ARE NOT MATCHED.
                                    </label>
                                  </div>
                              </div>
                              <div class="col-md-12 mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" name="confirm_2" type="checkbox" value="1" id="defaultCheck1">
                                  <label class="form-check-label"  for="defaultCheck1">
                                    I HAVE NOT BEEN DECLARED OF UNSOUND MIND, I AM IN PERFECT HEALTH AND CAN DISCHARGE MY RESPONSIBILITIES.
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12 mb-2">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="confirm_3" value="1" id="defaultCheck1">
                                  <label class="form-check-label"  for="defaultCheck1">
                                    I HAVE NEVER BEEN PUNISHED OR CONVICTED BY THE OUR NO MATTER IS PENDIND IN THE COURT. 
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12 mb-2">
                                <div class="form-check">
                                  <input class="form-check-input" name="confirm_4" type="checkbox" value="1" id="defaultCheck1">
                                  <label class="form-check-label" for="defaultCheck1">
                                    I AM NOT PRESENTLY CONTRIBUTING TO ANY GOVERNMENT OR NON-GOVERNMENT ORGANIZATION / IF DURING MY SERVICE IT IS FOUND THAT I AM ALSO CONTRIBUTING TO ANY OTHERS INSTITUTION ADMINISTRATIVE ACTION WILL BE TAKEN AGAINST ME. IT IS POSSIBLE.   
                                  </label>
                                </div>
                              </div>
                            </div> 
                          </div>
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">My Documents Upload</h6>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="table-responsive">
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <th scope="row">AADHAR Upload</th>
                                    <td><input class="form-control" type="file" name="aadhar" id="formFile"><label class="text-danger">Maximum Size (50kb)</label></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">PAN CARD Upload</th>
                                    <td><input class="form-control" name="pan" type="file" id="formFile"><label class="text-danger">Maximum Size (50kb)</label></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Bank Account Upload</th>
                                    <td><input class="form-control" name="bank_account" type="file" id="formFile"><label class="text-danger">Maximum Size (50kb)</label></td>
                                  </tr>
                                  <!-- <tr>
                                    <th scope="row">Signature Upload</th>
                                    <td colspan="3"><input class="form-control" name="signature_upload" type="file" id="formFile"></td>
                                  </tr> -->
                                  <!-- <tr>
                                    <th scope="row">Photo Upload</th>
                                    <td colspan="3">
                                      <input class="form-control" name="photo_upload" type="file" id="formFile">
                                    </td>
                                  </tr> -->


                                  <tr>
                                    <th scope="row">Security E-Receipt</th>
                                    <td colspan="3">
                                      <input class="form-control" name="security_e_receipt" type="file" id="formFile"><label class="text-danger">Maximum Size (50kb)</label>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Processing - Receipt</th>
                                    <td colspan="3">
                                      <input class="form-control" name="processing_receipt" type="file" id="formFile"><label class="text-danger">Maximum Size (50kb)</label>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Training Receipt</th>
                                    <td colspan="3">
                                      <input class="form-control" name="training_receipt" type="file" id="formFile"><label class="text-danger">Maximum Size (50kb)</label>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-7">
                              <button type="submit" class="mt-4 btn btn-lg" style="background:#233799;color:white">Register</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>