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
                        <div class="col-md-6 mb-3">
                            <label>State</label>
                            <select class="form-control state_id" id="state">
                                <option>--SELECT STATE--</option>
                                <?php 
                                  if(!empty($state)){
                                    foreach ($state as $key => $value) {
                                        ?><option value="<?php echo $value['id'];?>"><?php echo $value['state'];?></option><?php
                                    }
                                  }

                                ?>
                            </select>
                        </div>
                        	<div class="col-md-12 col-lg-12 table-responsive">
                            	<table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>Department</th>
                                            <th>Post</th>                
                                            <th>E-Contract</th>                
                                            <th>My Office</th>                                            
                                            <th>My Project</th>                                            
                                            <th>Vecency</th>                                            
                                            <th>Events</th>                                            
                                            <th>Gallery</th>                                            
                                            <th>Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                        // echo PRE;
                                         if(!empty($depart)){
                                            // print_r($depart);
                                            foreach($depart as $val){$i++; ?>
                                        <tr>
                                            <td ><?php echo $val['department'] ?></td>
                                            <td ><?php echo $val['post'] ?> 
                                            <!-- <input type="text" id="post_id" name="post_id" value="<?php echo $val['id']; ?>"> -->
                                        </td>
                                            <td><input type="checkbox" class="e_contract" id="e_contract" name="e_contract"></td>
                                            <td><input type="checkbox" class="my_office" id="my_office" name="my_office"></td>
                                            <td><input type="checkbox" class="my_project" ssid="my_project" name="my_project"></td>
                                            <td><input type="checkbox" class="vecency"  id="vecency" name="vecency"></td>
                                            <td><input type="checkbox" class="events" id="events" name="events"></td>
                                            <td><input type="checkbox" class="gallery" id="gallery" value="1" name="gallery"></td>
                                            <td><span class="float-right"> 
                                             <button type="button" class="btn btn-success btn-xs departm" value="<?php echo $val['id']; ?>">Update</button>
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
           <?php echo form_open_multipart('admin/updatevecency');?>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                   
                    <div class="form-group row">
                         <div class="col-sm-12 col-md-12 mb-3">
                             <select class="form-control " name="state_id" id="state_id" required id="activate_menu">
                                <option value="">---SELECT---</option>
                                <?php
                                    if(!empty($state)){
                                        foreach ($state as $key => $value) {
                                           ?>
                                           <option value="<?= $value['id'];?>"><?= $value['state'];?></option>
                                           <?php
                                        }
                                    }
                                ?> 
                            </select>
                        </div>  
                        <div class="col-sm-12 col-md-12 mb-3">
                            <?php echo form_input(array('type'=>'text','name'=>'code','id'=>'code','class'=>'form-control','placeholder'=>'Enter Code','required'=>'true'));?>
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
        var state_id = $(this).data('state_id');
        var code = $(this).data('code');
      
        $('#id').val(id);
        $('#state_id').val(state_id);
        $('#code').val(code);
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

        
        $('body').on('click','.departm',function(){
            var post_id = $(this).val();
            var state = $("#state").val();
            var e_contract=$(this).closest('tr').find('.e_contract').prop('checked');
            var my_office=$(this).closest('tr').find('.my_office').prop('checked');
            var my_project=$(this).closest('tr').find('.my_project').prop('checked');
            var vecency=$(this).closest('tr').find('.vecency').prop('checked');
            var events=$(this).closest('tr').find('.events').prop('checked');
            var gallery=$(this).closest('tr').find('.gallery').prop('checked');
            $.ajax({
                url:"<?php echo base_url('admin/insert_data') ;?>",
                method:"POST",
                data:{post_id:post_id,state:state,e_contract:e_contract,my_office:my_office,my_project:my_project,vecency:vecency,events:events,gallery:gallery},
                success:function(data){
                    console.log(data);
                     if(data){
                       swal("Good job!", "You clicked the button!", "success"); 
                    }
                    else{
                     swal("Good job!", "You clicked the button!", "error");
                   }
                }
            });
        });
        
		var table=$('.data-table').DataTable({
			scrollCollapse: true,
			autoWidth: false,
			responsive: false,
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
            url:"<?PHP echo base_url('admin/deletevecency'); ?>",
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