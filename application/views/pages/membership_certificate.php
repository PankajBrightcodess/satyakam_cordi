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
                        	<div class="col-md-5 col-lg-4">
                                <?php echo form_open_multipart('admin/save_certificate');?>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'cf_no','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Certificate Number','value'=>$certificate['cf_no'],'readonly'=>'true','required'=>'true'));?>
                                        <input type="hidden" name="member_id" value="<?php echo $certificate['id'];?>">
                                    </div>                                    
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'division','id'=>'activate_menu','class'=>'form-control','value'=>$certificate['division_unit_name'],'placeholder'=>'Division','readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'dist','id'=>'activate_menu','class'=>'form-control','value'=>$certificate['dist'],'placeholder'=>'Dist','readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'member_name','id'=>'activate_menu','class'=>'form-control','value'=>$certificate['applicant_name'],'placeholder'=>'Member Name','readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php if(!empty($certificate['father_name'])) {
                                          ?><?php echo form_input(array('type'=>'text','name'=>'father_name','id'=>'activate_menu','value'=>$certificate['father_name'],'class'=>'form-control','readonly'=>'true','placeholder'=>'Father Name','required'=>'true'));?><?php
                                        }else{
                                            ?><?php echo form_input(array('type'=>'text','name'=>'father_name','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Father Name','required'=>'true'));?><?php
                                        }?>
                                        
                                        
                                        <input type="hidden" name="image" value="<?= $certificate['image'];?>">
                                        <input type="hidden" name="signup_id" value="<?= $certificate['signup_id'];?>">
                                    </div>                                    
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'email','name'=>'email','id'=>'activate_menu','class'=>'form-control','value'=>$certificate['email'],'placeholder'=>'Email','readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'number','name'=>'mobile','id'=>'activate_menu','class'=>'form-control','value'=>$certificate['mobile_no'],'placeholder'=>'Email','readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'saving_plan_no','id'=>'activate_menu','value'=>$certificate['super'],'class'=>'form-control','placeholder'=>'Saving Plan No.','readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'term_years','id'=>'activate_menu','class'=>'form-control','value'=>$certificate['year'],'placeholder'=>'Term Years','readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'numinee_name','id'=>'activate_menu','class'=>'form-control','value'=>$certificate['nominee_name'],'placeholder'=>'Nomanee Name','readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'numinee_relation','id'=>'activate_menu','value'=>$certificate['nominee_relation'],'class'=>'form-control','placeholder'=>'Nomanee Relation','readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'number','name'=>'numinee_age','id'=>'activate_menu','value'=>$certificate['nominee_age'],'class'=>'form-control','placeholder'=>'Nomanee Age','readonly'=>'true','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'number','name'=>'numinee_aadhar_no','id'=>'activate_menu','value'=>$certificate['nominee_aadhar'],'class'=>'form-control','placeholder'=>'Nomanee Aadhar No.','readonly'=>'true','required'=>'true'));?>
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
                            </div>
                            <div class="col-md-2 col-lg-2"></div>
                        	<div class="col-md-5 col-lg-6 table-responsive">
                            	<table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.no</th>
                                            <th>Department Name</th>                
                                            <th>Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($depart)){
                                            foreach($depart as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td ><?php echo $i ?></td>
                                            <td ><?php echo $val['department'] ?></td>
                                            
                                            <td><span class="float-right">
                                            <button class="btn btn-danger btn-xs delete" value="<?php echo $val['id'];?>"><i class="fa fa-trash"></i></button>   <!-- <?php echo base_url("home/delete_sidebar/");?> -->
                                             <button type="button" class="btn btn-success btn-xs updt" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $val['id'];?>" data-department="<?php echo $val['department'];?>"><i class="fa fa-edit"></i></button>
                                           </td>
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
           <?php echo form_open_multipart('admin/update_department');?>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                   
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <?php echo form_input(array('type'=>'text','name'=>'department','id'=>'department','class'=>'form-control department','placeholder'=>'Enter Department','required'=>'true'));?>
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
        var department = $(this).data('department');
      
        $('#id').val(id);
        $('#department').val(department);
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