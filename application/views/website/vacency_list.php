<section class="content">
      <div class="container">
    	
         
            <div class="col-md-12 mb-3">
                <div class="card">
                   <div class="card-header">
                        <h3 class="card-title">Vacency List</h3>
                    </div> 
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-12 col-lg-12 col-12 table-responsive table1">
                                <table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.NO.</th>
                                            <th>APPLICANT NAME</th>                
                                            <th>DATE OF BIRTH</th>                
                                            <th>FATHER NAME</th>                
                                            <th>DEPARTMENT</th>
                                            <th>POST</th>
                                            <th>MOBILE NO.</th>
                                            <th>EMAIL</th>
                                            <th>CATEGORY</th>
                                            <th>GENDER</th>
                                            <th>CREATE DATE</th>
                                        </tr>
                                    </thead>
                                    <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('website/vacencylist_excel'); ?>"><i class="fa fa-file-excel-o"></i> Export to Excel</a>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($vacency_details)){
                                            foreach($vacency_details as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $val['applicant_name'];?></td>
                                            <td><?php echo date('d-m-Y',strtotime($val['dob'])); ?></td>
                                            <td><?php echo $val['father_name'];?></td>
                                            <td><?php echo $val['department']; ?></td>
                                            <td><?php echo $val['Profile']; ?></td>
                                            <td><?php echo $val['mobile_no']; ?></td>
                                            <td><?php echo $val['email'];?></td>
                                            <td><?php echo $val['category'];?></td>
                                            <td><?php echo $val['gender']; ?></td>
                                            <td><?php echo date('d-m-Y',strtotime($val['added_on'])); ?></td>
                                        </tr>
                                        <?php 
                                        }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php echo form_close();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ''''''''''''''''''''''$revenue area''''''''''''''''''''''''' -->
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
        
		


</script>