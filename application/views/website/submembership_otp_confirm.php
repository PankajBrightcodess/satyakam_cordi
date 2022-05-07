   <section class="officialservices">
      <div class="container">
        <div class="row">
              <div class="col-md-3 mb-3"></div>
          <div class="col-md-6 mb-3 text-center">
            <center class="tittle"><h2></h2><h4>OTP confirmation</h4></center>
            <form action="<?= base_url('website/create_submembership')?>" method="POST" style="border:1px solid black;padding:10px; margin-top:20px; background:white;">
              <div class="row">
                 <div class="col-md-12 mb-2">
                  <!-- <label for="application_date">OTP :</label> -->
                  <input type="text" name="application_date" placeholder="Please Enter OTP :" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                  <input type="submit" class="mt-4 btn btn-sm" style="background:#233799;color:white">
                </div>
              </div>
            </form>
          </div>
           <div class="col-md-3 mb-3"></div>
        </div>
      </div>
    </section>
    <!-- '''''''''''''''''''''''''model area'''''''''''''''''''''''''''''''''''' -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirmation OTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
       <input type="text" name="otp" required placeholder="Enter OTP" class="form-control">
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <a href="<?= base_url('website/econtractform')?>" type="submit" class="btn btn-sm btn-success ">Save</a>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
      </form>
    </div>
  </div>
</div>