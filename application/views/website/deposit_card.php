<!-- <?php echo PRE; print_r($deposit_details);?> -->
<section class="">
  <!-- officialservices -->
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12 mb-5">
            <center class="tittle"><h2>E-DEPOSIT(FORM)</h2><h4><?= date('Y').'-'.date('y',strtotime('+1 year'));?></h4></center>
              <div class="row " >
                  <div class="col-md-12 col-12 col-lg-12">
                    <div class="table-responsive">
                      <table class="table table-bordered nowrap ">
                        <thead>
                          <tr>
                            <th scope="col" rowspan="2">MONTH</th>
                            <th scope="col" colspan="2">1st WEEK(Rs.)</th>
                            <th scope="col" colspan="2">2nd WEEK(Rs.)</th>
                            <th scope="col" colspan="2">3rd WEEK(Rs.)</th>
                            <th scope="col" colspan="2">4th WEEK(Rs.)</th>
                            <th scope="col" colspan="2">5th WEEK(Rs.)</th>
                            <th scope="col" rowspan="2">TOTAL DEPOSIT</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th></th>
                            <th>DATE</th>
                            <th>DEPOSIT</th>
                            <th>DATE</th>
                            <th>DEPOSIT</th>
                            <th>DATE</th>
                            <th>DEPOSIT</th>
                            <th>DATE</th>
                            <th>DEPOSIT</th>
                            <th>DATE</th>
                            <th>DEPOSIT</th>
                            <th></th>
                          </tr>
                           <?php 

                              $from_date =date('01-01-Y');
                              $to_date =date('31-03-Y',strtotime($from_date.'+1 year'));
                             $from_date = new DateTime($from_date);
                             $to_date = new DateTime($to_date);
                             $i=$j=0; 
                             for ($date = $from_date; $date <= $to_date; $date->modify('+1 month')) {$i++;

                                $record = $this->Website_model->getdata($date->format('d-m-Y'),$data);
                               //  echo PRE;
                               // print_r($record);die;
                               $count = count($record);
                                  $week_1='';$week_1_amount='';$week_2='';$week_2_amount='';$week_3='';$week_3_amount='';$week_4='';$week_4_amount='';$week_5='';$week_5_amount='';
                                  for ($l=0; $l < $count; $l++) { 
                                   $dates = date('d',strtotime($record[$l]['added_on']));
                                   if($dates<07){
                                    $week_1 = $record[$l]['added_on'];
                                    $week_1_amount = $record[$l]['trans_amount'];
                                   }elseif($dates<13 && $dates>06){
                                    $week_2 = $record[$l]['added_on'];
                                    $week_2_amount = $record[$l]['trans_amount'];
                                   }elseif($dates<19 && $dates>12){
                                    $week_3 = $record[$l]['added_on'];
                                    $week_3_amount = $record[$l]['trans_amount'];
                                   }elseif($dates<25 && $dates>18) {
                                     $week_4 = $record[$l]['added_on'];
                                    $week_4_amount = $record[$l]['trans_amount'];
                                   }elseif($dates<32 && $dates>24){
                                    $week_5 = $record[$l]['added_on'];
                                    $week_5_amount = $record[$l]['trans_amount'];
                                   }
                                  }
                                  $final=array('week_1'=>$week_1,'week_1_amount'=>$week_1_amount,'week_2'=>$week_2,'week_2_amount'=>$week_2_amount,'week_3'=>$week_3,'week_3_amount'=>$week_3_amount,'week_4'=>$week_4,'week_4_amount'=>$week_4_amount,'week_5'=>$week_5,'week_5_amount'=>$week_5_amount,'month'=>$date->format('M-Y'));
                                  
                                  $main_array[] =$final;
                                
                                }
                               foreach ($main_array as $key => $value) {
                                 ?>
                                 <tr>
                                  <th><?php echo $value['month'];?></th>
                                  <td><?= (!empty($value['week_1']))?date('d-M-y',strtotime($value['week_1'])):'';?></td>
                                  <td><?= $value['week_1_amount'];?></td>
                                  <td><?= (!empty($value['week_2']))?date('d-M-Y',strtotime($value['week_2'])):'';?></td>
                                  <td><?= $value['week_2_amount'];?></td>
                                  <td><?= (!empty($value['week_3']))?date('d-M-Y',strtotime($value['week_3'])):'';?></td>
                                  <td><?= $value['week_3_amount'];?></td>
                                  <td><?= (!empty($value['week_4']))?date('d-M-Y',strtotime($value['week_4'])):'';?></td>
                                  <td><?= $value['week_4_amount'];?></td>
                                  <td><?= (!empty($value['week_5']))?date('d-M-Y',strtotime($value['week_5'])):'';?></td>
                                  <td><?= $value['week_5_amount'];?></td>
                                  <td></td>
                                </tr> 


                                 <?php
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
    </section>
    
    <!-- '''''''''''''''''''''''''model area'''''''''''''''''''''''''''''''''''' -->
    