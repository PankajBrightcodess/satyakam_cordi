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
                            <div class="col-md-12 col-lg-12 table-responsive tbdy">
                                <table class="table data-table stripe hover nowrap table-bordered text-uppercase">
                                    <thead >
                                        <tr>    
                                            <th>#</th>
                                            <th>Membership No.</th>
                                            <th>State</th>                
                                            <th>Division</th>                
                                            <th>Applicant Name</th>
                                            <th>Father's Name</th>
                                            <th>DOB</th>                                            
                                            <th>Mobile No</th>
                                            <th>Email</th>
                                            <th>Super Types</th>
                                            <th>Years</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-uppercase">
                                        <?php 
                                            if(!empty($members)){$i=0;
                                             foreach ($members as $key => $value) {$i++; ?>
                                             <tr>    
                                               <td><?php echo $i;?></td>     
                                               <td><?php echo $value['membership_no'];?></td>
                                               <td><?php echo $value['state'];?></td> 
                                               <td><?php echo $value['division'];?></td> 
                                               <td><?php echo $value['applicant_name'];?></td> 
                                               <td><?php echo $value['father_name'];?></td> 
                                               <td><?php echo date('d-m-Y',strtotime($value['dob']));?></td> 
                                               <td><?php echo $value['mobile_no'];?></td> 
                                               <td><?php echo $value['email'];?></td> 
                                               <td><?php echo $value['super'];?></td> 
                                               <td><?php echo $value['year'];?></td> 
                                               <td><span class="float-right">
                                                 <a href="<?= base_url('admin/membership_certificate/'.$value['id']);?>" class="btn btn-info btn-xs" title="Membership Certificate" ><i class="fa fa-plus-circle"></i></a>
                                                <button class="btn btn-warning btn-xs" title="Officer Details" value="<?php echo $value['id'];?>"><i class="fa fa-sticky-note"></i></button>
                                                 <button type="button" class="btn btn-success btn-xs updt" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $value['id'];?>" title="Edit" ><i class="fa fa-edit"></i></button>
                                                 <button class="btn btn-danger btn-xs" title="Delete" value="<?php echo $value['id'];?>"><i class="fa fa-trash"></i></button> </td> 
                                             </tr>
                                             <?php }} ?>
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
                debugger;
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

             $('body').on('change','#state',function(){
                // debugger;
                 var state = $(this).val(); 
                $.ajax({
                    url:"<?php echo base_url('admin/menucontrollist') ;?>",
                    method:"POST",
                    data:{state:state},
                    success:function(data){
                        $('.tbdy').html(data);
                        console.log(data);
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