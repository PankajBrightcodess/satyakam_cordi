  <section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <h1 class="tittle">MY PROFILE FEATURES</h1>
            <div class="table-responsive">
              <table class="table table-hover" style="text-align: center;">
                <thead>
                  <tr>
                    <th scope="col">Feature's</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><label class="ml-2">MEMBERSHIP CERTIFICATE</label> <a href="<?= base_url('website/get_member_certificate');?>" class="btn btn-sm btn-success mr-5" >DOWNLOAD</a></td>
                    <td>AADHAR <a href="<?= base_url($uploadfiles['aadhar_front']);?>" class="btn btn-sm btn-success ml-2">DOWNLOAD</a></td>
                  </tr>
                  <tr>
                    <td>ELECTION ID CARD<a href="<?= base_url($uploadfiles['election_id_card']);?>" class="btn btn-sm btn-success ml-2" >DOWNLOAD</a></td>
                    <td>PAN CARD <a href="<?= base_url($uploadfiles['pan_card']);?>" class="btn btn-sm btn-success ml-2" >DOWNLOAD</a></td>
                  </tr>
                  <tr>
                    <td ><label class="ml-5">PASSBOOK</label> <a href="<?= base_url($uploadfiles['passbook_bank']);?>" class="btn btn-sm btn-success ml-2" >DOWNLOAD</a></td>
                    <td>CERTIFICATE <a href="<?= base_url($uploadfiles['qualification_certificate']);?>" class="btn btn-sm btn-success ml-2" >DOWNLOAD</a></td>
                  </tr>
                  <tr>
                    <td ><img src="<?= base_url($uploadfiles['member_sign']);?>" class="img-fluid" height="200" width="300" ></td>
                    <td><img src="<?= base_url($uploadfiles['member_right_hand_thumb']);?>"class="img-fluid" height="200" width="300"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
           
        </div>
      </div>
    </section>