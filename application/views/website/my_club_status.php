  <section class="officialservices">
      <div class="container">
        <div class="row justify-content-center" >
          <div class="col-md-12">
            <h1 class="tittle">My Club Status</h1>
            <div class="table-responsive">
              <table class="table table-hover" style="border:2px dashed #2e3192;">
                <thead>
                  <tr>
                    <td scope="col"><span style="color:deepskyblue;">LIC No.</span></td>
                    <td scope="col"><span style="color:deepskyblue;">Updating Date :</span>  <?= date('d-m-Y');?></td>
                    <td scope="col"><span style="color:deepskyblue;">Time :</span> <?= date('h:i A');?></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"><span style="color:deepskyblue;">User Name :</span><?= $all_data['username'];?></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span style="color:deepskyblue;">Member Id No. :</span><?= $all_data['membership_no'];?></td>
                  </tr>
                 <!--  <tr>
                    <td colspan="2">Authorized Member Name</td>
                  </tr> -->
                  <tr>
                    <td><span style="color:deepskyblue;">State Unit :</span>State Unit :<?= $all_data['state'];?></td>
                    <td><span style="color:deepskyblue;">Division Unit :</span><?= $all_data['division'];?></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span style="color:deepskyblue;">District Unit :</span><?= $all_data['division'];?></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span style="color:deepskyblue;">Sponsor Id No. :</span><?= $all_data['member_creator'];?></td>
                  </tr>
                  <tr>
                    <td><span style="color:deepskyblue;">Mobile No. :</span><?= $all_data['member_mobile'];?></td>
                    <td><span style="color:deepskyblue;">Email :</span><?= $all_data['member_email'];?></td>
                  </tr>
                  <tr>
                    <td><span style="color:deepskyblue;">Level :</span><?= $all_data['super'];?></td>
                    <td><span style="color:deepskyblue;">Team Size :</span><?= $all_data['member_count'];?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>