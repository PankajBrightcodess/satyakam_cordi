<!DOCTYPE html>
<html>
<head>
<title>Satyakam</title>
<link rel="icon" href="<?= base_url('assets/website/images/logo1.jpg');?>" type="image/icon type">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url('assets/website/css/style.css');?>">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
 <link rel="stylesheet" href="<?= base_url('includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');?>">
        <link rel="stylesheet" href="<?= base_url('includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');?>">


   <link rel="stylesheet" href="http://localhost/satyakam_cordi/includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="http://localhost/satyakam_cordi/includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"></head>
      <!-- <script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
   <script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js'></script>
   <script src='https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js'></script>
   <script src='https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js'></script>
   <script src='https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js'></script>
   <script src='https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js'></script> -->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        


   <link rel="stylesheet" href="<?= base_url('assets/payment_css/android.css')?>">
   <link rel="stylesheet" href="<?= base_url('assets/website/css/lightbox.css')?>">
   <link rel="stylesheet" href="<?= base_url('assets/website/css/animate.css')?>">
   <link rel="stylesheet" href="<?= base_url('assets/website/lib/animate/animate.min.css')?>">

   

   <link rel="stylesheet" href="<?= base_url('assets/website/owlcarousel/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/website/owlcarousel/owl.theme.default.min.css')?>">




   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <?php if(isset($this->session->web_msg)){ ?>
<script type="text/javascript">
   swal("Good job!", "You clicked the button!", "success");
   swal('Good job!','<?php echo $this->session->web_msg;?>','success');
</script>
   <?php }else if(isset($this->session->web_err_msg)){ ?>
<script type="text/javascript">
   swal("Good job!", "You clicked the button!", "success");
   swal('Opps!','<?php echo $this->session->web_err_msg;?>','error');
</script>
      <?php }
      ?>
      <style>
         /*==================== BANNER MEDIA QUERRY =========================*/
@media(min-width: 2560px){.mobile{display: none!important;}}
@media(min-width: 1440px){.mobile{display: none!important;}}
@media(min-width: 1024px){.mobile{display: none!important;}}
@media(min-width: 768px){.mobile{display: none!important;}}
@media(max-width: 576px){.desktopp{ display: none!important;}}
@media (max-width: 425px){.desktopp{ display: none!important;}}
@media (max-width: 375px){.desktopp{ display: none!important;}}
@media (max-width: 320px){.desktopp{ display: none!important;}}
      </style>
   </head>
   <body style="background-image: url(<?= base_url('assets/website/images/bg.png')?>);background-attachment:fixed;background-size:cover;background-position:center">