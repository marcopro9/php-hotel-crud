<?php include __DIR__ . '/server.php';?>
<?php include __DIR__ . '/../partials/header.php';?>

<?php if (!empty($room)) {?>
<main>
  <h2>Stanza:<?php echo $room['room_number']; ?> </h2>

  <ul>
    <li>ID: <?php echo $room['id']; ?></li>
    <li>Piano: <?php echo $room['floor']; ?></li>
    <li>Letti: <?php echo $room['beds']; ?></li>
    <li>Data creazione: <?php echo $room['created_at']; ?></li>
  </ul>

  <a href="<?php echo $base_path ?>">Torna alla lista delle stanze</a>

</main>
<?php } else { ?>
  <p>Questa stanza non esiste </p>
<?php } ?>
