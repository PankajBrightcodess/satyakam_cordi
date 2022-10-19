 <!-- <?php print_r($officer);?> -->
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
                                <?php echo form_open_multipart('admin/update_officerdetails');?>
                                 <div class="form-group row">
                                     <div class="col-sm-4 ">
                                        <label>Registration No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'reg_no','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['reg_no'],'readonly'=>true,'required'=>'true'));?>
                                    </div> 
                                    <div class="col-sm-4">
                                        <label>Department</label>
                                        <select class="form-control" name="department_id" required id="depart_id">
                                            <option value="">DEPARTMENT :</option>
                                            <?php
                                                if(!empty($depart)){
                                                    foreach ($depart as $key => $value) {
                                                       ?>
                                                       <option <?php if($officer[0]['department_id']==$value['id']){?> selected<?php }?> value="<?= $value['id'];?>"><?= $value['department'];?></option>
                                                       <?php
                                                    }
                                                }
                                            ?> 
                                        </select>
                                    </div> 
                                    <div class="col-sm-4 mb-1" >
                                        <label>Post</label>
                                         <select class="form-control posts" name="post_id" id="posts" required>
                                            <option value="">POST :</option>
                                            <?php
                                                if(!empty($post)){
                                                    foreach ($post as $key => $value) {
                                                        ?>
                                                          <option <?php if($officer[0]['post_id']==$value['id']){?> selected<?php }?> value="<?= $value['id'];?>"><?= $value['post'];?></option>
                                                        <?php
                                                    }
                                                }                   
                                            ?>
                                            
                                        </select>
                                    </div> 
                                     <div class="col-sm-4 ">
                                        <label>Batch No.</label>
                                       <?php echo form_input(array('type'=>'text','name'=>'batch_no','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['batch_no'],'required'=>'true'));?>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <label>Join In Branch</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'Join_in_branch','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['Join_in_branch'],'required'=>'true'));?>
                                         <?php echo form_input(array('type'=>'hidden','name'=>'id','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['id'],'required'=>'true'));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Branch Code</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'branch_code','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['branch_code'],'required'=>'true'));?>
                                    </div> 

                                     <div class="col-sm-4">
                                        <label>Email Id</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'email_id','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['email_id'],'required'=>'true'));?>
                                    </div>  
                                    <div class="col-sm-4">
                                        <label>Service DID No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'service_did','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['service_did'],'required'=>'true'));?>
                                    </div> 
                                    <div class="col-sm-4 mb-1">
                                        <label>Mobile No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'mobile_no','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['mobile_no'],'required'=>'true','readonly'=>true));?>
                                    </div> 
                                    <div class="col-sm-4">
                                        <label>Officer First Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'officer_first_name','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['officer_first_name'],'required'=>'true'));?>
                                    </div> 
                                    <div class="col-sm-4">
                                        <label>Officer Middle Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'officer_middle_name','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['officer_middle_name']));?>
                                    </div> 
                                    <div class="col-sm-4 mb-2">
                                        <label>Officer Last Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'officer_last_name','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['officer_last_name']));?>
                                    </div> 
                                    <div class="col-sm-4 ">
                                        <label>Father's First Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'father_first','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['father_first'],'required'=>'true'));?>
                                    </div>                             
                                    <div class="col-sm-4 ">
                                        <label>Father's Middle Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'father_middle','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['father_middle']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Father's Last Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'father_last','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['father_last']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Address</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'query','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['query']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Mother Occupation</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'mother_occupation','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['mother_occupation']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Mother Annual Income</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'m_annual_encome','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['m_annual_encome']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Father Occupation</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'father_occupation','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['father_occupation']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Father Annual Income</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'f_annual_income','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['f_annual_income']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Gender</label>
                                       <select name="gender" class="form-control"> 
                                            <option value="">---SELECT---</option>
                                            <option <?php if($officer[0]['gender']=='Male'){ 
                                            ?>selected <?php }?> value="Male">Male</option>
                                            <option <?php if($officer[0]['gender']=='Female'){?> selected <?php }?> value="Female">Female</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Nationality</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'nationality','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['nationality']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Marriage Status</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'marriage_status','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['marriage_status']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Date Of Birth</label>
                                        <?php echo form_input(array('type'=>'date','name'=>'dob','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['dob']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Aadhar No</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'aadhar_no','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['aadhar_no']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Pan No</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'pan_no','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['pan_no']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Scurity Amount</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'security_rs_amount','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['security_rs_amount']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Security Transaction Id</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'security_transaction_id','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['security_transaction_id']));?>
                                    </div>
                                     <div class="col-sm-4 mb-1">
                                        <label>Processing Amount</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'processing_rs_amount','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['processing_rs_amount']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Processing Transaction</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'processing_rs_transaction','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['processing_rs_transaction']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Processing Date</label>
                                        <?php echo form_input(array('type'=>'date','name'=>'processing_rs_date','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['processing_rs_date']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Training Transaction</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'training_transaction','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['training_transaction']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Training Rs.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'training_rs','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['training_rs']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Training Date</label>
                                        <?php echo form_input(array('type'=>'date','name'=>'training_date','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['training_date']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Total Deposit</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'total_deposit','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['total_deposit']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Bank Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'bank_name','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['bank_name']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>Branch Name</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'branch_name','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['branch_name']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>A/C No.</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'ac_no','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['ac_no']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>A/C Type</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'type_of_account','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['type_of_account']));?>
                                    </div>
                                    <div class="col-sm-4 mb-1">
                                        <label>IFSC Code</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'ifsc_code','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['ifsc_code']));?>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label>IFSC Code</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'ifsc_code','id'=>'activate_menu','class'=>'form-control','value'=>$officer[0]['ifsc_code']));?>
                                    </div>
                                    <div class="col-sm-12 col-md-12 mb-1 text-info">
                                        <h4 >Document Upload</h4> 
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label>Aadhar No.</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'aadhar','id'=>'activate_menu','class'=>'form-control','value'=>''));?>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label>Bank Account</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'bank_account','id'=>'activate_menu','class'=>'form-control','value'=>''));?>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label>Pan No.</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'pan','id'=>'activate_menu','class'=>'form-control','value'=>''));?>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label>Security E-Receipt</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'security_e_receipt','id'=>'activate_menu','class'=>'form-control','value'=>''));?>
                                    </div>
                                     <div class="col-sm-4 mb-3">
                                        <label>Training Receipt</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'training_receipt','id'=>'activate_menu','class'=>'form-control','value'=>''));?>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label>Processing Receipt</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'processing_receipt','id'=>'activate_menu','class'=>'form-control','value'=>''));?>
                                    </div>

                                    <div class="col-sm-4 mb-3">
                                        <label>Image</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'image','id'=>'activate_menu','class'=>'form-control','value'=>''));?>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label>Signature</label>
                                        <?php echo form_input(array('type'=>'file','name'=>'signature','id'=>'activate_menu','class'=>'form-control','value'=>''));?>
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