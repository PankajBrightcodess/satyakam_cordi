<!-- <?= PRE; print_r($club_income_details);?>  -->
<section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="row">
              <!-- <div class="col-md-12 mb-2">
                <div class="table-responsive">
                 <table class="table table-hover" style="text-align: center;">
                    <thead>
                      <tr>
                        <th scope="col" rowspan="4"><h3 class="tittle">MY CLUB (BONUS)</h3></th>
                      </tr> 
                    </thead>
                  </table> 
                </div>
             </div> -->
             <div class="col-md-12 mb-2">
             <h3 class="tittle">MY CLUB (BONUS)</h3>
                <div class="table-responsive">
                 <table class="table table-hover" >
                    <thead>
                      <tr>
                        <th scope="col">Updating Date : &nbsp;&nbsp;<?php echo date('d-m-Y');?></th>
                        <th scope="col" >To Date :&nbsp;&nbsp;<?php if(!empty($club_income_details[0]['added_on'])){ echo date('d-m-Y',strtotime($club_income_details[0]['added_on'])); } ?></th>
                      </tr> 
                      <tr>
                        <th scope="col" >User Name : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['username'])){  echo $club_income_details[0]['username'] ; }?></th>
                        <th scope="col" >User Id No. :&nbsp;&nbsp;<?php if(!empty($club_income_details[0]['member_id'])){ echo $club_income_details[0]['member_id']; } ?></th>
                      </tr> 
                      <tr>
                        <th scope="col" >Outhorized Member : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['member_name'])){ echo $club_income_details[0]['member_name']; } ?></th>
                        <th scope="col">State Unit : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['state'])){ echo $club_income_details[0]['state']; } ?></th>
                      </tr> 
                       <tr>
                        <th scope="col">Divison Unit : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['division'])){ echo $club_income_details[0]['division']; } ?></th>
                        <th scope="col">District Unit : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['dist'])){ echo $club_income_details[0]['dist']; } ?></th>
                      </tr> 
                      <tr>
                        
                        <th scope="col">Sponsor Id No. : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['member_creator']) && $club_income_details[0]['member_creator']==0){ if(!empty($club_income_details[0]['member_creator'])){ echo $club_income_details[0]['created_by']; }}
                        // else{
                        //   echo $club_income_details[0]['member_creator'];
                        // }
                         ?>
                          

                        </th>
                        <th scope="col">Mobile No. : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['mobile_no'])){ echo $club_income_details[0]['mobile_no']; } ?></th>
                      </tr> 
                      <tr>
                        
                        <th scope="col" colspan="2">E-Mail : &nbsp;&nbsp;<?php if(!empty($club_income_details[0]['mobile_no'])){ echo $club_income_details[0]['email']; } ?></th>
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
                        <th>Date</th>
                        <th>Closing Time</th>
                        <th>Rank</th>
                        <th>Percentage Level</th>
                        <th>Added New Club Member</th>
                        <th>Club Bonus</th>
                        <th>Domin Deducted Rs.</th> 
                        <th>Payment/ Bill No.</th>  
                        <th>Date</th>  
                        <th>Check No.</th>  
                      </tr>
                    </thead>
                    <tbody class="expenses">
                      <?php
                        if(!empty($club_income_details)){
                          foreach ($club_income_details as $key => $value) {
                           ?>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $value['member_name'];?></td>
                            <td><?php echo $value['amount'];?></td>
                            <td></td>
                            <td></td>
                            <td><?php echo date('d-m-Y',strtotime($value['added_on']));?></td>
                            <td></td>
                          </tr>

                           <?php
                          }
                        }
                       ;?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>