<?php
// IF addBooking button has been clicked
if (isset($_POST['addBooking'])) {
    $date = $_POST['date'];
    $restaurant = $_POST['restaurant'];
    $time = $_POST['time'];
    $name = htmlspecialchars($_POST['name']);
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $request = $db->prepare('INSERT INTO bookings(date, restaurant, time, name, email, telephone) VALUES(?, ?, ?, ?, ?, ?)'); //prepare add command
    $request->execute(array($date, $restaurant, $time, $name, $email, $telephone)); // add new element in database
    echo "<h3 class='text-center text-success'>Your table was booked succesfully! See you soon.</h3>";
}
// IF addContact button has been clicked
if (isset($_POST['addContact'])) {
    $date = date("Y-m-d");
    $name = htmlspecialchars($_POST['name']);
    $email = $_POST['email'];
    $message = htmlspecialchars($_POST['message']);
    $request = $db->prepare('INSERT INTO contact(date, name, email, message) VALUES(?, ?, ?, ?)'); //prepare add command
    $request->execute(array($date, $name, $email, $message)); // add new element in database
    echo "<h3 class='text-center text-success'>Message sent! Thank you for contacting us.</h3>";
}
?>