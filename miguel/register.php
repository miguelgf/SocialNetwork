<?php

include('database.php');

$year = $_POST['year'];
$day = $_POST['day'];
$month = $_POST['month'];
/*
$year = 2000;
$day = 05;
$month = 10;
*/
$birthdate = $year.'-'.$month.'-'.$day;


$birthdateDateTime = new DateTime($birthdate);
$birthdateDateTime->setTime(22, 12, 33);
// $birthdateDateTime->modify('+1 day');

//var_dump($birthdateDateTime);


$formattedDate = $birthdateDateTime->format('Y-m-d H:i:s');
//var_dump($formattedDate);

/*
class A {
  public $number = 7;

  public function foo() {
    echo 1;
  }
}

$a = new A();
$a->foo();

echo $a->number;
exit;
*/

// print_r($_POST);

$name = $_POST['name'];
$email = $_POST['email'];


$result = $connection->query("
SELECT *
FROM users
WHERE email = '$email'
");

$numberOfUsers = $result->num_rows;

if ($numberOfUsers > 0) {
  echo "this e-mail is allready used";
} else {
  $connection->query("
    INSERT INTO users (name, email, created_date, birthdate)
    VALUES ('$name', '$email', NOW(), '$formattedDate')
  ");
  echo 'User created';
}
