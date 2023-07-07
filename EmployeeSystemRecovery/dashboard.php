<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>User Dashboard</title>
          <link rel="stylesheet" href="dash.css">
     </head>
     <body>
          <div class="container">
               <div class="navigation">
                    <ul>
                         <li>
                              <a href="UserProfile.php">
                                   <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                                   <span class="title">CompanyName</span>
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
                         <div class="content-left-up">
                              <div class="box-1">
                                   <div class="title">
                                        <p>No. Of Employees</p>
                                        <hr>
                                   </div>
                                   <div class="box-content">
                                        <div class="box-icon">
                                             <ion-icon name="people-circle-outline"></ion-icon>
                                        </div>
                                        <div class="data">
                                             <h3>
                                                  <?php
                                                       $conn = mysqli_connect("localhost", "root", "password", "employeesystem");
                                                       $query = "SELECT userid from acount ORDER BY userid;";

                                                       $query_run = mysqli_query($conn, $query);

                                                       $row = mysqli_num_rows($query_run);

                                                       echo '<h3>'.$row.'</h3>';

                                                       $conn->close();
                                                  ?>
                                             </h3>
                                        </div>
                                   </div>
                              </div>
                              <div class="box-2">
                                   <div class="title">
                                        <p>No. Of Department</p>
                                        <hr>
                                   </div>
                                   <div class="box-content">
                                        <div class="box-icon">
                                             <ion-icon name="briefcase-outline"></ion-icon>
                                        </div>
                                        <div class="data">
                                             <h3>3</h3>
                                        </div>
                                   </div>
                              </div>
                              <div class="box-3">
                                   <div class="title">
                                        <p>No. Of Events</p>
                                        <hr>
                                   </div>
                                   <div class="box-content">
                                        <div class="box-icon">
                                             <ion-icon name="calendar-number-outline"></ion-icon>
                                        </div>
                                        <div class="data">
                                             <h3>7</h3>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="content-left-down">
                              <div class="content-left-down1">
                                   <div class="box-down">
                                        <div class="title">
                                             <p>List Of Employees</p>
                                             <hr>
                                        </div>
                                        <div class="box-content">
                                             <table>
                                                  <tr>
                                                       <th>Id</th>
                                                       <th>First Name</th>
                                                       <th>Last Name</th>
                                                       <th>Position</th>
                                                  </tr>
                                                  <!-- populate table from mysql database -->
                                                  <?php
                                                       $conn = mysqli_connect("localhost", "root", "password", "employeesystem");

                                                       if($conn->connect_error){
                                                            die("Connection Failed:". $conn->connect_error);
                                                       }

                                                       $sql = "SELECT userid, firstName, lastName, position from info";
                                                       $result = $conn-> query($sql);

                                                       if (!empty($result) && $result->num_rows > 0){
                                                            while($row = $result-> fetch_assoc()){
                                                                 echo "<tr><td>". $row["userid"] ."</td><td>". $row["firstName"] ."</td><td>". $row["lastName"] ."</td><td>". $row["position"] ."</td></tr>";
                                                            }
                                                            echo "</table>";
                                                       }
                                                       else{
                                                            echo "0 result";
                                                       }
                                                       $conn->close();

                                                  ?>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                              <div class="content-left-down2">
                                   <div class="extra-box">
                                        <div class="title">
                                             <p>Extra Box</p>
                                             <hr>
                                        </div>
                                        <div class="box-content">
                                             <div class="data">
                                                  <h3>
                                                       <?php
                                                            $conn = mysqli_connect("localhost", "root", "password", "employeesystem");
                                                            $query = "SELECT userid from acount ORDER BY userid;";

                                                            $query_run = mysqli_query($conn, $query);

                                                            $row = mysqli_num_rows($query_run);

                                                            $conn->close();
                                                       ?>
                                                  </h3>
                                             </div>
                                        </div>
                                   </div>
                              </div>
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