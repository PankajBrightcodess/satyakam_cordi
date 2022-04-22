<section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <form method="POST" action="<?= base_url('website/requisition_insert')?>">
            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="table-responsive">
                 <table class="table table-hover" style="text-align: center;">
                    <thead>
                      <tr>
                        <th scope="col">Date : &nbsp;&nbsp;<?php echo date('d-m-Y');?></th>
                        <!-- <th scope="col" rowspan="2">Reporting Time : 10:00 A.M.</th> -->
                        <th scope="col" rowspan="4"><h5 class="tittle">OFFICE RESOURCE REQUISITION FORM</h5></th>
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
                        <th>Name Of The Resource And Equipment</th>
                        <th>Model No.</th>
                        <th>Brand Name</th>
                        <th>Quantity</th>
                        <th>Rate</th>
                        <th>Amount</th> 
                        <th>Delete</th> 
                      </tr>
                      <tr>
                        <th colspan="10"><button class="btn-sm btn-success btn add_requipment">+</button></th>
                        
                      </tr>
                    </thead>
                    <tbody class="requipment">
                      <tr>
                        <td><input type="text" name="resources[]" id="resources" class="form-control"></td>
                        <td><input type="text" name="modelno[]" id="modelno" class="form-control"></td>
                        <td><input type="text" name="brandname[]" id="brandname" class="form-control"></td>
                        <td><input type="number" name="quantity[]" id="quantity" class="form-control"></td>
                        <td><input type="text" name="rate[]" id="rate" class="form-control"></td>
                        <td><input type="number" name="amount[]" id="amount" class="form-control"></td>
                       
                        <td><button type="button" class="btn btn-info btn-xs remove_requipment" ><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="mb-2">
                  <input type="text" name="total_revenue" class="form-control" placeholder="Total Expense">
                </div>

                
                 
              </div>
              <div class="col-md-12 mb-5">
                <div class="row">
                  <div class="col-md-12 text-center text-info"><h5>INSTRUCTION</h5></div>
                  <div class="col-md-12 text-center text-danger"><p><strong>WHILE SUBMITTING THE OFFICE RESOURCE REQUISITION LETTER, THE FOLLOWING THINGS MUST BE KEPT IN MIND.</strong></p></div>
                <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="mandatory1" name="mandatory1" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>AT LEAST 7 DAYS AND NOT MORE THAN 15 DAYS FORM THE DATE OF FILLING THE OFFICE RESOURCE DEMAND LETTER, THE INFORMATION OF ACCEPTED OR UNACKNOWLEDGED WILL BE RECEIVED ONLINE OR OFFLINE.</label></div>
                <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="mandatory2" name="mandatory2" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>THE RESOURCE OR EQUIPMENT RELATED ISSUES PRESENTED IN THE OFFICE RESOURCE REQUISITION LETTER MAY BE AMENDED ONLY ESSENTIAL DEMAND WILL BE ACCEPTED</label></div>
                <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="mandatory3" name="mandatory3" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>THE ALLOTMENT ENTERED IN THE OFFICE RESOURCE DEMAND LETTER OR THE REVISED ALLOCATION BY THE INSTITUTE WILL BE PAID ON THE PERSONAL ACCOUNT OF THE OFFICE IN-CHARGE. THE EXPENDITURE DETAILS OF THE ALLOTTED AMOUNT WILL HAVE TO BE MADE ALONG WITH THE VALUE RECEIPT.</label></div>
                 <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="mandatory4" name="mandatory4" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>IN CASE OF ILLEGAL OR DISORDERLY DEMAND LETTER, THE BILL BE CANCELED.</label></div>
                <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="mandatory5" name="mandatory5" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>REQUISITION FOR OFFICE RESOURCES THE INSTITUTION CANEVALUATE ALL THE RESOURCES OR REUIPMENT RELATED TO THE ALLOCATED BILL AT ANY TIME.</label></div>
                <div class="col-md-1 col-1 col-lg-1 text-seccess"><label><strong>NOTE :-</strong></label></div>
                <div class="col-md-11 col-11 col-lg-11"><label>RESOURCE OR EQUIPMENT RELATED TO THE GROUP WILL BE PROVIDED TO THE GROUP WHOSE ESTABLISHMENT IS AT LEAST 3 MONTHS OLD.</label></div>
                 <div class="col-md-12 text-center text-info"><h5>DECLARATION</h5></div>
                 <div class="col-md-1 col-1 col-lg-1"><input type="checkbox" id="mandatory6" name="mandatory6" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11"><label>AFTER UNDERSTANDING THE ABOVE RULES AND INSTRUCTIONS OR HAVE FILE THE RESOURCE DEMAND LETTER, ALLTHE DETAILS ENTERED BY ME ARE CORRECT.</label></div>
                 
              </div>
              </div>
           
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