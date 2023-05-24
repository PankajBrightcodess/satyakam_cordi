  <section class="officialservices">
      <div class="container">
        <div class="row justify-content-center" >
          <div class="col-md-12">
            <h3 class="tittle">My Club Status</h3>
            <div class="table-responsive">
              <table class="table table-hover fform">
                <thead>
                  <tr>
                    <td scope="col"><span style="color:black;">LIC No.</span></td>
                    <td scope="col"><span style="color:black;">Updating Date :</span>  <?= date('d-m-Y');?></td>
                    <td scope="col"><span style="color:black;">Time :</span> <?= date('h:i A');?></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"><span style="color:black;">User Name :</span><?= $all_data['username'];?></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span style="color:black;">Member Id No. :</span><?= $all_data['membership_no'];?></td>
                  </tr>
                 <!--  <tr>
                    <td colspan="2">Authorized Member Name</td>
                  </tr> -->
                  <tr>
                    <td><span style="color:black;">State Unit :</span>State Unit :<?= $all_data['state'];?></td>
                    <td><span style="color:black;">Division Unit :</span><?= $all_data['division'];?></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span style="color:black;">District Unit :</span><?= $all_data['division'];?></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span style="color:black;">Sponsor Id No. :</span><?= $all_data['member_creator'];?></td>
                  </tr>
                  <tr>
                    <td><span style="color:black;">Mobile No. :</span><?= $all_data['member_mobile'];?></td>
                    <td><span style="color:black;">Email :</span><?= $all_data['member_email'];?></td>
                  </tr>
                  <tr>
                    <td><span style="color:black;">Level :</span><?= $all_data['super'];?></td>
                    <td><span style="color:black;">Team Size :</span><?= $all_data['member_count'];?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>