  <title>LOGIN | Satyakam Foundation</title>
    <link rel="shortcut icon" href="<?= base_url('assets/website/images/logo3.png');?>">
  <style type="text/css">
      .login {
    background-image: url(http://localhost/SATYALAPTOP/satyakam_cordi/assets/website/images/491677.jpg);
    background-size: cover;
    width: 100%;
    height: 100vh;
    background-attachment: fixed;
    background-position: center;
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
              <a href="<?= base_url('/');?>"><img src="<?= base_url('assets/website/images/logo1Copy-removebg-preview.png');?>" class="logo"> </a>
            </div>
            <div class="loginbox">
              <form method="POST" action="<?= base_url('website/logincheck')?>">  
              <div class="row">
              <div class="col-md-12">
                <h5 class="text-center" style="color: black; font-weight: 700;">LOGIN YOUR ID</h5>
              </div>
              <div class="col-md-12">
               
                  <label>USER ID</label>
                  <input name="txtUserid" type="text" id="txtUserid" class="form-control" required placeholder="User Id">
                 
              </div>
              <div class="col-md-12 mb-5">
               
                  <label>PASSWORD</label>
                  <input name="txtPassword" type="password" id="txtPassword" class="form-control" required placeholder="Password">
                
              </div>
             
              <div class="col-md-6">
                   <a href="<?= base_url('website/signup');?>"><input type="button"   name="btnLogin" value="SIGNUP"  class="btn btn-danger btn-block"></a>
              </div>
              <div class="col-md-6 mb-3" >
                <button type="submit" name="btnLogin" value="LOGIN" class="btn btn-block btn-success">LOGIN</button>
                 <!--  <input type="button" name="btnLogin" value="LOGIN"  class="btn btn-success btn-block     confrmidpass"> -->
              </div>
              <div class="col-md-12">
                <hr>
              </div>
               <div class="col-md-12">
                <div class="form-group text-right">
                  <a type="button" data-toggle="modal" data-target="#exampleModal" style="color:#000;">Forgot Password?</a>
                </div>
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
      <form method="POST" action="<?= base_url('forgot-pass-officer');?>">
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