 <section class="officialservices">
      <div class="container">
        <div class="row">
          <!--   <div class="col-md-6 col-6" style="margin-bottom:5px">
              <a href="login.php"><button type="submit" class="mt-4 btn btn-sm btn-block" style="background:#233799;color:white">LOGIN</button></a>
            </div>
            <div class="col-md-6 col-6" style="margin-bottom:5px">
              <a href="signup.php"><button type="submit" class="mt-4 btn btn-sm btn-block" style="background:#233799;color:white;">SIGN UP</button></a></div> -->
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-3">
            <center class="tittle"><h3>Sign Up Form</h3></center>
            <form action="#"style="border:1px solid black;padding: 10px;margin-top: 20px;background: white;">
              <div class="row">
                <div class="col-md-12 mb-2">
                  <input type="text" name="student-name" placeholder="Batch Number :" class="form-control" required>
                </div>
                <div class="col-md-6 mb-2">
                  <select name="gender" class="form-control" required >
                    <option value="">Joining In Branch :</option>
                    <option value="Male">A - Branch</option>
                    <option value="Female">B - Branch</option>
                  </select>
                </div>
                <div class="col-md-6 mb-2">
                  <select name="gender" class="form-control" required >
                    <option value="">Department :</option>
                    <option value="state">A - Department</option>
                    <option value="central">B - Department</option>
                  </select>
                </div>
                <div class="col-md-12 mb-2">
                  <select name="gender" class="form-control" required >
                    <option value="">Branch Code :</option>
                    <option value="state">A - Branch Code</option>
                    <option value="central">B - Branch Code</option>
                  </select>
                </div>
                <div class="col-md-12 mb-2">
                  <select name="gender" class="form-control" required >
                    <option value="">Name Of Post :</option>
                    <option value="state">A - Post</option>
                    <option value="central">B - Post</option>
                  </select>
                </div>
                <div class="col-md-12 mb-2">
                  <input type="text" name="requested-class" placeholder="Name Of The Officer :" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                  <input type="text" name="session" placeholder="Mobile Number :" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                  <input type="email" name="session" placeholder="Email Id :" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                  <a href="<?= base_url('website/econtractform');?>" class="mt-4 btn btn-sm btn-block" data-toggle="modal" data-target=".bd-example-modal-sm" style="background:#233799;color:white">Sign Up</a>
                </div>
              </div>
            </form>
            

          </div>
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