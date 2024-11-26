<?php 
echo "Strada";


$conn = new mysqli("localhost", "root",   "", "sipols");
$sql="SELECT * FROM users";

$result = $conn->query("SELECT * FROM users");
$data= $result->fetch_assoc();

echo "</br>";
 echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
      $password = $_POST["password"];
    $sql = "INSERT INTO users
    (username, password)
    VALUES
    ('$username','$password');
    ";
    $conn->query($sql);
}

echo "<form method='POST'>";
echo"<lable>   Lietotajvards " ;
echo "<input  required name='username' placeholder='sigma🐱‍👤' lable='Lietotaj vards'/>";
echo"</lable>    ";
echo"<lable>    Parole " ;
echo "<input type = 'password' required name='password' placeholder='pass😎😜'/>";
echo"</lable>    ";
echo  "<input type= 'submit' value='registreties'/>";
echo "</form>";



var_dump($data);
echo "</br>";
print_r($data);
//  <sipols>
//  <label>
//  </label>
//  </sipols>

// ༼ つ ◕_◕ ༽つ

