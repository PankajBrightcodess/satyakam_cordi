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
                        	<div class="col-md-6 col-lg-5">
                        		<label>	Menu</label>
                                <?php echo form_open_multipart('admin/savechildsubmenu');?>
                                 <div class="form-group row">
                                    <div class="col-sm-12">
                                      <select class="form-control menu" id="menu" name="menu_id">
                                          <option>---SELECT---</option>
                                          <?php 
                                            foreach ($menu as $key => $value) {
                                               ?>
                                                <option value="<?= $value['id'];?>"><?= $value['menu'];?></option>
                                               <?php
                                            }
                                          ?>
                                      </select>
                                    </div>                               
                                </div>
                                <div class="form-group row">
                                     <div class="col-sm-12">
                                     	<label>Sub Menu</label>
                                         <select class="form-control submenu"  name="submenu_id">
                                             <option>---SELECT---</option>
                                         </select>
                                    </div>                                      
                                </div>
                                 <div class="form-group row">
                                     <div class="col-sm-12">
                                     		<label>Child Submenu</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'child_submenu','id'=>'activate_menu','class'=>'form-control','placeholder'=>'Enter Child Sub Menu','required'=>'true'));?>
                                    </div>  
                                                                        
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <?php echo form_submit(array('name'=>'save_submenu','id'=>'save_submenu','value'=>'Save Sub Menu','class'=>'form-control btn btn-success'));?>
                                    </div>
                                    <div class="col-md-4"></div>                                    
                                </div>
                                <?php echo form_close();?>
                            </div>
                            <div class="col-md-1 col-lg-1"></div>
                        	<div class="col-md-5 col-lg-6 table-responsive">
                            	<table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.no</th>
                                            <th>menu</th>                
                                            <th>Sub Menu</th>                
                                            <th>Child Sub Menu</th>                
                                            <th>Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                        // echo PRE;
                                        // print_r($child_submenu_list);
                                         if(!empty($child_submenu_list)){
                                            foreach($child_submenu_list as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td ><?php echo $i ?></td>
                                            <td ><?php echo $val['menu'] ?></td>
                                            <td ><?php echo $val['submenu'] ?></td>
                                            <td ><?php echo $val['child_submenu'] ?></td>
                                            
                                            <td><span class="float-right">
                                            <button class="btn btn-danger btn-xs delete" value="<?php echo $val['id'];?>"><i class="fa fa-trash"></i></button>   <!-- <?php echo base_url("home/delete_sidebar/");?> -->
                                             <button type="button" class="btn btn-success btn-xs updt" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $val['id'];?>" data-menu_id="<?php echo $val['menu_id'];?>" data-submenu_id="<?php echo $val['submenu_id'];?>" data-child_submenu="<?php echo $val['child_submenu'];?>"><i class="fa fa-edit"></i></button>
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
           <?php echo form_open_multipart('admin/update_childsubmenu');?>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                                  <select class="form-control menu" id="menu_id"  name="menu_id">
                                      <option>---SELECT---</option>
                                      <?php 
                                        foreach ($menu as $key => $value) {
                                           ?>
                                            <option value="<?= $value['id'];?>"><?= $value['menu'];?></option>
                                           <?php
                                        }
                                      ?>
                                      
                                  </select>
                            <input type="hidden" name="id" id="id">
                        </div>                                    
                    </div>
                    <div class="form-group row">
                         <div class="col-sm-12">
                             <select class="form-control submenu" id="submenu"  name="submenu_id">
                                 <option>---SELECT---</option>
                                 <?php 
                                 	if(!empty($submenu)){
                                 		foreach ($submenu as $key => $value) {
                                 			?><option value="<?php echo $value['id'];?>"><?php echo $value['submenu'];?></option><?php
                                 		}
                                 	}

                                 ?>
                             </select>
                        </div>                                      
                    </div>
                    <div class="form-group row">
                         <div class="col-sm-12">
                            <?php echo form_input(array('type'=>'text','name'=>'child_submenu','id'=>'child_submenu','class'=>'form-control','placeholder'=>'Enter Sub Menu','required'=>'true'));?>
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
        var menu_id = $(this).data('menu_id');
        var submenu_id = $(this).data('submenu_id');
        var child_submenu = $(this).data('child_submenu');
      
        $('#id').val(id);
        $('#menu_id').val(menu_id);
        $('#submenu').val(submenu_id);
        $('#child_submenu').val(child_submenu);
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
        
		$('body').on('change','#menu',function(){
            debugger;
			var menu_id=$(this).val();
			$.ajax({
				type:"POST",
				url:"<?php echo base_url("admin/get_submenu_byides"); ?>",
				data:{menu_id:menu_id},
				success: function(record){
					$('.submenu').html(record);
					
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
            url:"<?PHP echo base_url('admin/delete_submenu'); ?>",
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