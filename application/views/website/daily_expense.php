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
                        <th scope="col">Date : &nbsp;&nbsp;<?php echo date('d-m-Y');?></th>
                        <!-- <th scope="col" rowspan="2">Reporting Time : 10:00 A.M.</th> -->
                        <th scope="col" rowspan="4"><h5 class="tittle">DAILY EXPENSES</h5></th>
                        <th scope="col">State Unit Code :&nbsp;&nbsp;<?php echo $state_code['code'];?></th>
                      </tr> 
                      <tr>
                        <th scope="col">Day :&nbsp;&nbsp;<?php echo date('l');?></th>
                       
                        <th scope="col">State :&nbsp;&nbsp;<?php  echo $state_code['state'];?></th>
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
                        <th scope="col">Branch Unit : &nbsp;&nbsp;<?php  echo $state_code['branch_code'];?></th>
                        <th scope="col">Code No : </th>
                      </tr> 
                      <tr>
                        <th scope="col">Unit Incharge : &nbsp;&nbsp;</th>
                        <th scope="col">Mobile No :  &nbsp;&nbsp;<?php  echo $state_code['mobile_no'];?></th>
                      </tr> 
                      <tr>
                        <th scope="col" colspan="2"><center>  OFFICE ADDRESS</center></th>
                      </tr> 
                      <tr>
                        <th scope="col">Email : &nbsp;&nbsp;<?php  echo $state_code['email_id'];?></th>
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
                        <!-- <th>SL No.</th> -->
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
                    <tbody class="expenses">
                      <tr>
                        <td><input type="text" name="equipment[]" id="equipment" class="form-control"></td>
                        <td><input type="text" name="quantity[]" id="quantity" class="form-control"></td>
                        <td><input type="text" name="rate[]" id="rate" class="form-control"></td>
                        <td><input type="text" name="amount[]" id="amount" class="form-control"></td>
                        <td><input type="text" name="bill[]" id="bill" class="form-control"></td>
                        <td><input type="text" name="payment_receipt[]" id="payment_receipt" class="form-control"></td>
                        <td><input type="text" name="payment_method[]" id="payment_method" class="form-control"></td>
                        <td><input type="text" name="neft_check[]" id="neft_check" class="form-control"></td>
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