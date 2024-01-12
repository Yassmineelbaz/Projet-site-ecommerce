
<?php
function connection()
{
  $dsn = 'mysql:host=localhost;dbname=chiquestyle;charset=utf8mb4';
  $username = 'root';
  $password = '';

  try {
    $bdd = new PDO($dsn, $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $bdd;
  } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
  }
}
?>