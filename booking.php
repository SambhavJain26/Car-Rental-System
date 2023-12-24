
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookings</title>
  <link rel="stylesheet" href="booking.css">
</head>
<body>
  <div class="heading">
    <a href="rental.php"><button>Go Back</button></a>
    <p>Details on all previous bookings are displayed here :)</p>
  </div>
  <div class="body">
    <table>
      <thead>
        <tr>
          <th>Car</th>
          <th>Location</th>
          <th>Pick Up</th>
          <th>Return</th>
          <th>Price(Rs)/day</th>
        </tr>
      </thead>
      <tbody>
<?php
@include 'connection.php';
error_reporting(0);
$query = "select * from booking";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
if($total!=0){
  while($result=mysqli_fetch_assoc($data)){
    echo "
    <tr>
      <td>".$result['car']."</td>
      <td>".$result['location']."</td>
      <td>".$result['pickup_date']."</td>
      <td>".$result['return_date']."</td>
      <td>".$result['price_inrupees']."</td>
    </tr>";
  }
}
?>
</tbody>
</table>
</div>
</body>
</html>