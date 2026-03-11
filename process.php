<!-- <?php

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$maskedPassword = str_repeat("*", strlen($password));

$time = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

$log = "TIME: $time | IP: $ip | USER: $email | PASSWORD: $maskedPassword\n";

file_put_contents("demo_log.txt", $log, FILE_APPEND);

echo "<h2>Demo Submission Received</h2>";
echo "<p>This page demonstrates how attackers can intercept login data.</p>";

?> -->
<?php

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

echo "Email: " . $email . "<br>";
echo "Password: " . $password;

?>