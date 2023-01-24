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
                        	<div class="col-md-12 col-lg-12 col-12 table-responsive">
                            	<table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>Sl.No.</th>
                                            <th>Member Id</th>               
                                            <th>Member Name</th>               
                                            <th>DOB</th>
                                            <th>Father Name</th>
                                            <th>Mobile No.</th>
                                           <!--  <th>Aadhar No.</th>
                                            <th>Nominee Name</th>
                                            <th>Nominee Relation</th>                                           
                                            <th>Username</th>                                           
                                            <th>Password</th>  -->                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($member_list)){

                                            foreach($member_list as $val){$i++;  ?>
                                        <tr>
                                            
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $val['member_id']; ?></td>
                                            <td><?php echo $val['member_name']; ?></td>
                                            <td><?php echo date('d-m-Y',strtotime($val['dob'])) ;?></td>
                                            <td><?php echo $val['father_name'] ;?></td>
                                            <td ><?php echo $val['mobile']; ?></td>
                                           <!--  <td ><?php echo $val['aadhar_no'] ;?></td>
                                            <td ><?php echo $val['nominee_name'] ;?></td>
                                            <td ><?php echo $val['nominee_relation'] ;?></td>
                                            <td ><?php echo $val['username'] ;?></td>
                                            <td ><?php echo $val['password'] ;?></td> -->
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
        $('.hoverable').mouseenter(function(){
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
                    var setdata = JSON.parse(data);
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
        
        
    });
</script>