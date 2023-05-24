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
              <a href="<?= base_url('/');?>"><img src="<?= base_url('assets/website/images/logo1Copy-removebg-preview.png');?>" class="logo"> </a>
            </div>
            <div class="loginbox">
              <form method="POST" action="<?= base_url('website/receipt_check')?>">  
              <div class="row">
              <div class="col-md-12">
                <h5 class="text-center" style="color: black; font-weight: 700;">E-Receipt Details</h5>
              </div>
              <div class="col-md-12">
                  <label>DEPOSIT DATE</label>
                  <input name="dp_date" type="date" id="dp_date" class="form-control" required placeholder="Deposit Date">
              </div>
              <div class="col-md-12 mb-2">
               
                  <label>RECEIPT NO.</label>
                  <input name="recept_no" type="text"  class="form-control" required placeholder="recept_no">
              </div>
              <!-- <div class="col-md-6">
                   <a href="<?= base_url('website/signup');?>"><input type="button"   name="btnLogin" value="SIGNUP"  class="btn btn-danger btn-block"></a>
              </div> -->
              <div class="col-md-12 text-center mb-2" >
                <button type="submit" value="LOGIN" class="btn btn-block btn-success">LOGIN</button>
              </div>
              
               
            </div>
            </form>
            </div>
          </div>
          <div class="col-md-3"></div>
         
        </div>
      </div>
    </section>