<?php
session_start();

if (isset($_POST["submit"])) {
    include_once("dbconnect.php");
    $contact = $_POST["contact"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $deposit = $_POST["deposit"];
    $state = $_POST["state"];
    $area = $_POST["area"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $sqlregister = "INSERT INTO `tbl_room`(`contact`, `title`, `description`, `price`, `deposit`, `state`, `area`, `latitude`, `longitude`) VALUES('$contact', '$title', '$description', '$price', '$deposit', '$state', '$area', '$latitude', '$longitude')";
    
    try {
        $conn->exec($sqlregister);
        if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])) {
            uploadImage($contact);
        }
        echo "<script>window.location.replace('mainpage.php')</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Registration failed')</script>";
        echo "<script>window.location.replace('register.php')</script>";
    }
}

function uploadImage($id) {
    $target_dir = "image/";
    $target_file = $target_dir . $id . ".jpg";
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2017.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Room To Rent - Registration</title>
</head>

<body>
    <div class= "w3-header w3-display-container w3-2017-greenery w3-padding-32 w3-center">
        <h1 style="font-size:calc(8px + 4vw);">ROOM TO RENT</h1>
    </div>

    <div class="w3-bar" style="background-color:#ECF87F">
        <a href="mainpage.php" class="w3-bar-item w3-button w3-left">Main Page</a>
    </div>

    <div class="w3-container w3-padding-64 form-container">
        <div class="w3-card">
            <div class="w3-container w3-2017-greenery">
                <p>New Room to Rent</p>
            </div>

            <form class="w3-container w3-padding formco" name="registerForm" action="register.php" method="post" enctype="multipart/form-data">
                <p>
                   <div class="w3-container w3-border w3-center w3-padding">
                            <img class="w3-image w3-round" src="image/upload.png" style="width:100%; max-width:200px"><br>
                            <input class="w3-margin" type="file" onchange="previewFile()" name="fileToUpload" id="fileToUpload"><br>
                    </div> 
                </p>
                <p>
                    <label><b>Contact</b></label>
                    <input class="w3-input w3-border w3-round" type="phone" placeholder="Enter Contact No" name="contact" id="idphone" required>
                </p>
                <p>
                    <label><b>Title</b></label>
                    <input class="w3-input w3-border w3-round" type="text" placeholder="Enter Title" name="title" id="idtitle" required>
                </p>
                <p>
                    <label><b>Description</b></label>
                    <textarea class="w3-input w3-border w3-border w3-round" placeholder="Enter Description" id="iddescription" name="description" required></textarea>
                </p>
                <p>
                    <label><b>Price</b></label>
                    <p>RM<input class="w3-input w3-border w3-round" type="text" placeholder="Enter Price" name="price" id="idprice" required></p>
                </p>
                <p>
                    <label><b>Deposit</b></label>
                    <p>RM<input class="w3-input w3-border w3-round" type="text" placeholder="Enter Deposit" name="deposit" id="iddeposit" required></p>
                </p>
                <p>
                    <label><b>State</b></label>
                    <input class="w3-input w3-border w3-round" type="text" placeholder="Enter State" name="state" id="idstate" required>
                </p>
                <p>
                    <label><b>Area</b></label>
                    <input class="w3-input w3-border w3-round" type="text" placeholder="Enter Area" name="area" id="idarea" required>
                </p>
                <p>
                    <label><b>Latitude</b></label>
                    <input class="w3-input w3-border w3-round" type="text" placeholder="Enter Latitude" name="latitude" id="idlatitude" required></p>
                </p>
                <p>
                    <label><b>Longitude</b></label>
                    <input class="w3-input w3-border w3-round" type="text" placeholder="Enter Longitude" name="longitude" id="idlongitude" required></p>
                </p>

                <div class="row">
                    <input class="w3-input w3-border w3-block w3-2017-greenery w3-round" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <footer class="w3-container w3-2017-greenery w3-center">
        <p>Powered by RENT A ROOM</p>        
    </footer>
</body>