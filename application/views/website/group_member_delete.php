    <section class="content">
      <div class="container">
    	<div class="row">
            
            </div>
            <div class="col-md-12 mb-3 mt-3">
                <div class="card">
                   <div class="card-header">
                        <h3 class="card-title">Revenue Received From Candidate Application List</h3>
                    </div> 
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <?php echo form_open_multipart('admin/add_my_report');?>
                                <div class="col-md-12 col-lg-12 table-responsive" id="tables1">
                                <table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.NO.</th>
                                            <th>MEMBER ID</th>                
                                            <th>MEMBER NAME</th>                
                                            <th>DOB</th>                                        
                                            <th>FATHER NAME</th>                                            
                                            <th>MOBILE</th>                                            
                                            <th>AADHAR NUMBER</th>                                            
                                            <th>DESIGNATION</th>                                            
                                            <th>IMAGE</th>                                            
                                            <th>DELETE</th>                                            
                                        </tr>
                                    </thead>
                                    <!--  <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('website/createExcel_revenue_annual_team'); ?>"><i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                                    <tbody>
                                        <?php
                                            if(!empty($group_member)){$i = 0;
                                                foreach ($group_member as $key => $value){$i++;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i.'<span style="font-weight:900">.</span>';?></td>
                                                        <td><?php echo $value['member_id'];?></td>
                                                        <td><?php echo $value['member_name'];?></td>
                                                        <td><?php echo $value['dob'];?></td>
                                                        <td><?php echo $value['father_name'];?></td>
                                                        
                                                        <td><?php echo $value['mobile'];?></td>
                                                        <td><?php echo $value['aadhar_no'];?></td>
                                                        <td><?php echo $value['designation'];?></td>
                                                        <td><img src="<?php echo base_url('/assets/uploads/groups/'.$value['images']);?>" height="100px" width="100px"></td>
                                                        <td><button type="button" id="d_group_mem" class="btn btn-sm btn-info " data-id="<?php echo $value['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></button>    </td>
                                                        
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
   
  

<script>

	
	$(document).ready(function(e) {
        $('.hoverable').mouseenter(function(){
            //$('[data-toggle="popover"]').popover();
            $(this).popover('show');                    
        }); 

        $('.hoverable').mouseleave(function(){
            $(this).popover('hide');
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
        
		


</script>