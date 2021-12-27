<?php
include_once("dbconnect.php");
$sqlrooms = "SELECT * FROM tbl_room ORDER BY date_created DESC";
$stmt = $conn->prepare($sqlrooms);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scal=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2017.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Room to Rent</title>
</head>

<body>
    <div class= "w3-header w3-display-container w3-2017-greenery w3-padding-32 w3-center">
        <h1 style="font-size:calc(8px + 4vw);">ROOM TO RENT</h1>
    </div>

    <div class="w3-bar" style="background-color:#ECF87F">
        <a href="register.php" class="w3-bar-item w3-button w3-left">New Room</a>
    </div>

    <div class="w3-grid-template">
        <?php
        foreach ($rows as $rooms) {
            $contact = $rooms['contact'];
            $title = $rooms['title'];
            $description = $rooms['description'];
            $state = $rooms['state'];
            $area = $rooms['area'];
            $price = $rooms['price'];
            $deposit = $rooms['deposit'];
            $latitude = $rooms['latitude'];
            $longitude = $rooms['longitude'];
            echo "<div class='w3-center w3-padding'>";
            echo "<div class='w3-card-3' style='background-color:#EBEBE8'>";
            echo "<header class='w3-container w3-2017-greenery'>";
            echo "<h5>$title</h5>";
            echo "</header>";
            echo "<img class='w3-image' src=image/$contact.jpg" . " onerror=this.onerror=null;this.src='image/blank.jpg'" . " style='width:100%;height:200px'>";
            echo "<div class='w3-container w3-justify'><hr>";
            echo "<p>State:<i style='font-size:16px'></i>&nbsp&nbsp$state<br>
                    Area:<i style='font-size:16px'></i>&nbsp&nbsp$area<br>
                    Latitude:<i style='font-size:16px'></i>&nbsp&nbsp$latitude<br>
                    Longitude:<i style='font-size:16px'></i>&nbsp&nbsp$longitude<br>
                    Description:<i style='font-size:16px'></i>&nbsp$description<br>
                    Contact:<i style='font-size:16px'></i>&nbsp$contact<br>
                    Price: RM<i style='font-size:16px'></i>$price<br>
                    Deposit: RM<i style='font-size:16px'></i>$deposit<br></p><hr>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>

    </div>



    <footer class="w3-container w3-2017-greenery w3-center">
        <p>Powered by RENT A ROOM</p>        
    </footer>
</body>
</html>