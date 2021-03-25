<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Empanadas Restaurant</title>
        <meta charset="utf-8" />

        <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
        <link rel="manifest" href="icons/site.webmanifest">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

    </head>

    <body class="container bg-image">

        <header class="container bg-light d-flex justify-content-center fixed-top">
            <nav class="navbar navbar-expand-md navbar-light bg-light d-flex">
                <a class="navbar-brand" href="index.html"><img src="images/logo.svg" height="80px" alt="Logo Empanadas"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link m-auto" aria-current="page" href="index.html">Welcome</a>
                        <a class="nav-item nav-link m-auto" href="menu.html">Menu</a>
                        <a class="nav-item nav-link m-auto" href="gallery.php">Gallery</a>
                        <a class="nav-item nav-link m-auto" href="restaurants.html">Restaurants</a>
                        <a class="nav-item nav-link m-auto" href="contact.php">Contact</a>
                        <a class="nav-item nav-link m-auto active" href="backoffice.php">Backoffice</a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="mask"> 
            <section class="container text-dark" id=middle>
                <article id=backoffice>
                    <div class="row p-2 d-flex justify-content-center text-center mx-auto">
                        <h2>Backoffice</h2>
                        <?php
                            // try {
                            //     $db = new PDO('mysql:host=database;dbname=restaurant;charset=utf8', 'root', 'root'); // open database
                            // } catch (Exception $e) {
                            //     die('Erreur : ' . $e->getMessage());
                            // }
                            // $request = $db->query('SELECT * FROM users'); // get elements from database
                            // while ($users = $request->fetch()) {
                            //     $id = $users['id'];
                            //     $date = $users['username'];
                            //     $name = $users['password'];
                            // }
                            // $request->closeCursor(); // close database
                            
                            // IF username/password doesn't exist or are wrong we show login form
                            if ((!isset($_SESSION['username']) OR !isset($_SESSION['password'])) AND ($_POST['username'] != "admin" OR $_POST['password'] != "root")) {
                            
                                // IF username/password are wrong we show ERROR
                                if (isset($_POST['username']) OR isset($_POST['password'])) {
                                    echo "<strong>Wrong username/password</strong>";
                                }
                        ?>
                        <form method="post" action="backoffice.php">
                            <label for="username">Username:</label>
                            <input class="m-2" type="text" name="username" placeholder="Username" required><br>
                            <label for="password">Password:</label>
                            <input class="m-2" type="password" name="password" placeholder="Password" required><br>
                            <button type="submit" name="login" class='btn-success'>Login</button>
                            </form>
                        <?php
                        }
                        // IF password OK we show the page
                        elseif ((isset($_POST['username']) AND $_POST['username'] == "admin" AND isset($_POST['password']) AND $_POST['password'] ==  "root") OR (isset($_SESSION['username']) AND $_SESSION['username'] == "admin" AND isset($_SESSION['password']) AND $_SESSION['password'] ==  "root")) {
                            // We store the username and password if they don't exist
                            if (!isset($_SESSION['username']) OR !isset($_SESSION['password'])){
                                $_SESSION['username'] = $_POST['username'];
                                $_SESSION['password'] = $_POST['password'];
                            }
                        ?>
                        <div class="row">
                            <div class="col">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-outline-dark active" id="btnContact">Contact</button>
                                    <button type="button" class="btn btn-outline-dark" id="btnBookings">Bookings</button>
                                    <button type="button" class="btn btn-outline-dark" id="btnGallery">Gallery</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 table-responsive min-vh-100" id="phpContact">
                            <table class="table bg-white table-hover border border-dark text-start">
                                <thead>
                                    <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <form method="post" action="backoffice.php">
                                    <td><input type="date" name="date" required></td>
                                    <td><input type="text" name="name" placeholder="Name" required></td>
                                    <td><input type="email" name="email" placeholder="Email" required></td>
                                    <td><textarea name="message" placeholder="Message" rows="3" style="width:100%" required></textarea></td>
                                    <td><button type="submit" name="addContact" class='btn-success'>+</button></td>
                                    </form>
                                </tr>
                                <tbody>
                                    <?php
                                        try {
                                            $db = new PDO('mysql:host=database;dbname=restaurant;charset=utf8', 'root', 'root'); // open database
                                        } catch (Exception $e) {
                                            die('Erreur : ' . $e->getMessage());
                                        }
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
                                        // IF removeContact button has been clicked
                                        if (isset($_POST['removeContact'])) {
                                            $id = $_POST['removeContact'];
                                            $request = $db->prepare('DELETE FROM contact WHERE id = ?'); //prepare delete command
                                            $request->execute(array($id)); // delete element from database
                                            echo "<script type='text/javascript'>function toggleContact(){phpContact.classList.remove('hidden');btnContact.classList.add('active');btnBookings.classList.remove('active');btnGallery.classList.remove('active');}toggleContact();</script>";
                                            echo "<h4 class='text-left text-success'>Contact removed.</h4>";
                                        }
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
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 table-responsive min-vh-100 hidden" id="phpBookings">
                            <table class="table bg-white table-hover border border-dark text-start">
                                <thead>
                                    <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Restaurant</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">Telephone</th>
                                    <th scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <form method="post" action="backoffice.php">
                                    <td><input type="date" name="date" required></td>
                                    <td><select class="form-select mb-2" name="restaurant" required>
                                        <option value="">Choose your restaurant:</option>
                                        <option value="Brussels">Brussels</option>
                                        <option value="Antwerp">Antwerp</option>
                                        <option value="Liège">Liège</option>
                                        </select></td>
                                    <td><input class="form-control" type="time" name="time" min="11:00" max="22:30" required></td>
                                    <td><input type="text" name="name" placeholder="Name" required></td>
                                    <td><input type="email" name="email" placeholder="Email" required></td>
                                    <td><input type="tel" name="telephone" placeholder="0123456789" pattern="[0][1-9]{1}[0-9]{8}" required></td>
                                    <td><button type="submit" name="addBooking" class='btn-success'>+</button></td>
                                    </form>
                                </tr>
                                <tbody>
                                    <?php
                                        try {
                                            $db = new PDO('mysql:host=database;dbname=restaurant;charset=utf8', 'root', 'root'); // open database
                                        } catch (Exception $e) {
                                            die('Erreur : ' . $e->getMessage());
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
                                        // IF removeBooking button has been clicked
                                        if (isset($_POST['removeBooking'])) {
                                            $id = $_POST['removeBooking'];
                                            $request = $db->prepare('DELETE FROM bookings WHERE id = ?'); //prepare delete command
                                            $request->execute(array($id)); // delete element from database
                                            echo "<script type='text/javascript'>function toggleBookings(){phpContact.classList.add('hidden');phpBookings.classList.remove('hidden');btnContact.classList.remove('active');btnBookings.classList.add('active');btnGallery.classList.remove('active');}toggleBookings();</script>";
                                            echo "<h4 class='text-left text-success'>Booking removed.</h4>";
                                        }
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
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 table-responsive min-vh-100 hidden" id="phpGallery">
                            <table class="table bg-white table-hover border border-dark text-start">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Text</th>
                                        <th scope="col">Filename</th>
                                        <th scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <form method="post" action="backoffice.php" enctype="multipart/form-data">
                                        <td><label for="file"></label></td>
                                        <td><input type="text" name="country" placeholder="Country" required></td>
                                        <td><input type="text" name="text" placeholder="Description" required></td>
                                        <td><input type="file" name="filename" id="filename" required></td>
                                        <td><button type="submit" name="addGallery" class='btn-success'>+</button></td>
                                    </form>
                                </tr>
                                <tbody>
                                    <?php
                                        // open database
                                        try {
                                            $db = new PDO('mysql:host=database;dbname=restaurant;charset=utf8', 'root', 'root');
                                        } catch (Exception $e) {
                                            die('Erreur : ' . $e->getMessage());
                                        }
                                        // upload file
                                        if(isset($_POST["addGallery"])) {
                                            $target_dir = "gallery/";
                                            $target_file = $target_dir . basename($_FILES["filename"]["name"]);
                                            $uploadOk = 1;
                                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                            // Check if image file is a actual image or fake image
                                            $check = getimagesize($_FILES["filename"]["tmp_name"]);
                                            if($check !== false) {
                                                //echo "File is an image - " . $check["mime"] . ".";
                                                $uploadOk = 1;
                                            } else {
                                                echo "<h4 class='text-left text-danger'>File is not an image.</h4>";
                                                $uploadOk = 0;
                                            }
                                            // Check if file already exists
                                            if (file_exists($target_file)) {
                                                echo "<h4 class='text-left text-danger'>Sorry, file already exists.</h4>";
                                                $uploadOk = 0;
                                            }
                                            // Check file size
                                            if ($_FILES["filename"]["size"] > 500000) {
                                                echo "<h4 class='text-left text-danger'>Sorry, your file is too large.</h4>";
                                                $uploadOk = 0;
                                            }
                                            // Allow certain file formats
                                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                            && $imageFileType != "gif" ) {
                                                echo "<h4 class='text-left text-danger'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h4>";
                                                $uploadOk = 0;
                                            }
                                            // Check if $uploadOk is set to 0 by an error
                                            if ($uploadOk == 0) {
                                                echo "<h4 class='text-left text-danger'>Sorry, your file was not uploaded.</h4>";
                                            // if everything is ok, try to upload file
                                            } else {
                                                if (move_uploaded_file($_FILES["filename"]["tmp_name"], $target_file)) {
                                                    echo "<h4 class='text-left text-success'>Your file has been uploaded.</h4>";
                                                } else {
                                                    echo "<h4 class='text-left text-danger'>Sorry, there was an error uploading your file.</h4>";
                                                }
                                            }
                                            $date = date("Y-m-d");
                                            $country = htmlspecialchars($_POST['country']);
                                            $text = htmlspecialchars($_POST['text']);
                                            $filename = $_FILES['filename']['name'];
                                            $request = $db->prepare('INSERT INTO gallery(date, country, text, filename) VALUES(?, ?, ?, ?)'); // prepare add command
                                            $request->execute(array($date, $country, $text, $filename)); // add new element to database
                                            echo "<script type='text/javascript'>function toggleGallery(){phpContact.classList.add('hidden');phpGallery.classList.remove('hidden');btnContact.classList.remove('active');btnBookings.classList.remove('active');btnGallery.classList.add('active');}toggleGallery();</script>";
                                        }
                                        if (isset($_POST['removeGallery'])) {
                                            $id = $_POST['removeGallery'];
                                            $request = $db->prepare('SELECT filename FROM gallery WHERE id = ?'); // prepare search command
                                            $request->execute(array($id)); // search element in database
                                            $image = $request->fetch();
                                            $filename = $image['filename'];
                                            $request->closeCursor();
                                            unlink("gallery/".$filename); //delete image from folder
                                            $request = $db->prepare('DELETE FROM gallery WHERE id = ?'); //prepare delete command
                                            $request->execute(array($id)); // delete element from database
                                            echo "<script type='text/javascript'>function toggleGallery(){phpContact.classList.add('hidden');phpGallery.classList.remove('hidden');btnContact.classList.remove('active');btnBookings.classList.remove('active');btnGallery.classList.add('active');}toggleGallery();</script>";
                                            echo "<h4 class='text-left text-success'>Image removed.</h4>";
                                        }
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
                                </tbody>
                            </table>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </article>
            </section>
        </main>

        <footer class="container bg-light fixed-bottom">
            <div class="row text-center">
                <div class="col text-dark">
                    <p>©2020 by Empanadas. Created with Visual Studio Code.</p>
                </div>
                <div class="col text-dark">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm text-dark" href="https://www.facebook.com" role="button"><i class="fab fa-facebook"></i></a>
                            <a class="btn-floating btn-sm text-dark" href="https://www.twitter.com" role="button"><i class="fab fa-twitter"></i></a>
                            <a class="btn-floating btn-sm text-dark" href="https://www.instagram.com" role="button"><i class="fab fa-instagram"></i></a>
                            <a class="btn-floating btn-sm text-dark" href="https://www.youtube.com" role="button"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>