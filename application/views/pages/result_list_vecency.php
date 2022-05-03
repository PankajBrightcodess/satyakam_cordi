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
                                            <th>Candidate Name</th>
                                            <th>Father's Name</th>
                                            <th>Designation</th>
                                            <th>Personality</th>
                                            <th>Leadership Quality</th>
                                            <th>Thinking Ability</th>
                                            <th>Qualification</th>
                                            <th>Extra Qualification</th>
                                            <th>Exprience</th>
                                            <th>IQ Test</th>
                                            <th>Mind Set</th>
                                            <th>Security Deposit</th>
                                            <th>Processing Fee</th>
                                            <th>Training Fee</th>
                                            <th>Others</th>
                                            <th>Total Amount</th>
                                            <th>Total Amount(In Word)</th>
                                            <th>Publish Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($result_list)){
                                            // print_r($result_list);

                                            foreach($result_list as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $val['registration_no']; ?></td>
                                            <td><?php echo $val['candidate_name'] ;?></td>
                                            <td><?php echo $val['father_name']; ?></td>
                                            <td><?php echo $val['designation'] ;?></td>
                                            <td><?php echo $val['personality'] ;?></td>
                                            <td><?php echo $val['leadership_quality'] ;?></td>
                                            <td><?php echo $val['thinking'] ;?></td>
                                            <td ><?php echo $val['qualification']; ?></td>
                                            <td ><?php echo $val['extra_qualification'] ;?></td>
                                            <td ><?php echo $val['experience'] ;?></td>
                                            <td ><?php echo $val['iq_test'] ;?></td>
                                            <td ><?php echo $val['mind_set'] ;?></td>
                                            <td ><?php echo $val['security_deposit'] ;?></td>
                                            <td ><?php echo $val['procesing_fee_'] ;?></td>
                                            <td ><?php echo $val['training_fee'] ;?></td>
                                            <td ><?php echo $val['others'] ;?></td>
                                            <td ><?php echo $val['total_amount'] ;?></td>
                                            <td ><?php echo $val['total_amount_in_word'] ;?></td>
                                            <td ><?php if($val['result_publish']==1)
                                                 {
                                                    ?><label style="background: green; border-radius: 10px; padding: 10px; color: white; opacity: 0.5;">Published</label><?php
                                                 }
                                                 else{
                                                     ?><label style="background: red; border-radius: 10px; padding: 10px; color: white; opacity: 0.5;">Panding</label>
                                                     <?php
                                                 } ?></td>
                                            <td ><button class="btn btn-sm btn-success col-xs-2 updt"  data-registration_no="<?php echo $val['registration_no']; ?>" data-id="<?php echo $val['id']; ?>" data-candidate_name="<?php echo $val['candidate_name'] ;?>" data-father_name="<?php echo $val['father_name'] ;?>" data-designation="<?php echo $val['designation'] ;?>" data-personality="<?php echo $val['personality'] ;?>" data-leadership_quality="<?php echo $val['leadership_quality'] ;?>" data-thinking="<?php echo $val['thinking'] ;?>" data-qualification="<?php echo $val['qualification'] ;?>" data-extra_qualification="<?php echo $val['extra_qualification'] ;?>" data-experience="<?php echo $val['experience'] ;?>" data-iq_test="<?php echo $val['iq_test'] ;?>" data-mind_set="<?php echo $val['mind_set'] ;?>" data-security_deposit="<?php echo $val['security_deposit'] ;?>" data-procesing_fee_="<?php echo $val['procesing_fee_'] ;?>" data-training_fee="<?php echo $val['training_fee'] ;?>" data-others="<?php echo $val['others'] ;?>" data-total_amount="<?php echo $val['total_amount'] ;?>" data-total_amount_in_word="<?php echo $val['total_amount_in_word'] ;?>" data-result_decelear="<?php echo $val['result_decelear'] ;?>" data-toggle="modal" data-target="#exampleModal">Edit</button>
                                                    <a href="<?= base_url('admin/pdf_result/?id='.$val['id']);?>" class="btn btn-sm btn-warning col-xs-2 ml-2">View</a> <a href="<?= base_url('admin/publish_result/?id='.$val['id']);?>" class="btn btn-sm btn-info col-xs-2 ml-2">Publish</a></td>
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
           <?php echo form_open_multipart('admin/update_result');?>
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
                            <label>Father's Name</label>
                            <?php echo form_input(array('type'=>'text','name'=>'father_name','id'=>'father_name','class'=>'form-control father_name','placeholder'=>'Fathers Name','required'=>'true','readonly'=>'true'));?>
                        </div>                                    
                        <div class="col-sm-6 col-md-6">
                            <label>Designation</label>
                            <?php echo form_input(array('type'=>'text','name'=>'designation','id'=>'designation','class'=>'form-control designation','placeholder'=>'Designation','required'=>'true','readonly'=>'true'));?>
                        </div> 
                        <div class="col-sm-6 col-md-6">
                            <label>Personality</label>
                            <select class="form-control" id="personality" name="personality">
                                <option value="">--- SELECT---</option>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>
                            </select>      
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label>Leadership Quality</label>
                            <select class="form-control" id="leadership_quality" name="leadership_quality">
                                <option value="">--- SELECT---</option>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label>Thinking</label>
                            <select class="form-control" id="thinking" name="thinking">
                                <option value="">--- SELECT---</option>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label>Qualification</label>
                            <select class="form-control" id="qualification" name="qualification">
                                <option value="">--- SELECT---</option>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>
                            </select>
                        </div>
                         <div class="col-sm-6 col-md-6">
                           <label>Extra Qualification</label>
                            <select class="form-control" id="extra_qualification" name="extra_qualification">
                                <option value="">--- SELECT---</option>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <label>Experience</label>
                            <select class="form-control" id="experience" name="experience">
                                <option value="">--- SELECT---</option>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>
                            </select>
                        </div>
                         <div class="col-sm-6 col-md-6">
                         <label>IQ Test</label>
                            <select class="form-control" id="iq_test" name="iq_test">
                                <option value="">--- SELECT---</option>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <label>Mind Set</label>
                            <select class="form-control" id="mind_set" name="mind_set">
                                <option value="">--- SELECT---</option>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-12">
                          <label>Result Declaration</label>
                        <select class="form-control" id="result_decelear" name="result_decelear">
                            <option value="">--- SELECT---</option>
                            <option value="Selected">Selected</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label>Security Deposit</label>
                            <?php echo form_input(array('type'=>'text','name'=>'security_deposit','id'=>'security_deposit','class'=>'form-control security_deposit','placeholder'=>'Fathers Name','required'=>'true'));?>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label>Processing Fee</label>
                            <?php echo form_input(array('type'=>'text','name'=>'procesing_fee_','id'=>'procesing_fee_','class'=>'form-control procesing_fee_','placeholder'=>'Fathers Name','required'=>'true'));?>
                        </div> 
                        <div class="col-sm-6 col-md-6">
                            <label>Training Fee</label>
                            <?php echo form_input(array('type'=>'text','name'=>'training_fee','id'=>'training_fee','class'=>'form-control training_fee','placeholder'=>'Fathers Name','required'=>'true'));?>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label>Other Fee</label>
                            <?php echo form_input(array('type'=>'text','name'=>'others','id'=>'others','class'=>'form-control others','placeholder'=>'Fathers Name','required'=>'true'));?>
                        </div>
                         <div class="col-sm-6 col-md-6">
                            <label>Total Amount</label>
                            <?php echo form_input(array('type'=>'text','name'=>'total_amount','id'=>'total_amount','class'=>'form-control total_amount','placeholder'=>'Fathers Name','required'=>'true'));?>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label>Total Amount(In Word)</label>
                            <?php echo form_input(array('type'=>'text','name'=>'total_amount_in_word','id'=>'total_amount_in_word','class'=>'form-control total_amount_in_word','placeholder'=>'Fathers Name','required'=>'true'));?>
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
        var father_name = $(this).data('father_name');
        var designation = $(this).data('designation');
        var personality = $(this).data('personality');
        var leadership_quality = $(this).data('leadership_quality');
        var thinking = $(this).data('thinking');
        var qualification = $(this).data('qualification');
        var extra_qualification = $(this).data('extra_qualification');
        var experience = $(this).data('experience');
        var iq_test = $(this).data('iq_test');
        var mind_set = $(this).data('mind_set');
        var result_decelear = $(this).data('result_decelear');
        var security_deposit = $(this).data('security_deposit');
        var procesing_fee_ = $(this).data('procesing_fee_');
        var training_fee = $(this).data('training_fee');
        var others = $(this).data('others');
        var total_amount = $(this).data('total_amount');
        var total_amount_in_word = $(this).data('total_amount_in_word');
        
      
        $('#id').val(id);
        $('#registration_no').val(registration_no);
        $('#candidate_name').val(candidate_name);
        $('#father_name').val(father_name);
        $('#designation').val(designation);
        $('#personality').val(personality);
        $('#leadership_quality').val(leadership_quality);
        $('#thinking').val(thinking);
        $('#qualification').val(qualification);
        $('#extra_qualification').val(extra_qualification);
        $('#experience').val(experience);
        $('#iq_test').val(iq_test);
        $('#mind_set').val(mind_set);
        $('#result_decelear').val(result_decelear);
        $('#security_deposit').val(security_deposit);
        $('#procesing_fee_').val(procesing_fee_);
        $('#training_fee').val(training_fee);
        $('#others').val(others);
        $('#total_amount').val(total_amount);
        $('#total_amount_in_word').val(total_amount_in_word);
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