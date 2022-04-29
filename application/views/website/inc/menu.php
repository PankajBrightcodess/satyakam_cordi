<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" style="color:white!important;background: white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active"><a class="nav-link" href="<?= base_url('website');?>">Home <span class="sr-only">(current)</span></a></li>
      <li class="nav-item dropdown  active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">About Us</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('website/aboutus');?>" style="color:white">About Us</a>
          <a class="dropdown-item" href="<?= base_url('website/foundermessage');?>" style="color:white">Founder Message</a>
        </div>
      </li>
      <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/office_login');?>">Official Services</a></li>
      <li class="nav-item  active"><a class="nav-link" href="#">Projects</a></li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
          Vacancy
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="<?= base_url('website/mainvacency');?>" style="color:white">Vacancy</a></li>
          <li><a class="dropdown-item" target="_blank" href="<?= base_url('assets/website/legaldocpdf/sgdh.pdf')?>" style="color:white">Guideline</a></li>
          <li><a class="dropdown-item" href="<?= base_url('website/vacency_login');?>" style="color:white">Online Apply</a></li>
          <!-- apply_online -->
          <li><a class="dropdown-item" href="<?= base_url('website/vacency_login_foradmitcard');?>" style="color:white;">Download Admit Card</a></li>
          <!-- data-toggle="modal" data-target="#exampleModalCenter" -->
          <li><a class="dropdown-item" href="#" style="color:white">Results</a></li>
          <li><a class="dropdown-item" href="<?= base_url('website/helpline');?>" style="color:white">Helpline</a></li>
        </ul>
      </li>
      <li class="nav-item  active"><a class="nav-link" href="#">Events</a></li>
      <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/gallery');?>">Gallery</a></li>
      <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/legaldoc');?>">Legal Documents</a></li>
      <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/privacypolicy');?>">Privacy Policy</a></li>
      <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/contactus');?>">Contact Us</a></li>
    </ul>
  </div>
</nav>