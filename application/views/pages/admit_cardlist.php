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
                        	<!-- <div class="col-md-5 col-lg-4">
                                <?php echo form_open_multipart('admin/savedepart');?>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'department','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Enter Department','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <?php echo form_submit(array('name'=>'save_dep','id'=>'save_dep','value'=>'Save Menu','class'=>'form-control btn btn-success'));?>
                                    </div>
                                    <div class="col-md-4"></div>                                    
                                </div>
                                <?php echo form_close();?>
                            </div> -->
                            <!-- <div class="col-md-2 col-lg-2"></div> -->
                        	<div class="col-md-12 col-lg-12 table-responsive">
                            	<table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.no</th>
                                            <th>Registration No.</th> 
                                            <th>Applicant Name</th>
                                            <th>Batch No.</th>
                                            <th>Center Unit Name</th>
                                            <th>Unit Code No.</th>
                                            <th>Interview Date</th>
                                            <th>Reporting Time</th>
                                            <th>Interview Time</th>
                                            <th>Center Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($admitcardlist)){
                                            // print_r($admitcardlist);

                                            foreach($admitcardlist as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $val['registration_no']; ?></td>
                                            <td><?php echo $val['candidate_name'] ;?></td>
                                            <td><?php echo $val['batch_no']; ?></td>
                                            <td><?php echo $val['center_name'] ;?></td>
                                            <td><?php echo $val['unit_code'] ;?></td>
                                            <td><?php echo $val['interviewdate'] ;?></td>
                                            <td><?php echo $val['reporting_time'] ;?></td>
                                            <td ><?php echo $val['interview_time']; ?></td>
                                            <td ><?php echo $val['center_address'] ;?></td>
                                            <td ><button class="btn btn-sm btn-success col-xs-2 updt"  data-registration_no="<?php echo $val['registration_no']; ?>" data-id="<?php echo $val['id']; ?>" data-candidate_name="<?php echo $val['candidate_name'] ;?>" data-batch_no="<?php echo $val['batch_no'] ;?>" data-center_name="<?php echo $val['center_name'] ;?>" data-unit_code="<?php echo $val['unit_code'] ;?>" data-interviewdate="<?php echo $val['interviewdate'] ;?>" data-reporting_time="<?php echo $val['reporting_time'] ;?>" data-interview_time="<?php echo $val['interview_time'] ;?>" data-center_address="<?php echo $val['center_address'] ;?>" data-toggle="modal" data-target="#exampleModal">Edit</button>
                                                    <a href="<?= base_url('admin/pdf_admitcard/?id='.$val['id']);?>" class="btn btn-sm btn-warning col-xs-2 ml-2">View</a><button class="btn btn-sm btn-info col-xs-2 ml-2 publish" value="<?= $val['id'];?>">Publish</button></td>
                                        </tr>
                                       
                                       
                                       <?php 
                                        }
                                        }
                                        ?>
                                       
                                        
                                    </tbody>
                                </table>
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
           <?php echo form_open_multipart('admin/update_admitcard');?>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                   
                    <div class="form-group row">
                        <div class="col-sm-6 col-md-6">
                            <label>Registration No.</label>
                            <?php echo form_input(array('type'=>'text','name'=>'registration_no','id'=>'registration_no','class'=>'form-control registration_no','placeholder'=>'Registration No.','required'=>'true','readonly'=>'true'));?>
                            <input type="hidden" name="id" id="id">
                        </div>  
                        <div class="col-sm-6 col-md-6">
                            <label>Applicant Name</label>
                            <?php echo form_input(array('type'=>'text','name'=>'candidate_name','id'=>'candidate_name','class'=>'form-control candidate_name','placeholder'=>'Applicant Name','required'=>'true','readonly'=>'true'));?>
                        </div> 
                         <div class="col-sm-6 col-md-6">
                            <label>Batch No.</label>
                            <?php echo form_input(array('type'=>'text','name'=>'batch_no','id'=>'batch_no','class'=>'form-control batch_no','placeholder'=>'Batch No.','required'=>'true'));?>
                        </div>                                    
                        <div class="col-sm-6 col-md-6">
                            <label>Center Unit Name</label>
                            <?php echo form_input(array('type'=>'text','name'=>'center_name','id'=>'center_name','class'=>'form-control center_name','placeholder'=>'Batch No.','required'=>'true'));?>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label>Unit Code No.</label>
                            <?php echo form_input(array('type'=>'text','name'=>'unit_code','id'=>'unit_code','class'=>'form-control unit_code','placeholder'=>'Unit Code No.','required'=>'true'));?>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label>Interview Date</label>
                            <?php echo form_input(array('type'=>'date','name'=>'interviewdate','id'=>'interviewdate','class'=>'form-control interviewdate','placeholder'=>'Interview Date','required'=>'true'));?>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label>Reporting Time</label>
                            <?php echo form_input(array('type'=>'time','name'=>'reporting_time','id'=>'reporting_time','class'=>'form-control reporting_time','placeholder'=>'Reporting Time','required'=>'true'));?>
                        </div>
                         <div class="col-sm-6 col-md-6">
                            <label>Interview Time</label>
                            <?php echo form_input(array('type'=>'time','name'=>'interview_time','id'=>'interview_time','class'=>'form-control interview_time','placeholder'=>'Interview Time','required'=>'true'));?>
                        </div>
                         <div class="col-sm-12 col-md-12">
                            <label>Center Address</label>
                            <?php echo form_input(array('type'=>'text','name'=>'center_address','id'=>'center_address','class'=>'form-control center_address','placeholder'=>'Center Address','required'=>'true'));?>
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
        $(document).ready(function(e) {
        $('body').on('click','.updt',function(){
        // $('.updt').click(function(e){
        var id = $(this).data('id');
        var registration_no = $(this).data('registration_no');
        var candidate_name = $(this).data('candidate_name');
        var batch_no = $(this).data('batch_no');
        var center_name = $(this).data('center_name');
        var unit_code = $(this).data('unit_code');
        var interviewdate = $(this).data('interviewdate');
        var reporting_time = $(this).data('reporting_time');
        var interview_time = $(this).data('interview_time');
        var center_address = $(this).data('center_address');
      
        $('#id').val(id);
        $('#registration_no').val(registration_no);
        $('#candidate_name').val(candidate_name);
        $('#batch_no').val(batch_no);
        $('#center_name').val(center_name);
        $('#unit_code').val(unit_code);
        $('#interviewdate').val(interviewdate);
        $('#reporting_time').val(reporting_time);
        $('#interview_time').val(interview_time);
        $('#center_address').val(center_address);
       });
     });
    </script>

<script>

	
	$(document).ready(function(e) {
        $('body').on('click','.admitcard',function(){
            debugger;
            var id=$(this).data('id');
            $.ajax({
                type:"POST",
                // url:"<?php echo base_url("home/getOrderList"); ?>",
                data:{id:id},
                dataType:"json",
                beforeSend: function(){
                    //$(".box-overlay").show();
                },
                success: function(data){
                    console.log(data);
                }
            });
        });



        $('body').on('click','.publish',function(){
            debugger;
            var id=$(this).val();
            $.ajax({
                type:"POST",
                url:"<?php echo base_url("admin/publish_admitcard"); ?>",
                data:{id:id},
                // dataType:"json",
                success: function(data){
                    console.log(data);
                    location.reload();
                }
            });
        });






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
            url:"<?PHP echo base_url('admin/delete_depart'); ?>",
            data: {id:id},
            success: function(result){
                console.log(result);
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