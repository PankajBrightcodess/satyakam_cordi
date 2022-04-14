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
                        	<div class="col-md-12 col-lg-12">
                                <?php echo form_open_multipart('admin/add_my_report');?>
                                 <!-- <div class="form-group row">
                                    <div class="col-sm-12">
                                        <select class="form-control" name="depart_id" required id="depart_id">
                                            <option value="">DEPARTMENT :</option>
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
                                </div> -->
                                <div class="col-md-12 col-lg-12 table-responsive">
                                <table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.NO.</th>
                                            <th>NAME</th>                
                                            <th>DEPARTMENT</th>                
                                            <th>POST</th>                                            
                                            <th>BATCH NO.</th>                                            
                                            <th>BRANCH</th>                                            
                                            <th>STATE</th>                                            
                                            <th>CODE</th>                                            
                                            <th>MOBILE</th>                                            
                                            <th>EMAIL</th>
                                            <th>ACTION</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($officer_list)){
                                            foreach($officer_list as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td ><?php echo $i ?></td>
                                            <td ><?php echo $val['officer_first_name'].' '.$val['officer_middle_name'].' '.$val['officer_last_name']; ?></td>
                                            <td ><?php echo $val['department'] ?></td>
                                            <td ><?php echo $val['post'] ?></td>
                                            <td ><?php echo $val['batch_no'] ?></td>
                                            <td ><?php echo $val['Join_in_branch'] ?></td>
                                            <td ><?php echo $val['state'] ?></td>
                                            <td ><?php echo $val['code'] ?></td>
                                            <td ><?php echo $val['mobile_no'] ?></td>
                                            <td ><?php echo $val['email_id'] ?></td>
                                            <td><span class="float-right">
                                                <a href="<?php echo base_url('admin/daily_report_list?id='.$val['id'])?>" class="btn btn-success btn-xs">View Reports</a>
                                             <!-- <button type="button" class="btn btn-success btn-xs updt" data-id="<?php echo $val['id'];?>">View Reports</button> -->
                                           </td>
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
        $('body').on('click','.updt',function(e){
            // debugger;
        var id = $(this).data('id');
        $.ajax({
                type:"POST",
                url:"<?php echo base_url('admin/daily_report_list')?>",
                data:{id:id},
                // dataType:"json",
                 beforeSend: function(){
                    
                },
                success:function(data){
                    console.log(data);
                }
        });
      
       
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
        
		$('body').on('change','#depart_id',function(){
            // debugger;
			var parent_id=$(this).val();
			$.ajax({
				type:"POST",
				url:"<?php echo base_url("admin/getpost"); ?>",
				data:{depart_id:parent_id},
				// dataType:"json",
				beforeSend: function(){
					
				},
				success: function(data){
                    console.log(data);
                    $('#posts').html(data);
				}
			});
		});
        $('#posts').trigger('change');
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