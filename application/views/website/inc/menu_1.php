<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" style="color:white!important;background: white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContentt" aria-controls="navbarSupportedContentt" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContentt">
    <ul class="navbar-nav mx-auto">
      <!-- <?php 
      print_r($records);?>  -->
      <?php
          if($records['e_contract']=='true'){
            ?>
            <li class="nav-item dropdown  active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">E-Contract</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url('website/econtractdocx');?>" style="color:white">My Documents</a>
                <a class="dropdown-item" href="<?= base_url('website/econtractkyc');?>" style="color:white">KYC</a>
                <a class="dropdown-item" href="<?= base_url('website/econtractmyteam');?>" style="color:white">My Team Office</a>
              </div>
            </li>
      <?php
      }
    ?>
    <?php if($records['my_office']=='true'){
      ?>
      <li class="nav-item dropdown  active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">My Office</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('website/myofficereport');?>" style="color:white">My Report</a>
          <a class="dropdown-item" href="<?= base_url('website/myofficeexpense');?>" style="color:white">Office Expense</a>
          <a class="dropdown-item" href="<?= base_url('website/myofficemyteam');?>" style="color:white">My Team Office</a>
        </div>
      </li>
      <?php
    }?>

    <?php if($records['my_project']=='true'){
      ?>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
          My Project
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="#" style="color:white">Aajeevika</a>
            <ul class="dropdown-menu">
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#" style="color:white">Group</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a class="dropdown-item" href="<?= base_url('website/ajeevikageneralgrp');?>" style="color:white">General Group</a>
                    <li><a class="dropdown-item" href="<?= base_url('website/ajeevikamyclubgrp');?>" style="color:white">My Club Group</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('website/ajeevikamyclubincome');?>" style="color:white">My Club Income</a></li>
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#" style="color:white">4WS Saving </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a class="dropdown-item" href="ajeevika4wssaving.php" style="color:white">Open Account / Weekly Deposit</a>
                    
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#" style="color:white">Loan </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#" style="color:white">Self Loan</a>
                    <li><a class="dropdown-item" href="myproject.php" style="color:white">Personal Loan</a></li>
                    <li><a class="dropdown-item" href="myproject.php" style="color:white">Enterprise Loan</a></li>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          
          <li><a class="dropdown-item" href="#" style="color:white">I-CON INDIA</a></li>
          <li><a class="dropdown-item" href="#" style="color:white">Village Mart</a></li>
          
        </ul>
      </li>
      <?php
    }?>
      <?php if($records['events']=='true'){
        ?><li class="nav-item  active"><a class="nav-link" href="#">Events</a></li><?php
      }?>

      <?php if($records['gallery']=='true'){
        ?><li class="nav-item  active"><a class="nav-link" href="#">Gallery</a></li><?php
      }?>
      <?php if($records['vecency']=='true'){
        ?><li class="nav-item  active"><a class="nav-link" href="officialservicevacency.php">Vacancy</a></li><?php
      }?>
      
      
      
      
      <li class="nav-item dropdown  active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Setting</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('website/logout');?>" style="color:white">Logout</a>
        </div>
      </li>

    </ul>
  </div>
</nav>