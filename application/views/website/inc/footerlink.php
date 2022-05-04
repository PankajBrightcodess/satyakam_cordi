<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script src="<?php echo file_url("includes/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
  <!-- <script src="<?= base_url('includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script> -->
    <script src="<?= base_url('includes/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
    <script src="<?= base_url('includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
 });
 </script>
 <script type="text/javascript">

        $('body').on('click','#confrmidpass',function(){
          // alert('jhdfs');
      debugger;
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
    debugger;
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
            if(data){
                swal("Good job!", "You are registered successfully!", "success");
                window.location.href = "<?php echo base_url('website/econtractform');?>";
            }
            else{ 
               swal("Opps!", "Something error!", "error");
                window.location.href = "<?php echo base_url('website/signup');?>";
            }
            
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
      $(wrapper).append('<tr><td><input type="text" name="registration_no[]" id="registration_no" class="form-control"></td><td><input type="text" name="applicant_name[]" id="applicant_name" class="form-control"></td><td><input type="text" name="father_husband[]" id="father_husband" class="form-control"></td><td><input type="date" name="dob[]" id="dob" class="form-control"></td><td><input type="text" name="post_name[]" id="post_name" class="form-control"></td><td><input type="text" name="fee[]" id="fee" class="form-control"></td><td><input type="date" name="date_payment[]" id="date_payment" class="form-control"></td><td><input type="text" name="banking_id1[]" id="banking_id" class="form-control"></td><td><button class="btn btn-info btn-xs remove_field" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('tr').remove(); x--;
  })
});
</script>
 <script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 500; //maximum input boxes allowed
  var wrapper       = $(".registration1"); //Fields wrapper
  var add_button      = $(".add_form1"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<tr><td><input type="text" name="reg_no[]" id="reg_no[]" class="form-control"></td><td><input type="text" name="name[]" id="name" class="form-control"></td><td><input type="text" name="name_of_post[]" id="name_of_post" class="form-control"></td><td><input type="text" name="security_fund[]" id="security_fund" class="form-control"></td><td><input type="text" name="training_fee[]" id="training_fee" class="form-control"></td><td><input type="text" name="processing_fee[]" id="processing_fee" class="form-control"></td><td><input type="text" name="other_fee1[]" id="other_fee" class="form-control"></td><td><input type="text" name="total_banking[]" id="total_banking" class="form-control"></td><td><input type="text" name="banking_id2[]" id="banking_id" class="form-control"></td><td><button class="btn btn-info btn-xs remove_field1" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
    }
  });
  
  $(wrapper).on("click",".remove_field1", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('tr').remove(); x--;
  })
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
      $(wrapper).append(' <tr><td><input type="text" name="group_no_a[]" id="group_no" class="form-control"></td><td><input type="text" name="group_name_a[]" id="group_name" class="form-control"></td><td><input type="text" name="group_address[]" id="group_address" class="form-control"></td><td><select class="form-control" name="meeting_no[]"><option>---SELECT---</option><option value="1 week">1 Week</option><option value="2 week">2 Week</option><option value="3 week">3 Week</option><option value="4 week">4 Week</option><option value="5 week">5 Week</option></select></td><td><input type="text" name="passbook_issue_fee[]" id="passbook_issue_fee" class="form-control"></td><td><input type="text" name="weekly_saving_deposit[]" id="weekly_saving_deposit" class="form-control"></td><td><input type="text" name="emi_deposit[]" id="emi_deposit" class="form-control"></td><td><input type="text" name="bouncing_fee[]" id="bouncing_fee" class="form-control"></td><td><input type="text" name="late_fine_fee[]" id="late_fine_fee" class="form-control"></td><td><input type="text" name="banking_id3[]" id="banking_id" class="form-control"></td><td><button class="btn btn-info btn-xs remove_field2" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
    }
  });
  
  $(wrapper).on("click",".remove_field2", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('tr').remove(); x--;
  })
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
      $(wrapper).append('<tr><td><input type="text" name="group_no_b[]" id="group_no" class="form-control"></td><td><input type="text" name="group_name_b[]" id="group_name" class="form-control"></td><td><input type="text" name="club_id_no[]" id="club_id_no" class="form-control"></td><td><input type="text" name="club_member_name[]" id="club_member_name" class="form-control"></td><td><input type="text" name="sponsor_no[]" id="sponsor_no" class="form-control"></td><td><input type="text" name="sponsor_level[]" id="sponsor_level" class="form-control"></td><td><input type="text" name="joining_fee[]" id="joining_fee" class="form-control"></td><td><input type="text" name="banking_id4[]" id="banking_id" class="form-control"></td><td><button class="btn btn-info btn-xs remove_field3" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
    }
  });
  
  $(wrapper).on("click",".remove_field3", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('tr').remove(); x--;
  })
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
      $(wrapper).append('<tr><td><input type="text" name="inspection_area[]" id="inspection_area" class="form-control"></td><td><input type="text" name="objective[]" id="objective" class="form-control"></td><td><input type="text" name="arrival_time[]" id="arrival_time" class="form-control"></td><td><input type="text" name="arrival_km[]" id="arrival_km" class="form-control"></td><td><select class="form-control" name="port_of_department[]"><option>---SELECT---</option><option value="Home">Home</option><option value="Office">Office</option><option value="new_inspection_area">New Inspection Area</option><option value="other">Other</option></select></td><td><input type="text" name="departure_km[]" id="departure_km" class="form-control"></td><td><input type="text" name="other_fee2[]" id="other_fee" class="form-control"></td><td><input type="text" name="result[]" id="result" class="form-control"></td><td><button class="btn btn-info btn-xs remove_field4" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
    }
  });
  
  $(wrapper).on("click",".remove_field4", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('tr').remove(); x--;
  })
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
  var max_fields      = 500; //maximum input boxes allowed
  var wrapper       = $(".expenses"); //Fields wrapper
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
    debugger;
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
    debugger;
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
    debugger;
    e.preventDefault(); 
    $(this).closest('tr').remove(); 
    x--;
  });
});
</script>



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
        console.log(results.first);
        console.log(results.second);
        console.log(results.third);
        console.log(results.forth);
        console.log(results.fifth);
        $('#table1').html(results.first);
        $('#table2').html(results.second);
        $('#table3').html(results.third);
        $('#table4').html(results.forth);
        $('#table5').html(results.fifth);

      },

    });
   });

    $('body').on('change','#year', function(){
    debugger;
    var year = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/get_annualy_progress_list')?>',
      data:{year:year},
      dataType:'JSON',
      success:function(results){
        console.log(results);
        console.log(results.first);
        console.log(results.second);
        console.log(results.third);
        console.log(results.forth);
        console.log(results.fifth);
        $('#tables1').html(results.first);
        $('#tables2').html(results.second);
        $('#tables3').html(results.third);
        $('#tables4').html(results.forth);
        $('#tables5').html(results.fifth);

      },

    });
   });

$('body').on('change','.year', function(){
    debugger;
    var year = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/team_get_annualy_progress_list')?>',
      data:{year:year},
      dataType:'JSON',
      success:function(results){
        // alert(results);
        console.log(results);
        console.log(results.first);
        console.log(results.second);
        console.log(results.third);
        console.log(results.forth);
        console.log(results.fifth);
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
        // alert(results);
        console.log(results.first);
        console.log(results.second);
        console.log(results.third);
        console.log(results.forth);
        console.log(results.fifth);
        $('.table1').html(results.first);
        $('.table2').html(results.second);
        $('.table3').html(results.third);
        $('.table4').html(results.forth);
        $('.table5').html(results.fifth);

      },

    });
   });

     $('body').on('change','.expense_monthly', function(){
    debugger;
    var month = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/monthly_expense_list')?>',
      data:{month:month},
      dataType:'JSON',
      success:function(result){
        alert(result);
        console.log(result);

        $('.table1').html(result);
      },

    });
   });
  $('body').on('change','.yearexpense', function(){
    debugger;
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
        debugger;
            var year=$('.year').val();
            
            $.ajax({
                type:"POST",
                url:"<?php echo base_url("website/createExcel"); ?>",
                data:{year:year},
                success: function(data){
                  // alert(data);
                  console.log(data);
                  //  alert('Excel Generate');
                }
            });
      });



  $('body').on('change','.expense_monthly', function(){
    debugger;
    var month = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/monthly_expense_list')?>',
      data:{month:month},
      dataType:'JSON',
      success:function(result){
        alert(result);
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
   }else{
     $("#exam_passed").prop("readonly", true); 
     $("#board_university").prop("readonly", true); 
     $("#pasing_year").prop("readonly", true); 
     $("#total_marks").prop("readonly", true); 
     $("#mark_obtained").prop("readonly", true); 
     $("#division").prop("readonly", true); 
     $("#persentage_marks").prop("readonly", true); 
   }
  
   });
   $('body').on('click','#othercheck', function(){
     var vals = $(this).val();
     if(vals==1){
       $(".other_details").prop("readonly", false);  
     }else{
       $(".other_details").prop("readonly", true);
     }
  
   });


   $('body').on('change','.states', function(){
    debugger;
    var id = $(this).val();
    $.ajax({
      type:'POST',
      url: '<?php echo base_url('website/get_division')?>',
      data:{id:id},
      success:function(result){
        $('.division').html(result);
      },

    });
   });

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
});



</script>



