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
                                            <th>Application Date</th> 
                                            <th>User Name</th>               
                                            <th>Password</th>               
                                            <th>State Unit</th>
                                            <th>Division Unit</th>
                                            <th>Applicant Name</th>
                                            <th>DOB</th>
                                            <th>Mobile No.</th>
                                            <th>Email</th>
                                            <th>Designation</th>
                                           
                                            <th>Father's Name</th>
                                            <th>Father's Occupation</th>
                                            <th>Mother's Name</th>
                                            <th>Mother's Occupation</th>
                                            <th>Annual Income</th>
                                            <th>Gender</th>
                                            <th>Correspondent Address</th>
                                            <th>Permanent Address</th>
                                            <th>Place Area</th>
                                            <th>Nationality</th>   
                                             <th>Department Id</th>                                         
                                            <th>Category</th>                                            
                                            <th>Identification Marks</th>                                            
                                            <th>Aadhar No.</th>                                            
                                            <th>PAN No.</th>                                            
                                            <th>Marital Status</th>                                            
                                            <th>Exam Passed</th>                                            
                                            <th>Board University</th>                                            
                                            <th>Passing Year</th>                                            
                                            <th>Total Marks</th>                                            
                                            <th>Mark Obtained</th>                                            
                                            <th>Division</th>                                            
                                            <th>Persentage Marks</th>                                            
                                            <th>Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($applylist)){

                                            foreach($applylist as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            
                                            <td><?php echo $i ?></td>
                                            <td><?php echo date('d-m-Y',strtotime($val['application_date'])); ?></td>
                                            <td><?php echo $val['user_name']; ?></td>
                                            <td><?php echo $val['password']; ?></td>
                                            <td><?php echo $val['state'] ;?></td>
                                            <td><?php echo $val['division']; ?></td>
                                            <td><?php echo $val['applicant_name'] ;?></td>
                                            <td><?php echo $val['dob'] ;?></td>
                                            <td><?php echo $val['mobile_no'] ;?></td>
                                            <td ><?php echo $val['email']; ?></td>
                                            <!-- <td ><?php echo $val['desicination'] ;?></td> -->
                                            <td ><?php echo $val['post_name'] ;?></td>
                                            <td ><?php echo $val['father_name'] ;?></td>
                                            <td ><?php echo $val['father_occupation'] ;?></td>
                                            <td ><?php echo $val['mother_name'] ;?></td>
                                            <td ><?php echo $val['mother_occupqation'] ;?></td>
                                            <td ><?php echo $val['annual_encome'] ;?></td>
                                            <td ><?php echo $val['gender'] ;?></td>
                                            <td ><?php echo $val['correspondent_address'] ;?></td>
                                            <td ><?php echo $val['permanent_address'] ;?></td>
                                            <td ><?php echo $val['place'] ;?></td>
                                            <td ><?php echo $val['nationality'] ;?></td>
                                            <td ><?php echo $val['depart_id'] ;?></td>
                                            <td ><?php echo $val['category'] ;?></td>
                                            <td ><?php echo $val['identification_marks'] ;?></td>
                                            <td ><?php echo $val['aadharno'] ;?></td>
                                            <td ><?php echo $val['panno'] ;?></td>
                                            <td ><?php echo $val['marital_status'] ;?></td>
                                            <td ><?php echo $val['exam_passed'] ;?></td>
                                            <td ><?php echo $val['board_university'] ;?></td>
                                            <td ><?php echo $val['pasing_year'] ;?></td>
                                            <td ><?php echo $val['total_marks'] ;?></td>
                                            <td ><?php echo $val['mark_obtained'] ;?></td>
                                            <td ><?php echo $val['division'] ;?></td>
                                            <td ><?php echo $val['persentage_marks'] ;?></td>
                                            <td> <a href="<?= base_url('admin/admitcardpage?id='.$val['id']);?>" class="btn btn-success btn-sm">Make Admitcard</a> <a href="<?= base_url('admin/resultpage?id='.$val['id']);?>" class="btn btn-info btn-sm ml-2">Make Result</a></td>
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