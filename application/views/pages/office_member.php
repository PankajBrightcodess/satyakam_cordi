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
                        	<div class="col-md-12 col-lg-12 col-12 table-responsive">
                            	<table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.no</th>
                                            <th>Batch No.</th>
                                            <th>Joining Branch</th>   
                                            <th>Branch Code</th>   
                                            <th>department</th>                                            
                                            <th>Post</th>                                            
                                            <th>Mobile </th>                                            
                                            <th>Email </th>                                            
                                            <th>Service DID</th>                                           
                                            <th>Name</th>                                            
                                            <th>Guardian</th>                                            
                                            <th>Address</th>                                            
                                            <th>Mother Occupation</th>                                            
                                            <th>Annual Income</th>                                            
                                            <th>Father Income</th>                                            
                                            <th>Annual Income</th>                                            
                                            <th>Sex</th>                                            
                                            <th>Nationality</th>                                            
                                            <th>Marriage Status</th>                                            
                                            <th>DOB</th>                                            
                                            <th>Aadhar No</th>                                            
                                            <th>PAN No</th> 
                                            <th>Security Fund Amount</th> 
                                            <th>Processing Fund Amount</th> 
                                            <th>Training Fee Amount</th> 
                                            <th>Total Deposit In Words</th> 
                                            <th>Bank Name</th> 
                                            <th>Branch Name</th> 
                                            <th>Type Of Account</th> 
                                            <th>IFSC Code</th> 
                                            <th>Image</th> 
                                            <th>Signature</th> 
                                            <th>Aadhar</th> 
                                            <th>PAN</th> 
                                            <th>Bank Account</th> 
                                            <th>Photo Upload</th> 
                                            <th>Security In Receipt</th> 
                                            <th>Processing Receipt</th>
                                            <th>Training Receipt</th> 
                                            <th>Username</th> 
                                            <th>Password</th> 
                                            <th>Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php $i=0;
                                         if(!empty($officer)){
                                            foreach($officer as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td ><?php echo $i ?></td>
                                            <td ><?php echo $val['batch_no']; ?></td>
                                            <td ><?php echo $val['Join_in_branch']; ?></td>
                                            <td ><?php echo $val['branch_code']; ?></td>
                                            <td ><?php echo $val['department']; ?></td>
                                            <td ><?php echo $val['post'] ;?></td>
                                            <td ><?php echo $val['mobile_no']; ?></td>
                                            <td ><?php echo $val['email_id']; ?></td>
                                            <td ><?php echo $val['service_did']; ?></td>
                                            <td ><?php echo $val['officer_first_name'].' '.$val['officer_middle_name'].' '.$val['officer_last_name']; ?></td>
                                            <td ><?php echo $val['father_first'].' '.$val['father_middle'].' '.$val['father_last']; ?></td>
                                            <td ><?php echo $val['query'];?></td>
                                            <td ><?php echo $val['mother_occupation']; ?></td>
                                            <td ><?php echo $val['m_annual_encome']; ?></td>
                                            <td ><?php echo $val['father_occupation']; ?></td>
                                            <td ><?php echo $val['f_annual_income']; ?></td>
                                            <td ><?php echo $val['gender']; ?></td>
                                            <td ><?php echo $val['nationality']; ?></td>
                                            <td ><?php echo $val['marriage_status']; ?></td>
                                            <td ><?php echo $val['dob'];?></td>
                                            <td ><?php echo $val['aadhar_no']; ?></td>
                                            <td ><?php echo $val['pan_no']; ?></td>
                                            <td ><?php echo $val['security_rs_amount'];?></td>
                                            <td ><?php echo $val['processing_rs_amount'];?></td>
                                            <td ><?php echo $val['training_rs'];?></td>
                                            <td ><?php echo $val['total_deposit'];?></td>
                                            <td ><?php echo $val['bank_name'];?></td>
                                            <td ><?php echo $val['branch_name'];?></td>
                                            <td ><?php echo $val['type_of_account']; ?></td>
                                            <td ><?php echo $val['ifsc_code'];?></td>
                                            <td ><a href="<?php echo base_url($val['image'])?>">View</a></td>
                                            <td ><a href="<?php echo base_url($val['signature'])?>">View</a></td>
                                            <td ><a href="<?php echo base_url($val['aadhar'])?>">View</a></td>
                                            <td ><a href="<?php echo base_url($val['pan'])?>">View</a></td>
                                            <td ><a href="<?php echo base_url($val['bank_account'])?>">View</a></td>
                                            <td ><a href="<?php echo base_url($val['photo_upload'])?>">View</a></td>
                                            <td ><a href="<?php echo base_url($val['security_e_receipt'])?>">View</a></td>
                                            <td ><a href="<?php echo base_url($val['processing_receipt'])?>">View</a></td>
                                            <td ><a href="<?php echo base_url($val['training_receipt'])?>">View</a></td>
                                            <td ><?php echo $val['username'];?></td>
                                            <td ><?php echo $val['password'];?></td>
                                            <td><?php if($val['verify_status']!=1){
                                                ?><button class="btn btn-warning upd" type="button" data-id="<?php echo $val['id'];?>" data-toggle="modal" data-target="#exampleModal" >Verify</button><?php

                                            }else{
                                                ?><button class="btn btn-success upd" type="button">Verified</button><?php
                                            }?></td>
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
            <h5 class="modal-title" id="exampleModalLabel">Create Userid & Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           <?php echo form_open_multipart('admin/update_userpass');?>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                   
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <?php echo form_input(array('type'=>'text','name'=>'username','id'=>'type','class'=>'form-control type','placeholder'=>'Userid','required'=>'true'));?>
                            <input type="hidden" name="id" id="id">
                        </div>                                    
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <?php echo form_input(array('type'=>'text','name'=>'password','id'=>'value','class'=>'form-control value','placeholder'=>'Password','required'=>'true'));?>
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
  <!--   <script type="text/javascript">
            
    </script> -->
    <script type="text/javascript">
        $('body').on('click','.upd',function(){
        var id = $(this).data('id');
        $('#id').val(id);
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