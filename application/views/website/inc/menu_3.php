<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" style="color:white!important;background: white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <!-- <li class="nav-item active"><a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a></li> -->
       <li class="nav-item active"><a class="nav-link" href="<?= base_url('website/groupdashboard');?>">Group Profile Features<span class="sr-only"></span></a></li>
       <li class="nav-item active"><a class="nav-link" href="<?= base_url('website/memberslink');?>">members Link Features<span class="sr-only"></span></a></li>
     
        <li class="nav-item active"><a class="nav-link" href="<?= base_url('website/collective_saving');?>">Collective Savings/Deposit Features<span class="sr-only"></span></a></li>
        <li class="nav-item active"><a class="nav-link" href="<?= base_url('website/enterprises_feature');?>">Enterprises Features<span class="sr-only"></span></a></li>
      
         <li class="nav-item dropdown  active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Setting</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('website/group_logout');?>" style="color:white">Logout</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>