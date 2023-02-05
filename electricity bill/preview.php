<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Preview electricity bill</title>
</head>
<body>
<?php
  $name = $_POST['name'];
  $ivrs = $_POST['ivrs'];
  $email = $_POST['email'];
  $usage = $_POST['usage'];
  $tax = 0.5;
  $bill = 0;
  
  if ($usage <= 100) {
    $rate = 1;
  } else if ($usage > 100 && $usage <= 250) {
    $rate = 8;
  } else {
    $rate = 15;
  }

  $bill = ($usage * $rate) + ($usage * $rate * $tax);
?>
<form>
<h1>Preview</h1>
<p>Customer's name: <?php echo $name; ?></p>
<p>IVRS number: <?php echo $ivrs; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Electricity usage: <?php echo $usage; ?> kWh</p>
<p>Total bill: RS.<?php echo $bill; ?></p>
</form> 
</body>
</html>