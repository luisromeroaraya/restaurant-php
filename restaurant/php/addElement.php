<?php
// IF addContact button has been clicked
if (isset($_POST['addContact'])) {
    $date = $_POST['date'];
    $name = htmlspecialchars($_POST['name']);
    $email = $_POST['email'];
    $message = htmlspecialchars($_POST['message']);
    $request = $db->prepare('INSERT INTO contact(date, name, email, message) VALUES(?, ?, ?, ?)'); //prepare add command
    $request->execute(array($date, $name, $email, $message)); // add new element to database
    echo "<script type='text/javascript'>function toggleContact(){phpContact.classList.remove('hidden');btnContact.classList.add('active');btnBookings.classList.remove('active');btnGallery.classList.remove('active');}toggleContact();</script>";
    echo "<h4 class='text-left text-success'>Contact added.</h4>";
}
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
    echo "<script type='text/javascript'>function toggleBookings(){phpContact.classList.add('hidden');phpBookings.classList.remove('hidden');btnContact.classList.remove('active');btnBookings.classList.add('active');btnGallery.classList.remove('active');}toggleBookings();</script>";
    echo "<h4 class='text-left text-success'>Booking added.</h4>";
}
?>