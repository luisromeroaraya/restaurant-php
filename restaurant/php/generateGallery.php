<?php
// show gallery elements
$request = $db->query('SELECT * FROM gallery');
while ($gallery = $request->fetch()) {
    $id = $gallery['id'];
    $date = $gallery['date'];
    $country = $gallery['country'];
    $text = $gallery['text'];
    $filename = $gallery['filename'];
    echo "<tr>";
    echo "<td>$date</td>";
    echo "<td>$country</td>";
    echo "<td>$text</td>";
    echo "<td>$filename</td>";
    echo "<td><form method='post' action='backoffice.php'><button type='submit' name='removeGallery' value=$id class='btn-danger'>x</button></form></td>";
    echo "</tr>";
}
$request->closeCursor(); // close database
?>