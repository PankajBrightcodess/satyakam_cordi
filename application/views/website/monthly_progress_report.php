<section class="content">
      <div class="container">
    	<div class="row">
             <div class="col-md-12 mb-3">
                <div class="card">
                     <div class="card-header">
                        <h3 class="card-title text-center">Monthly Progress Report</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label><strong>Month</strong></label>
                                <select class="form-control month" name="month" id="month">
                                    <option value="">---SELECT---</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>
                    
                    </div>
                    </div>
                </div>
            </div>
            <?php 
                if(!empty($revenue)){
                    ?>
            <div class="col-md-12 mb-3">
                <div class="card">
                   <div class="card-header">
                        <h3 class="card-title">Revenue Received From Candidate Application List</h3>
                    </div> 
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <?php echo form_open_multipart('admin/add_my_report');?>
                                <div class="col-md-12 col-lg-12 table-responsive table1" id="table1">
                                <table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.NO.</th>
                                            <th>REGISTRATION No.</th>                
                                            <th>APPLICANT Name</th>                
                                            <th>FATHER/HUSBAND</th>
                                            <th>DOB</th>
                                            <th>POST NAME</th>
                                            <th>FEE</th>
                                            <th>PAYMENT DATE</th>
                                            <th>BANKING ID</th>
                                            <th>CREATED DATE</th>
                                        </tr>
                                    </thead>
                                    <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('website/createexcel_revenue_month'); ?>"><i class="fa fa-file-excel-o"></i> Export to Excel</a>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($revenue)){
                                            foreach($revenue as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td ><?php echo $i ?></td>
                                            <td ><?php echo $val['registration_no'];?></td>
                                            <td ><?php echo $val['applicant_name'];?></td>
                                            <td ><?php echo $val['father_husband'];?></td>
                                            <td ><?php echo date('d-m-Y',strtotime($val['dob'])); ?></td>
                                            <td ><?php echo $val['post_name'] ?></td>
                                            <td ><?php echo $val['fee'] ?></td>
                                            <td ><?php echo date('d-m-Y',strtotime($val['date_payment']));?></td>
                                            <td ><?php echo $val['banking_id1'] ?></td>
                                            <td ><?php echo date('d-m-Y',strtotime($val['added_on'])); ?></td>
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
            </div><?php
                }
            ?>
            <!-- ''''''''''''''''''''''$revenue area''''''''''''''''''''''''' -->
             <?php 
                if(!empty($security)){
                    // echo PRE; print_r($security);
                    ?>
            <div class="col-md-12 mb-3">
                <div class="card">
                   <div class="card-header">
                        <h3 class="card-title">Security Fund Deposit Revenue List</h3>
                    </div> 
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <?php echo form_open_multipart('admin/add_my_report');?>
                                 <div class="form-group row">
                                    <div class="col-sm-12">
                                        <!-- <label>Department</label> -->
                                        <!-- <select class="form-control" name="depart_id" required id="depart_id">
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
                                        </select> -->
                                    </div>                                    
                                </div>
                                <div class="col-md-12 col-lg-12 table-responsive table2" id="table2">
                                <table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.NO.</th>
                                            <th>REGISTRATION No.</th>                
                                            <th>APPLICANT NAME</th>                
                                            <th>POST NAME</th>                                            
                                            <th>SECURITY FUND</th>                                        
                                            <th>TRAINING FEE</th>                                            
                                            <th>PROCESSING FEE</th>                                        
                                            <th>OTHER FEE</th>                                            
                                            <th>TOTAL BANKING</th>                                            
                                            <th>BANKING ID</th>                                            
                                            <th>CREATED DATE</th>                                            
                                            <th>TOTAL REVENUE</th>                                            
                                        </tr>
                                    </thead>
                                    <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('website/createexcel_security_month'); ?>"><i class="fa fa-file-excel-o"></i> Export to Excel</a>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($security)){
                                            foreach($security as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td ><?php echo $i ?></td>
                                            <td ><?php echo $val['reg_no'];?></td>
                                            <td ><?php echo $val['name'];?></td>
                                            <td ><?php echo $val['name_of_post'];?></td>
                                            <td ><?php echo $val['security_fund']; ?></td>
                                            <td ><?php echo $val['training_fee']; ?></td>
                                            <td ><?php echo $val['processing_fee'] ?></td>
                                            <td ><?php echo $val['other_fee1'] ?></td>
                                            <td ><?php echo $val['total_banking'] ?></td>
                                            <td ><?php echo $val['banking_id2'] ?></td>
                                            <td ><?php echo date('d-m-Y',strtotime($val['added_on'])); ?></td>
                                            <td ><?php echo $val['total_revenue_1'] ?></td>

                                            
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
            </div><?php
                }
            ?>
            <!-- ''''''''''''''''''''''''''''security area'''''''''''''''''''''''''' -->
            <?php 
                if(!empty($group)){
                    ?>
            <div class="col-md-12 mb-3">
                <div class="card">
                   <div class="card-header">
                        <h3 class="card-title">Group Composition And Weekly Savings/ EMI Revenue</h3>
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
                                <div class="col-md-12 col-lg-12 table-responsive table3" id="table3">
                                <table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.NO.</th>
                                            <th>GROUP NO.</th>                
                                            <th>GROUP NAME</th>                
                                            <th>GROUP ADDRESS</th>                                            
                                            <th>MEETING NO.</th>                                            
                                            <th>PASSBOOK ISSUE FEE</th>                             
                                            <th>WEEKLY SAVING DEPOSIT</th>                             
                                            <th>EMI DEPOSIT</th>                                            
                                            <th>BOUNCING FEE</th>                                            
                                            <th>LATE FINE FEE</th>
                                            <th>BANKING ID</th>                                         
                                            <th>CREATED DATE</th>                                         
                                            <th>TOTAL REVENUE</th>                                       
                                        </tr>
                                    </thead>
                                    <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('website/createExcel_group_month'); ?>"><i class="fa fa-file-excel-o"></i> Export to Excel</a>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($group)){
                                            foreach($group as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td ><?php echo $i ?></td>
                                            <td ><?php echo $val['group_no_a'];?></td>
                                            <td ><?php echo $val['group_name_a'];?></td>
                                            <td ><?php echo $val['group_address'];?></td>
                                            <td ><?php echo $val['meeting_no']; ?></td>
                                            <td ><?php echo $val['passbook_issue_fee']; ?></td>
                                            <td ><?php echo $val['weekly_saving_deposit'] ?></td>
                                            <td ><?php echo $val['emi_deposit'] ?></td>
                                            <td ><?php echo $val['bouncing_fee'] ?></td>
                                            <td ><?php echo $val['late_fine_fee'] ?></td>
                                            <td ><?php echo $val['banking_id3'] ?></td>
                                            <td ><?php echo date('d-m-Y',strtotime($val['added_on'])); ?></td>
                                            <td ><?php echo $val['total_revenue_2_'] ?></td>

                                            
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
            </div><?php
                }
            ?>
            <!-- '''''''''''''''''''''''''''''''''''group list'''''''''''''''''''''''''''''''' -->
            <?php 
                if(!empty($club)){
                    // echo PRE; print_r($club);
                    ?>
            <div class="col-md-12 mb-3">
                <div class="card">
                   <div class="card-header">
                        <h3 class="card-title">Club Member Revenue List</h3>
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
                                <div class="col-md-12 col-lg-12 table-responsive table4" id="table4">
                                <table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                         <tr>    
                                            <th>S.NO.</th>
                                            <th>GROUP NO.</th>                
                                            <th>GROUP NAME</th>                
                                            <th>CLUB ID NO.</th>                                            
                                            <th>CLUB MEMBER NAME</th>                                         
                                            <th>SPONSOR NO.</th>                             
                                            <th>SPONSOR LEVEL</th>                             
                                            <th>JOINING FEE</th>                                            
                                            <th>BANKING ID</th>                                         
                                            <th>CREATED DATE</th>                                       
                                            <th>TOTAL REVENUE</th>                                       
                                            <th>GRAND TOTAL REVENUE</th>                                       
                                                                                    
                                        </tr>
                                    </thead>
                                    <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('website/createExcel_club_month'); ?>"><i class="fa fa-file-excel-o"></i> Export to Excel</a>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($club)){
                                            foreach($club as $val){$i++; $id=$val['id']; ?>
                                         <tr>
                                            <td ><?php echo $i ?></td>
                                            <td ><?php echo $val['group_no_b'];?></td>
                                            <td ><?php echo $val['group_name_b'];?></td>
                                            <td ><?php echo $val['club_id_no'];?></td>
                                            <td ><?php echo $val['club_member_name']; ?></td>
                                            <td ><?php echo $val['sponsor_no']; ?></td>
                                            <td ><?php echo $val['sponsor_level'] ?></td>
                                            <td ><?php echo $val['joining_fee'] ?></td>
                                            <td ><?php echo $val['banking_id4'] ?></td>
                                            <td ><?php echo date('d-m-Y',strtotime($val['added_on'])); ?></td>
                                            <td ><?php echo $val['total_revenue_3'] ?></td>
                                            <td ><?php echo $val['grand_total_revamue'] ?></td>
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
            </div><?php
                }
            ?>

            <!-- '''''''''''''''''''''''''''''''''''''''''Club List'''''''''''''''''''''''''''''''''' -->
            <?php 
                if(!empty($travelling)){
                    // echo PRE;
                    // print_r($travelling);
                    ?>
            <div class="col-md-12 mb-3">
                <div class="card">
                   <div class="card-header">
                        <h3 class="card-title">Travelling Allowance Report</h3>
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
                                <div class="col-md-12 col-lg-12 table-responsive table5" id="table5">
                                <table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                       <tr>    
                                            <th>S.NO.</th>
                                            <th>INSPECTION AREA</th>                
                                            <th>OBJECTIVE</th>                
                                            <th>ARIVEL TIME</th>                                  
                                            <th>ARIVEL KM</th>                                    
                                            <th>POST</th>                             
                                            <th>DEPARTURE KM</th>                             
                                            <th>OTHER FEE</th>                                  
                                            <th>RESULT</th>                                          
                                            <th>CREATED DATE</th>                                       
                                        </tr>
                                    </thead>
                                     <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('website/createExcel_travelling_month'); ?>"><i class="fa fa-file-excel-o"></i> Export to Excel</a>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($travelling)){
                                            foreach($travelling as $val){$i++; $id=$val['id']; ?>
                                         <tr>
                                            <td ><?php echo $i ?></td>
                                            <td ><?php echo $val['inspection_area'];?></td>
                                            <td ><?php echo $val['objective'];?></td>
                                            <td ><?php echo $val['arrival_time'];?></td>
                                            <td ><?php echo $val['arrival_km']; ?></td>
                                            <td ><?php echo $val['port_of_department']; ?></td>
                                            <td ><?php echo $val['departure_km'] ?></td>
                                            <td ><?php echo $val['other_fee2'] ?></td>
                                            <td ><?php echo $val['result'] ?></td>
                                            <td ><?php echo date('d-m-Y',strtotime($val['added_on'])); ?></td>
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
            </div><?php
                }
            ?>
            <!-- '''''''''''''''''''''''''''''''''''Travelling List'''''''''''''''''''''''''''''''''' -->


           
        	
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