<section class="content">
      <div class="container">
        
         
            <div class="col-md-12 mb-3">
                <div class="card">
                   <div class="card-header">
                        <h3 class="card-title">Group List</h3>
                    </div> 
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-12 col-lg-12 table-responsive table1" id="table1">
                                <table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>  
                                            <th>S.NO.</th>
                                            <th>User Id</th>                
                                            <th>Password</th>                
                                            <th>Group Name</th>
                                            <th>Date</th>
                                            <th>Chairman Name</th>
                                            <th>Secretary Name</th>
                                            <th>Treasureers Name</th>
                                            <th>Mobile No.</th>
                                            <th>Email</th>
                                            <th>Link</th>
                                           
                                        </tr>
                                    </thead>
                                    <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('website/grouplist'); ?>"><i class="fa fa-file-excel-o"></i> Export to Excel</a>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($list)){
                                            foreach($list as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $val['username'];?></td>
                                            <td><?php echo $val['password'];?></td>
                                            <td><?php echo $val['group_name'];?></td>
                                            <td ><?php echo date('d-m-Y',strtotime($val['inception_date'])); ?></td>
                                            <td ><?php echo $val['group_name']; ?></td>
                                            <td ><?php echo $val['group_name']; ?></td>
                                            <td ><?php echo $val['group_name'];?></td>
                                            <td ><?php echo $val['mobile_no'];?></td>
                                            <td ><?php echo $val['email']; ?></td>
                                            <td ><a href="<?= base_url('website/member_login_group');?>" title="Login" class="btn btn-sm btn-info mb-3">Login</a><a href="<?= base_url('website/member_group_member_list/?id='.$val['id']);?>" title="Member List" class="btn btn-sm btn-success ">List</a></td>
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