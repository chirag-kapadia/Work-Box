
<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-rocket"></i>
                    Projects
                  </h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Company name</th>
                          <th>Category</th>
                          <th>Project name</th>
                          <th>Client name</th>
                          <th>Assigned to</th>
                          <th>Status</th>
                          <th>Budget</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $select_jobDetails="select c.*,jc.CategoryName,f.*,p.Amount,jp.*,a.IsAssign from tblclient c
                          INNER JOIN tbljobcategories jc ON c.CategoryID=jc.CategoryID
                          INNER JOIN tblFreelancer f ON c.FreelancerID=f.FreelancerID
                          INNER JOIN tblpayment p ON c.PaymentID=p.PaymentID
                          INNER JOIN tbljobprogress jp ON c.ProgressID=jp.ProgressID
                          INNER JOIN tbljobassign a ON c.AssignID=a.AssignID";
                          $select_jobDetails_Exe=mysqli_query($con,$select_jobDetails) or die(mysqli_error());
                         
                          while($Fetch_jobDetails=mysqli_fetch_array($select_jobDetails_Exe))
                         {
                         
                        ?>
                        <tr>
                          <td class="font-weight-bold">
                            <?php echo  $Fetch_jobDetails['CompanyName'];?>
                          </td>
                          <td class="font-weight-bold">
                          <?php echo  $Fetch_jobDetails['CategoryName'];?>
                          </td>
                          <td>
                             <?php echo  $Fetch_jobDetails['NameOfProject'];?>
                          </td>
                          <td>
                           <!--  <label class="badge badge-success badge-pill">Dispatched</label> -->
                          <?php echo  $Fetch_jobDetails['C_FirstName']." ".$Fetch_jobDetails['C_LastName'];?>
                          </td>
                           <td>
                           
                              <?php echo  $Fetch_jobDetails['F_FirstName']." ".$Fetch_jobDetails['F_LastName'];?>
                           
                          </td>
                          <td>
                           
                              <?php
                                  if($Fetch_jobDetails['IsComplete']==1)
                                  {
                                ?>
                                <label class="badge badge-primary badge-pill">Completed</label>
                                <?php
                                  }
                                  else
                                  {
                                  ?>
                                    <label class="badge badge-warning badge-pill">Processing</label>
                                  <?php
                                  }
                              ?>
                              <td>
                             <?php echo  $Fetch_jobDetails['Amount'];?>
                          </td>
                        </tr>
                       <?php
                        }
                       ?>
                       <!--  <tr>
                          <td class="font-weight-bold">
                            Sayali
                          </td>
                           <td class="font-weight-bold">
                            Build Android App
                          </td>
                          <td>
                            Infosys
                          </td>
                          <td>
                            <label class="badge badge-warning badge-pill">Processing</label>
                          </td>
                          <td>
                           <span class="btn btn-outline-primary">View</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            Bhaskar
                          </td>
                          <td class="font-weight-bold">
                            Build responsive Website
                          </td>
                          <td>
                            Wipro
                          </td>
                          <td>
                            <label class="badge badge-primary badge-pill">Delivered</label>
                          </td>
                          
                            <td>
                              <span class="btn btn-outline-primary">View</span>
                            </td>
                          
                        </tr>
                      
                        <tr>
                          <td class="font-weight-bold">
                            Aliasghar
                          </td>
                            <td class="font-weight-bold">
                            Build iOS App
                          </td>
                          <td>
                            Infosys
                          </td>
                          <td>
                            <label class="badge badge-info badge-pill">On Hold</label>
                          </td>
                          <td>
                            <span class="btn btn-outline-primary">View</span>
                          </td>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>