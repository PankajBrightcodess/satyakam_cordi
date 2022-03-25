<section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="table-responsive">
                 <table class="table table-hover" style="text-align: center;">
                    <thead>
                      <tr>
                        <th scope="col">Date : &nbsp;&nbsp;<?php echo date('d-m-Y');?></th>
                        <th scope="col" rowspan="2">Reporting Time : 10:00 A.M.</th>
                        <th scope="col" rowspan="2"><h5 class="tittle">Daily Activity / Progress Report</h5></th>
                        <th scope="col">State Unit Code : 00365</th>
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
                        <th scope="col">Branch Unit : &nbsp;&nbsp;</th>
                        <th scope="col">Code No : </th>
                      </tr> 
                      <tr>
                        <th scope="col">Unit Incharge : &nbsp;&nbsp;</th>
                        <th scope="col">Mobile No : </th>
                      </tr> 
                      <tr>
                        <th scope="col" colspan="2"><center>  OFFICE ADDRESS</center></th>
                      </tr> 
                      <tr>
                        <th scope="col">Email : &nbsp;&nbsp;</th>
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
                <button class="accordion"><label><strong>Revenue Received From Candidate Application</strong></label></button>
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
                        <td><input type="text" name="registration_no" id="registration_no" class="form-control"></td>
                        <td><input type="text" name="applicant_name" id="applicant_name" class="form-control"></td>
                        <td><input type="text" name="father_husband" id="father_husband" class="form-control"></td>
                        <td><input type="text" name="dob" id="dob" class="form-control"></td>
                        <td><input type="text" name="post_name" id="post_name" class="form-control"></td>
                        <td><input type="text" name="fee" id="fee" class="form-control"></td>
                        <td><input type="date" name="date_payment" id="date_payment" class="form-control"></td>
                        <td><input type="text" name="banking_id" id="banking_id" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <button class="accordion"><label><strong>Security Fund Deposit Revenue</strong></label></button>
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
                        <th>Banking ID No./Date</th>
                        <th>Other Fee.</th>
                        <th colspan="3">Banking ID No.</th> 
                      </tr>
                      <tr>
                        <th colspan="13"><button class="btn-sm btn-success btn add_form1">+</button></th>
                        
                      </tr>
                    </thead>
                    <tbody class="registration1">
                      <tr>
                        <td><input type="text" name="reg_no" id="reg_no" class="form-control"></td>
                        <td><input type="text" name="name" id="name" class="form-control"></td>
                        <td><input type="text" name="name_of_post" id="name_of_post" class="form-control"></td>
                        <td><input type="text" name="security_fund" id="security_fund" class="form-control"></td>
                        <td><input type="text" name="training_fee" id="training_fee" class="form-control"></td>
                        <td><input type="text" name="processing_fee" id="processing_fee" class="form-control"></td>
                        <td><input type="text" name="other_fee" id="other_fee" class="form-control"></td>
                        <td><input type="text" name="total_banking" id="total_banking" class="form-control"></td>
                        <td><input type="text" name="banking_id" id="banking_id" class="form-control"></td>
                        <td><input type="text" name="other_fee" id="other_fee" class="form-control"></td>
                        <td><input type="text" name="banking_id" id="banking_id" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                 <div class="row">
                    
                   
                     
                   <!--  <div class="col-md-12 col-12 mb-3">
                      <label>Total Revenue</label>
                      <input type="text" name="total_revenue" placeholder="Enter Total Revenue" class="form-control">
                    </div> -->


                  </div>
                </div>

                <button class="accordion"><label><strong>Group Composition And Weekly Savings/ EMI Revenue</strong></label></button>

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
                        <td><input type="text" name="group_no" id="group_no" class="form-control"></td>
                        <td><input type="text" name="group_name" id="group_name" class="form-control"></td>
                        <td><input type="text" name="group_address" id="group_address" class="form-control"></td>
                        <td><select class="form-control" name="meeting_no"><option>---SELECT---</option><option value="1 week">1 Week</option><option value="2 week">2 Week</option><option value="3 week">3 Week</option><option value="4 week">4 Week</option><option value="5 week">5 Week</option></select></td>
                        <td><input type="text" name="passbook_issue_fee" id="passbook_issue_fee" class="form-control"></td>
                        <td><input type="text" name="weekly_saving_deposit" id="weekly_saving_deposit" class="form-control"></td>
                        <td><input type="text" name="emi_deposit" id="emi_deposit" class="form-control"></td>
                        <td><input type="text" name="bouncing_fee" id="bouncing_fee" class="form-control"></td>
                        <td><input type="text" name="late_fine_fee" id="late_fine_fee" class="form-control"></td>
                       
                        <td><input type="text" name="banking_id" id="banking_id" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
               
                </div>
                <button class="accordion"><label><strong>Club Member Revenue</strong></label></button>
                  
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
                        <td><input type="text" name="group_no" id="group_no" class="form-control"></td>
                        <td><input type="text" name="group_name" id="group_name" class="form-control"></td>
                        <td><input type="text" name="club_id_no" id="club_id_no" class="form-control"></td>
                        <td><input type="text" name="club_member_name" id="club_member_name" class="form-control"></td>
                        <td><input type="text" name="sponsor_no" id="sponsor_no" class="form-control"></td>
                        <td><input type="text" name="sponsor_level" id="sponsor_level" class="form-control"></td>
                        <td><input type="text" name="joining_fee" id="joining_fee" class="form-control"></td>
                        <td><input type="text" name="banking_id" id="banking_id" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- <div class="row">
                    <div class="col-md-6 col-6 mb-3">
                      <label> Group No.</label>
                      <input type="text" name="group_no" class="form-control" placeholder="Enter Group No.">
                    </div>
                    <div class="col-md-6 col-6 mb-3">
                      <label>Group Name</label>
                      <input type="text" name="group_name" class="form-control" placeholder="Enter Group Name">
                    </div>
                      <div class="col-md-6 col-6 mb-3">
                      <label>Club Id No.</label>
                      <input type="text" name="club_id_no" class="form-control" placeholder="Enter Club Id No.">
                    </div>
                     <div class="col-md-6 col-6 mb-3">
                      <label>Club Member Name</label>
                      <input type="text" name="club_member_name" placeholder="Enter Club Member Name" class="form-control">
                    </div>
                  
                    <div class="col-md-6 col-6 mb-3">
                      <label>Sponsor ID No.</label>
                      <input type="text" name="sponsor_no" class="form-control" placeholder="Enter Sponsor ID No.">
                    </div>
                    <div class="col-md-6 col-6 mb-3">
                      <label>Sponsor Level</label>
                      <input type="text" name="sponsor_level" placeholder="Enter Sponsor Level" class="form-control">
                    </div>
                     <div class="col-md-6 col-6 mb-3">
                      <label>Joining Fee</label>
                      <input type="text" name="other_fee" placeholder="Enter Joining Fee" class="form-control">
                    </div>
                    <div class="col-md-6 col-6 mb-3">
                      <label>Banking ID No./Date</label>
                      <input type="text" name="banking_id" placeholder=" Enter Banking ID No./Date" class="form-control">
                    </div>
                    <div class="col-md-12 col-12 mb-3">
                      <label>Total Revenue</label>
                      <input type="text" name="total_revenue" placeholder="Enter Total Revenue" class="form-control">
                    </div>
                    <div class="col-md-12 col-12 mb-5">
                      <h5> Ground Total Revenue :</h5><label> </label>
                    </div>


                  </div> -->
                </div>

                <button class="accordion"><label><strong>Travelling Allowance Report</strong></label></button>
                 
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
                        <td><input type="text" name="inspection_area" id="inspection_area" class="form-control"></td>
                        <td><input type="text" name="objective" id="objective" class="form-control"></td>
                        <td><input type="text" name="arrival_time" id="arrival_time" class="form-control"></td>
                        <td><input type="text" name="arrival_km" id="arrival_km" class="form-control"></td>
                        <td><select class="form-control" name="port_of_department"><option>---SELECT---</option><option value="Home">Home</option><option value="Office">Office</option><option value="new_inspection_area">New Inspection Area</option><option value="other">Other</option></select></td>
                        <td><input type="text" name="departure_km" id="departure_km" class="form-control"></td>
                        <td><input type="text" name="other_fee" id="other_fee" class="form-control"></td>
                        <td><input type="text" name="result" id="result" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- <div class="row">
                    <div class="col-md-6 col-6 mb-3">
                      <label> Inspection Area Name.</label>
                      <input type="text" name="inspection_area" class="form-control" placeholder="Enter Inspection Area Name.">
                    </div>
                    <div class="col-md-6 col-6 mb-3">
                      <label>Objective</label>
                      <input type="text" name="objective" class="form-control" placeholder="Enter Objective">
                    </div>
                      <div class="col-md-6 col-6 mb-3">
                      <label>Arrival Time</label>
                      <input type="time" name="arrival_time" class="form-control" placeholder="Enter Arrival Time.">
                    </div>
                     <div class="col-md-6 col-6 mb-3">
                      <label>Arrival K.M.</label>
                      <input type="text" name="arrival_km" placeholder="Enter Arrival K.M." class="form-control">
                    </div>
                  
                    <div class="col-md-6 col-6 mb-3">
                      <label>Port Of Departure.</label>
                      <select class="form-control" name="port_of_department">
                        <option>---SELECT---</option>
                        <option value="Home">Home</option>
                        <option value="Office">Office</option>
                        <option value="new_inspection_area">New Inspection Area</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                    <div class="col-md-6 col-6 mb-3">
                      <label>Departure K.M.</label>
                      <input type="text" name="departure_km" placeholder="Enter Departure K.M." class="form-control">
                    </div>
                     <div class="col-md-6 col-6 mb-3">
                      <label>Total K.M.</label>
                      <input type="text" name="other_fee" placeholder="Enter Total K.M." class="form-control">
                    </div>
                    <div class="col-md-6 col-6 mb-3">
                      <label>Result</label>
                      <input type="text" name="result" placeholder=" Enter Result" class="form-control">
                    </div>
                  
                  </div> -->
                </div>
                 
              </div>
              <div class="col-md-12 mb-5">
                <div class="row">
                <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>IT IS MANDATORY TO MENTION ALL THE DETAILS RELATED TO REVENUE IN THE DAILY ACTIVITIES AND PROGRESS REPORT.</label></div>
                 <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>IT IS MANDATORY TO MATCH THE ENTERED BANKING ID RELATED TO REVENUE.</label></div>
                <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>THE DETAILS REGARDING TRAVELING ALLOWANCE IS VALID ONLY FOR THE CONTRIBUTION AREA.</label></div>
              </div>
              </div>
              <div class="col-md-6"><a href="" class="btn btn-sm btn-success form-control">Progress</a></div>
              <div class="col-md-6 mb-5"><a href="" class="btn btn-sm btn-warning form-control">Edit</a></div>
              <div class="col-md-6">Report Confirmation Number :</div>
              <div class="col-md-6 mb-5"><input type="text" name="report_confirm" placeholder="Please Provide Confirmation Number" class="form-control"></div>
              <div class="col-md-12 mb-5 text-center"><a href="" class="btn btn-lg btn-secondary">SUBMIT</a></div>

            </div>
            
           
          </div>
           
        </div>
      </div>
    </section>