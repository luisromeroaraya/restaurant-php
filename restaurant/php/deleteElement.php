<?php
// IF removeContact button has been clicked
if (isset($_POST['removeContact'])) {
    $id = $_POST['removeContact'];
    $request = $db->prepare('DELETE FROM contact WHERE id = ?'); //prepare delete command
    $request->execute(array($id)); // delete element from database
    echo "<script type='text/javascript'>function toggleContact(){phpContact.classList.remove('hidden');btnContact.classList.add('active');btnBookings.classList.remove('active');btnGallery.classList.remove('active');}toggleContact();</script>";
    echo "<h4 class='text-left text-success'>Contact removed.</h4>";
}
// IF removeBooking button has been clicked
if (isset($_POST['removeBooking'])) {
    $id = $_POST['removeBooking'];
    $request = $db->prepare('DELETE FROM bookings WHERE id = ?'); //prepare delete command
    $request->execute(array($id)); // delete element from database
    echo "<script type='text/javascript'>function toggleBookings(){phpContact.classList.add('hidden');phpBookings.classList.remove('hidden');btnContact.classList.remove('active');btnBookings.classList.add('active');btnGallery.classList.remove('active');}toggleBookings();</script>";
    echo "<h4 class='text-left text-success'>Booking removed.</h4>";
}
?>