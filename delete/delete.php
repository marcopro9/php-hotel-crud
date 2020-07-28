<?php
include __DIR__ . '/../database.php';
include __DIR__ . '/../partials/header.php';

$room_id = $_POST['formid'];
$sql = "DELETE FROM `stanze` WHERE `id` = $room_id";
$result = $conn->query($sql);

if ($result) {
  die("Eliminazione non effettuata");
}
?>

<main>
  <p>Eliminazione effettuata!</p>
  <a href="<?php echo $base_path ?>">Torna alla lista delle stanze</a>
</main>
