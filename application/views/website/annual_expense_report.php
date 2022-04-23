<section class="content">
      <div class="container">
    	<div class="row">
             <div class="col-md-12 mb-3">
                <div class="card">
                     <div class="card-header">
                        <h3 class="card-title text-center">Annual Expense Report</h3>
                    </div>
                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-12 col-12">
                                <label><strong>Year</strong></label>
                                <select class="form-control yearexpense" name="year">
                                    <option value="">---SELECT---</option>
                                    <?php 
                                        $year = date('Y');
                                        for ($i=2001; $i <= $year; $i++) { 
                                            ?><option value="<?php echo $i;?>"><?php echo $i;?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <?php 
                if(!empty($expense_year)){
                    ?>
            <div class="col-md-12 mb-3">
                <div class="card">
                   <div class="card-header">
                        <h3 class="card-title">Annual Expense Report</h3>
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
                                            <th>EQUIPMENT</th>                
                                            <th>QUANTITY</th>                
                                            <th>RATE</th>
                                            <th>AMOUNT</th>
                                            <th>BILL</th>
                                            <th>PAYMENT RECEIPT</th>
                                            <th>PAYMENT METHOD</th>
                                            <th>NEFT CHECK</th>
                                            <th>TOTAL REVENUE</th>
                                            <th>DATE</th>
                                        </tr>
                                    </thead>
                                    <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('website/createexcel_annual_expensedetails'); ?>"><i class="fa fa-file-excel-o"></i> Export to Excel</a>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($expense_year)){
                                            foreach($expense_year as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td ><?php echo $i ?></td>
                                            <td ><?php echo $val['equipment'];?></td>
                                            <td ><?php echo $val['quantity'];?></td>
                                            <td ><?php echo $val['rate'];?></td>
                                            <td ><?php echo $val['amount']; ?></td>
                                            <td ><?php echo $val['bill']; ?></td>
                                            <td ><?php echo $val['payment_receipt']; ?></td>
                                            <td ><?php echo $val['payment_method'];?></td>
                                            <td ><?php echo $val['neft_check'];?></td>
                                            <td ><?php echo $val['total_revenue']; ?></td>
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