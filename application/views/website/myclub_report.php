<section class="officialservices">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <form method="POST" action="<?= base_url('website/my_clubreport_insert')?>">
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
                        <th scope="col" >Updating Date : &nbsp;&nbsp;<?php echo date('d-m-Y');?></th>
                        <th scope="col" >To Date :&nbsp;&nbsp;<?php if(!empty($club_income_details[0]['added_on'])){ echo date('d-m-Y',strtotime($club_income_details[0]['added_on'])); } ?></th>
                        <th scope="col">User Name : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['username'])){  echo $club_income_details[0]['username'] ; }?></th>
                        <th scope="col">User Id No. :&nbsp;&nbsp;<?php if(!empty($club_income_details[0]['member_id'])){ echo $club_income_details[0]['member_id']; } ?></th>
                         <th scope="col">Outhorized Member : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['member_name'])){ echo $club_income_details[0]['member_name']; } ?></th>
                         
                      </tr> 
                      <tr>
                       
                          <th scope="col">State Unit : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['state'])){ echo $club_income_details[0]['state']; } ?></th>
                        <th scope="col">Divison Unit : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['division'])){ echo $club_income_details[0]['division']; } ?></th>
                         <th scope="col">State Unit : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['state'])){ echo $club_income_details[0]['state']; } ?></th>
                           <th scope="col">Divison Unit : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['division'])){ echo $club_income_details[0]['division']; } ?></th>
                         <th scope="col">District Unit : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['dist'])){ echo $club_income_details[0]['dist']; } ?></th>
                        
                      </tr>
                      
                       <tr>
                        <th scope="col" colspan="2">Sponsor Id No. : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['member_creator']) && $club_income_details[0]['member_creator']==0){ if(!empty($club_income_details[0]['member_creator'])){ echo $club_income_details[0]['created_by']; }}
                        // else{
                        //   echo $club_income_details[0]['member_creator'];
                        // } 
                      ?></th>
                        <th scope="col" colspan="2">Mobile No. : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['mobile_no'])){ echo $club_income_details[0]['mobile_no']; } ?></th>
                        <th scope="col">E-Mail : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['mobile_no'])){ echo $club_income_details[0]['email']; } ?></th>
                      </tr> 
                      <tr>
                       
                      </tr> 
                      <tr>
                        
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
                      <!-- <tr>
                        <th colspan="14"><button class="btn-sm btn-success btn add_clubreport">+</button></th> -->
                        
                      </tr>
                    </thead>
                    <tbody class="myclub_report">
                      <tr>
                        <td>
                          <select class="form-control" name="month[]" id="month">
                            <option value="">--SELECT--</option>
                           <?php
                            for ($i=1; $i < 13; $i++) { 
                               $value = date('M',strtotime(date('Y-'.$i)));
                               ?><option value="<?php echo $i;?>"><?php echo $value;?></option><?php
                            }
                           ?>
                          </select>
                         <!--  <input type="text" name="month[]" id="month" value="<?= date('M');?>" class="form-control"> --></td>
                        <td><input type="date" name="close_date[]" id="close_date" class="form-control"></td>
                        <td><input type="text" name="rank[]" id="rank" class="form-control"></td>
                        <td><input type="text" name="level[]" id="level" class="form-control"></td>
                        <td><input type="text" name="club_team[]" id="club_team" class="form-control"></td>
                        <td><input type="text" name="bike_fund[]" id="bike_fund" class="form-control"></td>
                        <td><input type="text" name="domin_deduct[]" id="domin_deduct" class="form-control"></td>
                        <td><input type="text" name="payment[]" id="payment" class="form-control"></td>
                         <td><input type="text" name="bill_no[]" id="bill_no" class="form-control"></td> <td><input type="date" name="billing_date[]" id="billing_date" class="form-control"></td> <td><input type="text" name="check_no[]" id="check_no" class="form-control"></td>
                        <td><button class="btn-sm btn-success btn add_clubreport"><i class="fa fa-plus" aria-hidden="true"></i></button><!-- <button class="btn btn-info btn-xs remove_clubreport" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button> --></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="mb-2">
                  <input type="text" name="total_revenue" class="form-control" placeholder="In Terms Of Total Revenue">
                </div>

                
                 
              </div>
             
             
              <div class="col-md-12 mb-5 text-center"><input type="submit"  class="btn btn-lg btn-secondary" value="SUBMIT"></div>

            </div>
            </form>
           
          </div>
           
        </div>
      </div>
    </section>