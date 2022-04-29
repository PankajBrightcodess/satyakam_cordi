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
                                <?php echo form_open_multipart('admin/saveadmitcard');?>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <label> Applicant No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'applicant_no','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Enter Applicant No.','value'=>$vacencydetails['id'],'readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                <!-- </div> -->
                                 <!-- <div class="form-group row"> -->
                                    <div class="col-sm-4">
                                        <label> Registration No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'registration_no','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Enter Registration No.','value'=>date('Ymd',strtotime($vacencydetails['dob'])).'-00'.$vacencydetails['id'],'readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                <!-- </div> -->
                                <!-- <div class="form-group row"> -->
                                    <div class="col-sm-4">
                                        <label>Candidate Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'candidate_name','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['applicant_name'],'readonly'=>'true','placeholder'=>'Candidate Name','required'=>'true'));?>
                                    </div>                                    
                                <!-- </div> -->
                                <!-- <div class="form-group row"> -->
                                    <div class="col-sm-4">
                                        <label>Father's Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'father_name','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['father_name'],'readonly'=>'true','placeholder'=>'father Name','required'=>'true'));?>
                                    </div>                                    
                                <!-- </div> -->
                                <!-- <div class="form-group row"> -->
                                    <div class="col-sm-4">
                                        <label>Date Of Birth</label>
                                        <?php echo form_input(array('type'=>'date','name'=>'dob','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['dob'],'readonly'=>'true','placeholder'=>'Date Of Birth','required'=>'true'));?>
                                    </div>                                    
                                <!-- </div> -->
                                <!-- <div class="form-group row"> -->
                                    <div class="col-sm-4">
                                        <label>Mobile No.</label>
                                        <?php echo form_input(array('type'=>'number','name'=>'mobile_no','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['mobile_no'],'readonly'=>'true','placeholder'=>'Mobile No','required'=>'true'));?>
                                    </div>                                    
                                <!-- </div> -->
                                <!-- <div class="form-group row"> -->
                                    <div class="col-sm-4">
                                        <label>Aadhar No.</label>
                                        <?php echo form_input(array('type'=>'number','name'=>'mobile_no','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['aadharno'],'readonly'=>'true','placeholder'=>'Aadhar No','required'=>'true'));?>
                                    </div>                                    
                                <!-- </div> -->
                                <!-- <div class="form-group row"> -->
                                    <div class="col-sm-4">
                                        <label>Aadhar No.</label>
                                        <?php echo form_input(array('type'=>'number','name'=>'mobile_no','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['aadharno'],'readonly'=>'true','placeholder'=>'Aadhar No','required'=>'true'));?>
                                    </div>                                    
                                <!-- </div> -->
                                <!-- <div class="form-group row"> -->
                                    <div class="col-sm-4">
                                        <label>Gender No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'gender','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['gender'],'readonly'=>'true','placeholder'=>'Gender','required'=>'true'));?>
                                    </div>                                    
                                <!-- </div> -->
                                <!-- <div class="form-group row"> -->
                                    <div class="col-sm-4">
                                        <label>Category</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'category','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['category'],'readonly'=>'true','placeholder'=>'Category','required'=>'true'));?>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Designation</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'designation','id'=>'activate_menu','class'=>'form-control','value'=>$vacencydetails['department'],'readonly'=>'true','placeholder'=>'Designation','required'=>'true'));?>
                                    </div>                                    
                               <!--  </div>
                                <div class="form-group row"> -->
                                    <div class="col-sm-4">
                                        <label>Batch No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'batch_no','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Enter Batch No.','required'=>'true'));?>
                                    </div>   
                                    <div class="col-sm-4">
                                        <label>State</label>
                                        <select class="form-control" name="state_code">
                                            <option value="">---SELECT---</option>
                                            <?php
                                                if(!empty($state)){
                                                    foreach ($state as $key => $value) {
                                                        ?><option value="<?= $value['state_code']?>"><?= $value['name'];?></option>
                                                        <?php
                                                     }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Center Unit Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'center_name','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Center Unit Name','required'=>'true'));?>
                                    </div> 
                                     <div class="col-sm-4">
                                        <label>Unit Code No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'unit_code','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Unit Code No.','required'=>'true'));?>
                                    </div> 
                                    <div class="col-sm-4">
                                        <label>Interview Date</label>
                                        <?php echo form_input(array('type'=>'date','name'=>'interviewdate','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Interview Date','required'=>'true'));?>
                                    </div>
                                     <div class="col-sm-4">
                                        <label>Reporting Time</label>
                                        <?php echo form_input(array('type'=>'time','name'=>'reporting_time','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Reporting Time','required'=>'true'));?>
                                    </div>                                  
                                    <div class="col-sm-4">
                                        <label>Interview Start Time</label>
                                        <?php echo form_input(array('type'=>'time','name'=>'interview_time','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Interview Start Time','required'=>'true'));?>
                                    </div> 
                                     <div class="col-sm-12 mb-5 ">
                                        <label>Center Address</label>
                                        <textarea class="form-control" name="center_address" placeholder="Center Address :" rows="3">  </textarea>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <label>Photo</label>

                                        <img src="<?= base_url($vacencydetails['photo']);?>" height="100" width="100">
                                        <input type="hidden" name="photo" value="<?php echo $vacencydetails['photo'];?>">
                                    </div>
                                    <div class="col-sm-6 text-center mb-5">
                                        <label>Signature</label>
                                        <img src="<?= base_url($vacencydetails['signature']);?>" height="50" width="100">
                                        <input type="hidden" name="signature" value="<?php echo $vacencydetails['signature'];?>">
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" value="Submit" class="btn btn-sm btn-info">
                                    </div>
                                </div>
                                <?php echo form_close();?>
                            </div>
                            <!-- <div class="col-md-2 col-lg-2"></div> -->
                        	
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