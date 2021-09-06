<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>Basic Banking System </title>
</head>
<style>
h2{
  text-align: center;
}
.container{
  background-color:#ffebcd;
  border: 1px solid black;
  height: 50%;
  width: 40%;
}
.img{
  padding-top: 15px ;
  padding-left: 150px ;
}
.form {
  color: black;
}
.lables{
  font-weight: bold:
}
.input-field{
  width: 100%;
  padding: 8px;
  outline: none;
}
.input-field:focus {
  border: 2px solid black;
}
.btn1 {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}
.btn1:hover {
  opacity: 1;
}
.btn2 {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}
.btn2:hover {
  opacity: 1;
}
</style>
<body>

<div class="header">
  <a href="index.php" class="logo">The Spark Bank</a>
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href="createuser.php">Create User</a>
    <a href="transfer.php">Transfer Money</a>
    <a href="histroy.php">Transaction history</a>
  </div>
</div>
<?php
    include_once('config.php');
    if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $balance =$_POST['balance'];
    $sql_query="insert into users(name,email,balance) values('$name','$email','$balance')";
    if (mysqli_query($conn , $sql_query))
    {
      echo  "<script> alert('Hurray! User account created');
      window.location='transfer.php';
      </script>";

    }
    else{
      echo "Error :" .$sql. "" . mysqli_error($conn);
    }
    mysqli_close($conn);
    }
  
?>
<h2>Create a User</h2>
<div class="container">
<div class="img">
         <img src="img/ppl.png" alt="avtar" width="200" height="200">
       </div>
<form class="p"  method="post">
<div class="form">
       
       <lable class="lables">Name :</lable><br>
       <input class="input-field" input type="text" placeholder="Enter your Name" id="name" name="name" required><br>
       <lable class="lables">Email :</lable><br>
       <input class="input-field" input type="email" placeholder="Enter your Email" id="email" name="email" required><br>
       <lable class="lables">Balance :</lable><br>
       <input class="input-field" input type="number" placeholder="Enter your Balance" id="balance" name="balance" required><br><br>
      <center><a href="transfer.php"><button type="submit" class="btn1" name="submit" value="submit">Submit</button></a> &nbsp;&nbsp;&nbsp;&nbsp;
       <button type="reset" class="btn2">Reset</button><br>&nbsp; </center>
</div> 
</form>
</div>


<br><br>
<div class="footer">
<p>&copy 2021. Made by <b>Shivani Shirke</b> <br>The Spark Foundation</p>

  </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 
</body>
</html>
