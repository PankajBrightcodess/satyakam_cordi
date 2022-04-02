 <section class="officialservices">
      <div class="container">
        <div class="row">
              <div class="col-md-12 mb-3"></div>
          <div class="col-md-12 mb-3">
            <center class="tittle"><h3>Apply Form</h3></center>
            <form action="<?= base_url('website/applyform')?>" method="POST" style="border:1px solid black;padding:10px; margin-top:20px; background:white;">
              <div class="row">
                <div class="col-md-12 mb-2">
                     <input type="text" name="name" placeholder="Name :" class="form-control" required>
                </div>
                
            
                <div class="col-md-12 mb-2"> 
                  <input type="text" name="fname" placeholder="Father's Name :" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                  <input type="date" name="dob" placeholder="Date Of Birth :" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                  <input type="text" name="last_qualification" placeholder="Last Qualification Details :" class="form-control" required>
                </div>
                <div class="col-md-6 mb-2">
                  <textarea rows="3" name="paddress" class="form-control" placeholder="Enter Parmanent Address" required></textarea>
                   
                </div>
                <div class="col-md-6 mb-2">
                  <textarea rows="3" name="caddress" class="form-control" placeholder="Enter Current Address" required></textarea>
                </div>
                <div class="col-md-12 mb-2">
                    <input type="text" name="mobile_no" placeholder="Mobile Number :" class="form-control" required>
                </div>
                <div class="col-md-12 mb-2">
                    <input type="email" name="email_id" placeholder="Email Id :" class="form-control" required>
                </div>
                 <div class="col-md-12 mb-2">
                  <input type="submit" class="mt-4 btn btn-sm btn-block" name="" value="Sign Up" style="background:#233799;color:white">
                   <!-- <a href="<?= base_url('website/econtractform');?>" class="mt-4 btn btn-sm btn-block"  style="background:#233799;color:white">Sign Up</a> -->  
                   <!-- data-toggle="modal" data-target=".bd-example-modal-sm" -->
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- '''''''''''''''''''''''''model area'''''''''''''''''''''''''''''''''''' -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirmation OTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
       <input type="text" name="otp" required placeholder="Enter OTP" class="form-control">
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <a href="<?= base_url('website/econtractform')?>" type="submit" class="btn btn-sm btn-success ">Save</a>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(e) {
  $('body').on('change','#dpartment',function(){
      debugger;
      var depart_id=$(this).val();
      /*var option="<select name='position' id='position' class='form-control' required>";
      option+="<option value=''>Select </option>";
      option+="<option value='0'>Top</option>";*/
      $.ajax({
        type:"POST",
        url:"<?php echo base_url("website/getpost"); ?>",
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