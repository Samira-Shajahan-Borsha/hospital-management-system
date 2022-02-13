<?php require 'head.php'; ?>
<?php if($_GET['q']!="")
    
{
    ?>
<div class="row row-content align-items-center">

              <div class="col-12">

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>

                      <th scope="col">Fullname</th>
                      <!-- <th scope="col">Blood Group</th> -->
                      <!-- <th scope="col">Gender</th> -->
                      <!-- <th scope="col">Date of Birth</th> -->
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Consulting Fees</th>
                      <th scope="col">Specialization</th>
                      <th scope="col">Visiting Days</th>
                      <th scope="col">Visiting Time</th>
                      <!-- <th scope="col">Address</th> -->
                      <th scope="col">Degree</th>
                      <!-- <th scope="col">Choose</th> -->

                    </tr>
                  </thead>
                  <tbody>



                  <?php

                    $type = $_GET['q'];

                    require "../includes/db_connect.inc.php";
                    $sql=mysqli_query($conn,"select * from doctor_info where specialization='$type'");
                    $cnt=1;
                    while($row=mysqli_fetch_array($sql))
                    {
                        // $uid = $row['userid'];
                    ?>
                    <tr>

                      <td class="center"><?php echo $cnt;?>.</td>
                        <!-- <td class="hidden-xs"><?php echo $row['userid'];?></td> -->
                        <!-- <td><?php echo $row['userid'];?></td> -->
                        <td><?php echo $row['fullname'];?> </td>
                        <!-- <td><?php echo $row['blood_group'];?></td> -->
                        <!-- <td><?php echo $row['gender'];?> </td> -->
                        <!-- <td><?php echo $row['dob'];?></td> -->
                        <td><?php echo $row['email'];?> </td>
                        <td><?php echo $row['phone'];?></td>
                        <td><?php echo $row['fees'];?> </td>
                        <td><?php echo $row['specialization'];?> </td>
                        <td><?php echo $row['days'];?></td>
                        <td><?php echo $row['time'];?> </td>
                        <!-- <td><?php echo $row['address'];?></td> -->
                        <td><?php echo $row['degree'];?> </td>

                        
                    </tr>
                    <?php
                    $cnt=$cnt+1;
						}?>



                  </tbody>
                </table>
              </div>

            </div>
<?php
}
?>