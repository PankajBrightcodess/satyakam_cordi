  <section class="officialservices">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <h3 class="tittle">MY PROFILE FEATURES</h3>
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
                    <td><label class="ml-2">MEMBERSHIP CERTIFICATE</label> <a href="<?= base_url('website/get_member_certificate');?>" class="btn btn-sm btn-success btn-block mr-5" >DOWNLOAD</a></td>
                     <td>QUALIFICATION CERTIFICATE <a href="<?= base_url($uploadfiles['qualification_certificate']);?>" class="btn btn-sm btn-success btn-block ml-2" >DOWNLOAD</a></td>
                    
                  </tr>
                  <tr>  
                    <td>AADHAR(Front) <a href="<?= base_url($uploadfiles['aadhar_front']);?>" class="btn btn-sm btn-success btn-block ml-2">DOWNLOAD</a></td>
                    <td>AADHAR(back) <a href="<?= base_url($uploadfiles['aadhar_back']);?>" class="btn btn-sm btn-success btn-block ml-2">DOWNLOAD</a></td>
                  </tr>
                  <tr>  
                   <td>ELECTION ID CARD(Front)<a href="<?= base_url($uploadfiles['election_id_card']);?>" class="btn btn-sm btn-success btn-block ml-2" >DOWNLOAD</a></td>
                    <td>ELECTION ID CARD(Back)<a href="<?= base_url($uploadfiles['election_id_card_back']);?>" class="btn btn-sm btn-success btn-block ml-2">DOWNLOAD</a></td>
                  </tr>
                  <tr>
                    
                    <td>PAN CARD <a href="<?= base_url($uploadfiles['pan_card']);?>" class="btn btn-sm btn-success btn-block ml-2" >DOWNLOAD</a></td>
                     <td ><label class="ml-5">PASSBOOK</label> <a href="<?= base_url($uploadfiles['passbook_bank']);?>" class="btn btn-sm btn-success btn-block ml-2" >DOWNLOAD</a></td>
                  </tr>
                  <tr>
                   
                   
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