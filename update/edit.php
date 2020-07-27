<?php include __DIR__ . '/server.php';?>
<?php include __DIR__ . '/../partials/header.php';?>

<main>
  <h2>Modifica la stanza: <?php echo $room['room_number'] ?></h2>

  <form action="<?php echo $base_path . '/update/update.php'; ?>" method="post">
    <input type="hidden" name="id_camera" value="<?php echo $room['id']; ?>">
    <div>
      <label>Numero Stanza</label>
      <input type="text" name="numero_stanza" value="<?php echo $room['room_number'];?>">
    </div>

    <div>
      <label>Piano </label>
      <input type="text" name="piano" value="<?php echo $room['floor'];?>">
    </div>

    <div>
      <label>Letti</label>
      <input type="text" name="letti" value="<?php echo $room['beds'];?>">
    </div>

    <div >
      <input type="submit" name="" value="Salva">
    </div>
  </form>
</main>
