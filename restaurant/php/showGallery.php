<?php
$request = $db->query('SELECT * FROM gallery'); // get elements from database
// show elements from database
while ($gallery = $request->fetch()) {
    $country = $gallery['country'];
    $text = $gallery['text'];
    $filename = "gallery/".$gallery['filename'];
    echo"   <div class='col'>
            <div class='card h-100'>
            <a href=$filename><img src=$filename class='card-img-top' alt=$text></a>
            <div class='card-body'>
            <h5 class='card-title'>$country</h5>
            <p class='card-text'>$text</p>
            </div>
            </div>
            </div>
        ";
}
$request->closeCursor(); // close database
?>