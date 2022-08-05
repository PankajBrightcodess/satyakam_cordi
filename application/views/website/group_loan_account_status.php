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
              <form method="POST" action="<?= base_url('website/group_check')?>">  
              <div class="row">
              <div class="col-md-12">
                <h5 class="text-center" style="color: black; font-weight: 700;">Check Group Loan Status</h5>
              </div>
              <div class="col-md-12">
                  <label>Group User Name</label>
                  <input type="text" name="group_id" id="group_id" class="form-control" required placeholder="Group User Name">
              </div>
              <div class="col-md-12 mb-5">
               
                  <label>Member Id</label>
                  <input name="member_id" type="text"  class="form-control" required placeholder="Member Id">
              </div>
              <div class="col-md-12 text-center mb-3" >
                <button type="submit" value="LOGIN" class="btn btn-block btn-success">LOGIN</button>
              </div>
              <div class="col-md-12">
                <hr>
              </div>
               
            </div>
            </form>
            </div>
          </div>
          <div class="col-md-3"></div>
         
        </div>
      </div>
    </section>