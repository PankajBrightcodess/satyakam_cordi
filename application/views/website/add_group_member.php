<section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <form method="POST" action="<?= base_url('website/add_member_in_group')?>" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="table-responsive">
                 <!-- <table class="table table-hover" style="text-align: center;">
                    <thead>
                      <tr>
                        <th scope="col">Incaption Date : &nbsp;&nbsp;<?= date('d-m-Y', strtotime($group_records['inception_date']));?></th>
                        <th scope="col" rowspan="2"><h5 class="tittle">GROUP REGISTRATION FORM</h5><h6><?= date('Y').'-'.date('y', strtotime('+1 year'));?></h6></th>
                        <th scope="col">State  :&nbsp;&nbsp;<?php echo $group_records['state'];?></th>
                      </tr> 
                      <tr>
                        <th scope="col">Application No. :&nbsp;&nbsp;</th>
                       
                        <th scope="col">Division :&nbsp;&nbsp;<?php echo $group_records['division'];?></th>
                      </tr>  
                      <tr>
                        <th scope="col">District : &nbsp;&nbsp;<?php echo $group_records['dist'];?></th>
                        <th scope="col" >Block :&nbsp;&nbsp;<?php echo $group_records['block'];?></th>
                         <th scope="col">Panchayat  :&nbsp;&nbsp;<?php echo $group_records['gram_panchayat'];?></th>
                      </tr> 
                      <tr>
                        <th scope="col">Ward No.  :&nbsp;&nbsp;<?php echo $group_records['ward_no'];?></th>
                        <th scope="col">Mobile :&nbsp;&nbsp;<?php echo $group_records['mobile_no'];?></th>
                        <th scope="col">Email  :&nbsp;&nbsp;<?php echo $group_records['email'];?></th>
                      </tr>
                      <tr>
                        <th scope="col" >Group Name  :&nbsp;&nbsp;<?php echo $group_records['group_name'];?></th>
                         <th scope="col">Sponsor Id No.  :&nbsp;&nbsp;<?php echo $group_records['created_by'];?></th>
                         <th scope="col">Sponsor Name  :&nbsp;&nbsp;<?php echo $group_records['officer_first_name'].' '.$group_records['officer_middle_name'].' '.$group_records['officer_last_name'];?></th>
                      </tr>
                     
                      <tr>
                         <th scope="col" >Sponsor Id No.  :&nbsp;&nbsp;<?php echo $group_records['created_by'];?></th>
                         <th scope="col" >Sponsor Name  :&nbsp;&nbsp;<?php echo $group_records['officer_first_name'].' '.$group_records['officer_middle_name'].' '.$group_records['officer_last_name'];?></th>
                         <th scope="col">Mobile No.  :&nbsp;&nbsp;<?php echo $group_records['cell_no'];?></th>
                      </tr>
                      <tr>
                         <th scope="col" >Club Label  :&nbsp;&nbsp;</th>
                         <th scope="col" ></th>
                         <th scope="col" ></th>
                         
                      </tr>
                    </thead>
                  </table> --> 
                </div>
             </div>
             <div class="col-md-12 mb-2">
                <div class="table-responsive">
                 <table class="table table-hover" style="text-align: center;">
                    <thead>
                      <tr>
                        <th ><h3>ADD MEMBER IN OUR GROUP</h3>
                        </th>
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
                        <td><input type="hidden" name="group_signup_id" id="group_signup_id" value="<?php echo $group_records['id'];?>" class="form-control"><input type="text" name="member_id[]" id="member_id" class="form-control"></td>
                        <td><input type="text" name="member_name[]" id="member_name" class="form-control"></td>
                        <td><input type="date" name="dob[]" id="dob" class="form-control"></td>
                        <td><input type="text" name="father_name[]" id="father_name" class="form-control"></td>
                        <td><input type="text" name="mobile[]" id="mobile" class="form-control"></td>
                        <td><input type="text" name="aadhar_no[]" id="aadhar_no" class="form-control"></td>
                        <td><input type="text" name="designation[]" id="designation" class="form-control"></td>
                        <td><input type="file" multiple  name="photo[]" id="photo" class="form-control"></td>
                        <td><button class="btn btn-info btn-xs remove_group" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- <div class="row">
                  <div class="mb-2 col-md-6">
                  <input type="text" name="total_members_in_word" class="form-control" placeholder="Total Members In Word">
                </div>
                 <div class="col-md-6">
                  <input type="number" name="total_members_in_number" class="form-control" placeholder="Total Members In Number">
                </div>
              </div> -->

                
                 
              </div>
              
              <div class="col-md-12 mb-5 text-center"><input type="submit"  class="btn btn-lg btn-secondary" value="PROCESS"></div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>