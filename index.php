<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Suraj Mudhole" />
    <!-- link tags -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="icon"
      type="image/x-icon"
      href="https://seeklogo.com/images/A/aws-rds-relational-database-service-logo-99EA3E8EA4-seeklogo.com.png"
    />
    <link rel="stylesheet" href="./assest/styling/index.css" />
    <title>php CRUD App</title>
  </head>
  <body>
    <header>
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img
              src="https://seeklogo.com/images/A/aws-rds-relational-database-service-logo-99EA3E8EA4-seeklogo.com.png"
              alt="Logo"
              width="30"
              height="24"
              class="d-inline-block align-text-top"
            />
            <span>CRUD Application</span>
          </a>
        </div>
      </nav>
    </header>
    <div class="main-box">
      <div class="uperbox">
        <h1>Data log Book</h1>
        <button id="add_btn"><a href="./add_info.php">Add Data</a></button>
      </div>
      <div class="table_box">
        <hr>
        <table class="table">
          <thead>
            <tr>
            <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Emil_ID</th>
              <th scope="col">Phone</th>
              <th scope="col">Oparation</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $sql="select * from `crud` ";
            $result = $con->query($sql);
            if($result){
              while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $phone=$row['phone'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>
              <button class="btn btn-warning"><a href="update.php?updateid='.$id.'">Update</a></button>
              <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
            </td>
              </tr>';
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="./assest/scripting/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
