<section class="content">
      <div class="container">
    	<div class="col-md-12 mb-3">
                <div class="card">
                   <div class="card-header">
                        <h3 class="card-title">Vacency List</h3>
                    </div> 
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-12 col-lg-12">
                            <div class="col-md-12 col-lg-12 col-12 table-responsive table1">
                                <table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.NO.</th>
                                            <th>APPLICANT NAME</th>                
                                            <th>DATE OF BIRTH</th>                
                                            <th>FATHER NAME</th>                
                                            <th>DEPARTMENT</th>
                                            <th>POST</th>
                                            <th>MOBILE NO.</th>
                                            <th>EMAIL</th>
                                            <th>CATEGORY</th>
                                            <th>GENDER</th>
                                            <th>CREATE DATE</th>
                                        </tr>
                                    </thead>
                                    <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('website/vacencylist_excel'); ?>"><i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($vacency_details)){
                                            foreach($vacency_details as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $val['applicant_name'];?></td>
                                            <td><?php echo date('d-m-Y',strtotime($val['dob'])); ?></td>
                                            <td><?php echo $val['father_name'];?></td>
                                            <td><?php echo $val['department']; ?></td>
                                            <td><?php echo $val['Profile']; ?></td>
                                            <td><?php echo $val['mobile_no']; ?></td>
                                            <td><?php echo $val['email'];?></td>
                                            <td><?php echo $val['category'];?></td>
                                            <td><?php echo $val['gender']; ?></td>
                                            <td><?php echo date('d-m-Y',strtotime($val['added_on'])); ?></td>
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
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


     <script src="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css"></script> 
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"></script> 
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> 
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script> 
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script> 
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script> 
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script> 
<script type="text/javascript">
       var table=$('.data-table').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            dom: 'Bfrtip',
                 buttons: [
                       'excel','print'
             ],
            columnDefs: [{
                targets: "no-sort",
                orderable: false,
            }],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
            // "info": "_START_-_END of TOTAL_ entries",
                searchPlaceholder: "Search"
            },
        });
</script>