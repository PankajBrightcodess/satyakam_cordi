<section class="content">
      <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
                <div class="card">
                   <div class="card-header">
                    	<h3 class="card-title"><?php echo $title; ?></h3>
                    </div> 
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="row">
                        	<div class="col-md-12 col-lg-12 mb-5">
                                <?php echo form_open_multipart('admin/saveresult');?>
                                <div class="form-group row">
                                     <div class="col-sm-4">
                                        <label> Issue Date</label>
                                        <?php echo form_input(array('type'=>'date','name'=>'issue_date','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Enter Applicant No.','value'=>date('Y-m-d'),'required'=>'true'));?>
                                        <?php echo form_input(array('type'=>'hidden','name'=>'admitcard_id','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['id'],'readonly'=>'true','required'=>'true'));?>
                                    </div> 
                                    <div class="col-sm-4">
                                        <label> Applicant No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'applicant_no','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Enter Applicant No.','value'=>$vacencydetails['applicant_no'],'readonly'=>'true','required'=>'true'));?>
                                    </div> 
                                    <div class="col-sm-4">
                                        <label> Registration No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'registration_no','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Enter Registration No.','value'=>date('Ymd',strtotime($vacencydetails['dob'])).'-00'.$vacencydetails['id'],'readonly'=>'true','required'=>'true'));?>
                                    </div> 
                                    <div class="col-sm-4">
                                        <label>Batch No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'batch_no','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Enter Batch No.','readonly'=>'true','required'=>'true','value'=>$vacencydetails['batch_no']));?>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Candidate Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'candidate_name','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['candidate_name'],'readonly'=>'true','placeholder'=>'Candidate Name','required'=>'true'));?>
                                    </div> 
                                    <div class="col-sm-4">
                                        <label>Mobile No.</label>
                                        <?php echo form_input(array('type'=>'number','name'=>'mobile_no','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['mobile_no'],'readonly'=>'true','placeholder'=>'Mobile No','required'=>'true'));?>
                                    </div> 
                                    <div class="col-sm-4">
                                        <label>Email ID.</label>
                                        <?php echo form_input(array('type'=>'email','name'=>'email','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['email'],'readonly'=>'true','placeholder'=>'Email Id','required'=>'true'));?>
                                    </div>  
                                    <div class="col-sm-4">
                                        <label>Father's Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'father_name','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['father_name'],'readonly'=>'true','placeholder'=>'father Name','required'=>'true'));?>
                                    </div> 
                                    <div class="col-sm-4">
                                        <label>Designation</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'designation','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['post_name'],'readonly'=>'true','placeholder'=>'Profile Job','required'=>'true'));?>

                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <label>Interview Date</label>
                                        <?php echo form_input(array('type'=>'date','name'=>'interviewdate','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['interviewdate'],'readonly'=>'true','placeholder'=>'Interview Date','required'=>'true'));?>
                                    </div> 
                                     <div class="col-sm-4">
                                        <label>Appearing Time</label>
                                        <?php echo form_input(array('type'=>'time','name'=>'interview_time','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['interview_time'],'readonly'=>'true','placeholder'=>'Interview Date','required'=>'true'));?>
                                    </div> 
                                    
                                    <div class="col-sm-4">
                                        <label>Center</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'center','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['center_name'],'readonly'=>'true','placeholder'=>'Center','required'=>'true'));?>
                                    </div> 
                                     <div class="col-sm-6">
                                        <label>Unit  No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'unit_code','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['unit_code'],'readonly'=>'true','placeholder'=>'Unit Code','required'=>'true'));?>
                                    </div>                                  
                                    <div class="col-sm-6 mb-4">
                                        <label>Permanent Address</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'permanent_address','id'=>'activate_menu','class'=>'form-control','readonly'=>'true','value'=>$vacencydetails['permanent_address'],'placeholder'=>'Permanent Address Time','required'=>'true'));?>
                                    </div> 
                                    <div class="col-md-12 mb-2 text-center text-danger">
                                        <h5 >RESULT</h5>
                                    </div>
                                    <div class="col-sm-4 col-12 col-md-4">
                                        <label>Personality</label>
                                        <select class="form-control" id="personality" name="personality">
                                            <option value="">--- SELECT---</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-12 col-md-4">
                                        <label>Leadership Quality</label>
                                        <select class="form-control" id="leadership_quality" name="leadership_quality">
                                            <option value="">--- SELECT---</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-12 col-md-4">
                                        <label>Thinking</label>
                                        <select class="form-control" id="thinking" name="thinking">
                                            <option value="">--- SELECT---</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-12 col-md-4">
                                        <label>Qualification</label>
                                        <select class="form-control" id="qualification" name="qualification">
                                            <option value="">--- SELECT---</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-12 col-md-4">
                                        <label>Extra Qualification</label>
                                        <select class="form-control" id="extra_qualification" name="extra_qualification">
                                            <option value="">--- SELECT---</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-12 col-md-4">
                                        <label>Experience</label>
                                        <select class="form-control" id="experience" name="experience">
                                            <option value="">--- SELECT---</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-12 col-md-6">
                                        <label>IQ Test</label>
                                        <select class="form-control" id="iq_test" name="iq_test">
                                            <option value="">--- SELECT---</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-12 col-md-6">
                                        <label>Mind Set</label>
                                        <select class="form-control" id="mind_set" name="mind_set">
                                            <option value="">--- SELECT---</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-12 col-md-12 ">
                                        <label>Result Declaration</label>
                                        <select class="form-control" id="result_decelear" name="result_decelear">
                                            <option value="">--- SELECT---</option>
                                            <option value="Selected">Selected</option>
                                            <option value="Rejected">Rejected</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-4">
                                        <label>Security Deposit</label>
                                        <?php echo form_input(array('type'=>'number','name'=>'security_deposit','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Security Deposit (Rs.)','required'=>'true'));?>
                                    </div>
                                    <div class="col-sm-3 mb-4">
                                        <label>Processing Fee</label>
                                        <?php echo form_input(array('type'=>'number','name'=>'procesing_fee ','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Processing Fee (Rs.)','required'=>'true'));?>
                                    </div>
                                    <div class="col-sm-3 mb-4">
                                        <label>Training Fee</label>
                                        <?php echo form_input(array('type'=>'number','name'=>'training_fee','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Training Fee (Rs.)','required'=>'true'));?>
                                    </div>

                                    <div class="col-sm-3 mb-4">
                                        <label>Others</label>
                                        <?php echo form_input(array('type'=>'number','name'=>'others','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Others (Rs.)','required'=>'true'));?>
                                    </div>
                                    <div class="col-sm-4 mb-4">
                                        <label>Total Demand Amount In Figures</label>
                                        <?php echo form_input(array('type'=>'number','name'=>'total_amount','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Total Amount (Rs.)','required'=>'true'));?>
                                    </div>
                                    <div class="col-sm-4 mb-4">
                                        <label>Total Amount (In Word)</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'total_amount_in_word','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Total Amount (In Word)','required'=>'true'));?>
                                    </div>
                                    <div class="col-sm-4 mb-4">
                                        <label>Last Date For Making Payment</label>
                                        <?php echo form_input(array('type'=>'date','name'=>'last_payment_date','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Last Date For Making Payment','required'=>'true'));?>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" value="Submit" class="btn btn-sm btn-info">
                                    </div>
                                </div>
                                <?php echo form_close();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>  
      <!-- '''''''''''''''''''''''''''''''model'''''''''''''''''''''''''''''''''''''''' -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           <?php echo form_open_multipart('admin/update_post');?>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                   
                    <div class="form-group row">
                         <div class="col-sm-12 col-md-12 mb-3">
                             <select class="form-control" name="depart_id" id="depart_id" required id="activate_menu">
                                <option value="">---SELECT---</option>
                                <?php
                                    if(!empty($depart)){
                                        foreach ($depart as $key => $value) {
                                           ?>
                                           <option value="<?= $value['id'];?>"><?= $value['department'];?></option>
                                           <?php
                                        }
                                    }
                                ?> 
                            </select>
                        </div>  
                        <div class="col-sm-12 col-md-12 mb-3">
                            <?php echo form_input(array('type'=>'text','name'=>'post','id'=>'post','class'=>'form-control','placeholder'=>'Enter Post','required'=>'true'));?>
                            <input type="hidden" name="id" id="id">
                        </div>                                    
                    </div>
                   
                    
                 </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Update</button>
          </div>
          <?php echo form_close();?>
        </div>
      </div>
    </div>
    <!-- '''''''''''''''''''''''''''''''''model end................................... -->  
    <script type="text/javascript">
        $('.updt').click(function(e){
        var id = $(this).data('id');
        var depart_id = $(this).data('depart_id');
        var post = $(this).data('post');
      
        $('#id').val(id);
        $('#depart_id').val(depart_id);
        $('#post').val(post);
       });
    </script>

<script>

	
	$(document).ready(function(e) {
        $('.hoverable').mouseenter(function(){
            //$('[data-toggle="popover"]').popover();
            $(this).popover('show');                    
        }); 

        $('.hoverable').mouseleave(function(){
            $(this).popover('hide');
        });

        

        $('.duplicate').click(function(){
            var dupid = $(this).data('dupid');
            $.ajax({
                url:"<?php echo base_url('home/ajax_sidebar') ;?>",
                method:"POST",
                data:{dupid:dupid},
                success:function(data){
                    //console.log(data);
                    var setdata = JSON.parse(data);
                    //console.log(setdata);
                    $('#activate_menu').val(setdata.activate_menu);
                    $('#activate_not').val(setdata.activate_not);
                    $('#base_url').val(setdata.base_url);
                    $('#icon').val(setdata.icon);
                    $('#parent_id').val(setdata.parent).trigger('change');
                    $('#position').val(setdata.position);
                    var role_text = setdata.role_id;                    
                    $('#roles').val(role_text);
                    $('#status').val(setdata.status);
                }
            });
        });
        
		var table=$('.data-table').DataTable({
			scrollCollapse: true,
			autoWidth: false,
			responsive: true,
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
        
		$('body').on('change','#parent_id',function(){
			var parent_id=$(this).val();
			var option="<select name='position' id='position' class='form-control' required>";
			option+="<option value=''>Select </option>";
			option+="<option value='0'>Top</option>";
			$.ajax({
				type:"POST",
				url:"<?php echo base_url("home/getOrderList"); ?>",
				data:{parent_id:parent_id},
				dataType:"json",
				beforeSend: function(){
					//$(".box-overlay").show();
				},
				success: function(data){
					$(data).each(function(i, val) {
						option+="<option value='"+val['position']+"'>After "+val['name']+"</option>";
					});
					option+='</select>';
					$('#position').replaceWith(option);
					$('.box-overlay').hide();
				}
			});
		});
        $('#parent_id').trigger('change');
    });



$('.delete').click(function(e){
    debugger;
    var id=$(this).closest('tr').find('.delete').val();
    if(confirm('Are you Sure !')){
    $.ajax({
            type:'GET',
            url:"<?PHP echo base_url('admin/delete_post'); ?>",
            data: {id:id},
            success: function(result){
                location.reload();
                },
                error: function(){
                alert("error");
                }
    });
}
return false;
})
</script>