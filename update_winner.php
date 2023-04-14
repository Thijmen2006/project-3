<?php

// kijken of de post is gezet
if (isset($_POST['winner'])) {
  $winner = ($_POST['winner'] == 'red');

  include_once("login.php");
  $naam = $_SESSION['gebruikersnaam'];

  // databse connectie maken
  $dsn = 'mysql:host=localhost;dbname=4oer';
  $username = 'bit_academy';
  $password = 'bit_academy';

  // proberen de connectie te maken met de database
  try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
  }

  // de query die een punt erbij optelt. de gebruikersnaam is nog niet variabel.
  $stmt = $pdo->prepare("UPDATE accounts SET score = score + 1 WHERE gebruikersnaam = '$naam'");

  // proberen de query uit te voeren
  try {
    $stmt->execute();
  } catch (PDOException $e) {
    die("Error updating winner count: " . $e->getMessage());
  }

  $pdo = null;
}
