<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" style="color:white!important;background: white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
     <li class="nav-item  active"><a class="nav-link" href="<?= base_url('website/memberdashboard')?>">Dashboard</a></li>
       <li class="nav-item active"><a class="nav-link" href="<?= base_url('website/my_group');?>">My Profile <span class="sr-only"></span></a></li>
       <li class="nav-item active"><a class="nav-link" href="<?= base_url('website/member_general_group')?>">My General Group<span class="sr-only"></span></a></li>
       <li class="nav-item active"><a class="nav-link" href="<?= base_url('website/my_club_group_features')?>">My Club group Features <span class="sr-only"></span></a></li>
       <!--  <li class="nav-item active"><a class="nav-link" href="#">Join The Club <span class="sr-only"></span></a></li> -->
        <li class="nav-item active"><a class="nav-link" href="<?= base_url('website/my_saving_account_features')?>">My Savings A/C <span class="sr-only"></span></a></li>
        <li class="nav-item active"><a class="nav-link" href="<?= base_url('website/my_loan_account_features')?>">My Loan Account <span class="sr-only"></span></a></li>
        <li class="nav-item active"><a class="nav-link" href="<?= base_url('website/my_loan_account_features')?>">Notification<span class="sr-only"></span></a></li>
         <li class="nav-item dropdown  active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Setting</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('website/member_logout');?>" style="color:white">Logout</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>