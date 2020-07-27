<?php include __DIR__ . '/server.php';?>
<?php include __DIR__ . '/partials/header.php';?>

     <main>

      <?php if (isset($_GET['room-updated'])) {?>
        <p>La Stanza <?php echo $_GET['room-updated'] ?> è stata aggiornata!</p>
     <?php } ?>

       <!-- stanze -->
       <table>

         <!-- colonne stanza -->
         <thead>
           <tr>
             <th>ID</th>
             <th>Stanza</th>
             <th>Piano</th>
           </tr>
         </thead>
         <!-- fine colonne stanza -->

         <tbody>
           <?php foreach ($rooms as $room) { ?>
           <!-- singola stanza -->
           <tr>
             <td><?php echo $room['id']; ?></td>
             <td><?php echo $room['room_number']; ?></td>
             <td><?php echo $room['floor']; ?></td>
             <td><a href="<?php echo $base_path . '/show/show.php?id='. $room['id'];?>">View</a></td>
             <td><a href="<?php echo $base_path . '/update/edit.php?id='. $room['id'];?>">Update</a></td>
           </tr>
           <!-- singola stanza -->
        <?php } ?>
         </tbody>

       </table>
       <!-- fine stanze -->

     </main>
   </body>
 </html>
