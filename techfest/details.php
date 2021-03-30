<?php
    // Include config file
    require_once "config.php";
    include('header.html');
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $event = $_POST['name'];
        $query = "select * from details where name='$event' ";
        $query1 = $dbhandler->query($query);
        $r = $query1->fetchAll();
        foreach ($r as $t) {
            $title = $t['title'];
            $description = $t['description'];
            $member = $t['member'];
            $fees = $t['fees'];
            $teams = $t['teams'];
            $co_name = $t['coordinater_name'];
            $co_contact = $t['coordinater_contact'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicific 2020</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="containercon">
        <div>
            <h3><?php echo $title ?></h3>
        </div><br><br>
        <div>
            <h4>Description: </h4>
            <p><?php echo $description ?></p>
        </div><br><br>
        <div>
            <h4>Members: </h4>
            <p><?php echo $member ?> per team</p>
        </div><br><br>
        <div>
            <h4>Fees per Team: </h4>
            <p><?php echo $fees ?> /-</p>
        </div><br><br>
        <div>
            <h4>Co-oridinater :</h4>
            <p> <?php echo $co_name ?></p>
        </div><br><br>
        <div>
            <h4>Contact: </h4>
            <p><?php echo $co_contact ?></p>
        </div><br><br>
        <div>
            <h4>Total teams: </h4>
            <p><?php echo $teams ?></p>
        </div><br><br>
    
        <form action="register.php" method="POST">
        
            <?php $_SESSION['title']=$title ; ?>
            <?php $_SESSION['member']=$member; ?>
            <?php $_SESSION['fees']=$fees; ?>
        
            <input type="submit" name="submit1" value="Register" class="btn btn-primary">
        </form>
    </div><br><br>
</body>

</html>
<?php include('footer.html'); ?>