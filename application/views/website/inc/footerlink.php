<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<!-- <script
  src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
<script src="<?php echo file_url("includes/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
  <!-- <script src="<?= base_url('includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script> -->
<script src="<?= base_url('includes/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?= base_url('includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>
<script src="<?= base_url('assets/website/js/lightbox.js');?>"></script>

<script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
   <script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js'></script>
   <script src='https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js'></script>
   <script src='https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js'></script>
   <script src='https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js'></script>
   <script src='https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js'></script>
   <script src="<?= base_url('assets/website/owlcarousel/owl.carousel.min.js');?>"></script>

    <script>
        $(document).ready(function() {
            var owl = $('#partenerrraf');
            owl.owlCarousel({
                loop: true,
                nav: false,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {

                    0: {

                        items: 1
                    },
                    375: {

                        items: 1
                    },
                    600: {

                        items: 2
                    },
                    960: {

                        items: 2
                    },
                    1200: {

                        items: 2
                    }
                }
            });
        });
    </script>
<!-- <script type="text/javascript">
  function myFunction() {
    $('#newyear').modal('show');
  document.getElementById("myCheck").click();
}
  
   
    
</script> -->
 <!-- <script src="<?= base_url('confetti.js')?>"></script>
<script>
    confetti.start();
     if(window.outerWidth < 500){
        confetti.speed = 1;
        confetti.maxCount = 100;
      }
       $(window).on('load',function(){
           $('#exampleModal').modal('show');
       });

</script>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Brightcode Software Services Pvt. Ltd.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify my-2" style="color:#fff;">
      <img src="images/new-year.jpg" class="img-fluid" alt="gif">  
      </div>
    </div>
  </div>
</div>  --> 


 

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <?php if(isset($this->session->web_msg)){ ?>
<script type="text/javascript">
   swal('Good job!','<?php echo $this->session->web_msg;?>','success');
</script>
   <?php }else if(isset($this->session->web_err_msg)){ ?>
<script type="text/javascript">
   swal('Opps!','<?php echo $this->session->web_err_msg;?>','error');
</script>

      <?php }
      ?>
<script type="text/javascript">

	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});
</script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('.hoverable').mouseenter(function(){
            //$('[data-toggle="popover"]').popover();
            $(this).popover('show');                    
        }); 

        $('.hoverable').mouseleave(function(){
            $(this).popover('hide');
        });

    var table=$('.data-table').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
              dom: 'Bfrtip',
                 buttons: [
                       'excel','pdf','print'
             ],
            columnDefs: [{
                targets: "no-sort",
                orderable: false,
            }],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "info": "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search"
            },
        });   
    });
</script>
<script>
 $(document).ready(function(){
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#previewHolder').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#filePhoto").change(function() {
  readURL(this);
});
$("#professor_sign").change(function() {
  readURL(this);
});
 });
 </script>
 <script type="text/javascript">
  $('body').on('click','#confrmidpass',function(){
        var userid = $('#txtUserid').val();
        var password = $('#txtPassword').val();
       
       });
    </script>

    <script type="text/javascript">
  $('body').on('change','#dpartment',function(){
      var depart_id=$(this).val();
      $.ajax({
        type:"POST",
        url:"<?php echo base_url("website/getpost"); ?>",
        data:{depart_id:depart_id},
        success: function(data){
          console.log(data);
          $('#post').html(data);
        }
      });
    });

   $('body').on('change','#department_id',function(){
      var depart_id=$(this).val();
      $.ajax({
        type:"POST",
        url:"<?php echo base_url("website/getpost"); ?>",
        data:{depart_id:depart_id},
        success: function(data){
          console.log(data);
          $('#post_id').html(data);
        }
      });
    });

   $('body').on('click','#signup',function(){
  
      var state=$('#state').val();
      var dpartment=$('#dpartment').val();
      var post=$('.post').val();
      var batch_no=$('#batch_no').val();
      var branch_code=$('#branch_code').val();
      var officer_name=$('#officer_name').val();
      var mobile_no=$('#mobile_no').val();
      var email_id=$('#email_id').val();
      var join_in_branch=$('#join_in_branch').val();
       if(state==""||dpartment==""||post==""||batch_no==""||branch_code==""||officer_name==""||mobile_no==""|| email_id==""|| join_in_branch==""){
        alert("Please Fill All Required Field");
        return false;
      }else{
          $.ajax({
          type:"POST",
          url:"<?php echo base_url("website/create_signup"); ?>",
          data:{state:state,dpartment:dpartment,post:post,batch_no:batch_no,branch_code:branch_code,officer_name:officer_name,mobile_no:mobile_no,email_id:email_id,join_in_branch:join_in_branch},
          success: function(data){
            // if(data){
            //     swal("Good job!", "You are registered successfully!", "success");
            //     window.location.href = "<?php echo base_url('website/econtractform');?>";
            // }
            // else{ 
            //    swal("Opps!", "Something error!", "error");
            //     window.location.href = "<?php echo base_url('website/signup');?>";
            // }
            
          }
        });
      }
      
    });

</script>
 <script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 500; //maximum input boxes allowed
  var wrapper       = $(".registration"); //Fields wrapper
  var add_button      = $(".add_form"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      // $(wrapper).append('<tr><td><input type="text" name="registration_no[]" id="registration_no" class="form-control"></td><td><input type="text" name="applicant_name[]" id="applicant_name" class="form-control"></td><td><input type="text" name="father_husband[]" id="father_husband" class="form-control"></td><td><input type="date" name="dob[]" id="dob" class="form-control"></td><td><input type="text" name="post_name[]" id="post_name" class="form-control"></td><td><input type="text" name="fee[]" id="fee" class="form-control"></td><td><input type="date" name="date_payment[]" id="date_payment" class="form-control"></td><td><input type="text" name="banking_id1[]" id="banking_id" class="form-control"></td><td><button class="btn btn-info btn-xs form_del" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
      $(wrapper).append('<div class="row registration"><div class="col-md-12 col-12 mb-1"><input type="text" name="registration_no[]" placeholder="Registration Number" id="registration_no" class="form-control"></div><div class="col-md-12 col-12 mb-1"><input type="text" name="applicant_name[]" id="applicant_name" placeholder="Applicant Name" class="form-control"></div><div class="col-md-12 col-12 mb-1"><input type="text" name="father_husband[]" placeholder="Father/Husband Name & Address" id="father_husband" class="form-control"></div><div class="col-md-12 col-12 mb-1"><input type="date" name="dob[]" id="dob" placeholder="D.O.B." class="form-control"></div><div class="col-md-12 col-12 mb-1"><input type="text" name="post_name[]" id="post_name" placeholder="Post Name" class="form-control"></div><div class="col-md-12 col-12 mb-1"><input type="text" name="fee[]" id="fee" placeholder="Fee" class="form-control"></div><div class="col-md-12 col-12 mb-1"><input type="date" name="date_payment[]" id="date_payment" placeholder="Date Of Payment" class="form-control"></div><div class="col-md-12 col-12 mb-1"><input type="text" name="banking_id1[]" id="banking_id" placeholder="Banking ID No." class="form-control"></div><div class="col-md-12 col-12 mb-1"><button class="btn btn-info btn-xs duplicate form_del" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></div></div>');
    }
  });
   $('body').on('click','.form_del', function(e){ 
    e.preventDefault(); 
    $(this).closest('.row').remove(); 
    x--;
  });
  
  // $(wrapper).on("click",".form_del", function(e){ //user click on remove text
  //   e.preventDefault(); $(this).parent('tr').remove(); x--;
  // })
});
</script>
 <script type="text/javascript">
    $(document).ready(function() {
  var max_fields = 500; //maximum input boxes allowed
  var wrapper = $(".registration1"); //Fields wrapper
  var add_button = $(".add_form1"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div class="row registration1"><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Registration Number" name="reg_no[]" id="reg_no" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Name" name="name[]" id="name" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Name Of Post" name="name_of_post[]" id="name_of_post" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Security Fund" name="security_fund[]" id="security_fund" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Training Fee" name="training_fee[]" id="training_fee" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Processing Fee" name="processing_fee[]" id="processing_fee" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" name="other_fee1[]" id="other_fee" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Other Fee" name="total_banking[]" id="total_banking" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Total Banking" name="banking_id2[]" id="banking_id" class="form-control"></div><div class="col-md-12 col-12 mb-2"><button class="btn btn-info btn-xs form1_del" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></div></div>'); 
    }
  });
  
   $('body').on('click','.form1_del', function(e){ 
  
    e.preventDefault(); 
    $(this).closest('.row').remove(); 
    x--;
  });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 500; //maximum input boxes allowed
  var wrapper       = $(".registration2"); //Fields wrapper
  var add_button      = $(".add_form2"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div class="row registration2"><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Group No" name="group_no_a[]" id="group_no" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Group Name" name="group_name_a[]" id="group_name" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Group Address" name="group_address[]" id="group_address[]" class="form-control"></div><div class="col-md-12 col-12 mb-2"><select class="form-control" name="meeting_no[]"><option>Meeting No.</option><option value="1 week">1 Week</option><option value="2 week">2 Week</option><option value="3 week">3 Week</option><option value="4 week">4 Week</option><option value="5 week">5 Week</option></select></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Passbook Issued Fee" name="passbook_issue_fee[]" id="passbook_issue_fee" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Weekly Saving Deposit" name="weekly_saving_deposit[]" id="weekly_saving_deposit" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="EMI Deposit" name="emi_deposit[]" id="emi_deposit" class="form-control"></div> <div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Bounsing Fee" name="bouncing_fee[]" id="bouncing_fee" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Late Fine Fee" name="late_fine_fee[]" id="late_fine_fee" class="form-control"></div> <div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Banking Id No./date/Time" name="banking_id3[]" id="banking_id" class="form-control"></div><div class="col-md-12 col-12 mb-2"><button class="btn btn-info btn-xs form2_del" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></div></div>'); 
    }
  });
   $('body').on('click','.form2_del', function(e){ 
  
    e.preventDefault(); 
    $(this).closest('.row').remove(); 
    x--;
  });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 500; //maximum input boxes allowed
  var wrapper       = $(".registration3"); //Fields wrapper
  var add_button      = $(".add_form3"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div class="row registration3"><div class="col-md-12 col-12 mb-2"><input type="text" name="group_no_b[]" placeholder="Group No." id="group_no" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" name="group_name_b[]" placeholder="Group Name" id="group_name" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Club Id No." name="club_id_no[]" id="club_id_no" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Club Member Name" name="club_member_name[]" id="club_member_name" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" name="sponsor_no[]" placeholder="Sponsor ID No." id="sponsor_no" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" name="sponsor_level[]" placeholder="Sponsor Level" id="sponsor_level" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Joining Fee" name="joining_fee[]" id="joining_fee" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" name="banking_id4[]" placeholder="Banking ID No./Date" id="banking_id" class="form-control"></div><div class="col-md-12 col-12 mb-2"><button class="btn btn-info btn-xs form3_del" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></div></div>'); 
    }
  });
  
  $('body').on('click','.form3_del', function(e){ 
  
    e.preventDefault(); 
    $(this).closest('.row').remove(); 
    x--;
  });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 500; //maximum input boxes allowed
  var wrapper       = $(".registration4"); //Fields wrapper
  var add_button      = $(".add_form4"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div class="row registration4"><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Inspection Area Name" name="inspection_area[]" id="inspection_area" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Objective" name="objective[]" id="objective" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Arrival Time" name="arrival_time[]" id="arrival_time" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Arrival K.M." name="arrival_km[]" id="arrival_km" class="form-control"></div><div class="col-md-12 col-12 mb-2"><select class="form-control" name="port_of_department[]"><option>Port Of Departure</option><option value="Home">Home</option><option value="Office">Office</option><option value="new_inspection_area">New Inspection Area</option><option value="other">Other</option></select></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Departure K.M." name="departure_km[]" id="departure_km" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Total K.M." name="other_fee2[]" id="other_fee" class="form-control"></div><div class="col-md-12 col-12 mb-2"><input type="text" placeholder="Result" name="result[]" id="result" class="form-control"></div><div class="col-md-12 col-12 mb-2"><button class="btn btn-info btn-xs form4_del" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></div></div>'); 
    }
  });
  
   $('body').on('click','.form4_del', function(e){ 
  
    e.preventDefault(); 
    $(this).closest('.row').remove(); 
    x--;
  });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 500; //maximum input boxes allowed
  var wrapper       = $(".group_add"); //Fields wrapper
  var add_button      = $(".add_expense"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<tr><td><input type="text" name="equipment[]" id="equipment" class="form-control"></td><td><input type="text" name="quantity[]" id="quantity" class="form-control"></td><td><input type="text" name="rate[]" id="rate" class="form-control"></td><td><input type="text" name="amount[]" id="amount" class="form-control"></td><td><input type="text" name="bill[]" id="bill" class="form-control"></td><td><input type="text" name="payment_receipt[]" id="payment_receipt" class="form-control"></td><td><input type="text" name="payment_method[]" id="payment_method" class="form-control"></td><td><input type="text" name="neft_check[]" id="neft_check" class="form-control"></td><td><button class="btn btn-info btn-xs remove_equipment" id="remove_equipment" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
    }
  });
  
  $('body').on('click','.remove_equipment', function(e){ 
  
    e.preventDefault(); 
    $(this).closest('tr').remove(); 
    x--;
  });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 500;
  var wrapper       = $(".expenses"); //Fields wrapper
  var add_button      = $(".add_expense"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div class="row expenses"><div class="col-md-12 mb-2"><input type="text" name="equipment[]" id="equipment" placeholder="Name Of The Equipment/Expense Details" class="form-control"></div><div class="col-md-12 mb-2"><input type="text" name="quantity[]" placeholder="Quantity" id="quantity" class="form-control"></div><div class="col-md-12 mb-2"><input type="text" name="rate[]" id="rate" placeholder="Rate" class="form-control"></div><div class="col-md-12 mb-2"><input type="text" name="amount[]" placeholder="Amount" id="amount" class="form-control"></div><div class="col-md-12 mb-2"><input type="text" name="bill[]" id="bill" placeholder="Bill No." class="form-control"></div><div class="col-md-12 mb-2"><input type="text" name="payment_receipt[]" placeholder="Name Of The Payment Recipient" id="payment_receipt" class="form-control"></div><div class="col-md-12 mb-2"><input type="text" name="payment_method[]" placeholder="Payment Method(Cash/NEET/UPI Banking)" id="payment_method" class="form-control"></div><div class="col-md-12 mb-2"><input type="text" name="neft_check[]" placeholder="UPI Transation To Neft Check No." id="neft_check" class="form-control"></div><div class="col-md-12 mb-2"><button class="btn btn-info btn-xs remove_equipment" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></div></div>'); 
    }
  });
  
  $('body').on('click','.remove_equipment', function(e){ 
  
    e.preventDefault(); 
    $(this).closest('.row').remove(); 
    x--;
  });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 36; //maximum input boxes allowed
  var wrapper       = $(".group"); //Fields wrapper
  var add_button      = $(".add_group"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append(' <tr><td><input type="text" name="member_id[]" id="member_id" class="form-control"></td><td><input type="text" name="member_name[]" id="member_name" class="form-control"></td><td><input type="date" name="dob[]" id="dob" class="form-control"></td><td><input type="text" name="father_name[]" id="father_name" class="form-control"></td><td><input type="text" name="mobile[]" id="mobile" class="form-control"></td><td><input type="text" name="aadhar_no[]" id="aadhar_no" class="form-control"></td><td><input type="text" name="designation[]" id="designation" class="form-control"></td><td><input type="file" multiple  name="photo[]" id="photo" class="form-control"></td><td><button class="btn btn-info btn-xs remove_group" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
    }
  });
  
  $('body').on('click','.remove_group', function(e){ 
    e.preventDefault(); 
    $(this).closest('tr').remove(); 
    x--;
  });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 500; //maximum input boxes allowed
  var wrapper       = $(".requipment"); //Fields wrapper
  var add_button      = $(".add_requipment"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<tr><td><input type="text" name="resources[]" id="resources" class="form-control"></td><td><input type="text" name="modelno[]" id="modelno" class="form-control"></td><td><input type="text" name="brandname[]" id="brandname" class="form-control"></td><td><input type="number" name="quantity[]" id="quantity" class="form-control"></td><td><input type="text" name="rate[]" id="rate" class="form-control"></td><td><input type="number" name="amount[]" id="amount" class="form-control"></td><td><button class="btn btn-info btn-xs remove_requipment" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
    }
  });
  
  $('body').on('click','.remove_requipment', function(e){ 
  
    e.preventDefault(); 
    $(this).closest('tr').remove(); 
    x--;
  });
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 5; //maximum input boxes allowed
  var wrapper       = $(".group_resource"); //Fields wrapper
  var add_button      = $(".add_group_resource"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<tr><td><input type="text" name="resources[]" id="resources" class="form-control"></td><td><input type="text" name="modelno[]" id="modelno" class="form-control"></td><td><input type="text" name="brandname[]" id="brandname" class="form-control"></td><td><input type="number" name="quantity[]" id="quantity" class="form-control"></td><td><input type="number" name="rate[]" id="rate" class="form-control"></td> <td><input type="number" name="amount[]" id="amount" class="form-control"></td><td><input type="number" name="total_amount[]" id="amount" class="form-control"></td><td><button type="button" class="btn btn-info btn-xs remove_group_resource" ><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
    }
  });


  
  $('body').on('click','.remove_group_resource', function(e){ 
    e.preventDefault(); 
    $(this).closest('tr').remove(); 
    x--;
  });
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 500;
  var wrapper       = $(".myclub_report"); //Fields wrapper
  var add_button      = $(".add_clubreport"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<tr><td><select class="form-control" name="month[]" id="month"><option value="">--SELECT--</option><?php
                            for ($i=1; $i < 13; $i++) { 
                               $value = date('M',strtotime(date('Y-'.$i)));
                               ?><option value="<?php echo $i;?>"><?php echo $value;?></option><?php
                            }
                           ?>
                          </select></td><td><input type="date" name="close_date[]" id="close_date" class="form-control"></td><td><input type="text" name="rank[]" id="rank" class="form-control"></td><td><input type="text" name="level[]" id="level" class="form-control"></td><td><input type="text" name="club_team[]" id="club_team" class="form-control"></td><td><input type="text" name="bike_fund[]" id="bike_fund" class="form-control"></td><td><input type="text" name="domin_deduct[]" id="domin_deduct" class="form-control"></td><td><input type="text" name="payment[]" id="payment" class="form-control"></td><td><input type="text" name="bill_no[]" id="bill_no" class="form-control"></td> <td><input type="date" name="billing_date[]" id="billing_date" class="form-control"></td> <td><input type="text" name="check_no[]" id="check_no" class="form-control"></td><td><a class="btn btn-info  btn-sm remove_clubreport" ><i class="fa fa-trash" aria-hidden="true"></i></a></td></tr>'); 
    }
  });
  
  $('body').on('click','.remove_clubreport', function(e){ 
  
    e.preventDefault(); 
    $(this).closest('tr').remove(); 
    x--;
  });
});
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
   $(document).ready(function() {
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

   $('body').on('change','#month', function(){
    debugger;
    var month = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/get_monthly_progress_list')?>',
      data:{month:month},
      dataType:'JSON',
      success:function(results){
        $('#table1').html(results.first);
        $('#table2').html(results.second);
        $('#table3').html(results.third);
        $('#table4').html(results.forth);
        $('#table5').html(results.fifth);

      },

    });
   });


   $('body').on('click','#referesh_captch',function(){
    debugger;
    $.ajax({
      type: 'POST',
      url: '<?php echo base_url('website/referesh_captcha')?>',
       data: {},
       dataType: 'JSON',
      success:function(result){
        $('#referesh_c').html(result.referesh_c);
        $('#captcha_confirm').val(result.referesh_c);
      },
    });

   })

    $('body').on('change','#year', function(){
    var year = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/get_annualy_progress_list')?>',
      data:{year:year},
      dataType:'JSON',
      success:function(results){
        $('#tables1').html(results.first);
        $('#tables2').html(results.second);
        $('#tables3').html(results.third);
        $('#tables4').html(results.forth);
        $('#tables5').html(results.fifth);

      },

    });
   });

   $('body').on('click','#varification', function(){
      debugger;
      var designation = $('#designation').val();
      var service_no = $('#service_no').val();
      var batch_no = $('#batch_no').val();
      var officer_mobile_no = $('#officer_mobile_no').val();
        $.ajax({
          type: "POST",
          url: '<?php echo base_url('website/verificationlist');?>',
          data: {designation:designation,service_no:service_no,batch_no:batch_no,officer_mobile_no:officer_mobile_no},
          success: function(result){
              if(result>0){
                swal("Good job!", "Verified Successfully", "success");
              }else{
                swal("Opps!", "Person Not available", "error");
              }
          },

        });


    });

$('body').on('change','.year', function(){
    var year = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/team_get_annualy_progress_list')?>',
      data:{year:year},
      dataType:'JSON',
      success:function(results){
        $('.tables1').html(results.first);
        $('.tables2').html(results.second);
        $('.tables3').html(results.third);
        $('.tables4').html(results.forth);
        $('.tables5').html(results.fifth);

      },

    });
   });


    $('body').on('change','.month', function(){
    // debugger;
    var month = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/team_get_monthly_progress_list')?>',
      data:{month:month},
      dataType:'JSON',
      success:function(results){
        $('.table1').html(results.first);
        $('.table2').html(results.second);
        $('.table3').html(results.third);
        $('.table4').html(results.forth);
        $('.table5').html(results.fifth);

      },

    });
   });

  $('body').on('change','.expense_monthly', function(){
    var month = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/monthly_expense_list')?>',
      data:{month:month},
      dataType:'JSON',
      success:function(result){
        console.log(result);
        $('.table1').html(result);
      },
    });
   });
  $('body').on('change','.yearexpense', function(){
    var year = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/annualy_expense_list')?>',
      data:{year:year},
      dataType:'JSON',
      success:function(result){
        $('.table1').html(result);
      },

    });
   });

  $('body').on('click','.revenue_master',function(){

      var year=$('.year').val();
      $.ajax({
          type:"POST",
          url:"<?php echo base_url("website/createExcel"); ?>",
          data:{year:year},
          success: function(data){
            console.log(data);
          }
      });
  });

  $('body').on('change','.expense_monthly', function(){
    var month = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/monthly_expense_list')?>',
      data:{month:month},
      dataType:'JSON',
      success:function(result){
        // alert(result);
        console.log(result);

        $('.table1').html(result);
      },

    });
   });

  $('body').on('change','#ins_details', function(){
   var vals = $(this).val();
     if(vals==1){
       $("#exam_passed").prop("readonly", false); 
       $("#board_university").prop("readonly", false); 
       $("#pasing_year").prop("readonly", false); 
       $("#total_marks").prop("readonly", false); 
       $("#mark_obtained").prop("readonly", false); 
       $("#division").prop("readonly", false); 
       $("#persentage_marks").prop("readonly", false); 
     }
     else{
       $("#exam_passed").prop("readonly", true); 
       $("#board_university").prop("readonly", true); 
       $("#pasing_year").prop("readonly", true); 
       $("#total_marks").prop("readonly", true); 
       $("#mark_obtained").prop("readonly", true); 
       $("#division").prop("readonly", true); 
       $("#persentage_marks").prop("readonly", true); 
     }
   });
   $('body').on('change','#othercheck', function(){
     var vals = $(this).val();
     if(vals=='Other'){
       $(".other_details").prop("readonly", false);  
     }else{
       $(".other_details").prop("readonly", true);
     }
   });
   $('body').on('change','.states', function(){
    var id = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/get_division')?>',
      data:{id:id},
      success:function(result){
        // console.log(result);
        $('.division').html(result);
      },

    });
   });

    $('body').on('change','#dpartment_id',function(){
      var depart_id=$(this).val();
      $.ajax({
        type:"POST",
        url:"<?php echo base_url("website/getpost"); ?>",
        data:{depart_id:depart_id},
        success: function(data){
          // console.log(data);
          $('#post').html(data);
        }
      });
    });
     $('body').on('change','#dpartment_ids',function(){
    
      var depart_id=$(this).val();
      $.ajax({
        type:"POST",
        url:"<?php echo base_url("website/getpost_details"); ?>",
        data:{depart_id:depart_id},
        success: function(data){
          console.log(data);
          $('#post').html(data);
        }
      });
    });

     $('body').on('keyup','#member_id',function(){
      var member_id=$(this).val();
      $.ajax({
        type:"POST",
        url:"<?php echo base_url("website/get_memberlist_byid"); ?>",
        data:{member_id:member_id},
        dataType:'JSON',
        success: function(data){
          if(data.applicant_name!=''){
            $('#mem_name').val(data.applicant_name);
            $('#fath_name').val(data.father_name);
            $('#dob_date').val(data.dob);
          }else{
             swal("Opps!", "Your membership Id is Not Exist!", "error");
          }
          
        }
      });
    });

      $('body').on('click','#d_group_mem',function(){
            if(confirm('Are You Sure?')){
              var id = $(this).data('id');
              $.ajax({
                  data : {id:id},
                  type:'POST',
                  url:'<?php echo base_url('website/delete_group_m')?>',
                  success :function(result){
                      // alert(result);
                     if(result==true){
                          swal("Good job!", "You are registered successfully!", "success");
                     }  else{
                          swal("Opps!", "Something error!", "error");
                     }
                     location.reload();   
                  }
              });

            }
        });
});
</script>

<script src="<?= base_url('assets/website/js/wow.min.js');?>"></script>
      <script>
        new WOW().init();
     </script>
</body>
</html>




