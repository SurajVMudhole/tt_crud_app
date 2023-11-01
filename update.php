<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id ";
$result = $con->query($sql);
$row=mysqli_fetch_assoc($result);
$Name=$row['name'];
$Email=$row['email'];
$Phone=$row['phone'];
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sql = "update `crud` set id='$id',name='$name',email='$email',phone='$phone' where id='.$id.' ";
    $result= mysqli_query($con,$sql);
    if($result){
        echo 'updated';
      header('location:index.php');
    }
    else{
      die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Suraj Mudhole" />
    <!-- link tags -->
    <link
      rel="icon"
      type="image/x-icon"
      href="https://seeklogo.com/images/A/aws-rds-relational-database-service-logo-99EA3E8EA4-seeklogo.com.png"
    />
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
    <h1 class="text_info">Update Record</h1>
      <div class="lowerbox">
        <form method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input
              type="text"
              name="name"
              autocomplete="off"
              placeholder="Enter name here"
              class="form-control"
              value="<?php echo $Name;?>"
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Email address</label
            >
            <input
              type="email"
              name="email"
              value="<?php echo $Email;?>"
              autocomplete="off"
              placeholder="Enter email here"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >Phone</label
            >
            <input
              type="number"
              name="phone"
              value="<?php echo $Phone;?>"
              class="form-control"
              autocomplete="off"
              
            />
          </div>
          <button type="submit" class="btn btn-outline-success" name="update">update</button>
        </form>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>