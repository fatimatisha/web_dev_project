<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8080/WEBMED_PROJECT_final2M/styleAP.css">
    <!--bootstrap-->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="shortcut icon" href="./images/favicon.png" />

  
    <title>Document</title>
</head>
<body>
    <header class="page-header">
        <nav>
        <!-- logo -->
        <a class="logo-name" href="#">WEBMED</a>

          <ul class="admin-menu">
            <li class="menu-heading">
              <h3>Admin</h3>
            </li>
            <li>
              <a href="#">
                <span>Doctors</span>
              </a>
            </li>
            <li>
              <a href="#">
            
                <span>Medicines</span>
              </a>
            </li>
            <li>
              <a href="#">
                
                <span>Appointments</span>
              </a>
            </li>
            <li>
              <a href="#">
                
                <span>Subscribers</span>
              </a>
            </li>
            <li>
              <a href="#">
               
                <span>Blogs</span>
              </a>
            </li>
            <li>
              <a href="#">               
                <span>Comments</span>
              </a>
            </li>
            <li class="menu-heading">
              <h3>Settings</h3>
            </li>
            <li>
              <a href="#">
                <span>Others</span>
              </a>
            </li>
            
            
          </ul>
        </nav>
      </header>
  


      <div class="main-part">
        <div class="box1" style="color: white;background-color:#242e42;">
          <?php
           $conn = mysqli_connect("localhost", "root", "", "newsletter");
  
  
           if (!$conn) {
             die("Connection failed: ". mysqli_connect_error());
           }
     

           $result=mysqli_query($conn,"SELECT count(*) as total from subscribe");
            $data=mysqli_fetch_assoc($result);
            echo "<h2>Subscribers</h2>";
            echo "<h1 align='center'>". $data['total']."</h1>";

          ?>
        </div>

      <div class="box2"></div>

      <?php
  
  
      $conn = mysqli_connect("localhost", "root", "", "newsletter");
  
  
      if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
      }

      $sql = "SELECT email FROM subscribe";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
     
        while($row = mysqli_fetch_assoc($result)) {
         // echo "email: " . $row["email"]."<br>";
        }
      } else {
        echo "0 results";
      }
      ?>

      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
     
</body>
</html>
