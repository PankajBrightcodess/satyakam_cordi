<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" style="color:white!important;background: white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active"><a class="nav-link" href="<?= base_url('website');?>"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a></li>
      <li class="nav-item dropdown  active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-id-card" aria-hidden="true"></i> About Us</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('website/aboutus');?>" style="color:white">About Us</a>
          <a class="dropdown-item" href="<?= base_url('website/foundermessage');?>" style="color:white">Founder Message</a>
        </div>
      </li>
      <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/office_login');?>"><i class="fa fa-briefcase" aria-hidden="true"></i> Official Services</a></li>
      <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/submember_login_home');?>"><i class="fa fa-life-ring" aria-hidden="true"></i> Projects</a></li>
       <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/vacancy');?>"><i class="fa fa-cube" aria-hidden="true"></i> Vacancy</a></li>
     
      <li class="nav-item  active"><a class="nav-link" href="#"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i> Events</a></li>
      <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/gallery');?>"><i class="fa fa-film" aria-hidden="true"></i> Gallery</a></li>
      <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/legaldoc');?>"><i class="fa fa-space-shuttle" aria-hidden="true"></i> Legal Documents</a></li>
      <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/privacypolicy');?>"><i class="fa fa-user-secret" aria-hidden="true"></i> Privacy Policy</a></li>
      <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/contactus');?>"><i class="fa fa-tty" aria-hidden="true"></i> Contact Us</a></li>
    </ul>
  </div>
</nav>