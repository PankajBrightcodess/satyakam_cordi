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
   <link rel="stylesheet" href="<?= base_url('assets/payment_css/android.css')?>">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <?php if(isset($this->session->web_msg)){ ?>
<script type="text/javascript">
   swal("Good job!", "You clicked the button!", "success");
   swal('Good job!','<?php echo $this->session->web_msg;?>','success');
</script>
   <?php }else if(isset($this->session->web_err_msg)){ ?>
<script type="text/javascript">
   swal("Good job!", "You clicked the button!", "success");
   // swal('Opps!','<?php echo $this->session->web_err_msg;?>','error');
</script>

      <?php }
      ?>
   </head>
   <body>