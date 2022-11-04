<div class="footer">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-newsletter">
                        <h2 style="border-bottom: 1px solid white;">Satyakam Foundation Trust</h2>
                        <p style="text-align:justify">The operation of all the ambitious schemes run by the Satyakam Foundation Trust , mainly to provide many opportunities in the field of health and education and prosperity of rural India, our organization is dedicated to providing help to all sections and communities of the society through its innovative schemes.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-link " style="font-size:13px">
                        <h2 style="border-bottom: 1px solid white;">Quick Links</h2>
                        <!-- <a href="#">Home</a>
                        <a href="#">Services</a>
                        <a href="#">Gallery</a>
                        <a href="#">About Us</a>
                        <a href="#">Contact Us</a> -->
                       <a href="<?php echo base_url('website/term_condition');?>">Terms and Condition</a>
                        <a href="<?php echo base_url('website/privacypolicy');?>">Privacy Policy</a>
                        <a href="<?php echo base_url('website/changepolicy');?>">Return and Refund Policy</a>
                        <a href="<?php echo base_url('website/cancel_policy');?>">Cancellation Policy</a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-contact">
                        <h2 style="border-bottom: 1px solid white;">Our Address</h2>
                        <p><i class="fa fa-map-marker-alt"></i>Satyakam Foundation Trust</p>
                        <p><i class="fa fa-phone-alt"></i>+91-9031023059, 9031023060</p>
                        <p><i class="fa fa-envelope"></i>indiaskfoundation468@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-3 footer-newsletter">
                    <h2 style="border-bottom: 1px solid white;">Social Links</h2>
                    <div class="footer-social" style="margin-bottom: 10px;margin-left: 26px;">
                        <a href="https://twitter.com/Indiasatyakam22/" target="blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2Fsettings%3Ftab%3Daccount%26section%3Dusername" target="blank"><i class="fab fa-facebook-f" target="blank"></i></a>
                        <a href="" target="blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/" target="blank"><i class="fab fa-instagram"></i></a>
                        <a href="" target="blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Email goes here">
                        <button class="btn custom-btn" style="background:#ff0000;border: 2px solid #ff0000;color: white;">Submit</button>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>All Right Reserved,2022 <a href="#"> Satyakam Foundation Trust</a></p>        
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="https://www.brightcodess.com/"> Brightcode Software Services Pvt Ltd.</a></p>        
                </div>
            </div>
            
            
        </div>
    </div>
</div>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- ''''''model admit card'''''''' -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <form method="POST" action="<?php echo base_url('website/login_vacency_foradmitcard')?>">
          <div class="modal-header" style="background:#2e3192; color: white;">
            <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <div class="row">
               <div class="col-md-12 col-12 mb-3"><input type="email" name="emailid" placeholder="Enter Valid Email" class="form-control"></div>
               <div class="col-md-12 col-12"><input type="password" name="password" placeholder="Enter Password" class="form-control"></div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>