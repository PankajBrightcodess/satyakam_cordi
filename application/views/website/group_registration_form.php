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
                        <th scope="col">Incaption Date : &nbsp;&nbsp;</th>
                        <!-- <th scope="col" rowspan="2">Reporting Time : 10:00 A.M.</th> -->
                        <th scope="col" rowspan="2"><h5 class="tittle">GROUP REGISTRATION FORM</h5><h6><?= date('Y').'-'.date('y', strtotime('+1 year'));?></h6></th>
                        <th scope="col">State  :&nbsp;&nbsp;</th>
                      </tr> 
                      <tr>
                        <th scope="col">Application No. :&nbsp;&nbsp;</th>
                       
                        <th scope="col">Division :&nbsp;&nbsp;</th>
                      </tr>  
                      <tr>
                        <th scope="col">District : &nbsp;&nbsp;</th>
                        <th scope="col" >Block :&nbsp;&nbsp;</th>
                         <th scope="col">Panchayat  :&nbsp;&nbsp;</th>
                      </tr> 
                      <tr>
                        <th scope="col">Ward No.  :&nbsp;&nbsp;</th>
                        <th scope="col">Mobile :&nbsp;&nbsp;</th>
                        <th scope="col">Email  :&nbsp;&nbsp;</th>
                      </tr>
                      <tr>
                        <th scope="col" colspan="2">Group Name  :&nbsp;&nbsp;</th>
                         <th scope="col" colspan="2">Landmark/Pin Code  :&nbsp;&nbsp;</th>
                      </tr>
                     
                      <tr>
                         <th scope="col" colspan="2">Sponsor Id No.  :&nbsp;&nbsp;</th>
                         <th scope="col" colspan="2">Name  :&nbsp;&nbsp;</th>
                      </tr>
                      <tr>
                         <th scope="col" colspan="2">Club Label  :&nbsp;&nbsp;</th>
                         <th scope="col" colspan="2">Mobile No.  :&nbsp;&nbsp;</th>
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
                        <th ><p>ALL THE DETAILS ENTERED PRE CORRECT UNDER WHICH ALL THE MEMBERS ARE ASPIRANTS TO REGISTER THE GROUP ALL THE MEMBERS INCLUDED IN THE GROUP ARE PERMANENT RESIDENTS OF THE SAME LOCALITY AND WARD AND ALL OF US MEMBERS KNOW EACH OTHER KNOW AND RECOGBIZE.</p></th>
                       
                      </tr> 
                     
                     
                    </thead>
                  </table> 
                </div>
             </div>
              <div class="col-md-12 mb-2">
                  <table class="table-responsive table">
                    <thead>
                      <tr>
                        <th colspan="10" class="text-center">THE JURY MEMBERS AND ORDINARY MEMBERS INCULDDED IN THE GROUP ARE AS FOLLOWS</th>
                      </tr>
                      <tr>
                        <th>MEMBER'S ID NUMBER</th>
                        <th>USER NAME</th>
                        <th>DOB</th>
                        <th>FATHER'S/HUSBAND NAME</th>
                        <th>MOBILE NO.</th>
                        <th>AADHAR NO.</th>
                        <th>DESIGNATION</th> 
                        <th>PHOTO</th>  
                        <th>ACTION</th>  
                      </tr>
                      <tr>
                        <th colspan="10"><button class="btn-sm btn-success btn add_group">+</button></th>
                        
                      </tr>
                    </thead>
                    <tbody class="group">
                      <tr>
                        <td><input type="text" name="member_id[]" id="member_id" class="form-control"></td>
                        <td><input type="text" name="member_name[]" id="member_name" class="form-control"></td>
                        <td><input type="date" name="dob[]" id="dob" class="form-control"></td>
                        <td><input type="text" name="father_name[]" id="father_name" class="form-control"></td>
                        <td><input type="text" name="mobile[]" id="mobile" class="form-control"></td>
                        <td><input type="text" name="aadhar_no[]" id="aadhar_no" class="form-control"></td>
                        <td><input type="text" name="designation[]" id="designation" class="form-control"></td>
                        <td><input type="file" name="photo[]" id="photo" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs remove_group" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row">
                  <div class="mb-2 col-md-6">
                  <input type="text" name="total_members_in_word" class="form-control" placeholder="Total Members In Word">
                </div>
                 <div class="col-md-6">
                  <input type="number" name="total_members_in_number" class="form-control" placeholder="Total Members In Number">
                </div>
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