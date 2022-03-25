<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
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
  $(document).ready(function(e) {
  $('body').on('change','#dpartment',function(){
      debugger;
      var depart_id=$(this).val();
      $.ajax({
        type:"POST",
        url:"<?php echo base_url("website/get_postlistbyid"); ?>",
        data:{depart_id:depart_id},
        success: function(data){
          console(data);
          // $(data).each(function(i, val) {
          //   option+="<option value='"+val['position']+"'>After "+val['name']+"</option>";
          // });
          // option+='</select>';
          // $('#position').replaceWith(option);
          // $('.box-overlay').hide();
        }
      });
    });
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
      $(wrapper).append('<tr><td><input type="text" name="registration_no" id="registration_no" class="form-control"></td><td><input type="text" name="applicant_name" id="applicant_name" class="form-control"></td><td><input type="text" name="father_husband" id="father_husband" class="form-control"></td><td><input type="text" name="dob" id="dob" class="form-control"></td><td><input type="text" name="post_name" id="post_name" class="form-control"></td><td><input type="text" name="fee" id="fee" class="form-control"></td><td><input type="date" name="date_payment" id="date_payment" class="form-control"></td><td><input type="text" name="banking_id" id="banking_id" class="form-control"></td><td><button class="btn btn-info btn-xs remove_field" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
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
      $(wrapper).append('<tr><td><input type="text" name="reg_no" id="reg_no" class="form-control"></td><td><input type="text" name="name" id="name" class="form-control"></td><td><input type="text" name="name_of_post" id="name_of_post" class="form-control"></td><td><input type="text" name="security_fund" id="security_fund" class="form-control"></td><td><input type="text" name="training_fee" id="training_fee" class="form-control"></td><td><input type="text" name="processing_fee" id="processing_fee" class="form-control"></td><td><input type="text" name="other_fee" id="other_fee" class="form-control"></td><td><input type="text" name="total_banking" id="total_banking" class="form-control"></td><td><input type="text" name="banking_id" id="banking_id" class="form-control"></td><td><input type="text" name="other_fee" id="other_fee" class="form-control"></td> <td><input type="text" name="banking_id" id="banking_id" class="form-control"></td><td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
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
  var wrapper       = $(".registration2"); //Fields wrapper
  var add_button      = $(".add_form2"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append(' <tr><td><input type="text" name="group_no" id="group_no" class="form-control"></td><td><input type="text" name="group_name" id="group_name" class="form-control"></td><td><input type="text" name="group_address" id="group_address" class="form-control"></td><td><select class="form-control" name="meeting_no"><option>---SELECT---</option><option value="1 week">1 Week</option><option value="2 week">2 Week</option><option value="3 week">3 Week</option><option value="4 week">4 Week</option><option value="5 week">5 Week</option></select></td><td><input type="text" name="passbook_issue_fee" id="passbook_issue_fee" class="form-control"></td><td><input type="text" name="weekly_saving_deposit" id="weekly_saving_deposit" class="form-control"></td><td><input type="text" name="emi_deposit" id="emi_deposit" class="form-control"></td><td><input type="text" name="bouncing_fee" id="bouncing_fee" class="form-control"></td><td><input type="text" name="late_fine_fee" id="late_fine_fee" class="form-control"></td><td><input type="text" name="banking_id" id="banking_id" class="form-control"></td><td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
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
  var wrapper       = $(".registration3"); //Fields wrapper
  var add_button      = $(".add_form3"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<tr><td><input type="text" name="group_no" id="group_no" class="form-control"></td><td><input type="text" name="group_name" id="group_name" class="form-control"></td><td><input type="text" name="club_id_no" id="club_id_no" class="form-control"></td><td><input type="text" name="club_member_name" id="club_member_name" class="form-control"></td><td><input type="text" name="sponsor_no" id="sponsor_no" class="form-control"></td><td><input type="text" name="sponsor_level" id="sponsor_level" class="form-control"></td><td><input type="text" name="joining_fee" id="joining_fee" class="form-control"></td><td><input type="text" name="banking_id" id="banking_id" class="form-control"></td><td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
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
  var wrapper       = $(".registration4"); //Fields wrapper
  var add_button      = $(".add_form4"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<tr><td><input type="text" name="inspection_area" id="inspection_area" class="form-control"></td><td><input type="text" name="objective" id="objective" class="form-control"></td><td><input type="text" name="arrival_time" id="arrival_time" class="form-control"></td><td><input type="text" name="arrival_km" id="arrival_km" class="form-control"></td><td><select class="form-control" name="port_of_department"><option>---SELECT---</option><option value="Home">Home</option><option value="Office">Office</option><option value="new_inspection_area">New Inspection Area</option><option value="other">Other</option></select></td><td><input type="text" name="departure_km" id="departure_km" class="form-control"></td><td><input type="text" name="other_fee" id="other_fee" class="form-control"></td><td><input type="text" name="result" id="result" class="form-control"></td><td><button class="btn btn-info btn-xs duplicate" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'); 
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('tr').remove(); x--;
  })
});
</script>
<script>
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
</script>
