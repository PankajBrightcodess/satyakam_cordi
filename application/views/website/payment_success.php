
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Payment Success</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700|Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <!--  Custom css -->
    <link rel="stylesheet" href="<?= base_url('assets/payment_css/android.css')?>">
      <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- carousel -->
    <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
     <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
  </head>
  <body style="background: #dff5df;">
    <section class="payment-success">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="payment-success-box">
              <img src="https://img.icons8.com/ios-filled/50/000000/cloud-checked.png"/>
              <h3>Payment Successfull !!!</h3>
              <p style="color:green;">Your Payment has been Successfully Recieved !!!</p>
              <a href="<?php echo base_url('/')?>" class="btn btn-success mt-2">Done</a>
            </div>
          </div>
        </div>
      </div>
    </section>
   <!-- <?php include'footerlink.php'; ?> -->
  </body>
</html>