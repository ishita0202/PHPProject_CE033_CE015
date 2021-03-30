<?php

    // Include config file
    require_once "config.php";
    include('header.html');
    // Define variables and initialize with empty values
    $fullname =$ask =$email= $contact = "";
    $name_err = $ask_err = $contact_err =  $email_err ="";
    
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // Validate name
        $input_name = trim($_POST["fullname"]);
        if(empty($input_name)){
            $name_err = "Please enter a name.";
        } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $name_err = "Please enter a valid name.";
        } else{
            $fullname = $input_name;
        }
        
        // Validate ask
        $input_ask = trim($_POST["ask"]);
        if(empty($input_ask)){
            $ask_err = "Please fill the doubt you have.";     
        } else{
            $ask = $input_ask;
        }
        
        $input_email = trim($_POST["email"]);
        if(empty($input_email)){
            $email_err = "Please fill email.";     
        } else{
            $email = $input_email;
        }

        // Validate contact
        $input_cnt = trim($_POST["contact"]);
        if(empty($input_cnt)){
            $contact_err = "Please enter the salary amount.";     
        
        } else{
            $contact = $input_cnt;
        }

        if (isset($_POST['submit']) && !empty($fullname) && !empty($email) && !empty($contact) && !empty($ask)) {
            try {
                $query = "INSERT INTO contact_us(fullname,email,contact,ask) VALUES('$fullname','$email','$contact','$ask')";
            
                $query1 = $dbhandler->query($query);
            
                echo "<h4 align='center' >Thank you for your Response<h4><br>";
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>    
    <div class="containercon" >    
        <form   action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">   

            <div class="order-label" <?php echo (!empty($name_err)); ?> >Full Name</div>
            <input type="text" name="fullname" value="<?php echo $fullname; ?>" required>
            <span><?php echo $name_err;?></span >

            <div class="order-label"  <?php echo (!empty($contact_err)); ?> >Phone Number</div>
            <input type="text" name="contact" value="<?php echo $contact; ?>" required>
            <span><?php echo $contact_err;?></span >

            <div class="order-label"   <?php echo (!empty($email_err)); ?>>Email</div>
            <input type="text" name="email" value="<?php echo $email; ?>" required>
            <span><?php echo $email_err;?></span >

            <div class="order-label"    <?php echo (!empty($ask_err)); ?>>Ask</div>
            <textarea name="ask" rows="5"  value="<?php echo $ask; ?>" required></textarea>
            <span><?php echo $ask_err;?></span >

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            
        </form>
    </div><br><br>
    <?php include('footer.html')?>
  
</body>
</html>