<?php
  include __DIR__ . '/../database.php';

  $room_id = $_POST['id_camera'];
  $room_number= $_POST['numero_stanza'];
  $room_floor= $_POST['piano'];
  $room_beds= $_POST['letti'];

  $sql = "UPDATE `stanze` SET `room_number` = $room_number,
  `floor` = $room_floor, `beds` = $room_beds, `updated_at` = NOW() WHERE `id` = $room_id";

  $result = $conn->query($sql);

  if ($result) {
    header('location: ' . $base_path . '?room-updated=' . $room_number);
  } else {
      die("Errore nella query");
    }

?>
