
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
 
</style>
<body>
    <form action="/practicals/electricity bill/preview.php" method="post">
      <h1>Electricity Bill</h1>
  <label for="name">Enter customer's name:</label>
  <input type="text" id="name" name="name">
  <label for="ivrs">Enter IVRS number:</label>
  <input type="number" id="ivrs" name="ivrs">
  <label for="email">Enter email:</label>
  <input type="email" id="email" name="email">
  <label for="usage">Enter electricity usage in kWh/Unit:</label>
  <input type="number" id="usage" name="usage">
  <input type="submit" value="Calculate">
</form>


</body>
</html>