<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>Basic Banking System </title>
</head>
<style>

.table{
  width: 95%;
  padding-left: 80px;
}  
#customers {
  font-family:sans-serif;
  border-collapse: collapse;
  padding: 3px;
  border: 1px solid black;
  width:100%;
}

#customers td, #customers th {
  border: 1px solid black;
  padding: 0px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 2px;
  padding-bottom: 2px;
  text-align: center;
  font-size: 28px;
  background-color: #04AA6D;
  color: white;
}
#customers td {
  padding-top: 2px;
  padding-bottom: 2px;
  text-align: center;
  font-size: 22px;
}
h2{
  text-align: center;

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

<div class="table"><br>
<h2>Transaction Histroy<h2>
<table id="customers">
  <tr>
    <th>Sr No.</th>
    <th>Sender</th>
    <th>Receiver</th>
    <th>Balance</th>
    <th>Date & Time</th>
 </tr>
 <?php
  include_once('config.php');

  $query = "SELECT * FROM transaction";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);

if($total!==0){
  while($result=mysqli_fetch_assoc($data))
  {
    echo"
    <tr>
    <td>".$result['Sno']."</td>
    <td>".$result['sender']."</td>
    <td>".$result['receiver']."</td>
    <td>".$result['balance']."</td>
    <td>".$result['datetime']."</td>

    </tr>
    ";
  }

}
else{
     echo "No Data found";
}
 ?>
</table>
</div>
<br>
<div class="footer">
<p>&copy 2021. Made by <b>Shivani Shirke</b> <br>The Spark Foundation</p>
</div>
</body>
</html>