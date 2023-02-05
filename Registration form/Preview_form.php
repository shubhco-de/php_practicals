<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    echo"<h1>Preview Form</h1><br>";
    echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Password: " . $password . "<br>";
echo "Gender: " . $gender . "<br>";
echo "DOB: " . $dob . "<br>";
echo "Address: " . $address . "<br>";
echo "Phone: " . $phone;
}
    ?>