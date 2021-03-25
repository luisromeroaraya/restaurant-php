<?php
// create contact table
$request = $db->query('SELECT * FROM contact'); // get elements from database
while ($contacts = $request->fetch()) {
    $id = $contacts['id'];
    $date = $contacts['date'];
    $name = $contacts['name'];
    $email = $contacts['email'];
    $message = $contacts['message'];
    echo "<tr>";
    echo "<td>$date</td>";
    echo "<td>$name</td>";
    echo "<td>$email</td>";
    echo "<td>$message</td>";
    echo "<td><form method='post' action='backoffice.php'><button type='submit' name='removeContact' value=$id class='btn-danger'>x</button></form></td>";
    echo "</tr>";
}
$request->closeCursor(); // close database
?>