  <title>LOGIN | Satyakam Foundation</title>
    <link rel="shortcut icon" href="<?= base_url('assets/website/images/logo3.png');?>">
  <style type="text/css">
      .login{
             background-image:url(<?= base_url('assets/website/images/491677.jpg');?>); background-size:cover; width:100%; height:100vh;
      }
      .loginbox {
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
              <form method="POST" action="<?= base_url('website/check_memberlogin');?>">  
              <div class="row">
              <div class="col-md-12">
                <h3 class="text-center" style="color: black">MEMBER LOGIN</h3>
              </div>
              <div class="col-md-12">
               
                  <label>EMAIL ID</label>
                  <input name="emailid" type="text" id="emailid" class="form-control" required placeholder="Email Id">
                 
              </div>
              <div class="col-md-12 mb-5">
               
                  <label>PASSWORD</label>
                  <input name="password" type="password" id="txtPassword" class="form-control" required placeholder="Password">
                
              </div>
             
              <div class="col-md-6">
                   <!-- <a href="<?= base_url('website/vacencysignup');?>"><input type="button"   name="btnLogin" value="SIGNUP"  class="btn btn-danger btn-block"></a> -->
              </div>
              <div class="col-md-12 mb-3 text-center" >
                <button type="submit" value="LOGIN" class="btn btn-block btn-success">LOGIN</button>
                 <!--  <input type="button" name="btnLogin" value="LOGIN"  class="btn btn-success btn-block     confrmidpass"> -->
              </div>
               <div class="col-md-12">
                <!-- <div class="form-group text-right">
                  <a href="#" style="color:#fff;">FORGOT PASSWORD?</a>
                </div> -->
              </div>
            </div>
            </form>
            </div>
          </div>
          <div class="col-md-3"></div>
         
        </div>
      </div>
    </section>
    <!--  <script type="text/javascript">

        $('body').on('click','.confrmidpass',function(){
          alert('jhdfs');
        var userid = $('#txtUserid').val();
        var password = $('#txtPassword').val();
       
       });
    </script> -->