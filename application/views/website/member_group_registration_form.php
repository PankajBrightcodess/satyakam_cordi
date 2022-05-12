<section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <form method="POST" action="<?= base_url('website/member_groupdetails_insert')?>" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="table-responsive">
                 <table class="table table-hover" style="text-align: center;">
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
                        <th scope="col" colspan="2">Group Name  :&nbsp;&nbsp;<?php echo $group_records['group_name'];?></th>
                         <th scope="col" colspan="2">Landmark/Pin Code  :&nbsp;&nbsp;</th>
                      </tr>
                     
                      <tr>
                         <th scope="col" colspan="2">Sponsor Id No.  :&nbsp;&nbsp;<?php echo $group_records['created_by'];?></th>
                         <th scope="col" colspan="2">Sponsor Name  :&nbsp;&nbsp;<?php echo $group_records['officer_first_name'].' '.$group_records['officer_middle_name'].' '.$group_records['officer_last_name'];?></th>
                      </tr>
                      <tr>
                         <th scope="col" colspan="2">Club Label  :&nbsp;&nbsp;</th>
                         <th scope="col" colspan="2">Mobile No.  :&nbsp;&nbsp;<?php echo $group_records['cell_no'];?></th>
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
                        <th ><p>ALL THE DETAILS ENTERED PRE CORRECT UNDER WHICH ALL THE MEMBERS ARE ASPIRANTS TO REGISTER THE GROUP ALL THE MEMBERS INCLUDED IN THE GROUP ARE PERMANENT RESIDENTS OF THE SAME LOCALITY AND WARD AND ALL OF US MEMBERS KNOW EACH OTHER KNOW AND RECOGBIZE.</p>
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
                
                <div class="col-md-12 col-12 col-lg-12"><label>TODAY ON <input type="TEXT" name="" class="mb-2"> THE GENERAL MEATION WAS HELD UNDER THE CHAIRMANSHIP OF PANCHAYAT CO-ORDINATOR/CLUB MEMBER MS./MRS./MR. <input type="text" name=""  class="mb-2">. UNANIMOUSLY THE THREE DECIDING OFFICERSOF THE GROUP. PRESIDENT, SECRETARY, TREASURER AND OTHER EXECUTIVE MEMBER WHOSE NAME AND PERMANENT ADDRESS OF FATHER/HUSBAND ARE MENTIONED. HE HAS BEEN NOMINATED AS MEMBER AND OFFICE BEARER OF LOCAL BODY AT PRESENT.</label></div>
                <div class="col-md-12 col-lg-12 col-12">
                  <hr>
                </div>
                <div class="col-md-12 col-lg-12 col-12">
                  <label>CERTIFIED THAT THE LOCAL BODY GROUP FORMATION IS A TRUE COPY OF THE PROPOSAL LETTER, WHICHHAS BEEN ONLY COMPLETED UNDER THE SECTIONS OF THE RULES 2021-22</label>
                </div>
                <div class="col-md-12 mb-3">
                                <div class="form-group text-right">  
                                  <div style="width:300; height:70; float: right;"  id='imgInp'>
                                    <img src="#" alt="" id="previewHolder"  height="70" width="300" >
                                  </div>
                                </div>
                              </div>
                <div class="col-md-12 col-lg-12 col-12 text-right">
                  <label>Upload Picture</label>
                  <input type="file" name="professor_sign" id="professor_sign" value=""  onchange="readURL(this,'#blah');">
                </div>
              </div>
              </div>
              <div class="col-md-12"><hr></div>
              <div class="col-md-4"><label>President's signature</label>
                  <input type="file" name="p_sign" id="filePhoto" value="">
              </div>
              <div class="col-md-4"><label>Secretary Signature</label>
                  <input type="file" name="s_sign" id="filePhoto" value="">
              </div>
              <div class="col-md-4"><label>Treasurer Signature</label>
                  <input type="file" name="t_sign" id="filePhoto" value="">
              </div>
              <div class="col-md-12"><hr></div>
              <div class="col-md-12 mb-2 text-center text-info"><h5>MENDATORY INSTRUCTIONS</h5></div>
                <div class="col-md-1 col-1 col-lg-1 mb-2"><input type="checkbox" id="mandatory1" name="mandatory1" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11 mb-2"><label>THE FORMATION OF A LOCAL BODY GROUP CAN BE ESTABLISHED IN THE FORM OF TWO GROUPS IN EACH OF THE VILLAGE PANCHAYATS OF RURAL INDIA. BUT FOR THE FORMATION OF MORE THAN THIS GROUP. PERMISSION WILL HAVE TO BE TAKEN FROM THRE DISTRICT PROJECT MANAGER'S OFFICE.</label></div>
                <div class="col-md-1 col-1 col-lg-1 mb-2"><input type="checkbox" id="mandatory2" name="mandatory2" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11 mb-2"><label>A TOTAL OF 36 WOMEN MEMBERS CAN BE INCLUDED IN THE LOCAL BODY.</label></div>
                <div class="col-md-1 col-1 col-lg-1 mb-2"><input type="checkbox" id="mandatory3" name="mandatory3" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11 mb-2"><label>IT IS MANDATORY FOR ALL THE MEMBERS OF THE GROUP TO BE AT 18 YEARS OLD AND THE MAXIMUM AGE IS 55 YEARS.</label></div>
                <div class="col-md-1 col-1 col-lg-1 mb-2"><input type="checkbox" id="mandatory4" name="mandatory4" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11 mb-2"><label>IT IS MANDATORY FOR ALL THE MEMBERS TO HAVE THEIR NAMES IS THE VOTER LIST.</label></div>
                <div class="col-md-1 col-1 col-lg-1 mb-2"><input type="checkbox" id="mandatory5" name="mandatory5" value="1"></div>
                <div class="col-md-11 col-11 col-lg-11 mb-2"><label>IT IS MANDATORY FOR ALL THE THREE ADJUDICATING OFFICERS OF THE LOCAL BODY TO HAVE AT LEAST VIII PASS EDUCATIONAL QUALIFICATION.</label></div>
              <div class="col-md-12 mb-5 text-center"><input type="submit"  class="btn btn-lg btn-secondary" value="PROCESS"></div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>