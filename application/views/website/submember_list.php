<section class="content">
      <div class="container">
        <div class="col-md-12 mb-3">
                <div class="card">
                   <div class="card-header">
                        <h3 class="card-title">Sub Member List</h3>
                    </div> 
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-12 col-lg-12 table-responsive table1" id="table1">
                                <table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>  
                                            <th>S.NO.</th>
                                            <th>MEMBERSHIP NO</th>                
                                            <th>APPLICATION DATE</th>                
                                            <th>APPLICATION NO</th>                
                                            <th>APPLICANT NAME</th>                
                                            <th>DATE OF BIRTH</th>
                                            <th>ADDRESS</th>
                                            <th>CONTACT NO</th>
                                            <th>AADHAR</th>
                                            <th>SUPER</th>
                                            <th>YEAR</th>
                                           <!--  <th>ACTION</th> -->
                                           
                                        </tr>
                                    </thead>
                                    <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('website/excel_submemberlist/?id='.$get_id); ?>"><i class="fa fa-file-excel-o"></i> Export to Excel</a>
                                    <tbody style="font-size:13px; font-weight: 700">
                                        <?php $i=0;
                                         if(!empty($list)){
                                            foreach($list as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <?php 
                                                if(!empty($val['membership_no'])){
                                                    ?>
                                                    <td ><?php echo $i ?></td>
                                                        <td ><?php echo $val['membership_no'];?></td>
                                                        <td ><?php echo $val['app_date'];?></td>
                                                        <td ><?php echo $val['app_no'];?></td>
                                                        <td ><?php echo $val['applicant_name'];?></td>
                                                        <td ><?php echo $val['dob']; ?></td>
                                                        <td style="font-size:10px; font-weight: 700"><?php echo 'VILL-'.$val['village'].', POST-'.$val['panchayat'].', WARD-'.$val['ward_no'].', POLICE STATION-'.$val['police_station'].', BLOCK-'.$val['block'].', DIST-'.$val['dist'].', STATE-'.$val['state'].', PIN-'.$val['pin_code']; ?></td>
                                                        <td ><?php echo $val['mobile_no']; ?></td>
                                                        <td ><?php echo $val['aadhar']; ?></td>
                                                        <td ><?php echo $val['super'];?></td>
                                                        <td ><?php echo $val['year'];?></td>


                                                    <?php
                                                }


                                            ?>
                                            
                                           
                                            <!-- <td ><a href="<?php echo base_url('website/sub_memberlist/?id='.$val['signup_id']); ?>" class="btn btn-sm btn-success">View Member</a></td> -->
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