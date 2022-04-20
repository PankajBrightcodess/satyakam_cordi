<section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <form method="POST" action="<?= base_url('website/daily_report')?>">
            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="table-responsive">
                 <table class="table table-hover" style="text-align: center;">
                    <thead>
                      <tr>
                        <th scope="col">Date : &nbsp;&nbsp;<?php echo date('d-m-Y');?></th>
                        <th scope="col" rowspan="2">Reporting Time : <?php echo date('h:i A');?></th>
                        <th scope="col" rowspan="2"><h5 class="tittle">Daily Activity / Progress Report</h5></th>
                        <th scope="col">State Unit Code : <?php echo $state_code['code'];?></th>
                      </tr> 
                      <tr>
                        <th scope="col">Day : &nbsp;&nbsp;<?php echo date('l');?></th>
                       
                        <th scope="col">State : Jharkhand</th>
                      </tr>  
                    </thead>
                  </table> 
                </div>
             </div>
             <div class="col-md-12 mb-2">
                <div class="table-responsive">
                 <table class="table table-hover" style="text-align: center;">
                    <thead>
                      <tr>
                        <th scope="col">Branch Unit : <?php echo $state_code['Join_in_branch'];?>&nbsp;&nbsp;</th>
                        <th scope="col">Code No : <?php echo $state_code['branch_code'];?></th>
                      </tr> 
                      <tr>
                        <th scope="col">Unit Incharge : &nbsp;&nbsp;</th>
                        <th scope="col">Mobile No : <?php echo $state_code['mobile_no'];?></th>
                      </tr> 
                      <tr>
                        <th scope="col" colspan="2"><center>  OFFICE ADDRESS</center></th>
                      </tr> 
                      <tr>
                        <th scope="col">Email : <?php echo $state_code['email_id'];?>&nbsp;&nbsp;</th>
                        <th scope="col">HelpLine No. : </th>
                      </tr> 
                       <tr>
                        <th scope="col" colspan="2"><select name="type_of_revenue" class="form-control">
                          <option>TYPE OF  REVENUE</option>
                        </select></th>
                      </tr>
                    </thead>
                  </table> 
                </div>
             </div>
              <div class="col-md-12 mb-2">
                <button class="accordion" type="button"><label><strong>Revenue Received From Candidate Application</strong></label></button>
                <div class="panel">
                  <table class="table-responsive table">
                    <thead>
                      <tr>
                        <th>Registration Number</th>
                        <th>Applicant Name</th>
                        <th>Father/Husband Name & Address</th>
                        <th>D.O.B.</th>
                        <th>Post Name</th>
                        <th>Fee</th>
                        <th>Date Of Payment</th>
                        <th colspan="2">Banking ID No.</th> 
                      </tr>
                      <tr>
                        <th colspan="9"><button class="btn-sm btn-success btn add_form">+</button></th>
                        
                      </tr>
                    </thead>
                    <tbody class="registration">
                      <tr>
                        <td><input type="text" name="registration_no[]" id="registration_no" class="form-control"></td>
                        <td><input type="text" name="applicant_name[]" id="applicant_name" class="form-control"></td>
                        <td><input type="text" name="father_husband[]" id="father_husband" class="form-control"></td>
                        <td><input type="date" name="dob[]" id="dob" class="form-control"></td>
                        <td><input type="text" name="post_name[]" id="post_name" class="form-control"></td>
                        <td><input type="text" name="fee[]" id="fee" class="form-control"></td>
                        <td><input type="date" name="date_payment[]" id="date_payment" class="form-control"></td>
                        <td><input type="text" name="banking_id1[]" id="banking_id" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="mb-2">
                  <input type="text" name="total_revenue" class="form-control" placeholder="Total Revenue">
                </div>
                </div>

                <button class="accordion" type="button"><label><strong>Security Fund Deposit Revenue</strong></label></button>
                <div class="panel">
                   <table class="table-responsive table">
                    <thead>
                      <tr>
                        <th>Registration Number</th>
                        <th>Name</th>
                        <th>Name Of Post</th>
                        <th>Security Fund</th>
                        <th>Training Fee</th>
                        <th>Processing Fee</th>
                        <th>Other Fee.</th>
                        <th>Total Banking</th>
                        <th colspan="2">Banking ID No.</th> 
                      </tr>
                      <tr>
                        <th colspan="10"><button class="btn-sm btn-success btn add_form1">+</button></th>
                        
                      </tr>
                    </thead>
                    <tbody class="registration1">
                      <tr>
                        <td><input type="text" name="reg_no[]" id="reg_no" class="form-control"></td>
                        <td><input type="text" name="name[]" id="name" class="form-control"></td>
                        <td><input type="text" name="name_of_post[]" id="name_of_post" class="form-control"></td>
                        <td><input type="text" name="security_fund[]" id="security_fund" class="form-control"></td>
                        <td><input type="text" name="training_fee[]" id="training_fee" class="form-control"></td>
                        <td><input type="text" name="processing_fee[]" id="processing_fee" class="form-control"></td>
                        <td><input type="text" name="other_fee1[]" id="other_fee" class="form-control"></td>
                        <td><input type="text" name="total_banking[]" id="total_banking" class="form-control"></td>
                        <td><input type="text" name="banking_id2[]" id="banking_id" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                   <div class="mb-2">
                  <input type="text" name="total_revenue_1" class="form-control" placeholder="Total Revenue">
                </div>
               
                </div>

                <button class="accordion" type="button"><label><strong>Group Composition And Weekly Savings/ EMI Revenue</strong></label></button>

                <div class="panel">
                  <table class="table-responsive table">
                    <thead>
                      <tr>
                        <th>Group No</th>
                        <th>Group Name</th>
                        <th>Group Address</th>
                        <th>Meeting No.</th>
                        <th>Passbook Issued Fee</th>
                        <th>Weekly Saving Deposit</th>
                        <th>EMI Deposit</th>
                        <th>Bounsing Fee</th>
                        <th>Late Fine Fee</th>
                        <th colspan="2">Banking Id No./date/Time</th>
                      </tr>
                      <tr>
                        <th colspan="11"><button class="btn-sm btn-success btn add_form2">+</button></th>
                        
                      </tr>
                    </thead>
                    <tbody class="registration2">
                      <tr>
                        <td><input type="text" name="group_no_a[]" id="group_no" class="form-control"></td>
                        <td><input type="text" name="group_name_a[]" id="group_name" class="form-control"></td>
                        <td><input type="text" name="group_address[]" id="group_address[]" class="form-control"></td>
                        <td><select class="form-control" name="meeting_no[]"><option>---SELECT---</option><option value="1 week">1 Week</option><option value="2 week">2 Week</option><option value="3 week">3 Week</option><option value="4 week">4 Week</option><option value="5 week">5 Week</option></select></td>
                        <td><input type="text" name="passbook_issue_fee[]" id="passbook_issue_fee" class="form-control"></td>
                        <td><input type="text" name="weekly_saving_deposit[]" id="weekly_saving_deposit" class="form-control"></td>
                        <td><input type="text" name="emi_deposit[]" id="emi_deposit" class="form-control"></td>
                        <td><input type="text" name="bouncing_fee[]" id="bouncing_fee" class="form-control"></td>
                        <td><input type="text" name="late_fine_fee[]" id="late_fine_fee" class="form-control"></td>
                       
                        <td><input type="text" name="banking_id3[]" id="banking_id" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                   <div class="mb-2">
                    <input type="text" name="total_revenue_2 " class="form-control" placeholder="Total Revenue">
                  </div>
               
                </div>
                <button class="accordion" type="button"><label><strong>Club Member Revenue</strong></label></button>
                  
                <div class="panel">
                  <table class="table-responsive table">
                    <thead>
                      <tr>
                        <th>Group No</th>
                        <th>Group Name</th>
                        <th>Club Id No.</th>
                        <th>Club Member Name</th>
                        <th>Sponsor ID No.</th>
                        <th>Sponsor Level</th>
                        <th>Joining Fee</th>
                        <th colspan="2">Banking ID No./Date</th>
                      </tr>
                      <tr>
                        <th colspan="9"><button class="btn-sm btn-success btn add_form3">+</button></th>
                      </tr>

                    </thead>
                    <tbody class="registration3">
                      <tr>
                        <td><input type="text" name="group_no_b[]" id="group_no" class="form-control"></td>
                        <td><input type="text" name="group_name_b[]" id="group_name" class="form-control"></td>
                        <td><input type="text" name="club_id_no[]" id="club_id_no" class="form-control"></td>
                        <td><input type="text" name="club_member_name[]" id="club_member_name" class="form-control"></td>
                        <td><input type="text" name="sponsor_no[]" id="sponsor_no" class="form-control"></td>
                        <td><input type="text" name="sponsor_level[]" id="sponsor_level" class="form-control"></td>
                        <td><input type="text" name="joining_fee[]" id="joining_fee" class="form-control"></td>
                        <td><input type="text" name="banking_id4[]" id="banking_id" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                   <div class="mb-2">
                    <input type="text" name="total_revenue_3" class="form-control" placeholder="Total Revenue">
                  </div>
                   <div class="mb-2">
                    <input type="text" name="grand_total_revamue" class="form-control" placeholder="Grand Total Revenue(A+B+C+D)">
                  </div>
                </div>

                <button class="accordion" type="button"><label><strong>Travelling Allowance Report</strong></label></button>
                 
                <div class="panel">
                   <table class="table-responsive table">
                    <thead>
                      <tr>
                        <th>Inspection Area Name.</th>
                        <th>Objective</th>
                        <th>Arrival Time</th>
                        <th>Arrival K.M.</th>
                        <th>Port Of Departure.</th>
                        <th>Departure K.M.</th>
                        <th>Total K.M.</th>
                        <th colspan="2">Result</th>
                      </tr>
                      <tr>
                        <th colspan="9"><button class="btn-sm btn-success btn add_form4">+</button></th>
                        
                      </tr>
                    </thead>
                    <tbody class="registration4">
                      <tr>
                        <td><input type="text" name="inspection_area[]" id="inspection_area" class="form-control"></td>
                        <td><input type="text" name="objective[]" id="objective" class="form-control"></td>
                        <td><input type="text" name="arrival_time[]" id="arrival_time" class="form-control"></td>
                        <td><input type="text" name="arrival_km[]" id="arrival_km" class="form-control"></td>
                        <td><select class="form-control" name="port_of_department[]"><option>---SELECT---</option><option value="Home">Home</option><option value="Office">Office</option><option value="new_inspection_area">New Inspection Area</option><option value="other">Other</option></select></td>
                        <td><input type="text" name="departure_km[]" id="departure_km" class="form-control"></td>
                        <td><input type="text" name="other_fee2[]" id="other_fee" class="form-control"></td>
                        <td><input type="text" name="result[]" id="result" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                 
              </div>
              <div class="col-md-12 mb-5">
                <div class="row">
                <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="mandatory1" name="mandatory1" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>IT IS MANDATORY TO MENTION ALL THE DETAILS RELATED TO REVENUE IN THE DAILY ACTIVITIES AND PROGRESS REPORT.</label></div>
                 <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="mandatory2" name="mandatory2" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>IT IS MANDATORY TO MATCH THE ENTERED BANKING ID RELATED TO REVENUE.</label></div>
                <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="mandatory3" name="mandatory3" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>THE DETAILS REGARDING TRAVELING ALLOWANCE IS VALID ONLY FOR THE CONTRIBUTION AREA.</label></div>
              </div>
              </div>
              <div class="col-md-6"><a href="" class="btn btn-sm btn-success form-control">Progress</a></div>
              <div class="col-md-6 mb-5"><a href="" class="btn btn-sm btn-warning form-control">Edit</a></div>
              <div class="col-md-6">Report Confirmation Number :</div>
              <div class="col-md-6 mb-5"><input type="text" name="report_confirm" placeholder="Please Provide Confirmation Number" class="form-control"></div>
              <div class="col-md-12 mb-5 text-center"><input type="submit"  class="btn btn-lg btn-secondary" value="SUBMIT"></div>

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