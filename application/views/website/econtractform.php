 <section class="officialservices">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h1 class="tittle">E-Contract Form</h1></center>
                    <!-- <h4 class="text-success mb-3">Student's Details</h4> -->
                    <form action="#"  method="post" style="border:1px solid black;padding: 10px;margin-top: 20px;background: white;">
                        <div class="row">
                          <div class="col-md-8">
                            <input type="text" name="Batch Number" placeholder="Batch Number :" class="form-control mb-3" required>
                            <input type="text" name="Joining In Branch" placeholder="Joining In Branch :" class="form-control mb-3" required>
                            <input type="text" name="student-name" placeholder="Branch Code :" class="form-control mb-3" required>
                            <input type="text" name="student-name" placeholder="Department :" class="form-control mb-3" required>
                            <input type="text" name="student-name" placeholder="Name Of The Post :" class="form-control mb-3" required>
                            <input type="text" name="student-name" placeholder="Mobile Number :" class="form-control mb-3" required>
                            <input type="text" name="student-name" placeholder="Email Id :" class="form-control mb-3" required>
                            <input type="text" name="student-name" placeholder="Service DID / Contract No :" class="form-control mb-3" required>
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
                              <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload Signature</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">Name of the Officer, Address & Personal Details as per Aadhar</h6>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="Batch Number" placeholder="Officer's First Name :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="Batch Number" placeholder="Officer's Middle Name  :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="Batch Number" placeholder="Officer's Last Name  :" class="form-control" required>
                          </div>

                          <div class="col-md-4 mb-3">
                            <input type="text" name="" placeholder="S/O / D/O First Name :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="" placeholder="S/O / D/O Middle Name :" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="" placeholder="S/O / D/O Last Name :" class="form-control" required>
                          </div>
                          <div class="col-md-12 mb-3">
                            <textarea name="query" placeholder="Address :" class="form-control py-4 mb-3" required style="min-height:65px;"></textarea>
                          </div>
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">Parents Occupation & Annual Income & Other Information</h6>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="" placeholder="Mother Occupation" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="" placeholder="Annual Income" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="" placeholder="Father Occupation" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="" placeholder="Annual Income" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <select name="category" class="form-control" required >
                              <option value="">Sex :</option>
                              <option value="ST">Male</option>
                              <option value="SC">Female</option>
                              <option value="OBC">Other</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-3">
                            <select name="category" class="form-control" required >
                              <option value="">Nationality :</option>
                              <option value="ST">Indian</option>
                              <option value="SC">Migrants</option>
                              <option value="OBC">Other</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-3">
                            <select name="category" class="form-control" required >
                              <option value="">Marriage Status :</option>
                              <option value="ST">Married</option>
                              <option value="SC">Single</option>
                              <option value="OBC">Other</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="" placeholder="DOB" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="" placeholder="AADHAAR No" class="form-control" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <input type="text" name="" placeholder="PAN NO" class="form-control" required>
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
                                    <td><input type="text" name="" placeholder="RS (AMOUNT)" class="form-control" required></td>
                                    <td><input type="text" name="" placeholder="Transaction ID" class="form-control" required></td>
                                    <td><input type="date" name="" placeholder="Date" class="form-control" required></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Processing Fund</th>
                                    <td><input type="text" name="" placeholder="RS (AMOUNT)" class="form-control" required></td>
                                    <td><input type="text" name="" placeholder="Transaction ID" class="form-control" required></td>
                                    <td><input type="date" name="" placeholder="Date" class="form-control" required></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Training Fee</th>
                                    <td><input type="text" name="" placeholder="RS (AMOUNT)" class="form-control" required></td>
                                    <td><input type="text" name="" placeholder="Transaction ID" class="form-control" required></td>
                                    <td><input type="date" name="" placeholder="Date" class="form-control" required></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Total Deposit In Words</th>
                                    <td colspan="3"><input type="date" name="" placeholder="Date" class="form-control" required></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <h6 class="tittle">Personal Account Details</h6>
                          </div>
                          <div class="col-md-12">
                            <input type="text" name="" placeholder="Bank Name" class="form-control mb-3" required>
                            <input type="text" name="" placeholder="Branch Name" class="form-control mb-3" required>
                            <input type="text" name="" placeholder="Type Of Account" class="form-control mb-3" required>
                            <input type="date" name="" placeholder="IFSC Code" class="form-control mb-3" required>
                          </div>
                          <div class="col-md-12">
                            <div class="row justify-content-center">
                              <div class="col-md-11 mb-2">
                                   <div class="form-check">
                                      <input class="form-check-input mb-3" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 15px;">
                                      THE DETAILS FURNISHED BY ME ARE CORRECT. APPLICATION CAN BE CANCELED IF WORTH INFORNATION OR DOCUMENTS ARE NOT MATCHED.
                                    </label>
                                  </div>
                              </div>
                              <div class="col-md-12 mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                  <label class="form-check-label" for="defaultCheck1">
                                    I HAVE NOT BEEN DECLARED OF UNSOUND MIND, I AM IN PERFECT HEALTH AND CAN DISCHARGE MY RESPONSIBILITIES.
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12 mb-2">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                  <label class="form-check-label" for="defaultCheck1">
                                    I HAVE NEVER BEEN PUNISHED OR CONVICTED BY THE OUR NO MATTER IS PENDIND IN THE COURT. 
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12 mb-2">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
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
                                    <td><input class="form-control" type="file" id="formFile"></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">PAN CARD Upload</th>
                                    <td><input class="form-control" type="file" id="formFile"></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Bank Account Upload</th>
                                    <td><input class="form-control" type="file" id="formFile"></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Signature Upload</th>
                                    <td colspan="3"><input class="form-control" type="file" id="formFile"></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Photo Upload</th>
                                    <td colspan="3">
                                      <input class="form-control" type="file" id="formFile">
                                    </td>
                                  </tr>


                                  <tr>
                                    <th scope="row">Security E-Receipt</th>
                                    <td colspan="3">
                                      <input class="form-control" type="file" id="formFile">
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Processing - Receipt</th>
                                    <td colspan="3">
                                      <input class="form-control" type="file" id="formFile">
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Training Receipt</th>
                                    <td colspan="3">
                                      <input class="form-control" type="file" id="formFile">
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