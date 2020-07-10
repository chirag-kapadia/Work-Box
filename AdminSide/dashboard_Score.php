<style>
  @-webkit-keyframes argh-my-eyes {
    0%   { background-color: #fff; }
    49% { background-color: #fff; }
    50% { background-color: #ff0000; }
    99% { background-color: #ff0000; }
    100% { background-color: #fff; }
  }
  @-moz-keyframes argh-my-eyes {
    0%   { background-color: #fff; }
    49% { background-color: #fff; }
    50% { background-color: #ff0000; }
    99% { background-color: #ff0000; }
    100% { background-color: #fff; }
  }
  @keyframes argh-my-eyes {
    0%   { background-color: #fff; }
    49% { background-color: #fff; }
    50% { background-color: #ff0000; }
    99% { background-color: #ff0000; }
    100% { background-color: #fff; }
  }
  #alert {
  -webkit-animation: argh-my-eyes 1s infinite;
  -moz-animation:    argh-my-eyes 1s infinite;
  animation:         argh-my-eyes 1s infinite;
}
</style>
<div class="row grid-margin">
            <div class="col-12">
              <div class="card card-statistics">
                <div class="card-body" >
                  <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          Lives Job
                        </p>
                       
                        <h2><?php
                            $select_IsCom_IsAbor="select count(*) as countIsComIsAbor from tbljobprogress where IsComplete=0 and IsAborted=0";
                            $select_Exe_IsCoIsAb=mysqli_query($con,$select_IsCom_IsAbor) or die(mysqli_error($con));
                            $select_count_IsCoIsAb=mysqli_fetch_array($select_Exe_IsCoIsAb);
                            echo $select_count_IsCoIsAb['countIsComIsAbor'];


                        ?></h2>
                        
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          Client
                        </p>
                        <h2><?php
                          $select_Client="select count(*) as countClient from tblclient";
                          $select_Exe=mysqli_query($con,$select_Client) or die(mysqli_error());
                          $select_Client_count=mysqli_fetch_array($select_Exe);
                          echo $select_Client_count['countClient'];?></h2>
                       
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          Freelancer
                        </p>
                        <h2><?php
                          $select_Freelancer="select count(*) as countFreelancer from tblfreelancer";
                          $select_Exe=mysqli_query($con,$select_Freelancer) or die(mysqli_error());
                          $select_Freelancer_count=mysqli_fetch_array($select_Exe);
                          echo $select_Freelancer_count['countFreelancer'];?></h2>
                       
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-check-circle mr-2"></i>
                          Jobs
                        </p>
                        <h2><?php
                          $select_Job="select count(*) as countJob from tbljobs";
                          $select_Exe=mysqli_query($con,$select_Job) or die(mysqli_error());
                          $select_Job_count=mysqli_fetch_array($select_Exe);
                          echo $select_Job_count['countJob'];?></h2>
                       
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-chart-line mr-2"></i>
                          Pending
                        </p>
                        <h2> <?php 
                             /* $select_IsPaid="select IsPaid from tblpayment";
                              $select_Exe_IsPaid=mysqli_query($con,$select_IsPaid) or die(mysqli_error());
                              $select_IsPaid_Fetch=mysqli_fetch_array($select_Exe_IsPaid);
                              echo sum($select_IsPaid_Fetch);*/
                               $select_Job="select count(*) as countJobq from tblpayment where IsPaid=0";
                          $select_Exe=mysqli_query($con,$select_Job) or die(mysqli_error());
                          $select_Job_count=mysqli_fetch_array($select_Exe);
                          
                          echo $select_Job_count['countJobq'];
                       
                          ?>
                          </h2>
                        
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-circle-notch mr-2"></i>
                          Total Payment
                        </p>
                        <h2><?php
                          $select_Payment="select sum(Amount) as sumPayment from tblpayment";
                          $select_Exe=mysqli_query($con,$select_Payment) or die(mysqli_error());
                          $select_Payment_sum=mysqli_fetch_array($select_Exe);
                          echo $select_Payment_sum['sumPayment'];?></h2>
                        
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <div class="row">
            <?php
                $select_IsActive="select IsActive from tbljobrequest";
                 $select_Exe_IsActive=mysqli_query($con,$select_IsActive) or die(mysqli_error());
                          $select_IsActive_Details=mysqli_fetch_array($select_Exe_IsActive);
                         
                          
            ?>
                <div class="col-md-6 grid-margin">
                    <div class="card">
                        <div class="card-body"
                          <?php
                              if($select_IsActive_Details['IsActive']==0)
                              {
                            ?>
                                id="alert"
                            <?php
                              }
                          ?>
                        >
                            <h4 class="card-title mb-0">Request pending</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                        <h2 class="mb-0">
                                          <?php 
                                              $select_request="select count(IsActive) as countRequest from tbljobrequest where IsActive=0";
                                              $select_Exe_request=mysqli_query($con,$select_request) or die(mysqli_error());
                                              $Fetch_request=mysqli_fetch_array($select_Exe_request);
                                              echo $Fetch_request['countRequest'];
                                          ?>
                                        </h2>
                                       
                                    </div>
                                    
                                </div>
                                <div class="d-inline-block">
                                    <i class="fas fa-chart-pie icon-lg" style="color: #fff"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-0">job assign</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                        <h2 class="mb-0">
                                           <?php 
                                              $select_Assign="select count(*) as countAssign from tbljobassign";
                                              $select_Exe_Assign=mysqli_query($con,$select_Assign) or die(mysqli_error());
                                              $Fetch_Assign=mysqli_fetch_array($select_Exe_Assign);
                                              echo $Fetch_Assign['countAssign'];
                                          ?>
                                        </h2>

                                    </div>
                                    
                                </div>
                                <div class="d-inline-block">
                                    <i class="fas fa-shopping-cart text-danger icon-lg"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>