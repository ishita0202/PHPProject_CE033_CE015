<?php
    // Include config file
    session_start();

    require_once "config.php";
    include('header.html');

    $member = $_SESSION['member'];
    $title=$_SESSION['title'];

    $query = "SELECT * FROM details WHERE title = '$title'";
    $query1 = $dbhandler->query($query);
    $r = $query1->fetchAll();
    $err = "";

    foreach($r as $t){
        if($t['remain_team'] == 0){
            header('Location:noseats.php');
        
        }
    }

    if(isset($_POST['payment']) && empty($err)){
        $fullname = $email ="";
        $member_arr = array();
        for($i=$member;$i>1;$i--){
            $tmp = $_POST[$i];
            array_push($member_arr,$tmp);
        }
        for($j=0;$j<5;$j++){
            array_push($member_arr,"-");
        }

    $fullname=$_POST['fullname'];
    $email=$_POST['email'];

        $query = "INSERT INTO registration(title,leader_name,leader_contact,partner1,partner2,partner3,partner4,partner5) VALUES('$title','$fullname','$email','$member_arr[0]','$member_arr[1]','$member_arr[2]','$member_arr[3]','$member_arr[4]')";
        $query1 = $dbhandler->query($query);

        $query = "SELECT * FROM details WHERE title = '$title'";
        $query1 = $dbhandler->query($query);
        $r = $query1->fetchAll();
        $remain_team = 0;
        foreach($r as $t){
            $remain_team = $t['remain_team'];
            $remain_team = $remain_team-1;
        }
        $query = "UPDATE details SET remain_team = '$remain_team' WHERE title = '$title'";
        $query1 = $dbhandler->query($query);
        header('Location:index.php');
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div>
                <h3><?php echo $_SESSION['title']; ?></h3>
            </div>
            <br><br>
            <div class="order-label" >Team-Leader Name</div>
            <input type="text" name="fullname"  required>

            <div class="order-label" >Team-Leader Email</div>
            <input type="text" name="email"  required>
            <?php 
                $count=1;
                while($member != 1){
            ?>
            <div class="order-label" >Partner <?php echo $count ?></div>
            <input type="text" name = "<?php echo $member ?>"  />

            <?php
            $count += 1;
            $member = $member-1;
                }
            ?>
            <br><br>
            <div>
                <h3>Total Amount to Pay:<?php echo $_SESSION['fees'];  ?>/-</h3>
            </div>
            <br><br>
            <div>
                <input type="submit" name="payment" value="payment" class="btn btn-primary">
            </div><br><br>
        </form>
    </div><br><br>

    <?php include('footer.html')?>
  
</body>
</html>