<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
]);
$query= $pdo->query('SELECT * FROM users');

print_r($query->errorInfo());
echo ' _<br>';
print_r($query->fetch());


?>

<?php while ($row=$query->fetch()): ?>
  <?=$row['first_name']?>
<?php endwhile;?>
