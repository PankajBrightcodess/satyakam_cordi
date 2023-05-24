<section class="officialservices">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="tittle">APPLICATION</h3>
                    <h3>(<?php echo  date('Y').'-'.date('y',strtotime('+1 year'))?>)</h3>
                    <!-- <h4 class="text-success mb-3">Student's Details</h4> -->
                    <form action="<?= base_url('website/vacencyform_submit');?>"  method="POST" enctype="multipart/form-data" style="border:1px solid black;padding: 10px;margin-top: 20px;background: white;">
                        <div class="row">
                          <div class="col-md-8">
                            <input type="date" name="app_date" readonly value="<?php echo $details['application_date'];?>" class="form-control mb-3" required>
                            <input type="text" name="state_unit_name" readonly value="<?php echo $details['state'];?>" placeholder="Joining In Branch :" class="form-control mb-3" required>
                            <input type="text" name="division_unit_name" readonly value="<?php echo $details['division'];?>" class="form-control mb-3" required>
                            <input type="text" name="candidate_name" readonly value="<?php echo $details['applicant_name'];?>" placeholder="Candidate Name :" class="form-control mb-3" required>
                             <input type="text" name="dob" readonly value="<?php echo $details['dob'];?>" class="form-control mb-3" required>
                            <input type="text" name="mobile_no" readonly value="<?php echo $details['mobile_no'];?>" class="form-control mb-3" required>
                            <input type="email" name="email" readonly value="<?php echo $details['email'];?>" placeholder="Email Id :" class="form-control mb-3" required>
                           <input type="text" name="depart_id" readonly value="<?php echo $details['department'];?>" placeholder="Department :" class="form-control mb-3" required>
                           <input type="text" name="desicination" readonly value="<?php echo $details['post_name'];?>" placeholder="Desicination :" class="form-control mb-3" required>
                           <input type="hidden" name="signup_id" readonly value="<?php echo $details['id'];?>" placeholder="Desicination :" class="form-control mb-3" required>
                           <input type="hidden" name="amount" readonly value="<?php echo $details['amount'];?>" placeholder="Desicination :" class="form-control mb-3" required>
                          </div>
                          <div class="col-md-4">
                            <div class="row">
                              <div class="col-md-12 mb-3">
                                <div class="form-group">  
                                  <div style="width:151px; height:181px;"  id='imgInp'>
                                    <img src="#" alt="" id="previewHolder"  height="180" width="150" >
                                  </div>
                                  <label>Upload Picture</label>
                                  <input type="file" name="photo" id="filePhoto" value=""  onchange="readURL(this,'#blah');">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload Signature</label>
                                    <input class="form-control" name="signature" type="file" id="formFile">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">Parents Occupation & Annual Income & Other Information</h6>
                          </div>
                          
                          <div class="col-md-6 mb-3">
                            <input type="text" name="father_name" placeholder="father's Name  :" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="father_occupation" placeholder="Father's Occupation :" class="form-control" required>
                          </div>

                          <div class="col-md-6 mb-3">
                            <input type="text" name="mother_name" placeholder="Mother Name :" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="mother_occupqation" placeholder="Mother Occupation :" class="form-control" required>
                          </div>
                          
                          <div class="col-md-12 mb-3">
                             <input type="text" name="annual_encome" placeholder="Annual Encome :" class="form-control" required>
                           
                          </div>
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">Correspondent Address & Permanent Address & Other Information</h6>
                          </div>
                           <div class="col-md-12 mb-3">
                             <select class="form-control" name="gender">
                               <option value="">Sex :</option>
                               <option value="male">Male</option>
                               <option value="female">Female</option>
                               <option value="other">Other</option>
                             </select>
                          </div>
                          <div class="col-md-6 mb-3">
                             <textarea  placeholder="Correspondent Address :" name="correspondent_address" class="form-control py-4 mb-3" required style="min-height:65px;"></textarea>
                          </div>
                          <div class="col-md-6 mb-3">
                            <textarea  placeholder="Permanent Address :" name="permanent_address" class="form-control py-4 mb-3" required style="min-height:65px;"></textarea>
                          </div>
                          <div class="col-md-12 mb-3">
                             <select class="form-control" name="place" required>
                               <option value="">Form :</option>
                               <option value="rural">Rural</option>
                               <option value="urban">Urban</option>
                               <option value="other">Other</option>
                             </select>
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" name="nationality" placeholder="Nationality" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <select class="form-control" name="category">
                              <option value="">Category :</option>
                              <option value="gen">GEN </option>
                              <option value="obc">OBC </option>
                              <option value="sc">SC </option>
                              <option value="st">ST </option>
                              <option value="other">Other </option>
                            </select>
                           <!--  <input type="text" name="category" placeholder="Category" class="form-control" required> -->
                          </div>
                           <div class="col-md-6 mb-3">
                              <input type="text" name="identification_marks" placeholder="Identification Marks" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                              <input type="text" name="aadharno" placeholder="Aadhar Number" class="form-control" required>
                          </div>
                          <div class="col-md-6 mb-3">
                              <input type="text" name="panno" placeholder="PAN Number" class="form-control">
                          </div>
                          <div class="col-md-6 mb-3">
                            <select class="form-control" name="marital_status" required> 
                                <option value="" >Marital Status :</option>
                                <option value="Married" >Married</option>
                                <option value="Unmarried" >Unmarried</option>
                            </select>
                          </div>
                         
                          <div class="col-md-12 mb-3">
                            <h6 class="tittle">If You have served in any institution in the past, give details</h6>
                          </div>
                           <div class="col-md-12 mb-3">
                             <select class="form-control" id="ins_details" name="ins_details">
                                 <option value="">Select :</option>
                                 <option value="1">Yes</option>
                                 <option value="0">No</option>
                             </select>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                     <th scope="row" rowspan="2">Academic Qualification</th>
                                     <th scope="row">Exam Passed</th>
                                     <th scope="row">Name Of Board/University</th>
                                     <th scope="row">Year Of Passing</th>
                                     <th scope="row">Total Marks</th>
                                     <th scope="row">Mark Obtained</th>
                                     <th scope="row">Division</th>
                                     <th scope="row">% Of marks</th>
                                </thead>
                                <tbody>
                                  <tr>
                                   <th scope="row" rowspan="2"></th>
                                  <td><input type="text" id="exam_passed" name="exam_passed" readonly placeholder="Exam Passed" class="form-control" required></td>
                                   <td><input type="text" id="board_university" name="board_university" readonly placeholder="Name Of Board/University" class="form-control" readonly required></td>
                                    <td><input type="date" id="pasing_year" name="pasing_year" readonly placeholder="Year Of Passing" class="form-control" required></td>
                                     <td><input type="text" id="total_marks" name="total_marks" readonly placeholder="Total Marks" class="form-control" required></td>
                                    <td><input type="text" id="mark_obtained" name="mark_obtained" readonly placeholder="Mark Obtained" class="form-control" required></td>
                                     <td><input type="text" name="division" id="division" readonly placeholder="Division" class="form-control" required></td>
                                      <td><input type="text" name="persentage_marks" id="persentage_marks" readonly placeholder="% Of marks" class="form-control" required></td>
                                  </tr>
                                 

                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <h6 class="tittle">Upload Documents</h6>
                          </div>
                          <div class="col-md-12">
                            <table class="table">
                                <thead>
                                     
                                     <th scope="row">Marksheet Upload</th>
                                     <th scope="row">Other Qualification Certificate uploads</th>
                                     <th scope="row" colspan="1">Experience certificate Uploads</th>
                                     <!-- <th scope="row">Aadhar Upload</th> -->
                                   
                                </thead>
                                <tbody>
                                  <tr>
                                  <td ><input type="file" name="marksheet" placeholder="Exam Passed" class="form-control" required></td>
                                   <td><input type="file" name="other_quali" placeholder="Name Of Board/University" class="form-control"></td>
                                    <td colspan="1"><input type="file" name="exprience" placeholder="Year Of Passing" class="form-control"></td>
                                     
                                  </tr>
                                  <tr>
                                  <td colspan="2">
                                    <label>Aadhar Front</label><input type="file" name="aadhar" placeholder="Total Marks" class="form-control" required>
                                  </td ><td colspan="2"><label>Aadhar Back</label><input type="file" name="thumb" placeholder="Total Marks" class="form-control" required></td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                          <div class="col-md-12 text-center text-info"><h5>DECLARATION</h5></div>
                          <div class="col-md-12">
                            <div class="row justify-content-center">
                              <div class="col-md-11 mb-2">
                                   <div class="form-check">
                                      <input class="form-check-input mb-3" name="confirm_1" type="checkbox" value="1" id="defaultCheck1">
                                      <label class="form-check-label" for="defaultCheck1" style="font-size: 15px;">
                                      I DECLARE THAT THE PARTICULARS ENTERED BY ME IN THE APPLICATION ARE TRUE AND CORRECT. IF ANY DEFICIENCY OR ERROR, MIS MATCH IS FOUND. THE APPLICATION IS REJECTED SHALL BE RESPONSIBLE FOR THE SAME.
                                      </label>
                                  </div>
                              </div>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    var url_string = window.location.href;
    var url = new URL(url_string);
    var c = url.searchParams.get("status");
    if(c==1){
       swal("Good job!", "You Report Submit successfully!", "success");
     }else if(c==0){
       swal("Opps!", "Something Error !", "error");
     }
</script>