  <title>LOGIN | Satyakam Foundation</title>
    <link rel="shortcut icon" href="<?= base_url('assets/website/images/logo3.png');?>">
  <style type="text/css">
      .login{
             background-image:url(<?= base_url('assets/website/images/491677.jpg');?>); background-size:cover; width:100%; height:100vh;
      }
      .loginbox {
        /*rgba(0,0,0,0.6)*/
          background-color: white;
          opacity: 77%;
          color: black;
          padding: 9px;
          margin-top: 27px;
          padding: 20px;
      }
      label{
        font-weight: 700;
        font-size: 14px;
      }
      .logo{
        margin-top: 100px;
        height: 140px;
        width: 140px;
      }
  </style>
<section class="login">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          
          <div class="col-md-6">
           <div class="text-center">
              <a href="<?= base_url('/');?>"><img src="<?= base_url('assets/website/images/logo1Copy-removebg-preview.png');?>" class="logo"></a>
            </div>
            <div class="loginbox">
              <form method="POST" action="<?= base_url('change-pass-candidate');?>">  
              <div class="row">
              <div class="col-md-12">
                <h5 class="text-center" style="font-weight: 700;color: black  ;">Password Change</h5>
              </div>
              <div class="col-md-12">
               
                  <label>Enter New Password</label>
                  <input name="password" type="text" id="new_password" class="form-control" required placeholder="New Password">
                  <input name="id" type="hidden" readonly="true"  id="id" class="form-control" value="<?php echo $record['id'];?>" required>
                  <input name="user_name" type="hidden" readonly="true" id="user_name" value="<?php echo $record['user_name'];?>" class="form-control" required >
                 
                  <input name="mobile_no" type="hidden" readonly="true" id="mobile_no" value="<?php echo $record['mobile_no'];?>" class="form-control" required >
                 
              </div>
              <div class="col-md-12 mb-5">
                  <label>Confirm Password</label>
                  <input name="confirm_password" type="password" id="confirm_password" class="form-control" required placeholder="Confirm Password">
                
              </div>
             
             
              <div class="col-md-12 mb-3 text-center" >
                <button type="submit" value="LOGIN" class="btn btn-block btn-success">Submit</button>
                 <!--  <input type="button" name="btnLogin" value="LOGIN"  class="btn btn-success btn-block     confrmidpass"> -->
              </div>
               
            </div>
            </form>
            </div>
          </div>
          <div class="col-md-3"></div>
         
        </div>
      </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title " id="exampleModalLabel">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?= base_url('forgot-pass-candidate');?>">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 col-12">
            <input type="text" name="user_name" class="form-control" placeholder="Enter User Name">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <!--  <script type="text/javascript">

        $('body').on('click','.confrmidpass',function(){
          alert('jhdfs');
        var userid = $('#txtUserid').val();
        var password = $('#txtPassword').val();
       
       });
    </script> -->