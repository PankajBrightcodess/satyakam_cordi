  <section class="officialservices">
      <div class="container">
        <div class="row justify-content-center" >
          <div class="col-md-12">
            <h1 class="tittle">Account Holder Details</h1>
            <div class="row text-center" >
            <div class="col-md-3 col-12 mb-2"><a href="<?= base_url('website/account_status');?>" class="btn btn-lg btn-info form-control">DEPOSIT</a></div>
            <div class="col-md-3 col-12 mb-2"><a href="<?= base_url('website/receipt_login');?>" class="btn btn-lg btn-info form-control">E-RECEIPT</a></div>
            <div class="col-md-3 col-12 mb-2"><a href="<?= base_url('website/session_wise_search');?>" class="btn btn-lg btn-info form-control">DEPOSIT DETAILS</a></div>
            <div class="col-md-3 col-12 mb-2"><a href="<?= base_url('website/withdraw_login_controller');?>" class="btn btn-lg btn-info form-control">WITHDRAWAL</a></div>
          </div>
          
           <div class="table-responsive" style="background-color: white;">
              <table class="table " style="border:2px dashed #2e3192; ">
                <thead>
                  <tr class="text-center">
                    <td scope="col" colspan="3"><h5 class="text-secondary">A/C No. : <?= $details['account_no'];?></h5></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"><span class="text-info">Account Opening Date :</span>  <?= date('d-m-Y',strtotime($details['added_on']));?></td>
                    <td rowspan="3" class="text-center"><label class="form-control" style="height:200px;" ><img src="<?php echo base_url($details['image'])?>"  height="200"></label></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span class="text-info">Member Id No. :</span> <?= $details['member_id'];?></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span class="text-info">User Name :</span><?= $details['username'];?></td>
                  </tr>
                  <tr>
                    <td><span class="text-info">State Unit/Code No. :</span> <?= $details['state_unit_name'];?></td>
                    <td colspan="2"><span class="text-info">Code No. :</span></td>
                  </tr>
                   <tr>
                    <td><span class="text-info">Division/Code No. :</span> <?= $details['division_unit'];?></td>
                    <td colspan="2"><span class="text-info">Code No. :</span></td>
                  </tr>
                  <tr>
                    <td><span class="text-info">District :</span> <?= $details['dist_unit'];?></td>
                    <td colspan="2"><span class="text-info">Code No. :</span></td>
                  </tr>
                  <tr>
                    <td colspan="3"><span class="text-info">Sponsor Id No. :</span><?= $details['sponsor_id'];?></td>
                  </tr>
                  <tr>
                    <td><span class="text-info">Group Name/ No. :</span><?= $details['group_name'];?></td>
                    <td colspan="2"><span class="text-info">No. :</span></td>
                  </tr>
                 
                  <tr>
                    <td colspan="3"></td>
                  </tr>
                  <tr>
                    <td colspan="3"><span class="text-info">Account Holder Name :</span><?= $details['account_holder_name'];?></td>
                  </tr>
                   <tr>
                    <td colspan="3"><span class="text-info">Father/Husband Name :</span><?= $details['father_husband_name'];?></td>
                  </tr>
                  <tr>
                    <td colspan="3"><span class="text-info">Date Of Birth :</span><?= date('d-m-Y',strtotime($details['father_husband_name']));?></td>
                  </tr>
                  <tr>
                    <td colspan="3"><span class="text-info">Aadhar Number :</span><?= $details['aadhar_no'];?></td>
                  </tr>
                  <tr>
                    <td colspan="3"><span class="text-info">Mobile Number :</span><?= $details['mobile_no'];?></td>
                  </tr>
                  <tr>
                    <td colspan="3"><span class="text-info">E-Mail :</span><?= $details['email'];?></td>
                  </tr>
                  <tr>
                    <td colspan="3"><span class="text-info">Provisional Address :</span><?= $details['village'].','.$details['panchayat'].','.$details['ward_no'].','.$details['police_station'].','.$details['block'].','.$details['subdivision'].','.$details['district'].',Pin-'.$details['pin_code'];?></td>
                  </tr>
                  <tr>
                    <td colspan="3"><span class="text-info">Saving Plan :</span><?= $details['email'];?></td>
                  </tr>
                   <tr>
                    <td colspan="3"><span class="text-info">Term Year :</span><?= $details['team_year'];?></td>
                  </tr>
                  <tr>
                    <td colspan="3"><span class="text-info">Annual Intrest :</span></td>
                  </tr>
                  <tr>
                    <td colspan="3"><span class="text-info">Nominee :</span><?= $details['nominee_name'];?></td>
                  </tr>
                  <tr>
                    <td colspan="3"><span class="text-info">Payment Team :</span></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>