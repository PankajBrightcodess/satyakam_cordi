<section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <form method="POST" action="<?= base_url('website/expense_insert')?>">
            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="table-responsive">
                <table class="table table-hover" style="text-align: center;">
                    <thead>
                      <tr>
                        <th scope="col" rowspan="4"><h5 class="tittle">My Club Report</h5></th>
                      </tr> 
                    </thead>
                  </table> 
                </div>
             </div>
             <div class="col-md-12 mb-2">
                <div class="table-responsive">
                 <table class="table table-hover" >
                    <thead>
                      <tr>
                        <th scope="col" colspan="2">Updating Date : &nbsp;&nbsp;<?php echo date('d-m-Y');?></th>
                        <th scope="col" >To Date :&nbsp;&nbsp;<?php if(!empty($club_income_details[0]['added_on'])){ echo date('d-m-Y',strtotime($club_income_details[0]['added_on'])); } ?></th>
                      </tr> 
                      <tr>
                        <th scope="col" colspan="2">User Name : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['username'])){  echo $club_income_details[0]['username'] ; }?></th>
                        <th scope="col" rowspan="6"></th>
                      </tr> 
                      <tr>
                        <th scope="col" colspan="2">User Id No. :&nbsp;&nbsp;<?php if(!empty($club_income_details[0]['member_id'])){ echo $club_income_details[0]['member_id']; } ?></th>
                      </tr> 
                      <tr>
                        <th scope="col" colspan="2">Outhorized Member : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['member_name'])){ echo $club_income_details[0]['member_name']; } ?></th>
                      </tr> 
                       <tr>
                        <th scope="col">State Unit : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['state'])){ echo $club_income_details[0]['state']; } ?></th>
                        <th scope="col">Divison Unit : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['division'])){ echo $club_income_details[0]['division']; } ?></th>
                      </tr> 
                      <tr>
                        <th scope="col">District Unit : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['dist'])){ echo $club_income_details[0]['dist']; } ?></th>
                        <th scope="col">Sponsor Id No. : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['member_creator']) && $club_income_details[0]['member_creator']==0){ if(!empty($club_income_details[0]['member_creator'])){ echo $club_income_details[0]['created_by']; }}else{
                          echo $club_income_details[0]['member_creator'];
                        } ?></th>
                      </tr> 
                      <tr>
                        <th scope="col">Mobile No. : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['mobile_no'])){ echo $club_income_details[0]['mobile_no']; } ?></th>
                        <th scope="col">E-Mail : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['mobile_no'])){ echo $club_income_details[0]['email']; } ?></th>
                      </tr>
                    </thead>
                  </table> 
                </div>
             </div>
              <div class="col-md-12 mb-2">
                  <table class="table-responsive table">
                    <thead>
                      <tr>
                        <!-- <th>SL No.</th> -->
                        <th>Month</th>
                        <th>Closing Date</th>
                        <th>Rank</th>
                        <th>Level</th>
                        <th>Club Team Size</th>
                        <th>Bike Fund(R.S.)</th>
                        <th>Domin Deducted(R.S.)</th> 
                        <th>Payment</th> 
                        <th>Bill No.</th> 
                        <th>Billing Date</th> 
                        <th>Check No.</th> 
                        <th colspan="2">Action</th>  
                      </tr>
                      <tr>
                        <th colspan="14"><button class="btn-sm btn-success btn add_expense">+</button></th>
                        
                      </tr>
                    </thead>
                    <tbody class="billing">
                      <tr>
                        <td><input type="text" name="equipment[]" id="equipment" class="form-control"></td>
                        <td><input type="text" name="quantity[]" id="quantity" class="form-control"></td>
                        <td><input type="text" name="rate[]" id="rate" class="form-control"></td>
                        <td><input type="text" name="amount[]" id="amount" class="form-control"></td>
                        <td><input type="text" name="bill[]" id="bill" class="form-control"></td>
                        <td><input type="text" name="payment_receipt[]" id="payment_receipt" class="form-control"></td>
                        <td><input type="text" name="payment_method[]" id="payment_method" class="form-control"></td>
                        <td><input type="text" name="neft_check[]" id="neft_check" class="form-control"></td>
                         <td><input type="text" name="neft_check[]" id="neft_check" class="form-control"></td> <td><input type="text" name="neft_check[]" id="neft_check" class="form-control"></td> <td><input type="text" name="neft_check[]" id="neft_check" class="form-control"></td> <td><input type="text" name="neft_check[]" id="neft_check" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs remove_equipment" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
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
             <!--  <div class="col-md-4"><a href="" class="btn btn-sm btn-success form-control">Progress</a></div>
              <div class="col-md-4 mb-5"><a href="" class="btn btn-sm btn-warning form-control">Edit</a></div>
              <div class="col-md-4 mb-5"><a href="" class="btn btn-sm btn-info form-control">Cancel</a></div> -->
              <div class="col-md-6">Report Confirmation Number :</div>
              <div class="col-md-6 mb-5"><input type="text" name="report_confirm" placeholder="Please Provide Confirmation Number" class="form-control"></div>
              <div class="col-md-12 mb-5 text-center"><input type="submit"  class="btn btn-lg btn-secondary" value="SUBMIT"></div>

            </div>
            </form>
           
          </div>
           
        </div>
      </div>
    </section>