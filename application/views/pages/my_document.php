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
                                <?php echo form_open_multipart('admin/mydocument_create');?>
                                 <div class="form-group row">
                                    <div class="col-sm-12">
                                        <!-- <label>Department</label> -->
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
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12" >
                                        <!-- <label>Post</label> -->
                                         <select class="form-control posts" name="posts" id="posts" required>
                                            <option value="">POST :</option>
                                            
                                        </select>
                                    </div>                                    
                                </div>
                               <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Office Quotation</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'office_quotation','id'=>'activate_menu','class'=>'form-control','accept'=>'.pdf','placeholder'=>'Enter Office Quotation','required'=>'true'));?>
                                    </div>                                    
                                </div> 
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Service DID</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'service_did','id'=>'activate_menu','class'=>'form-control','accept'=>'.pdf','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Service Book</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'service_book','id'=>'activate_menu','class'=>'form-control','accept'=>'.pdf','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Training Procedure</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'training_proc','id'=>'activate_menu','class'=>'form-control','accept'=>'.pdf','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Appointment Procedure</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'appointment_proc','id'=>'activate_menu','class'=>'form-control','accept'=>'.pdf','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Official Order</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'official_order','id'=>'activate_menu','class'=>'form-control','accept'=>'.pdf','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Ultimatum</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'ultimatum','id'=>'activate_menu','class'=>'form-control','accept'=>'.pdf','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Transfer Procedure</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'transfer_proc','id'=>'activate_menu','class'=>'form-control','accept'=>'.pdf','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Promotion Procedure</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'promotion_proc','id'=>'activate_menu','class'=>'form-control','accept'=>'.pdf','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                  <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Security Fund Received</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'security_fund_rec','id'=>'activate_menu','class'=>'form-control','accept'=>'.pdf','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                  <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>My P/F</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'my_pf','id'=>'activate_menu','class'=>'form-control','accept'=>'.pdf','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <?php echo form_submit(array('name'=>'save_dep','id'=>'save_dep','value'=>'Save','class'=>'form-control btn btn-success'));?>
                                    </div>
                                    <div class="col-md-4"></div>                                    
                                </div>
                                <?php echo form_close();?>
                            </div>
                           <!--  <div class="col-md-2 col-lg-2"></div>
                        	<div class="col-md-5 col-lg-6 table-responsive">
                            	<table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.no</th>
                                            <th>Menu Name</th>                
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
                                            <button class="btn btn-danger btn-xs delete" value="<?php echo $val['id'];?>"><i class="fa fa-trash"></i></button>  
                                             <button type="button" class="btn btn-success btn-xs updt" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $val['id'];?>" data-department="<?php echo $val['department'];?>"><i class="fa fa-edit"></i></button>
                                           </td>
                                        </tr>
                                       <?php 
                                        }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div> -->
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