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
                        <!-- <th scope="col" rowspan="2">Reporting Time : 10:00 A.M.</th> -->
                        <th scope="col" rowspan="4"><h5 class="tittle">DAILY EXPENSES</h5></th>
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
                       <!-- <tr>
                        <th scope="col" colspan="2"></th>
                      </tr> -->
                    </thead>
                  </table> 
                </div>
             </div>
              <div class="col-md-12 mb-2">
                  <table class="table-responsive table">
                    <thead>
                      <tr>
                        <th>SL No.</th>
                        <th>Name Of The Equipment/Expense Details</th>
                        <th>Quantity</th>
                        <th>Rate</th>
                        <th>Amount</th>
                        <th>Bill No.</th>
                        <th>Name Of The Payment Recipient</th>
                        <th>Payment Method(Cash/NEET/UPI Banking)</th> 
                        <th colspan="2">UPI Transation To Neft Check No.</th>  
                      </tr>
                      <tr>
                        <th colspan="10"><button class="btn-sm btn-success btn add_expense">+</button></th>
                        
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
                        <td><input type="text" name="banking_id1[]" id="banking_id" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="mb-2">
                  <input type="text" name="total_revenue" class="form-control" placeholder="Total Expense">
                </div>

                
                 
              </div>
              <div class="col-md-12 mb-5">
                <div class="row">
                <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="mandatory1" name="mandatory1" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>DAILY EXPENSES WILL BE VALID IN THE ITEMS ATTESTED BY THE INSTITUTE THE DETAILS OF ILLEGAL EXPENDITURE WILL BE CONSIDERED AGAINST THE RULES OF THE INSTITUTE AND IT WILL NEVER BE ACCEPTED.</label></div>
                 
              </div>
              </div>
              <div class="col-md-4"><a href="" class="btn btn-sm btn-success form-control">Progress</a></div>
              <div class="col-md-4 mb-5"><a href="" class="btn btn-sm btn-warning form-control">Edit</a></div>
              <div class="col-md-4 mb-5"><a href="" class="btn btn-sm btn-info form-control">Cancel</a></div>
              <div class="col-md-6">Report Confirmation Number :</div>
              <div class="col-md-6 mb-5"><input type="text" name="report_confirm" placeholder="Please Provide Confirmation Number" class="form-control"></div>
              <div class="col-md-12 mb-5 text-center"><input type="submit"  class="btn btn-lg btn-secondary" value="SUBMIT"></div>

            </div>
            </form>
           
          </div>
           
        </div>
      </div>
    </section>