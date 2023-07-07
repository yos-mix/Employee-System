<?php
     $username = $_POST['username'];
     $password = $_POST['password'];

     //Database Connection
     $con = new mysqli("localhost", "root", "password", "employeesystem");
     if($con->connect_error){
          die("Failed to connect : ".$con->connect_error);
     }else{
          $stmt = $con->prepare("select * from acount where username = ?");
          $stmt->bind_param("s", $username);
          $stmt->execute();
          $stmt_result = $stmt->get_result();
          if($stmt_result->num_rows > 0){
               $data = $stmt_result->fetch_assoc();
               if($data['password'] === $password){
                    $userid = $data['userid'];
                    ?>
                    <!DOCTYPE html>
                         <html lang="en">
                         <head>
                              <meta charset="UTF-8">
                              <meta http-equiv="X-UA-Compatible" content="IE=edge">
                              <meta name="viewport" content="width=device-width, initial-scale=1.0">
                              <title>User Page</title>
                              <link rel="stylesheet" href="userprofile.css">
                         </head>
                         <body>
                              <div class="container">
                                   <div class="navigation">
                                        <ul>
                                             <li>
                                                  <a href="">
                                                       <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                                                       <span class="title">
                                                       <?php
                                                            $conn = mysqli_connect("localhost", "root", "password", "employeesystem");

                                                            if($conn->connect_error){
                                                                 die("Connection Failed:". $conn->connect_error);
                                                            }
                                                            $name = $conn-> query("SELECT `name` FROM `header` WHERE `userid` = '$userid'");//querry for name
                                                            if (!$name) {
                                                            echo 'Could not run query: ' .mysqli_error($conn);
                                                            exit;
                                                            }
                                                            $row1 = mysqli_fetch_row($name);
                                                            echo "<h2>$row1[0]</h2>"; //Print single keme/data

                                                            $conn->close();
                                                       ?>
                                                       </span>
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="dashboard.php">
                                                       <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                                                       <span class="title">Dashboard</span>
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="">
                                                       <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                                                       <span class="title">User</span>
                                                  </a>
                                             </li>
                                        </ul>
                                   </div>
                                   <div class="content">
                                        <div class="content-left">
                                             <div class="btn">
                                                  <h1>Update</h4>
                                             </div>
                                             <div class="personal-info" id="personal-info">
                                                  <h1>Employee's Personal Information</h1>
                                                  <hr>
                                                  <br>
                                                  <div class="fullname">
                                                       <div class="firstName">
                                                            <p>
                                                                 <?php
                                                                      $conn = mysqli_connect("localhost", "root", "password", "employeesystem");

                                                                      if($conn->connect_error){
                                                                           die("Connection Failed:". $conn->connect_error);
                                                                      }
                                                                      $name = $conn-> query("SELECT `firstName` FROM `info` WHERE `userid` = '$userid'");//querry for name
                                                                      if (!$name) {
                                                                      echo 'Could not run query: ' .mysqli_error($conn);
                                                                      exit;
                                                                      }
                                                                      $row1 = mysqli_fetch_row($name);
                                                                      echo "<p>$row1[0]</p>"; //Print single keme/data
                                                                      $conn->close();
                                                                 ?>
                                                            </p>
                                                       </div>
                                                       <div class="middleName">
                                                            <p>
                                                                 <?php
                                                                      $conn = mysqli_connect("localhost", "root", "password", "employeesystem");

                                                                      if($conn->connect_error){
                                                                           die("Connection Failed:". $conn->connect_error);
                                                                      }
                                                                      $name = $conn-> query("SELECT `middleName` FROM `info` WHERE `userid` = '$userid'");//querry for name
                                                                      if (!$name) {
                                                                      echo 'Could not run query: ' .mysqli_error($conn);
                                                                      exit;
                                                                      }
                                                                      $row1 = mysqli_fetch_row($name);
                                                                      echo "<p>$row1[0]</p>"; //Print single keme/data

                                                                      $conn->close();
                                                                 ?>
                                                            </p>
                                                       </div>
                                                       <div class="lastName">
                                                            <p>
                                                                 <?php
                                                                      $conn = mysqli_connect("localhost", "root", "password", "employeesystem");

                                                                      if($conn->connect_error){
                                                                           die("Connection Failed:". $conn->connect_error);
                                                                      }
                                                                      $name = $conn-> query("SELECT `lastName` FROM `info` WHERE `userid` = '$userid'");//querry for name
                                                                      if (!$name) {
                                                                      echo 'Could not run query: ' .mysqli_error($conn);
                                                                      exit;
                                                                      }
                                                                      $row1 = mysqli_fetch_row($name);
                                                                      echo "<p>$row1[0]</p>"; //Print single keme/data

                                                                      $conn->close();
                                                                 ?>
                                                            </p>
                                                       </div>
                                                  <hr>
                                                  </div>
                                                  <p>
                                                       <?php
                                                            $conn = mysqli_connect("localhost", "root", "password", "employeesystem");

                                                            if($conn->connect_error){
                                                                 die("Connection Failed:". $conn->connect_error);
                                                            }
                                                            $name = $conn-> query("SELECT `address` FROM `info` WHERE `userid` = '$userid'");//querry for name
                                                            if (!$name) {
                                                            echo 'Could not run query: ' .mysqli_error($conn);
                                                            exit;
                                                            }
                                                            $row1 = mysqli_fetch_row($name);
                                                            echo "<p>$row1[0]</p>"; //Print single keme/data

                                                            $conn->close();
                                                       ?>
                                                  </p>
                                                  <small><em>Address</em></small>
                                                  <p>
                                                       <?php
                                                            $conn = mysqli_connect("localhost", "root", "password", "employeesystem");

                                                            if($conn->connect_error){
                                                                 die("Connection Failed:". $conn->connect_error);
                                                            }
                                                            $name = $conn-> query("SELECT `contactNo.` FROM `info` WHERE `userid` = '$userid'");//querry for name
                                                            if (!$name) {
                                                            echo 'Could not run query: ' .mysqli_error($conn);
                                                            exit;
                                                            }
                                                            $row1 = mysqli_fetch_row($name);
                                                            echo "<p>$row1[0]</p>"; //Print single keme/data

                                                            $conn->close();
                                                       ?>
                                                  </p>
                                                  <small><em>Contact No.</em></small>
                                             </div>
                                             <div class="education-background" id="education-background">
                                                  <h1>Employee's Education Background</h1>
                                                  <hr>
                                                  <br>
                                                  <p>
                                                  <p>
                                                  <?php
                                                            $conn = mysqli_connect("localhost", "root", "password", "employeesystem");

                                                            if($conn->connect_error){
                                                                 die("Connection Failed:". $conn->connect_error);
                                                            }
                                                            $name = $conn-> query("SELECT `highestEduc` FROM `info` WHERE `userid` = '$userid'");//querry for name
                                                            if (!$name) {
                                                            echo 'Could not run query: ' .mysqli_error($conn);
                                                            exit;
                                                            }
                                                            $row1 = mysqli_fetch_row($name);
                                                            echo "<p>$row1[0]</p>"; //Print single keme/data

                                                            $conn->close();
                                                       ?>
                                                  </p>
                                                  </p>
                                                  <small><em>Educational Attainment</em></small>
                                                  <p>
                                                  <p>
                                                  <?php
                                                            $conn = mysqli_connect("localhost", "root", "password", "employeesystem");

                                                            if($conn->connect_error){
                                                                 die("Connection Failed:". $conn->connect_error);
                                                            }
                                                            $name = $conn-> query("SELECT `collegeUniv` FROM `info` WHERE `userid` = '$userid'");//querry for name
                                                            if (!$name) {
                                                            echo 'Could not run query: ' .mysqli_error($conn);
                                                            exit;
                                                            }
                                                            $row1 = mysqli_fetch_row($name);
                                                            echo "<p>$row1[0]</p>"; //Print single keme/data

                                                            $conn->close();
                                                       ?>
                                                  </p>
                                                  </p>
                                                  <small><em>School</em></small>
                                                  <p>
                                                  <p>
                                                  <?php
                                                            $conn = mysqli_connect("localhost", "root", "password", "employeesystem");

                                                            if($conn->connect_error){
                                                                 die("Connection Failed:". $conn->connect_error);
                                                            }
                                                            $name = $conn-> query("SELECT `position` FROM `info` WHERE `userid` = '$userid'");//querry for name
                                                            if (!$name) {
                                                            echo 'Could not run query: ' .mysqli_error($conn);
                                                            exit;
                                                            }
                                                            $row1 = mysqli_fetch_row($name);
                                                            echo "<p>$row1[0]</p>"; //Print single keme/data

                                                            $conn->close();
                                                       ?>
                                                  </p>
                                                  </p>
                                                  <small><em>Position</em></small>
                                             </div>
                                        </div>
                                        <div class="content-right">
                                             <div class="event">
                                                  <div class="left-event">
                                                       <h3>27</h3>
                                                       <span>February</span>
                                                  </div>
                                                  <div class="right-event">
                                                       <h4>Birthday</h4>
                                                       <p><i class="fas fa-map-marker-alt"></i> Wilson Tech Park</p>
                                                       <a href="#">More info</a>
                                                  </div>
                                             </div>
                                             <div class="event">
                                                  <div class="left-event">
                                                       <h3>27</h3>
                                                       <span>February</span>
                                                  </div>
                                                  <div class="right-event">
                                                       <h4>Birthday</h4>
                                                       <p><i class="fas fa-map-marker-alt"></i> Wilson Tech Park</p>
                                                       <a href="#">More info</a>
                                                  </div>
                                             </div>
                                             <div class="event">
                                                  <div class="left-event">
                                                       <h3>27</h3>
                                                       <span>February</span>
                                                  </div>
                                                  <div class="right-event">
                                                       <h4>Birthday</h4>
                                                       <p><i class="fas fa-map-marker-alt"></i> Wilson Tech Park</p>
                                                       <a href="#">More info</a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="side">
                                        
                                   </div>
                              </div>
                              

                              <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                              <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

                              <script>
                                   // add hover class in seleccted item

                                   Let list = document.querySelectorAll('.navigation li');
                                   function activeLink(){
                                        list.forEach((item) => 
                                        item.classList.remove('hovered'));
                                        this.classList.add('hovered');
                                   }
                                   list.forEach((item) =>
                                   item.addEventListener('mouseover', activeLink));
                              </script>
                         </body>
                         </html>

               <?php
               }else{
                    echo '<script type="text/javascript"> alert("Invalid Username or Password") </script>';
               }
          }else{
               echo '<script type="text/javascript"> alert("Invalid Username or Password") </script>';
          }
     }
?>
