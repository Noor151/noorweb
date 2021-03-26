
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
Add icon library
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style> -->


<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>




<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
  <title>Document</title>

</head>
<body>

<div class="topnav">
  <a class="active" href="index.php">cseTpoint</a>
  <a class="active" href="#home">Home</a>
  <a href="select.php">Chack Data</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>



  <!-- <form action="" style="max-width:500px;margin:auto" method="POST">
  <div class="input-container">
  <i class="fa fa-user icon"></i>
  <label for="F_Name">F_Name</label>
  <input type="text" class="input-field" name="firstname" placeholder="Enter FirstName">
  </div>
  <div class="input-container">
  <i class="fa fa-user icon"></i>
  <label for="L_Name">L_Name</label>
  <input type="text" class="input-field" name="lastname" placeholder="Enter LastName">
  </div>
  <div class="input-container">
  <i class="fa fa-envelope icon"></i>
  <label for="Email">Email</label>
  <input type="email" class="input-field" name="email" placeholder="Enter Your Email">
  </div>
  <div class="input-container">
  <i class="fa fa-address-book icon"></i>
  <label for="Contact">Contact</label>
  <input type="contact" class="input-field" name="contact" placeholder="Enter Your Contact">
  </div>
  <input type="submit" class="btn" name="submit" value="Log In">
  <p><a href="http://localhost/php_connection/select.php/">Check Form</a></p> -->


  <div class="container">
  <!-- <form action="/action_page.php"> -->
  <form action="" method="POST">
    <div class="row">
      <div class="col-25">
      
        <label for="Firstname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your First Name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="LastName">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your Last Name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Email">Email Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="Email" name="email" placeholder="Enter Your Email Address..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Contact">Contact No</label>
      </div>
      <div class="col-75">
        <input type="text" id="Contact" name="contact" placeholder="Enter Your Contact No..">
      </div>
    </div>



    <!-- <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div> -->
    <div class="row">
      <!-- <input type="submit" name value="Submit"> -->
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</div>


  
  </form>
</body>
</html>
<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  
  $sql = "insert into table1(firstname, lastname, email, contact) values('$firstname','$lastname','$email','$contact')";

  $query = mysqli_query($con, $sql);

  if($query){
    ?>
    <script>
        alert('Inserted successfull');
    </script>
    <?php

  }else{
      ?>
      <script>
            alert('No Inserted');
      </script>
  // if(mysqli_query($con, $sql)){
  //   echo "New recode insert successfull";
  // }else{
  //   echo "Error: " . $sql. "<br>" . mysqli_error($con);
  // }
  <?php
}
}
?>
