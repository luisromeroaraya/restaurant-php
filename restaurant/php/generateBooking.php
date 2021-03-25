<?php
// create booking table
$request = $db->query('SELECT * FROM bookings'); // get elements from database
while ($bookings = $request->fetch()) { 
    $id = $bookings['id'];
    $date = $bookings['date'];
    $restaurant = $bookings['restaurant'];
    $time = $bookings['time'];
    $name = $bookings['name'];
    $email = $bookings['email'];
    $telephone = $bookings['telephone'];
    echo "<tr>";
    echo "<td>$date</td>";
    echo "<td>$restaurant</td>";
    echo "<td>$time</td>";
    echo "<td>$name</td>";
    echo "<td>$email</td>";
    echo "<td>$telephone</td>";
    echo "<td><form method='post' action='backoffice.php'><button type='submit' name='removeBooking' value=$id class='btn-danger'>x</button></form></td>";
    echo "</tr>";
}
$request->closeCursor(); // close database
?>